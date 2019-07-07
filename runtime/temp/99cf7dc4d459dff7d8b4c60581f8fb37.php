<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"W:\lovewall\public/../application/index\view\school\call.html";i:1558154475;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>发帖 - <?php echo $data['web_name']; ?></title>
<meta charset="utf-8"/>
<meta name="description" content="<?php echo $data['system']['description']; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="shortcut icon" href="/static/favicon.ico"/>
<link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/css/app.css" type="text/css" />
  <link rel="stylesheet" href="/static/css/app.css" type="text/css" />
  <link rel="stylesheet" href="/static/css/font.css" type="text/css" />
<link href="/static/css/i.css" rel="stylesheet"/>
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
</script>
<script src="https://cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.js"></script>

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
	<p id="hitokoto">
		:D 获取中...
	</p>
	</center>
	<script src="https://api.kres.cn/hitokoto?encode=js" defer=""></script>
	<!-- 一言Ending -->
	<div class="menu">
		<div class="container">
			<nav>
				<a href="/index/school/indexpage/zid/<?php echo $data['zid']; ?>" class="">首页</a>
				<a href="/index/school/realpage/zid/<?php echo $data['zid']; ?>" class="">实名</a>
				<a href="/index/school/mouspage/zid/<?php echo $data['zid']; ?>" class="">匿名</a>
				<a href="/index/school/callpage/zid/<?php echo $data['zid']; ?>" class="active">表白</a>
			</nav>
		</div>
	</div>
</div>
<div id="content">
	<div class="container">
        <form name="datainfo" id="datainfo">
            <div class="pages">
				<h2>已进入：<span style="color:red"><?php echo $data['web_name']; ?></span></h2>
				<h2>学区ID:<?php echo $data['zid']; ?></h2>
                <h2>你想说的话</h2>
                <textarea name="text" id="text" placeholder="你想说的话0-200字" style="min-height: 120px;" maxlength="200" onchange="this.value=this.value.substring(0,200)" onkeydown="this.value=this.value.substring(0,200)" onkeyup="this.value=this.value.substring(0,200)"></textarea>
                <h2 id="h2qq">你的Q Q</h2>
                <input name="qq" id="qq" placeholder="QQ"  >
                <h2 id="h2name">你的昵称</h2>
                <input name="name" id="name" placeholder="名称">
                <h2 id="h2sex">你的性别</h2>
                <div class="col-sm-10">
                <label class="checkbox-inline i-checks">
                    <input id="sex" name="sex" type="radio" value="2" checked="checked" ><i></i> ♂♀
                </label>
                <label class="checkbox-inline i-checks">
                    <input id="sex" name="sex" type="radio" value="1" ><i></i> 汉纸
                </label>
                <label class="checkbox-inline i-checks">
                    <input id="sex" name="sex" type="radio" value="0" ><i></i> 妹纸
                </label> 
                </div>
                <br />
                <h2>是否匿名</h2>
                <div class="col-sm-10">
                <label class="checkbox-inline i-checks">
                    <input id="mous" name="mous" type="radio" value="0" checked="checked"><i></i> 实名
                </label>
                <label class="checkbox-inline i-checks">
                    <input id="mous" name="mous" type="radio" value="1"><i></i> 匿名
                </label>
                </div>
                <br />
                <button type="button" onclick="submit_data()">发布表白</button>
            </div>
        </form>
	</div>
	<div class="list-pages">
	</div>
  <br/>
<div class="copyright container">
    &copy; 2019 
	<a href="/"><?php echo $data['system']['title']; ?></a>&nbsp;&nbsp;
	<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $data['system']['icp']; ?></a>
</div></div>
<div id="footer">
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="//jishuzy-1252238348.cos.ap-guangzhou.myqcloud.com/layer/layer.js"></script>
<script src="//pv.sohu.com/cityjson?ie=utf-8"></script>
<script src="/static/js/call.js"></script>
<script src="/static/js/jqueryCookie.js"></script>
<script>
  	$('#qq').blur(function(){
      	var qq=$('#qq').val();
      	if(qq=='') return false;
        layer.msg('加载中', {
          icon: 16
          ,shade: 0.01
        });
    	$.ajax({
        	type:'GET',
          	url:'https://api.kres.cn/getqqnickname',
          	data:'qq='+qq,
          	dataType:'JSON',
          	success:function(data){
				if(data.code==0) layer.msg(data.msg);
              	if(data.code!=0){
                  layer.msg('拉取成功');
                  $('#name').val(data.name);
                }
            }
        })
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