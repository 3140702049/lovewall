<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"W:\lovewall\public/../application/index\view\index\index.html";i:1558747055;s:49:"W:\lovewall\application\index\view\comm\head.html";i:1558236115;}*/ ?>
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
				<a href="/" class="active">首页</a>
				<a href="<?php echo url('index/openschool'); ?>" class="">开通</a>
				<a href="<?php echo url('index/serachInfo'); ?>" class="">搜索</a>
				<a href="<?php echo url('index/about'); ?>" class="">关于</a>
				</nav>
		</div>
	</div>
</div>
<div id="content">
	<div class="container">
		<div class="list-item">
				<?php if(is_array($indexContent) || $indexContent instanceof \think\Collection || $indexContent instanceof \think\Paginator): $i = 0; $__LIST__ = $indexContent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<div class="item <?php if($vo['status'] == '1'): ?>girl<?php endif; ?>" >
				<article style="">
               		<?php echo $vo['web_description']; ?>
				</article>
				<div class="author">		
						<img class="avatar" src="<?php echo $vo['web_logo']; ?>">
					<p class="name">
						<?php echo $vo['web_name']; ?>
					</p>
					<img style="float: right;margin-top: -50px;margin-right: 10px;" id="scho-<?php echo $vo['zid']; ?><?php echo $vo['web_name']; ?>" class="avatars" width="40px" src="/static/img/goto.png" alt="">
					<p class="date"><i style="color:#F4A7B9" class="layui-icon">&#xe756;</i>&nbsp;<span style="color:#F4A7B9"><?php if($vo['hot'] > '99'): if($vo['hot'] > '1000'): ?><?php echo $vo['hot']/1000; ?>K<?php else: ?>99+<?php endif; else: ?><?php echo $vo['hot']; endif; ?></span>&nbsp;<i style="color:#F4A7B9" class="layui-icon">&#xe611;</i>&nbsp;<span style="color:#F4A7B9"><?php if($vo['count'] > '99'): if($vo['count'] > '1000'): ?><?php echo $vo['count']/1000; ?>K<?php else: ?>99+<?php endif; else: ?><?php echo $vo['count']; endif; ?></span></p>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<div class="list-pages">
			<?php echo $page; ?>
	</div>  
  <br/>
  <br/>

	<div class="copyright container">
		&copy; <?php echo date("Y",\think\Request::instance()->time()); ?> 
		<a href="/"><?php echo $data['system']['name']; ?></a>&nbsp;&nbsp;
		<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $data['system']['icp']; ?></a>
	</div>
</div>
<div id="footer">
<script>
	layui.use(['layer', 'form'], function(){
	var layer = layui.layer
	,form = layui.form;
	});
	console.log(`%c Info:`, `color: #03A9F4; font-weight: bold`, '欢迎来到这个页面！首先感谢您信任我们并使用我们的程序，遇到BUG可提交至下方邮箱，谢谢您的配合！');
	console.log(`%c Site:`, `color: #03A9F4; font-weight: bold`, 'https://pro.kres.cn/form/index/bugSubmit Or https://521wall.cn');
	console.log(`%c Email:`, `color: #4CAF50; font-weight: bold`, '1697779290@qq.com Or wy-hai@qq.com');
	var notice=$.cookie('notice');
	getNotice();
	function getNotice(){
		$.post("<?php echo url('index/getNotice'); ?>",{func:'get'},function(data){
        	if(data.code==1){
				if($.cookie('notice_id')!=data.tid){
					var notice_tpis=layer.confirm(data.info, {
						btn: ['我知道了','取消'] //按钮
						}, function(){
							$.cookie('notice_id',data.tid,{ expires: 7 });
							layer.close(notice_tpis);
						}, function(){
							//取消
							layer.close(notice_tpis);
					});
				}
			}else{
				return '获取失败';
			}
        },'JSON');
    }
	$('.avatars').click(function(){
		var zid=this.id;
		var sub_id=zid.substring(5,41);
      	var name=zid.substr(41,100);
		layer.open({
			title:'Tips',
			content:'即将进入<br/>'+name,
			btn:['GO!'],
			yes:function(index){
				location.href="//"+window.location.host+"/index/school/indexpage/zid/"+sub_id;
				layer.close(index);
			}
		})
	});
	$('.likecall').click(function(){
		var id=this.id;
		var sub_id=id.substring(5,9);
		var dzan = $(this);
		$.get("<?php echo url('index/likeSubmit'); ?>",{
			id:id,
		},function(data){
			if (data.status=='1') {
				layer.msg(data.info,{icon:1});
				$('#'+id).attr('class','likecall fa fa-thumbs-up');	
				dzan.parent().find('#likenums').text(data.count);
			}else{
				layer.msg(data.info,{icon:2});
			}
		},'json');
	})
	$('.comments').click(function() {
		var id=this.id;
      	var ids=id.substr(5,9);
       	window.location.href="./article?id="+ids;
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
			console.log('【' + res.city + '】' + res.data[0].wea + ' ' + res.data[0].tem1 + '/' + res.data[0].tem2 + ',' + uptime + '更新~');
			$("#temp1").html(res.data[0].tem);
			$('#weather-ico').attr('src','/static/img/'+res.data[0].wea_img+".png");
		}
	});
	var ismobile="<?php echo $data['ismobile']; ?>";
	if(ismobile==false){
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