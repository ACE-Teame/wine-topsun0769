<?php 

namespace app\Controller;

use app\core\Home_Controller;
/**
 * 默认控制器
 */
class IndexController extends Home_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $province_list = parent::$model->select('province', ['id', 'province_name']);
		view('home/index', ['c' => get('c'), 'province_list' => $province_list]);
	}

    /**
     * 验证申请参数
     * @param  array $data 申请参数
     */
    private function _ckeckData($data)
    {
        if(empty($data['username'])) {
            ajaxReturn(202, '请填写姓名');
        }
        if(empty($data['phone'])) {
            ajaxReturn(202, '请填写手机号码');
        }else {
            if($this->checkPhoneNumber($data['phone']) == false) {
                ajaxReturn(202, '请填写正确的手机号码');
            }
        }

        // 根据 姓名+手机号判断申请是否存在
        $count = parent::$model->count('contect', ['username' => $data['username'], 'phone' => $data['phone']]);
        if (!empty($count)) {
            ajaxReturn(202, '请勿重复领取！');
        }
    }

    /**
     * 提交申请
     */
    public function submitContect()
    {
        $postData = post();
        $this->_ckeckData($postData);
        
        $postData['time']     = time();
        $postData['ip']       = getIp();
        $postData['province'] = parent::$model->select('province', 'province_name', ['id' => $postData['province']])[0];
        $postData['city']     = parent::$model->select('city', 'city_name', ['id' => $postData['city']])[0];
        $postData['area']     = parent::$model->select('area', 'area_name', ['id' => $postData['area']])[0];

        parent::$model->insert('contect', $postData);
        if(parent::$model->id()) {
            ajaxReturn(200);
        }else {
            ajaxReturn(202, '申请失败');
        }
    }

    /**
     * 获取城市列表
     * @return json
     */
    public function getCityList()
    {
        $province_id = intval(post('province_id'));

        if ($province_id) {
            $cityList = parent::$model->select('city', ['id', 'city_name'], ['province_id' => $province_id]);
            ajaxReturn(200, $cityList);
        }

        ajaxReturn(400);
    }

    /**
     * 获得地区列表
     * @return json 
     */
    public function getAreaList()
    {
        $city_id = intval(post('city_id'));

        if ($city_id) {
            $areaList = parent::$model->select('area', ['id', 'area_name'], ['city_id' => $city_id]);
            ajaxReturn(200, $areaList);
        }

        ajaxReturn(400);
    }

}