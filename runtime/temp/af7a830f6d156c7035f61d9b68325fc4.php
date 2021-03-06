<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"F:\wamp\www\guanjia\public/../application/admin\view\member\index.html";i:1550390898;s:61:"F:\wamp\www\guanjia\application\admin\view\public\header.html";i:1548489490;s:61:"F:\wamp\www\guanjia\application\admin\view\public\footer.html";i:1548489490;}*/ ?>
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
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>会员列表</h5>
        </div>
        <div class="ibox-content">
            <!--搜索框开始-->           
            <div class="row">
                <div class="col-sm-12">   
                <div  class="col-sm-2" style="width: 100px">
                    <div class="input-group" >  
                        <a href="<?php echo url('add_member'); ?>"><button class="btn btn-outline btn-primary" type="button">添加会员</button></a> 
                    </div>
                </div>                                    
                    <form name="admin_list_sea" class="form-search" method="post" action="<?php echo url('index'); ?>">
						<div class="col-sm-2">
                            <div class="input-group">
								<select class="form-control m-b chosen-select" name="group_id" id="group_id">
                                    <option value="">==请选择会员组==</option>
                                    <?php if(!empty($group)): if(is_array($group) || $group instanceof \think\Collection || $group instanceof \think\Paginator): if( count($group)==0 ) : echo "" ;else: foreach($group as $key=>$vo): ?>
                                            <option value="<?php echo $vo['id']; ?>" <?php if($group_id == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['group_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                </select>
							</div>
						</div>
						
						<div class="col-sm-2">
                            <div class="input-group">
								<select class="form-control m-b chosen-select" name="qd_id" id="qd_id">
                                    <option value="">==请选择渠道商==</option>
                                    <?php if(!empty($distributor)): if(is_array($distributor) || $distributor instanceof \think\Collection || $distributor instanceof \think\Paginator): if( count($distributor)==0 ) : echo "" ;else: foreach($distributor as $key=>$vo): ?>
                                            <option value="<?php echo $vo['qd_id']; ?>" <?php if($qd_id == $vo['qd_id']): ?>selected<?php endif; ?>><?php echo $vo['nickname']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                </select>
							</div>
						</div>
						
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" id="key" class="form-control" name="key" value="<?php echo $val; ?>" placeholder="输入需查询的会员账号/昵称/手机号" />   
                                <span class="input-group-btn"> 
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> 搜索</button> 
                                </span>
                            </div>
                        </div>
                    </form>                         
                </div>
            </div>
            <!--搜索框结束-->
            <div class="hr-line-dashed"></div>
            <div class="example-wrap">
                <div class="example">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="long-tr">
                                <th width="4%">ID</th>
                                <th width="9%">账号</th>
                                <th width="9%">昵称</th>
                                <th width="5%">性别</th>
                                <th width="6%">所属组</th>
                                <th width="5%">头像</th>
                                <th width="5%">积分</th>
                                <th width="5%">余额</th>
                                <!--<th width="5%">手机号</th>-->
								<th width="5%">代理商</th>
                                <th width="5%">登录次数</th>
                                <th width="6%">状态</th>
                                <th width="10%">注册时间</th>
                                <th width="18%">操作</th>
                            </tr>
                        </thead>
                        <script id="list-template" type="text/html">
                            {{# for(var i=0;i<d.length;i++){  }}
                            <tr class="long-td">
                                <td>{{d[i].id}}</td>
                                <td>{{d[i].account}}</td>
                                <td>{{d[i].nickname}}</td>
                                <td>
                                    {{# if(d[i].sex==1){ }}
                                        男
                                    {{# }else if(d[i].sex==2){ }}
                                        女
                                    {{# }else{ }}
                                        未知
                                    {{# } }}
                                </td>
                                <td>{{d[i].group_name}}</td>
                                <td>
                                    <img src="/uploads/face/{{d[i].head_img}}" class="img-circle" style="width:35px;height:35px" onerror="this.src='/static/admin/images/head_default.gif'"/>                                  
                                </td>
                                <td>{{d[i].integral}}</td>                                  
                                <td>{{d[i].money}}</td>
                                <!--<td>{{d[i].mobile}}</td>-->
								<td>{{d[i].agent_account}}</td>
                                <td>{{d[i].login_num}}</td>                                                                
                                <td>                             
                                    {{# if(d[i].status==1){ }}
                                        <a class="red" href="javascript:;" onclick="member_status({{d[i].id}});">
                                            <div id="zt{{d[i].id}}"><span class="label label-info">开启</span></div>
                                        </a>
                                    {{# }else{ }}
                                        <a class="red" href="javascript:;" onclick="member_status({{d[i].id}});">
                                            <div id="zt{{d[i].id}}"><span class="label label-danger">禁用</span></div>
                                        </a>
                                    {{# } }}                               
                                </td>
                                <td>{{d[i].create_time}}</td> 
                                <td>    
									 <a href="javascript:;" onclick="vip_member({{d[i].id}})" class="btn btn-primary btn-outline btn-xs">
                                        <i class="fa fa-paste"></i> 续费VIP</a>&nbsp;&nbsp;                              
                                    <a href="javascript:;" onclick="edit_member({{d[i].id}})" class="btn btn-primary btn-outline btn-xs">
                                        <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                    <a href="javascript:;" onclick="del_member({{d[i].id}})" class="btn btn-danger btn-outline btn-xs">
                                        <i class="fa fa-trash-o"></i> 删除</a>                                      
                                </td>
                            </tr>
                            {{# } }}
                        </script>
                        <tbody id="list-content"></tbody>
                    </table>
                    <div id="AjaxPage" style=" text-align: right;"></div>
                    <div id="allpage" style=" text-align: right;"></div>
                </div>
            </div>
            <!-- End Example Pagination -->
        </div>
    </div>
</div>
<!-- End Panel Other -->
</div>

<!-- 加载动画 -->
<div class="spiner-example">
    <div class="sk-spinner sk-spinner-three-bounce">
        <div class="sk-bounce1"></div>
        <div class="sk-bounce2"></div>
        <div class="sk-bounce3"></div>
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

<script type="text/javascript">
   
    //laypage分页
    Ajaxpage();
    function Ajaxpage(curr){
        var key=$('#key').val();
		var group_id=$('#group_id').val();
		var qd_id=$('#qd_id').val();
        $.getJSON('<?php echo url("Member/index"); ?>', {page: curr || 1,key:key,group_id:group_id,qd_id:qd_id}, function(data){
            $(".spiner-example").css('display','none'); //数据加载完关闭动画 
            if(data==''){
                $("#list-content").html('<td colspan="20" style="padding-top:10px;padding-bottom:10px;font-size:16px;text-align:center">暂无数据</td>');
            }else{
                var tpl = document.getElementById('list-template').innerHTML;
                laytpl(tpl).render(data, function(html){
                    document.getElementById('list-content').innerHTML = html;
                });
                laypage({
                    cont: $('#AjaxPage'),//容器。值支持id名、原生dom对象，jquery对象,
                    pages:'<?php echo $allpage; ?>',//总页数
                    skip: true,//是否开启跳页
                    skin: '#1AB5B7',//分页组件颜色
                    curr: curr || 1,
                    groups: 3,//连续显示分页数
                    jump: function(obj, first){
                        if(!first){
                            Ajaxpage(obj.curr)
                        }
                        $('#allpage').html('第'+ obj.curr +'页，共'+ obj.pages +'页');
                    }
                });
            }
        });
    }

//续费VIP
function vip_member(id){
    location.href = './vip_member/id/'+id+'.html';
}

//编辑会员
function edit_member(id){
    location.href = './edit_member/id/'+id+'.html';
}

//删除会员
function del_member(id){
    lunhui.confirm(id,'<?php echo url("del_member"); ?>');
}

//用户会员
function member_status(id){
    lunhui.status(id,'<?php echo url("member_status"); ?>');
}

</script>
</body>
</html>