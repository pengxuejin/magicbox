<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html >
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>大博云柜 - 新增云柜版本 - </title>
    <link rel="stylesheet" type="text/css" href="/magicbox/Public/CSS/root.css" />
</head>
<body>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START TOP -->
<div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
        <a href="index.html" class="logo">武汉大博</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Top Right -->
    <ul class="top-right">
        <li class="dropdown link">Hi, <?php echo ($username); ?></li>
        <li class="dropdown link">
            <a href="<?php echo U('access/logout');?>"><b>安全退出</b></a>
            <!--<a href="<?php echo U('access/logout');?>" data-toggle="dropdown" class="dropdown-toggle profilebox"><b>安全退出</b></a>-->
        </li>
    </ul>
    <!-- End Top Right -->

</div>
<!-- END TOP -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START SIDEBAR -->
<div class="sidebar clearfix">
    <ul class="sidebar-panel nav">
        <li class="sidetitle">大博云柜</li>
        <li><a href="<?php echo U('version/versionlist');?>">云柜版本列表</a></li>
        <li><a href="#" class="active">新增云柜版本</a></li>
        <li><a href="<?php echo U('version/versionupdate');?>">云柜升级日志</a></li>
    </ul>
    <ul class="sidebar-panel nav">
        <li class="sidetitle">云柜商品</li>
        <li><a href="<?php echo U('goods/goodslist');?>">注册商品列表</a></li>
        <li><a href="<?php echo U('goods/goodsadd');?>">新增注册商品</a></li>
    </ul>
    <ul class="sidebar-panel nav">
        <li class="sidetitle">云柜广告</li>
        <li><a href="<?php echo U('advs/advsupdate');?>">广告升级日志</a></li>
    </ul>
    <ul class="sidebar-panel nav">
        <li class="sidetitle">云柜统计</li>
        <li><a href="<?php echo U('statistics/statsales');?>">销售统计列表</a></li>
    </ul>
</div>
<!-- END SIDEBAR -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
<div class="content">
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTAINER -->
    <div class="container-padding">

        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        新增云柜版本
                        <ul class="panel-tools">
                            <!--<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>-->
                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                            <!--<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>-->
                        </ul>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="<?php echo U('version/newversionadd');?>" method="post" onsubmit="return VersionAddVerify();">
                            <!--<div class="form-group">-->
                                <!--<label class="col-sm-2 control-label form-label">Static Field</label>-->
                                <!--<div class="col-sm-10">-->
                                    <!--<p class="form-control-static">email@example.com</p>-->
                                <!--</div>-->
                            <!--</div>-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label form-label">产品类型：</label>
                                <div class="col-sm-8">
                                    <select class="selectpicker" id="productType" name="productType">
                                        <option value="0" selected="selected">请选择</option>
                                        <option value="1">云柜</option>
                                        <option value="2">健康秤</option>
                                        <option value="3">云蝶</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="versionName" class="col-sm-2 control-label form-label">版本名称：</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="versionName" name="versionName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label form-label">发布类型：</label>
                                <div class="col-sm-6">
                                    <select class="selectpicker" id="publishType" name="publishType">
                                        <option value="0" selected="selected">请选择</option>
                                        <option value="1">按区域</option>
                                        <option value="2">按Hardware</option>
                                        <option value="3">按Mac</option>
                                        <option value="4">按区域和Hardware</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="display:none;" id="groupCity">
                                <label for="textCity" class="col-sm-2 control-label form-label">城市：</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="textCity" name="city">
                                </div>
                            </div>
                            <div class="form-group" style="display:none;" id="groupHardware">
                                <label for="textHardware" class="col-sm-2 control-label form-label">Hardware：</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="textHardware" name="hardware">
                                </div>
                            </div>
                            <div class="form-group" style="display:none;" id="groupMac">
                                <label for="textMac" class="col-sm-2 control-label form-label">Mac：</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="textMac" name="mac">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textTarUrl" class="col-sm-2 control-label form-label">TarUrl：</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="textTarUrl" name="tarUrl">
                                </div>
                            </div>
                            <div class="form-group">
                                <button style="margin-left: 170px" type="submit" class="btn btn-default">版本保存</button>
                                <button type="reset" class="btn margin-l-5">返回</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    </div>
    <!-- END CONTAINER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->


    <!-- Start Footer -->
    <div class="row footer">
        <div class="col-md-6 text-left">
            Copyright © 2015 <a href="http://www.daboowifi.com/" target="_blank">武汉大博</a> All rights reserved.
        </div>
        <div class="col-md-6 text-right">
            Design and Developed by <a href="http://www.daboowifi.com/" target="_blank">武汉大博</a>
        </div>
    </div>
    <!-- End Footer -->


</div>
<!-- End Content -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- ================================================
jQuery Library
================================================ -->
<script src="/magicbox/Public/JS/jquery.min.js"></script>
<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="/magicbox/Public/JS/bootstrap/bootstrap.min.js"></script>
<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script src="/magicbox/Public/JS/plugins.js"></script>
<!-- ================================================
Data Tables
================================================ -->
<script src="/magicbox/Public/JS/datatables/datatables.min.js"></script>
<script type="text/javascript" src="/magicbox/Public/JS/jquery.js"></script>
<script>
    $(document).ready(function() {
        // alert("12345");
        $("#publishType").change(function() {
            switch (parseInt($("#publishType").attr("value"))) {
                case 0:
                    $("#city").hide();
                    $("#hardware").hide();
                    $("#mac").hide();
                    // alert("请选择发布类型");
                    break;
                case 1:
                    $("#city").show();
                    $("#hardware").hide();
                    $("#mac").hide();
                    break;
                case 2:
                    $("#city").hide();
                    $("#hardware").show();
                    $("#mac").hide();
                    break;
                case 3:
                    $("#city").hide();
                    $("#hardware").hide();
                    $("#mac").show();
                    break;
                case 4:
                    $("#city").show();
                    $("#hardware").show();
                    $("#mac").hide();
                    break;
                default:
                    break;
            }
        });
    } );
</script>
<script type="text/JavaScript">
    $(function() {
        // 清空所有输入框
        $(":input").each(function () {
            $(this).val("");
        })
        // 产品类型 设置默认进来时 第一个选项被选中
        var productType = document.getElementById("productType");
        for(var i = 0; i < productType.options.length; i++) {
            if("0" == productType.options[i].value){
                productType.options[i].selected = true;
                break;
            }
        }

        // 发布类型 设置默认进来时 第一个选项被选中
        var publishType = document.getElementById("publishType");
        for(var i = 0; i < publishType.options.length; i++) {
            if("0" == publishType.options[i].value){
                publishType.options[i].selected = true;
                break;
            }
        }

        $("#publishType").change(function() {
            switch (parseInt($(this).val())) {
                    // switch (parseInt($(this).children('option:selected').val())) {
                case 0:
                    $("#groupCity").attr("style", "display:none;");
                    $("#groupHardware").attr("style", "display:none;");
                    $("#groupMac").attr("style", "display:none;");
                    // alert("请选择发布类型");
                    break;
                case 1:
                    $("#groupCity").attr("style", "");
                    $("#groupHardware").attr("style", "display:none;");
                    $("#groupMac").attr("style", "display:none;");
                    break;
                case 2:
                    $("#groupCity").attr("style", "display:none;");
                    $("#groupHardware").attr("style", "");
                    $("#groupMac").attr("style", "display:none;");
                    // alert($("#groupMac").attr("style"));
                    break;
                case 3:
                    $("#groupCity").attr("style", "display:none;");
                    $("#groupHardware").attr("style", "display:none;");
                    $("#groupMac").attr("style", "");
                    break;
                case 4:
                    $("#groupCity").attr("style", "");
                    $("#groupHardware").attr("style", "");
                    $("#groupMac").attr("style", "display:none;");
                    break;
                default:
                    break;
            }
        });
    });

    function VersionAddVerify() {
        // 0和“0”貌似都可以
        //if ("0" == $("#productType").val()) {
        if (0 == $("#productType").val()) {
            alert("请选择产品类型");
            $("#productType").focus();
            return false;
        }
        // if ("" == $("#versionName").val()) {
        if (0 == $("#versionName").val().length) {
            alert("请输入版本名称");
            $("#versionName").focus();
            return false;
        }
        switch (parseInt($("#publishType").val())) {
            case 0:
                alert("请选择发布类型");
                $("#publishType").focus();
                return false;
                break;
            case 1:
                if (0 == $("#textCity").val().length) {
                    alert("请输入城市");
                    $("#textCity").focus();
                    return false;
                }
                break;
            case 2:
                if (0 == $("#textHardware").val().length) {
                    alert("请输入硬件版本号");
                    $("#textHardware").focus();
                    return false;
                }
                break;
            case 3:
                if (0 == $("#textMac").val().length) {
                    alert("请输入Mac");
                    $("#textMac").focus();
                    return false;
                }
                break;
            case 4:
                if (0 == $("#textCity").val().length) {
                    alert("请输入城市");
                    $("#textCity").focus();
                    return false;
                }
                if (0 == $("#textHardware").val().length) {
                    alert("请输入硬件版本号");
                    $("#textHardware").focus();
                    return false;
                }
                break;
            default:
                break;
        }
        if (0 == $("#publishType").val()) {
            alert("请选择发布类型");
            $("#publishType").focus();
        }

        if (0 == $("#textTarUrl").val().length) {
            alert("请输入版本下载url");
            $("#textTarUrl").focus();
            return false;
        }
        return true;
    }
</script>
<script>
    $(document).ready(function() {
//		var table = $('#example').DataTable({
//			"columnDefs": [
//				{ "visible": false, "targets": 2 }
//			],
//			"order": [[ 2, 'asc' ]],
//			"displayLength": 25,
//			"drawCallback": function ( settings ) {
//				var api = this.api();
//				var rows = api.rows( {page:'current'} ).nodes();
//				var last=null;
//
//				api.column(2, {page:'current'} ).data().each( function ( group, i ) {
//					if ( last !== group ) {
//						$(rows).eq( i ).before(
//								'<tr class="group"><td colspan="5">'+group+'</td></tr>'
//						);
//
//						last = group;
//					}
//				} );
//			}
//		} );
//
//		// Order by the grouping
//		$('#example tbody').on( 'click', 'tr.group', function () {
//			var currentOrder = table.order()[0];
//			if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
//				table.order( [ 2, 'desc' ] ).draw();
//			}
//			else {
//				table.order( [ 2, 'asc' ] ).draw();
//			}
//		} );
    } );
</script>
</body>
</html>