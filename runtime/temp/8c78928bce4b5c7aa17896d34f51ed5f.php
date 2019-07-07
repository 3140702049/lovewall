<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"W:\lovewall\public/../application/admin\view\index\schoolexamine.html";i:1558157955;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>SchoolExamine Page. Lw2.0-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="/static/css/font.css">
        <link rel="stylesheet" href="/static/css/xadmin.css">
        <script src="/static/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/static/js/xadmin.js"></script>
        <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="x-nav">
          <span class="layui-breadcrumb">
            <a href="">首页</a>
            <a href="">分区</a>
            <a>
              <cite>校区审核</cite></a>
          </span>
          <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
        </div>
        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
          
                        <div class="layui-card-body ">
                            <table class="layui-table layui-form">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>标题</th>
                                    <th>联系</th>
                                    <th>时间</th>
                                    <th>理由</th>
                                    <th>状态</th>
                                    <th>操作</th></tr>
                                </thead>
                               
                        </div>
                        <div class="layui-card-body ">
                            <div class="page">
                                <div>
   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>
    <script>
      layui.use(['laydate','form'], function(){
        var laydate = layui.laydate;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });
      });

       /*用户-停用*/
      function member_stop(obj,id){
          var zid=$('#zid').html();
          layer.confirm('确认要执行吗？',function(index){
              if($(obj).attr('title')=='启用'){
                //发异步把用户状态进行更改
                $.ajax({
                    url:"<?php echo url('index/schoolList'); ?>"
                    ,type:'POST'
                    ,data:{zid:zid,ziduan:'status',ziduan_value:'0'}
                    ,dataType:'JSON'
                    ,success:function(data){
                        if (data.code==0) {
                            layer.msg('已停用!',{icon: 1,time:1000});
                        }else{
                            layer.msg('操作失败!',{icon: 2,time:1000});
                            return false;
                        }
                    }
                });
                $(obj).attr('title','停用')
                $(obj).find('i').html('&#xe62f;');
                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                
              }else{
                $.ajax({
                    url:"<?php echo url('index/schoolList'); ?>"
                    ,type:'POST'
                    ,data:{zid:zid,ziduan:'status',ziduan_value:'1'}
                    ,dataType:'JSON'
                    ,success:function(data){
                        if (data.code==0) {
                            layer.msg('已启用!',{icon: 6,time:1000});
                        }else{
                            layer.msg('操作失败!',{icon: 2,time:1000});
                            return false;
                        }
                    }
                })
                $(obj).attr('title','启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
              }
              
          });
      }

      /*用户-删除*/
      function member_del(obj,id){
          layer.confirm('确认要删除吗？',function(index){
              //发异步删除数据
              $.ajax({
                url:"<?php echo url('index/schoolOption'); ?>"
                ,data:{func:'del',id:id}
                ,type:'post'
                ,dataType:'json'
                ,success:function(res){
                  if (res.code==1) {
                    $(obj).parents("tr").remove();
                    layer.msg(res.info,{icon:1,time:1000});
                  } else {
                    layer.msg(res.info);
                  }
                }
                ,error:function(){
                  layer.msg('网络错误！');
                }
              })
          });
      }



      function delAll (argument) {

        var data = tableCheck.getData();
  
        layer.confirm('确认要删除吗？'+data,function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
      }
    </script>
</html>