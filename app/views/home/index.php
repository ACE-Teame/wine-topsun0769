<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>拉图维尔卡干红葡萄酒</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php echo js('jquery.min.js') ?>
    <?php echo css('main.css') ?>
</head>

<body>
    <div class="container">
    <section class="pic">
        <img src="<?php echo image('1.jpg') ?>">
    </section>
    <section class="banner">
        <div class="price">         
            <ul class="list clear">
                <li>￥590元</li>
                <li>
                    <div class="title">原价</div>
                    <div class="number">590元</div>
                </li>
                <li>
                    <div class="title">折扣</div>
                    <div class="number">0</div>
                </li>
                <li>
                    <div class="title">节省</div>
                    <div class="number">0</div>
                </li>
            </ul>

            <ul class="time clear">
                <li>8125人已购买</li>
                <li>
                    <span id="_d">00</span>天
              <span id="_h">00</span>小时
              <span id="_m">00</span>分
              <span id="_s">00</span>秒
        </li>
            </ul>
        </div>
        
        <div class="buy"><a class="btn" href="#order">立即购买</a></div>
    </section>

    <section>
        <h2>产品简介</h2>
        <div><img src="<?php echo image('2.jpg') ?>"></div>
        <div><img src="<?php echo image('3.jpg') ?>"></div>
        <div><img src="<?php echo image('1.gif') ?>"></div>
        <div><img src="<?php echo image('4.jpg') ?>"></div>
        <div><img src="<?php echo image('5.jpg') ?>"></div>
        <div><img src="<?php echo image('6.jpg') ?>"></div>
        <div><img src="<?php echo image('7.jpg') ?>"></div>
        <div><img src="<?php echo image('8.jpg') ?>"></div>
        <div><img src="<?php echo image('9.jpg') ?>"></div>
        <div><img src="<?php echo image('10.jpg') ?>"></div>
        <div><img src="<?php echo image('11.jpg') ?>"></div>
        <div><img src="<?php echo image('12.jpg') ?>"></div>
        <div><img src="<?php echo image('13.jpg') ?>"></div>
        <div><img src="<?php echo image('14.jpg') ?>"></div>
        <div><img src="<?php echo image('15.jpg') ?>"></div>
        <div><img src="<?php echo image('16.jpg') ?>"></div>
        <div><img src="<?php echo image('17.jpg') ?>"></div>
        <div><img src="<?php echo image('18.jpg') ?>"></div>
        <div><img src="<?php echo image('19.jpg') ?>"></div>
    </section>


    <section class="order" id="order">
        <h2>订单信息</h2>
        <div class="content">
            <form>
                <div class="entry">
                    <div class="left"><label><em>*</em>产品</label></div>
                    <div class="right">                     
                        <select id="product-price">
                            <option value="590">法国原装进口葡萄酒！抢购价590一箱</option>
                            <option value="1090">法国原装进口葡萄酒！抢购价1090两箱</option>
                            <option value="1590">法国原装进口葡萄酒！抢购价1590三箱</option>
                        </select>               
                    </div>
                </div>
                <!-- <div class="entry">
                    <div class="left"><label><em>*</em>数量</label></div>
                    <div class="right">
                    <a id="plus" href="javascript:;">-</a>
                    <input type="text" name="name" id="num" value="1" style="width: 50px;">
                    <a id="add" href="javascript:;">+</a>
                    </div>              
                </div> -->
                <div class="entry">
                    <div class="left"><label><em>*</em>姓名</label></div>
                    <div class="right"><input type="text" name="name"></div>                    
                </div>
                <div class="entry">
                    <div class="left"><label><em>*</em>手机</label></div>
                    <div class="right"><input type="text" name="phone"></div>
                </div>
                <div class="entry">
                    <div class="left"><label><em>*</em>地区</label></div>                 
                    <div class="right">
                        <div class="address-box">
                          <select name="province">
                            <option value="">北京</option>
                            <option value="">上海</option>
                            <option value="">广州</option>
                            <option value="">深圳</option>
                          </select>
                          <select name="city">
                            <option value="">选城市</option>
                          </select>
                          <select name="area">
                            <option value="">选地区</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="entry">
                    <div class="left"><label><em>*</em>地址</label></div>                 
                    <div class="right"><input type="text" name="address"></div>
                </div>
                <div class="entry">
                    <div class="left"><label><em>*</em>金额</label></div>                 
                    <div class="right"><input type="text" id="total" readonly value="590" style="width: 100px;">元</div>
                </div>
                <div class="entry">
                    <div class="left"><label><em>*</em>付款</label></div>                 
                    <div class="right"><input type="radio" checked value="货到付款"><img src="<?php echo image('hdfk.gif') ?>"></div>
                </div>
                <div class="entry">
                    <div class="left"><label>留言</label></div>
                    <div class="right"><textarea></textarea></div>
                </div>
            </form>
        </div>
        <div class="submit">
            <a class="btn" href="javascript:alert('提交成功')">立即提交订单</a>
        </div>
        
    </section>
    <section>
        <div id="show">
            <ul id="demo1">
                <li>
                    <span>[最新购买]：</span>周**（136****7163）在1分钟前订购了 拉图维尔卡干红葡萄酒<font color="#FF0000">√</font>
                </li>
                <li>
                    <span>[最新购买]：</span>李**（180****2588）在1天前订购了 拉图维尔卡干红葡萄酒<font color="#FF0000">√</font>
                </li>
                <li>
                    <span>[最新购买]：</span>林**（139****3562）在10小时前订购了 拉图维尔卡干红葡萄酒<font color="#FF0000">√</font>
                </li>
                <li>
                    <span>[最新购买]：</span>周**（137****3260）在15分钟前订购了 拉图维尔卡干红葡萄酒<font color="#FF0000">√</font>
                </li>
                <li>
                    <span>[最新购买]：</span>谭**（150****7858）在20小时前订购了 拉图维尔卡干红葡萄酒<font color="#FF0000">√</font>
                </li>
                <li>
                    <span>[最新购买]：</span>张**（135****3425）在43分钟前订购了 拉图维尔卡干红葡萄酒<font color="#FF0000">√</font>
                </li>
                <li>
                    <span>[最新购买]：</span>吴**（137****4125）在3分钟前订购了 拉图维尔卡干红葡萄酒<font color="#FF0000">√</font>
                </li>
                <li>
                    <span>[最新购买]：</span>刘**（136****7125）在5小时前订购了 拉图维尔卡干红葡萄酒<font color="#FF0000">√</font>
                </li>
            </ul>
            <div id="demo2"></div>
        </div>
    </section>

    <footer>
        <div style="text-align: center"><img src="<?php echo image('foot.png') ?>"></div>
        <p>杭州醇源贸易有限公司</p>
        <p>版权所有 违者必究</p>
        <p>闽ICP备16015077号-1</p>
    </footer>
    <nav>
        <ul class="menu clear">
            <li>
                <i class="iconfont icon-home"></i><a href="#order">在线下单</a>
            </li>
            <li>
                <i class="iconfont icon-phone"></i><a href="tel:15113779231">电话咨询</a>
            </li>
        </ul>
    </nav>
</div>
<script type="text/javascript">  
  function countTime() {  
      //获取当前时间  
      var date = new Date();  
      var now = date.getTime();  
      //设置截止时间  
      var endDate = new Date("2018-02-05 23:23:23");  
      var end = endDate.getTime();  
      //时间差  
      var leftTime = end-now;  
      //定义变量 d,h,m,s保存倒计时的时间  
      var d,h,m,s;  
      if (leftTime>=0) {  
          d = Math.floor(leftTime/1000/60/60/24);  
          h = Math.floor(leftTime/1000/60/60%24);  
          m = Math.floor(leftTime/1000/60%60);  
          s = Math.floor(leftTime/1000%60);     
          //将倒计时赋值到div中  
          document.getElementById("_d").innerHTML = d;  
          document.getElementById("_h").innerHTML = h;  
          document.getElementById("_m").innerHTML = m;  
          document.getElementById("_s").innerHTML = s;  
                          
      }else{
        //将倒计时赋值到div中  
          document.getElementById("_d").innerHTML = 0;  
          document.getElementById("_h").innerHTML = 0;  
          document.getElementById("_m").innerHTML = 0;  
          document.getElementById("_s").innerHTML = 0;  
      }
      //递归每秒调用countTime方法，显示动态时间效果  
      setTimeout(countTime,1000);    
  }  

  var speed=140;
    window.onload=function(){
        var demo=document.getElementById("show"); 
        var demo2=document.getElementById("demo2"); 
        var demo1=document.getElementById("demo1"); 
        demo2.innerHTML=demo1.innerHTML 
        function Marquee(){ 
            if(demo.scrollTop>=demo1.offsetHeight){
                demo.scrollTop=0; 
            }
            else{ 
            demo.scrollTop=demo.scrollTop+1;
            } 
        } 
        var MyMar=setInterval(Marquee,speed) 
        demo.onmouseover=function(){clearInterval(MyMar)} 
        demo.onmouseout=function(){MyMar=setInterval(Marquee,speed)} 
        countTime();
    }
</script>
<script type="text/javascript">
    (function($){
        $(function(){
            $('#product-price').change(function () {
                var t =$(this).children('option:selected').val(); 
                $("#total").val(t);
            });
             
        });
    })(jQuery);
</script>
</body>
</html>