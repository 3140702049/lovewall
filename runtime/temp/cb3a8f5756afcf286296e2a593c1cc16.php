<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"W:\lovewall\public/../application/admin\view\index\system_setting.html";i:1558141387;}*/ ?>
<!--
 * @Description: 
 * @version: 2.0
 * @Author: 小橙子
 * @Date: 2019-05-15 09:33:43
 * @Website: https://www.kres.cn
 * @Email: 1697779290@qq.com
 -->
 <!DOCTYPE html>

 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>Contentinfo Page. By the LoveWall 2.0.190520</title>
   <link rel="stylesheet" href="/static/layui/css/layui.css">
 </head>
 <body style="padding:10px">
     <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
         <legend>网站设置</legend>
       </fieldset>   
       <form class="layui-form" action="">
        <div style="padding: 20px; background-color: #F2F2F2;">
            <div class="layui-row layui-col-space15">
              <div class="layui-col-md12">
                <div class="layui-card">
                  <div class="layui-card-header">系统相关</div>
                  <div class="layui-card-body">
                        <div class="layui-form-item">
                          <label class="layui-form-label">超级管理</label>
                                <div class="layui-input-block">
                            <select name="admin_account" lay-verify="" lay-search>
                              <?php foreach($data['user']['list'] as $userlist): ?>
                              <option value="<?php echo $userlist['id']; ?>" <?php if($data['admin_account'] == 'userlist.id'): ?>selected<?php endif; ?>><?php echo $userlist['username']; ?></option>
                              <?php endforeach; ?>
                            </select>    
                          </div>
                        </div>
                        <div class="layui-form-item">
                                <label class="layui-form-label">网站名称</label>
                                <div class="layui-input-block">
                                    <input value="<?php echo $data['name']; ?>" type="text" name="name" required  lay-verify="required" placeholder="网站底部显示名字" autocomplete="off" class="layui-input">
                                </div>
                                </div>
                <div class="layui-form-item">
                        <label class="layui-form-label">网站标题</label>
                        <div class="layui-input-block">
                            <input value="<?php echo $data['title']; ?>" type="text" name="title" required  lay-verify="required" placeholder="网站首页标题" autocomplete="off" class="layui-input">
                        </div>
                        </div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">网站关键词</label>
                        <div class="layui-input-block">
                            <input value="<?php echo $data['keywords']; ?>" type="text" name="keywords" required  lay-verify="required" placeholder="网站Seo相关" autocomplete="off" class="layui-input">
                        </div>
                        </div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">网站描述</label>
                        <div class="layui-input-block">
                            <input value="<?php echo $data['description']; ?>" type="text" name="description" required  lay-verify="required" placeholder="网站Seo相关" autocomplete="off" class="layui-input">
                        </div>
                        </div>

                      <div class="layui-form-item">
                        <label class="layui-form-label">时间限制</label>
                        <div class="layui-input-block">
                          <input value="<?php echo $data['limitime']; ?>" type="text" name="limit_time" required  lay-verify="number" placeholder="单IP每次发帖限制时长" autocomplete="off" class="layui-input">
                        </div>
                      </div>
                      <div class="layui-form-item">
                        <label class="layui-form-label">IP限制</label>
                        <div class="layui-input-block">
                          <input value="<?php echo $data['limitip']; ?>" type="text" name="limit_ip" required  lay-verify="number" placeholder="单IP每次发帖限制次数" autocomplete="off" class="layui-input">
                        </div>
                      </div>
                      <div class="layui-form-item">
                        <label class="layui-form-label">ICP备案</label>
                        <div class="layui-input-block">
                          <input value="<?php echo $data['icp']; ?>" type="text" name="icp" required  lay-verify="required" placeholder="单IP每次发帖限制次数" autocomplete="off" class="layui-input">
                        </div>
                      </div>
                      <div class="layui-form-item">
                        <label class="layui-form-label">匿名开关</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="limit_mous" lay-skin="switch" <?php if($data['mous'] == '1'): ?>checked<?php endif; ?>>
                        </div>
                        </div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">联系QQ</label>
                        <div class="layui-input-block">
                            <input value="<?php echo $data['qq']; ?>" type="text" name="qq" required  lay-verify="number" placeholder="站点联系客服qq" autocomplete="off" class="layui-input">
                        </div>
                        </div>
                        <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">关于本站</label>
                        <div class="layui-input-block">
                            <textarea name="page_about" placeholder="请输入内容,支持HTML" class="layui-textarea"><?php echo $data['page_about']; ?></textarea>
                        </div>
                        </div>
                        <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="subData">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
       </form>
        
 <!-- 你的HTML代码 -->
 <script src="/static/js/jquery.min.js"></script>
 <script src="/static/layui/layui.js"></script>
 <script>
 //一般直接写在一个js文件中

 layui.use(['layer', 'form'], function(){
   var layer = layui.layer
   ,form = layui.form;
   form.on('submit(subData)',function(data){
    //    layer.msg(JSON.stringify(data.field))
        $.ajax({
            url:''
            ,type:'POST'
            ,data:{data:JSON.stringify(data.field)}
            ,dataType:'JSON'
            ,success:function(res){
                if(res.code==1){
                    layer.msg(res.info);
                }else{
                    layer.msg(res.info);
                }
            }
            ,error:function(){
                layer.msg('网络错误！');
            }
        })
       return false
   })
   
   //layer.msg('Hello World');
 });
 </script> 
 </body>
 </html>