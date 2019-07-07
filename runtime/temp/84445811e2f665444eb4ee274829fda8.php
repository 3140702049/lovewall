<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"W:\lovewall\public/../application/index\view\school\index.html";i:1558746600;s:49:"W:\lovewall\application\index\view\comm\head.html";i:1558236115;}*/ ?>
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
				<a href="/index/school/indexpage/zid/<?php echo $data['zid']; ?>" class="active">首页</a>
                <a href="/index/school/realpage/zid/<?php echo $data['zid']; ?>" class="">实名</a>
                <a href="/index/school/mouspage/zid/<?php echo $data['zid']; ?>" class="">匿名</a>
                <a href="/index/school/callpage/zid/<?php echo $data['zid']; ?>" class="">表白</a>
			</nav>
		</div>
	</div>
</div>
<div id="content">
	<div class="container">
		<div class="list-item">
				<?php if(is_array($indexContent) || $indexContent instanceof \think\Collection || $indexContent instanceof \think\Paginator): $i = 0; $__LIST__ = $indexContent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="
            	<?php switch($vo['sex']): case "1": ?>item boy<?php break; case "0": ?>item girl<?php break; default: ?>item 
            	<?php endswitch; ?>
            	">
				<article>
               		<?php echo $vo['text']; ?>
				</article>
				<div class="author">
					<?php switch($vo['mous']): case "0": ?><img class="avatars avatar" id="<?php echo $vo['qq']; ?>"  src="//q1.qlogo.cn/g?b=qq&amp;nk=<?php echo $vo['qq']; ?>&amp;s=100"><?php break; default: ?><img class="avatar" src="https://static.kres.cn/lc-us-kres-cn/source/img/mous.jpg">
					<?php endswitch; ?>
					<p class="name">
						<?php switch($vo['mous']): case "0": ?><?php echo $vo['name']; break; default: ?>匿名 
						<?php endswitch; ?>
					</p>
					<p class="date">
							<?php echo date("Y-m-d H:i:s",$vo['date']); ?>
						<a id="comm-<?php echo $vo['id']; ?>" class="comments fa fa-comments-o" style="float: right;">&nbsp;<span><?php echo $vo['comm']; ?></span></a>
						<a id="<?php echo $vo['id']; ?>" class="likecall fa fa-thumbs-o-up" style="float: right;margin-right: 5px">&nbsp;<span id="likenums" ><?php echo $vo['like']; ?></span></a>
					</p>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<div class="list-pages">
			<?php echo $page; ?>
	</div><br>
	<div class="copyright container">
		&copy; <?php echo date("Y",\think\Request::instance()->time()); ?> 
		<a href="/"><?php echo $data['web_name']; ?></a>&nbsp;&nbsp;
		<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $data['system']['icp']; ?></a>
	</div>
</div>
<div id="footer">
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="//pv.sohu.com/cityjson?ie=utf-8"></script>
<script src="/static/layui/layui.js"></script>

<script>
	var serachForm=	'<form class="layui-form" action="">'+
					'<div class="layui-form-item">'+
					'<input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input"></div>'+
					'</form>';
    layui.use(['util','layer'], function(){
    var util = layui.util,
	layer=layui.layer;
    util.fixbar({
		bgcolor:'#F4A7B9'
		,bar1:"&#xe68e;"
		,bar2:"&#xe615;"
        ,click: function(type){
			if (type==='bar1') {
				layer.alert('确定要返回总站吗？',{icon:'3',title:'提示'},function(){
					location.href='/';
				});
			}else if(type==='bar2'){
				layer.prompt({title: '请输入要搜索的内容', formType: 2}, function(text, index){
				layer.close(index);
					layer.msg('模糊搜索中~',{icon:16,shade: 0.01},function(){
						location.href='?content='	+ text
					});
				});
			}
        }
    });
	$('.avatars').click(function(){
		var qq=this.id;
		layer.open({
			title:'打开QQ',
			content:'即将跳转到QQ:'+qq,
			yes:function(index){
				//location.href="http://wpa.qq.com/msgrd?v=3&uin="+qq+"&site=qq&menu=yes";
				var ismobile="<?php echo $data['ismobile']; ?>";
				if(ismobile==true){
					location.href="mqq://im/chat?chat_type=wpa&uin="+qq+"&version=1&src_type=web";
				}else{
					location.href="http://wpa.qq.com/msgrd?v=3&uin="+qq+"&site=qq&menu=yes";
				}
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
       	window.location.href='//'+window.location.host+"/index/school/commpage/zid/<?php echo $data['zid']; ?>/article?id="+ids;
	})
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
    });
</script>
<script>
	
</script>
<script>
	
</script>
  
</div>
</body>
</html>