<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxa2c6ea6f149f4039", "ae0fc5b7fc796df10b30e03794737069");
//龙展appid和AppSecret
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="ch">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>龙展传媒--移动端广告精准投放问问我蜂窝肺违啊非法发我发发反</title> 
  <meta charset="utf-8" /> 
  <meta http-equiv="pragma" content="no-cache" /> 
  <meta http-equiv="Cache-Control" content="no-cache, must-revalidate" /> 
  <meta http-equiv="expires" content="0" /> 
  <meta name="keywords" content="移动端广告精准投放,龙展传媒" /> 
  <meta name="description" content="移动端广告精准投放,龙展传媒,哈尔滨网站建设,微信营销" />
  <meta name="apple-touch-fullscreen" content="yes" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta http-equiv="Expires" content="-1" /> 
  <meta http-equiv="pragram" content="no-cache" /> 
  <meta name="sharecontent" data-msg-img="" data-msg-title="" data-msg-content="" data-msg-callback="" data-line-img="" data-line-title="" data-line-callback="" />
  <script src="jquery-1.8.2.min.js"></script>
  <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script> 
  <style>
  	*{ margin:0px; padding:0px;}
    .copy_right{ position:fixed; bottom:0px; height:30px; line-height:30px; width:100%; background:rgba(0,0,0,0.6); z-index:99999; left:0px;}
	.copy_right a{ display:block; height:30px; line-height:30px; color:#fff; text-decoration:none; text-align:center; font-size:16px;} 
	.iframe_shut{ position:fixed; right:10px; top:10px; width:100px; height:100px; border-radius:50%; background:rgba(0,0,0,0.6); line-height:100px; text-align:center; color:#fff; font-size:24px; z-index:99999; display:none;}
	.iframe_shut:active{ background:rgba(0,0,0,0.8);}
	#cnzz_stat_icon_1255319721{ display:none;}
	.middle_img{   width: 100%;
  position: relative;
  max-width: 640px;
  margin: 0 auto;}
	.middle_img img{ width:100%; display:block;}
	.form_user,.form_mobile{ width:98%; border:1px solid #d7e7fd; background:#5095f9; height:46px; padding:10px 1%; line-height:46px; font-size:28px; color:#fff; margin-top:15px;}
	.form_user{
		margin-top:35px;
	}
	.form_sub{width:100%; border:1px solid #d7e7fd; background:#5095f9; height:66px; line-height:66px; font-size:30px; color:#fff; margin-top:35px; text-align:center;}
	::-webkit-input-placeholder { color:#fff; }
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button{
		-webkit-appearance: none !important;
		margin: 0; 
	}
	input[type="number"]{-moz-appearance:textfield;}
	.mid_hidden{
		  background-size: 100% auto !important;
		  -webkit-animation-fill-mode: both !important;
		  width: 74%;
		  height: 300px;
		  display: block;
		  margin: 0 auto;
		  position: relative;
		  z-index: 103;
		  margin-top: 272px;
	}
	.toujianli{
		  display: block;
	  width: 90%;
	  height: 50px;
	  background: #408cf7;
	  text-align: center;
	  text-decoration: none;
	  font-size: 30px;
	  color: #fff;
	  margin: 0 auto;
	  margin-top: 15px;
	  line-height: 50px;
	}
	.guanwang{
		  display: block;
		  width: 100%;
		  height: 100%;
		  text-align: center;
		  line-height: 64px;
		  text-decoration: none;
		  font-size: 30px;
		  color: #408cf7;
	}
	.lianjie{ width:70%; margin:0 auto; margin-top:40px;}
	
  </style>
<script src="jweixin-1.0.0.js"></script>
<script>
  wx.config({
    //debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
            'onMenuShareTimeline',
            'onMenuShareAppMessage'

    ]
  });
  wx.ready(function () {
    // 在这里调用 API
	wx.onMenuShareTimeline({//分享到朋友圈
        title: '龙展传媒--移动端广告精准投放', // 分享标题
        link: 'http://lomedia.com.cn/dsp3', // 分享链接
        imgUrl: 'http://lomedia.com.cn/dsp/js/wx_logo.jpg', // 分享图标
        success: function () { 
            // 用户确认分享后执行的回调函数
			
        },
        cancel: function () { 
            // 用户取消分享后执行的回调函数
        }
    });
     
    wx.onMenuShareAppMessage({//分享给朋友
        title: '龙展传媒--移动端广告精准投放', // 分享标题
        desc: '移动端广告精准投放,一体化的营销策划，咨询热线400-6266-357', // 分享描述
        link: 'http://lomedia.com.cn/dsp3', // 分享链接
        imgUrl: 'http://lomedia.com.cn/dsp/js/wx_logo.jpg', // 分享图标
        type: '', // 分享类型,music、video或link，不填默认为link
        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
        success: function () { 
            // 用户确认分享后执行的回调函数
			
        },
        cancel: function () { 
            // 用户取消分享后执行的回调函数
        }
    });
  });
</script>

<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi" /> 

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?304772a603783e311066235707369ac4";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>


 <body class="app appBg2" data-app-id="8176" data-ad="true" style="background:#52021d;">
 
 	<div class="middle_img">
    
    	<img data-src="bg1.jpg" id="img1"/>
        <img data-src="bg2.jpg" id="img2"/>
        <img data-src="bg3.jpg" id="img3"/>
        <a href="tel:4006216357"><img data-src="bg4.jpg" id="img4"/></a>
        <img data-src="bg5.jpg" id="img5"/>
        <img data-src="bg6.jpg" id="img6"/>
        <img data-src="bg7.jpg" id="img7"/>
        <img data-src="bg8.jpg" id="img8"/>
        <img data-src="bg9.jpg" id="img9"/>
        <img data-src="bg10.jpg" id="img10"/>
        <img data-src="bg11.jpg" id="img11"/>
        <img data-src="bg12.jpg" id="img12"/>
        <img data-src="bg13.jpg" id="img13"/>
        <img data-src="bg14.jpg" id="img14"/>
       <a href="tel:4006216357"><img data-src="bg15.jpg" id="img15"/></a>
        
        
        <div id="biaodan" style="background:center top; background-size:cover; width:93%; border-top:1px solid #52021d;   background-repeat: no-repeat;
  margin: 0 auto; height:949px; display:none;" data-src="bg00.jpg">
        
        	<form class="mid_hidden">
            	<input type="text" placeholder="您的姓名" name="name" class="form_user" id="name" />
                <input name="mycall" type="number" id="mycall" class="form_mobile" placeholder="您的电话"/>
                <input type="hidden" name="bid" id="bid" value="2"/>
                <button class="form_sub" onclick ="return false;">提&nbsp;&nbsp;交</button>
                <input type="hidden" value="" id="ttp"/>
            </form>
            
            <div class="lianjie">
                <a href="tel:400621"><img data-src="dianhua.jpg" id="img16"/></a>
                <a class="toujianli" href="http://m.zhaopin.com/heilongjiang-haerbin-622_jt-/?keyword=%E9%BE%99%E5%B1%95%E4%BC%A0%E5%AA%92">投简历</a>
                <a href="http://www.lomedia.com.cn" class="guanwang">点击了解龙展传媒</a>
       		</div>
        </div>
        
        
    </div> 

  
  <script>
  
    window.onload=function(){
		var win_wid=$(window).width();
		for(var i=1;i<=17;i++){
			var med=$("#img"+i).attr("data-src");
			$("#img"+i).attr("src",med);
		}
		$("#biaodan").show();
		var bg3=$("#biaodan").attr("data-src");
		$("#biaodan").height((win_wid*1009)/597).css("background-image","url("+bg3+")");	
	}

	 
	 document.getElementById("ttp").value=returnCitySN["cip"];
	
	$(".form_sub").click(function(){
		var name=$("#name").val();
		var mycall=$("#mycall").val();
		var bid=$("#bid").val();//留言分类
		var ip=$("#ttp").val();
		var laiyuan="new_lomedia03";
		$.post("../e/enews/mes_action.php",{
		name:name,
		mycall:mycall,
		bid:bid,
		ip:ip,
		laiyuan:laiyuan
		},function(data,status,xhr){
			
				alert(data.text);
				if(data.leixing=="mycall"){
					$("#mycall").val("");
				}
				if(data.leixing=="name"){
					$("#name").val("");
				}
				
				if(data.leixing=="success"||data.leixing=="fail"){
					$("#name").val("");
					$("#mycall").val("");
				}
				
				
		},"json")
	})
  	
	
  
  </script>
  

 <!-- www.lomedia.com.cn/dsp3 Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F6244a0694ddb08ce8e568021147ea696' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>