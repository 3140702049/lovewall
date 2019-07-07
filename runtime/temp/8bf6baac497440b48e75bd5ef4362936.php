<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"W:\lovewall\public/../application/admin\view\index\school_switch.html";i:1557988290;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>欢迎页面-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="/static/css/font.css">
        <link rel="stylesheet" href="/static/css/xadmin.css">
        <script type="text/javascript" src="/static/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/static/js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]--></head>
    
    <body>
        <div class="layui-fluid">
            <div class="layui-row">
                <form class="layui-form">
                    <input id="zid" type="hidden" value="<?php echo $data['zid']; ?>">
                    <div class="layui-form-item">
                        <label for="L_wear" class="layui-form-label">地区天气</label>
                        <div class="layui-input-inline">
                            <input id="L_wear" type="checkbox" name="sys_weather" lay-skin="switch" lay-text="ON|OFF" lay-filter="option" <?php if(!empty($data['sys_weather'])) echo 'checked'; ?>>
                    </div>
                    <div class="layui-form-item">
                        <label for="L_limit_time" class="layui-form-label">发帖时限</label>
                        <div class="layui-input-inline">
                            <input id="L_limit_time" type="checkbox" name="post_limiti" lay-skin="switch" lay-text="ON|OFF" lay-filter="option" <?php if(!empty($data['post_limiti'])) echo 'checked'; ?>>
                    </div>
					<div class="layui-form-item">
					<label for="L_post_mous" class="layui-form-label">匿名发帖</label>
					<div class="layui-input-inline">
						<input id="L_post_mous" type="checkbox" name="post_mous" lay-skin="switch" lay-text="ON|OFF" lay-filter="option" <?php if(!empty($data['post_mous'])) echo 'checked'; ?>>
					</div>
					<div class="layui-form-item">
					<label for="L_post_fil" class="layui-form-label">云过端滤</label>
					<div class="layui-input-inline">
						<input id="L_post_fil" type="checkbox" name="post_filter" lay-skin="switch" lay-text="ON|OFF" lay-filter="option" <?php if(!empty($data['post_filter'])) echo 'checked'; ?>>
                    </div>		
					<div class="layui-form-item">
                        <label for="L_post_fil" class="layui-form-label">限制登录</label>
                        <div class="layui-input-inline">
                            <input id="L_post_fil" type="checkbox" name="sys_limit_login" lay-skin="switch" lay-text="ON|OFF" lay-filter="option" <?php if(!empty($data['sys_limit_login'])) echo 'checked'; ?>>
                        </div>				
				</form>
            </div>
        </div>
        <script>layui.use(['form', 'layer'],
            function() {
                $ = layui.jquery;
                var form = layui.form,
                layer = layui.layer;
                var zid=$('#zid').val();
                var values;
                //监听提交
				form.on('switch(option)', function(data){
                // console.log(data.elem); //得到checkbox原始DOM对象
                // console.log(data.elem.checked); //开关是否开启，true或者false
                // console.log(data.value); //开关value值，也可以通过data.elem.value得到
                // console.log(data.othis); //得到美化后的DOM对象
                    if(data.elem.checked){
                        values=1;
                    }else{
                        values=0;
                    }
                    $.ajax({
                        url:"<?php echo url('index/schoolSwitch'); ?>"
                        ,type:'POST'
                        ,dataType:"JSON"
                        ,data:{zid:zid,type:data.elem.name,value:values}
                        ,success:function(res){
                            if(res.code==1){
                                layer.msg(res.data,{icon:1});
                            }else{
                                layer.msg(res.data,{icon:1});
                            }
                        }
                    })
                layer.msg('POST:'+data.elem.name+'\nvalue:'+values);
            });  

            });</script>
    </body>

</html>