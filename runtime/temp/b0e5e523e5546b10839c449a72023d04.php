<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"W:\lovewall\public/../application/index\view\index\open.html";i:1558745012;s:49:"W:\lovewall\application\index\view\comm\head.html";i:1558236115;}*/ ?>
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
      <a href="<?php echo url('index/openschool'); ?>" class="active">开通</a>
      <a href="<?php echo url('index/serachInfo'); ?>" class="">搜索</a>
      <a href="<?php echo url('index/about'); ?>" class="">关于</a>
			</nav>
		</div>
	</div>
</div>
<br/>
<div id="content">
  <div class="layui-card" style="padding:10px">
  <div class="layui-card-header">开通站点</div>
  <div class="layui-card-body">
<blockquote class="layui-elem-quote">注意：确保开通信息真实有效！</blockquote>
  </div>
    <div class="layui-card-body">
      <form class="layui-form" action="">
        <div class="layui-form-item">
          <label class="layui-form-label">名称</label>
          <div class="layui-input-block">
            <input type="text" name="web_name" required  lay-verify="required" placeholder="二级院校名称" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">邮箱</label>
          <div class="layui-input-block">
            <input type="text" name="email" required  lay-verify="required" placeholder="接收审核结果" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">LOGO</label>
          <div class="layui-input-block">
            <input type="hidden" class="layui-input upload-input" required  lay-verify="required" name="logo_img" id="file1">
            <button type="button" class="layui-btn" id="img1" name="img">
              <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
          </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">站点简介</label>
            <div class="layui-input-block">
              <textarea name="description" placeholder="为保障您顺利通过，请认真输入" class="layui-textarea"></textarea>
            </div>
          </div>
        <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">申请理由</label>
    <div class="layui-input-block">
      <textarea name="reason" placeholder="请输入内容" class="layui-textarea"></textarea>
    </div>
  </div>
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
          </div>
        </div>
      </form>
  </div>
</div>
  <br/>
	<div class="copyright container">
      &copy; <?php echo date("Y",\think\Request::instance()->time()); ?> 
      <a href="/"><?php echo $data['system']['name']; ?></a>&nbsp;&nbsp;
      <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $data['system']['icp']; ?></a>
    </div>
</div>
<div id="footer">
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

<script src="//pv.sohu.com/cityjson?ie=utf-8"></script>
<script>
    //Demo
      console.log(`%c Info:`, `color: #03A9F4; font-weight: bold`, '欢迎来到这个页面！首先感谢您信任我们并使用我们的程序，遇到BUG可提交至下方邮箱，谢谢您的配合！');
      console.log(`%c Site:`, `color: #03A9F4; font-weight: bold`, 'https://support.kres.cn Or https://521wall.cn');
      console.log(`%c Email:`, `color: #4CAF50; font-weight: bold`, 'support@kres.cn Or wy-hai@qq.com');
        layui.use(['form','upload'], function(){
          var form = layui.form;
          //监听提交
          var upload = layui.upload;
        //执行实例
          var uploadInst = upload.render({
            elem: '#img1' //绑定元素
            ,field:'smfile'
            ,url: "https://sm.ms/api/upload" //上传接口
            ,accept:'images'  // 允许上传的文件类型
            ,auto:true // 自动上传
            ,before:function(obj){
              layer.msg('上传中',{icon:16});
            }
            ,done: function(res){
              //上传完毕回调
              layer.msg('上传完成');
              $('#file1').val(res.data.url);
            }
            ,error: function(){
              //请求异常回调
              layer.msg('上传异常');
            }
          });
          form.on('submit(formDemo)', function(data){
          //layer.msg(JSON.stringify(data.field));
          layer.msg('提交中', {
            icon: 16
            ,shade: 0.01
          });
          $.ajax({
            url:"<?php echo url('index/openSchool'); ?>"
            ,data:{data:JSON.stringify(data.field)}
            ,type:'post'
            ,dataType:'json'
            ,success:function(res){
              if(res.code=="1"){
              layer.msg('提交成功！请等待审核结果',{icon:1},function(index){
                  location.href="/";
                });
              }
            }
            ,error:function(){
              layer.msg('网络错误');
            }
          })
          return false;
        });
      });
    </script>
<script>
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
</div>
</body>
</html>