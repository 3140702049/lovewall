<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"W:\lovewall\public/../application/index\view\index\serachInfo.html";i:1557988290;s:49:"W:\lovewall\application\index\view\comm\head.html";i:1558236115;}*/ ?>
<!--
 * @Description: 
 * @version: 2.0
 * @Author: 小橙子
 * @Date: 2019-05-16 14:31:30
 * @Website: https://www.kres.cn
 * @Email: 1697779290@qq.com
 -->
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $data['system']['title']; ?></title>
    <meta charset="utf-8"/>
    <meta name="description" content="<?php echo $data['system']['description']; ?>"/>
    <meta name="keywords" content="<?php echo $data['system']['keywords']; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href="/static/favicon.ico"/>	
    <link rel="stylesheet" href="/static/layui/css/layui.css"/>
    <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/css/app.css" type="text/css" />
    <link href="/static/css/i.css" rel="stylesheet"/>
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="/static/layui/layui.js"></script>
    <script src="https://cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  </head>
<body>
<div id="header">
	<div class="header">
		<div class="heart">
		</div>
		<div class="header-weather" style="float:right;position: initial;margin-top: -240PX;margin-right: 10px">
			<div id="temp1" style="float: right;font-size: 18px ;margin-right: -0px;color: white; margin-top: -102px" >loding...</div>
			<img id="weather-ico" style="width: 30px;float: right;" src="" alt="">
		</div>
		<div class="beat beat-1">
		</div>
		<div class="beat beat-2">
		</div>
	</div>
	<!-- 一言 -->
	<center>
	<p id="hitokoto" style="padding:10px">
		:D 获取中...
	</p>
	</center>
	<script src="https://api.kres.cn/hitokoto?encode=js" defer=""></script>
	<!-- 一言Ending -->
	<div class="menu">
		<div class="container">
			<nav>
			<a href="/" class="">首页</a>
      <a href="<?php echo url('index/openschool'); ?>" class="">开通</a>
      <a href="<?php echo url('index/serachInfo'); ?>" class="active">搜索</a>
      <a href="<?php echo url('index/about'); ?>" class="">关于</a>
			</nav>
		</div>
	</div>
</div>

<div id="content">
<div style="padding:10px">
  <div class="layui-collapse" lay-accordion>
    <div class="layui-card">
      <div class="layui-card-header">提交搜索</div>
      <div class="layui-card-body">
          <blockquote class="layui-elem-quote">在此检索全站内容</blockquote>
        <form class="layui-form" action="">
            <div class="layui-form-item">
                <label class="layui-form-label">搜索类型</label>
                <div class="layui-input-block">
                  <input type="radio" name="type" value="qq" title="qq" lay-filter='type'>
                  <input type="radio" name="type" value="text" title="内容" lay-filter='type' checked>
                </div>
              </div>
          <div class="layui-form-item">
              <label class="layui-form-label">输入框</label>
              <div class="layui-input-block">   
            <input type="text" name="content" required  lay-verify="required" placeholder="输入内容" autocomplete="off" class="layui-input">
          </div>
          </div>
          <div class="layui-form-item">
            <div class="layui-input-block">
              <button class="layui-btn" style="background:#F596AA" lay-submit lay-filter="subSerach">立即提交</button>
              <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="layui-collapse" lay-accordion>
      <div class="layui-card">
        <div class="layui-card-header">搜索结果</div>
        <div style="padding:10px">
            <div class="layui-card-body return-data" ></div>
          </div>
      </div>
    </div>
</div>
  </div><br>
 
<script>
console.log(`%c Info:`, `color: #03A9F4; font-weight: bold`, '欢迎来到这个页面！首先感谢您信任我们并使用我们的程序，遇到BUG可提交至下方邮箱，谢谢您的配合！');
console.log(`%c Site:`, `color: #03A9F4; font-weight: bold`, 'https://support.kres.cn Or https://521wall.cn');
console.log(`%c Email:`, `color: #4CAF50; font-weight: bold`, 'support@kres.cn Or wy-hai@qq.com');
layui.use(['element','form'], function(){
  var element = layui.element
  ,form=layui.form; 
  form.on('submit(subSerach)',function(data){
    $.ajax({
      url:''
      ,type:'GET'
      ,dataType:'JSON'
      ,data:{data:JSON.stringify(data.field)}
      ,success:function(res){
        if(res.code==1){
          $('.return-data').after(res.data);
        }
      }
      ,error:function(){
        layer.msg('请求失败');
      }
    })
    return false;
  })
  
  //…
});
</script>
  <br/>
  <br>
	<div class="copyright container">
      &copy; <?php echo date("Y",\think\Request::instance()->time()); ?> 
      <a href="/"><?php echo $data['system']['name']; ?></a>&nbsp;&nbsp;
      <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $data['system']['icp']; ?></a>
    </div>
</div>
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="//pv.sohu.com/cityjson?ie=utf-8"></script>
<script>
  layui.use('util', function(){
            var util = layui.util;
                util.fixbar({
                bgcolor:'#F4A7B9'
                ,click: function(type){
                console.log(type);
                }
            });
        });
	$.ajax({
		type: 'GET',
		url: 'https://www.tianqiapi.com/api/',
		data: 'version=v1&style=1001&city=',
		dataType: 'JSON',
		error: function () {
			alert('网络错误');
		},
		success: function (res) {
			uptime = res.update_time.substring(11);
			uptime = uptime.substring(0,uptime.length-3);
			$("#temp1").html(res.data[0].tem);
			$('#weather-ico').attr('src','/static/img/'+res.data[0].wea_img+".png");
		}
	});
	var ismobile="<?php echo $data['ismobile']; ?>";
	if(ismobile==0){
    	(()=>{let 
        h=42;
        let d=(n)=>Math.floor(Math.random()*n);
        let k=(c)=>{let s=document.createElement('style');
        if(!!(window.attachEvent && !window.opera)){
            s.styleSheet.cssText=c;
        }else{
            s.appendChild(document.createTextNode(c));
        }
        document.getElementsByTagName('head')[0].appendChild(s);
    };
    k('@keyframes u{0%{transform:rotate(0deg);}25%{transform:rotate(10deg);}50%{transform:rotate(0deg);}75%{transform:rotate(-10deg);}100%{transform:rotate(0deg);}};');
    k('@keyframes m{0%{margin-top:2vh;opacity:0;}20%{opacity:1.0;margin-top:0vh;margin-left:0vw;transform:rotate('+d(90)+'deg);}100%{opacity:0.4;margin-top:100vh;margin-left:'+d(4)+'vw;transform:rotate(1080deg);}};');
    let w=document.createElement('div');
    w.id='daWorld';
    w.style='animation:u 60s ease-in infinite;position:fixed;top:0;right:0;bottom:0;left:0;pointer-events:none;';
    document.body.appendChild(w);
    while(h--){
        let o=document.createElement('div');
        o.style=`pointer-events:none;opacity:0;animation:m ${d(14)+6}s ease-in ${d(4000)}ms infinite;z-index:1000;position:fixed;top:${d(40)}vh;left:${d(100)}vw;font-size:${d(40)+20}px;color:${['#d00','#e66','#fcc'][d(3)]};`;
        o.innerHTML=['♡','♥'][d(2)];w.appendChild(o);
        }})()
    }
</script>
</body>
</html>