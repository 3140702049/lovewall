<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"W:\lovewall\public/../application/admin\view\index\content_view.html";i:1558186737;}*/ ?>
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
        <legend>内容详情</legend>
      </fieldset>   
       
      <div style="padding: 20px; background-color: #F2F2F2;">
        <div class="layui-row layui-col-space15">
          <div class="layui-col-md6">
            <div class="layui-card">
              <div class="layui-card-header">发布信息</div>
              <div class="layui-card-body">
                <span class="layui-badge layui-bg-orange">名字</span>&nbsp;<span class="layui-badge-rim"><?php echo $data['name']; ?></span><br>
                <span class="layui-badge layui-bg-blue">性别</span>&nbsp;<span class="layui-badge-rim"><?php switch($data['sex']): case "0": ?>妹纸<?php break; case "1": ?>汉纸<?php break; default: ?>未知<?php endswitch; ?></span><br>
                <span class="layui-badge layui-bg-orange">Q Q</span>&nbsp;<span class="layui-badge-rim"><?php echo $data['qq']; ?></span><br>
                <span class="layui-badge layui-bg-black">匿名</span>&nbsp;<span class="layui-badge-rim"><?php if($data['mous'] == '0'): ?>实名<?php else: ?>匿名<?php endif; ?></span><br>
                <span class="layui-badge layui-bg-blue">点赞</span>&nbsp;<span class="layui-badge-rim"><?php echo $data['like']; ?></span><br>
                <span class="layui-badge layui-bg-blue">评论</span>&nbsp;<span class="layui-badge-rim"><?php echo $data['comm']; ?></span>
              </div>
            </div>
          </div>
          <div class="layui-col-md6">
            <div class="layui-card">
              <div class="layui-card-header">系统信息</div>
              <div class="layui-card-body">
                <span class="layui-badge layui-bg-orange">I P</span>&nbsp;<span class="layui-badge-rim"><?php echo $data['ip']; ?></span><br>
                <span class="layui-badge layui-bg-blue">时间</span>&nbsp;<span class="layui-badge-rim"><?php echo date("Y-m-d H:i:s",$data['date']); ?></span><br>
                <span class="layui-badge layui-bg-cyan">校区</span>&nbsp;<span class="layui-badge-rim"><?php echo $data['zid']; ?></span><br>
              </div>
            </div>
          </div>
          <div class="layui-col-md12">
            <div class="layui-card">
              <div class="layui-card-header">发布内容</div>
              <div class="layui-card-body">
                <?php echo $data['text']; ?>
              </div>
            </div>
          </div>
        </div>
      </div> 
 
<!-- 你的HTML代码 -->
 
<script src="/static/layui/layui.js"></script>
<script>
//一般直接写在一个js文件中
layui.use(['layer', 'form'], function(){
  var layer = layui.layer
  ,form = layui.form;
  
  //layer.msg('Hello World');
});
</script> 
</body>
</html>