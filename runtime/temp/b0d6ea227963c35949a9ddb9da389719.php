<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"F:\wamp\www\guanjia\public/../application/admin\view\user\add.html";i:1548489490;s:61:"F:\wamp\www\guanjia\application\admin\view\public\header.html";i:1548489490;s:61:"F:\wamp\www\guanjia\application\admin\view\public\footer.html";i:1548489490;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('WEB_SITE_TITLE'); ?></title>
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/static/admin/elementUI-1.4.12/css/index.min.css" rel="stylesheet">
    <script src="/static/admin/elementUI-1.4.12/js/vue.min.js"></script>
    <script src="/static/admin/elementUI-1.4.12/js/index.min.js"></script>
    <style type="text/css">
    .long-tr th{
        text-align: center
    }
    .long-td td{
        text-align: center
    }
    /*elementUI分页样式*/
    .layout-pagination {
        text-align: right;
        margin-top: 15px;
    }
    .control-label{
        margin-top: 7px;
        text-align: right;
    }
    </style>
</head>
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/webuploader.css">
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/style.css">
<style>
.file-item{float: left; position: relative; width: 110px;height: 110px; margin: 0 20px 20px 0; padding: 4px;}
.file-item .info{overflow: hidden;}
.uploader-list{width: 100%; overflow: hidden;}
</style>
<body>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal m-t" name="add" id="add" method="post" action="<?php echo url('add'); ?>">
                <div class="form-group">
                    <label class="col-xs-3 col-sm-3 control-label">管理员名称：</label>
                    <div class="input-group col-xs-8 col-sm-4">
                        <input id="username" type="text" class="form-control" name="username" >
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-xs-3 col-sm-3 control-label">管理员角色：</label>
                    <div class="input-group col-xs-8 col-sm-4">
                        <select class="form-control m-b chosen-select" name="groupid" id="groupid">
                            <option value="">==请选择角色==</option>
                            <?php if(!empty($role)): if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): if( count($role)==0 ) : echo "" ;else: foreach($role as $key=>$vo): ?>
                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-xs-3 col-sm-3 control-label">头像：</label>
                    <div class="input-group col-xs-8 col-sm-4">
                        <input type="hidden" id="data_photo" name="portrait" >
                        <div id="fileList" class="uploader-list" style="float:right"></div>
                        <div id="imgPicker" style="float:left">选择头像</div>
                        <img id="img_data" class="img-circle" height="80px" width="80px" style="float:left;margin-left: 50px;margin-top: -10px;" src="/static/admin/images/head_default.gif"/>
                    </div>
                </div> 
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-xs-3 col-sm-3 control-label">登录密码：</label>
                    <div class="input-group col-xs-8 col-sm-4">
                        <input id="password" type="text" class="form-control" name="password" >
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-xs-3 col-sm-3 control-label">真实姓名：</label>
                    <div class="input-group col-xs-8 col-sm-4">
                        <input id="real_name" type="text" class="form-control" name="real_name" >

                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-xs-3 col-sm-3 control-label">状&nbsp;态：</label>
                    <div class="input-group col-xs-8 col-sm-4">
                        <div class="radio i-checks">
                            <input type="radio" name='status' value="1" checked="checked"/>开启&nbsp;&nbsp;
                            <input type="radio" name='status' value="0" />关闭
                        </div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                        <div class="col-xs-6 col-sm-3 col-xs-offset-4">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;
                        <button id="closeIframe" class="btn btn-danger" type="button"><i class="fa fa-close"></i> 关闭</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/admin/js/content.min.js?v=1.0.0"></script>
<script src="/static/admin/js/plugins/chosen/chosen.jquery.js"></script>
<script src="/static/admin/js/plugins/iCheck/icheck.min.js"></script>
<script src="/static/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/static/admin/js/plugins/switchery/switchery.js"></script><!--IOS开关样式-->
<script src="/static/admin/js/jquery.form.js"></script>
<script src="/static/admin/js/moment.min.js"></script>
<script src="/static/admin/js/layer/layer.js"></script>
<script src="/static/admin/js/laypage/laypage.js"></script>
<script src="/static/admin/js/laytpl/laytpl.js"></script>
<script src="/static/admin/js/lunhui.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
<script type="text/javascript" src="/static/admin/webupload/webuploader.min.js"></script>

<script type="text/javascript">
    var $list = $('#fileList');
    //上传图片,初始化WebUploader
    var uploader = WebUploader.create({
     
        auto: true,// 选完文件后，是否自动上传。   
        swf: '/static/admin/webupload/Uploader.swf',// swf文件路径 
        server: "<?php echo url('Upload/uploadface'); ?>",// 文件接收服务端。
        duplicate :true,// 重复上传图片，true为可重复false为不可重复
        pick: '#imgPicker',// 选择文件的按钮。可选。

        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/jpg,image/jpeg,image/png'
        },

        'onUploadSuccess': function(file, data, response) {
            $("#data_photo").val(data._raw);
            $("#img_data").attr('src', '/uploads/face/' + data._raw).show();
        }
    });

    uploader.on( 'fileQueued', function( file ) {
        $list.html( '<div id="' + file.id + '" class="item">' +
            '<h4 class="info">' + file.name + '</h4>' +
            '<p class="state">正在上传...</p>' +
        '</div>' );
    });

    // 文件上传成功
    uploader.on( 'uploadSuccess', function( file ) {
        $( '#'+file.id ).find('p.state').text('上传成功！');
    });

    // 文件上传失败，显示上传出错。
    uploader.on( 'uploadError', function( file ) {
        $( '#'+file.id ).find('p.state').text('上传出错!');
    }); 

    //提交
    $(function(){
        $('#add').ajaxForm({
            beforeSubmit: checkForm, 
            success: complete, 
            dataType: 'json'
        });
        
        function checkForm(){
            if( '' == $.trim($('#username').val())){
                layer.msg('请输入用户名',{icon:2,time:1500,shade: 0.1}, function(index){
                layer.close(index);
                });
                return false;
            }
            
            if( '' == $.trim($('#groupid').val())){
                layer.msg('请选择用户角色',{icon:2,time:1500,shade: 0.1}, function(index){
                layer.close(index);
                });
                return false;
            }

            if( '' == $.trim($('#password').val())){
                layer.msg('请输入登录密码',{icon:2,time:1500,shade: 0.1}, function(index){
                layer.close(index);
                });
                return false;
            }

            if( '' == $.trim($('#real_name').val())){
                layer.msg('请输入真实姓名',{icon:2,time:1500,shade: 0.1}, function(index){
                layer.close(index);
                });
                return false;
            }
        }


        function complete(data){
            if(data.code==1){
                parent.layer.msg(data.msg,{icon: 1,time:1500,shade: 0.1},function(index){
                    var win = parent.layer.getFrameIndex(window.name);  //获取窗口索引
                    parent.layer.close(win);     //关闭父页面
                    parent.vm.loadData(); //执行父页面的loadData方法
                });
            }else{
                parent.layer.msg(data.msg,{icon: 2,time:1500,shade: 0.1});
                return false;   
            }
        }
     
    });



    //IOS开关样式配置
   var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, {
            color: '#1AB394'
        });
    var config = {
        '.chosen-select': {},                    
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }

</script>
</body>
</html>