<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html >
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>大博云柜 - 销售统计列表 - </title>
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
        <li><a href="<?php echo U('version/versionadd');?>">新增云柜版本</a></li>
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
        <li><a href="#" class="active">销售统计列表</a></li>
    </ul>
</div>
<!-- END SIDEBAR -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
<div class="content">
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTAINER -->
    <div class="container-padding">
        <!-- Start Row -->
        <div class="row">
            <!-- Start Panel -->
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">销售统计列表</div>
                    <div class="panel-body table-responsive">
                        <!-- Start Row -->
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <!--<p>请选择查询条件：</p>-->
                                        <!--<div class="col-md-12 col-lg-2">-->
                                            <div class="control-group col-md-12">
                                                <div class="controls">
                                                    <p>请选择查询条件：</p>
                                                </div>
                                            </div>
                                        <!--</div>-->
                                        <form class="form-horizontal" action="<?php echo U('statistics/statsales');?>" method="post" onsubmit="return SalesSearchVerify();">
                                        <div class="col-md-12 col-lg-3">
                                            <h5>云柜MAC：</h5>
                                            <div class="control-group">
                                                <div class="controls">
                                                <input type="text" id="macType" name="macType" class="form-control" placeholder="<?php echo ($macType); ?>" value="<?php echo ($macType); ?>"/>
                                                <select style="margin-top: 10px;" class="selectpicker" id="macTypePicker" name="macTypePicker" onchange='document.getElementById("macType").value = $("#macTypePicker").val();'>
                                                    <option value="" selected="selected">请选择</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-3">
                                            <h5>商品名称：</h5>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" id="goodsName" name="goodsName" class="form-control" placeholder="<?php echo ($goodsName); ?>" value="<?php echo ($goodsName); ?>"/>
                                                    <select style="margin-top: 10px;" class="selectpicker" id="goodsNamePicker" name="goodsNamePicker" onchange='document.getElementById("goodsName").value = $("#goodsNamePicker").val();'>
                                                        <option value="" selected="selected">请选择</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-12 col-lg-3">-->
                                            <!--<h5>销售时间：</h5>-->
                                            <!--<div class="control-group">-->
                                                <!--<div class="controls">-->
                                                    <!--<input type="text" id="goodsTime" name="goodsTime" class="form-control" value=""/>-->
                                                    <!--<select class="selectpicker" id="goodsTimePicker" name="goodsTimePicker" onchange='document.getElementById("goodsTime").value = $("#goodsTimePicker").val();'>-->
                                                        <!--<option value="" selected="selected">请选择</option>-->
                                                    <!--</select>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <div class="col-md-12 col-lg-8">
                                            <div class="control-group">
                                                <div class="controls">
                                                    <button style="margin-top: 20px;" type="submit" class="btn btn-default btn-lg">搜索</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <!-- End Row -->
                        <table id="example" class="table display">
                            <thead>
                            <tr>
                                <th style="min-width: 200px; max-width: 200px; width: 200px; text-align:center;">云柜Mac</th>
                                <th style="min-width: 150px; max-width: 150px; width: 150px; text-align:center;">商品名称</th>
                                <th style="min-width: 100px; max-width: 100px; width: 100px; text-align:center;">商品金额</th>
                                <th style="min-width: 100px; max-width: 100px; width: 100px; text-align:center;">销售数量</th>
                                <th style="width: auto; text-align:center;">销售时间</th>
                                <!--<th>云柜Mac</th>-->
                                <!--<th>商品名称</th>-->
                                <!--<th>商品金额</th>-->
                                <!--<th>销售数量</th>-->
                                <!--<th>销售时间</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($salesList)): $i = 0; $__LIST__ = $salesList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    <td class="mac" style="min-width: 200px; max-width: 200px; width: 200px; word-break: break-all; text-align:center;"><?php echo ($vo["mac"]); ?></td>
                                    <td class="goodsName" style="min-width: 100px; max-width: 100px; width: 100px; word-break: break-all; text-align:center;"><?php echo ($vo["name"]); ?></td>
                                    <td style="min-width: 100px; max-width: 100px; width: 100px; word-break: break-all; text-align:center;"><?php echo ($vo["price"]); ?></td>
                                    <td style="min-width: 100px; max-width: 100px; width: 100px; word-break: break-all; text-align:center;"><?php echo ($vo["sell_count"]); ?></td>
                                    <td style="width: auto; word-break: break-all; text-align:center;"><?php echo ($vo["sell_at"]); ?></td>
                                    <!--<td><?php echo ($vo["mac"]); ?></td>-->
                                    <!--<td><?php echo ($vo["name"]); ?></td>-->
                                    <!--<td><?php echo ($vo["price"]); ?></td>-->
                                    <!--<td><?php echo ($vo["sell_count"]); ?></td>-->
                                    <!--<td><?php echo ($vo["sell_at"]); ?></td>-->
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            <tr><td colspan="9" align="center" height="45"><?php echo ($salesPage); ?></td></tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            <!-- End Panel -->
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

    function SalesSearchVerify() {
//        if (0 == $("#macType").val()) {
//            alert("请选择mac");
//            $("#macType").focus();
//            return false;
//        }

//        alert("123456");
//        alert($("#macType").val());
        return true;
    }

    function unique(arr) {
        var result = [], hash = {};
        for (var i = 0, elem; (elem = arr[i]) != null; i++) {
            if (!hash[elem]) {
                result.push(elem);
                hash[elem] = true;
            }
        }
        return result;
    }

    $(document).ready(function() {
        // alert("123456");
        // 清空所有输入框
//        $(":input").each(function () {
//            $(this).val("");
//        })

//        $("#macType").onChange(function () {
//            alert("123456");
//            // onchange='document.getElementById("macTypePicker").value = $("#macType").val();'
//        })

        var mac = new Array();
        var index = 0;
        $(".mac").each(function () {
            // alert($(this).text());
            mac[index] = $(this).text();
            index++;
        })

        var macNow = unique(mac);
        for (var i = 0; i < macNow.length; i++) {
            var opt = new Option(macNow[i]);
            document.getElementById('macTypePicker').options.add(opt);
        }

        var goodsName = new Array();
        var index = 0;
        $(".goodsName").each(function () {
            // alert($(this).text());
            goodsName[index] = $(this).text();
            index++;
        })

        var goodsNameNow = unique(goodsName);
        for (var i = 0; i < goodsNameNow.length; i++) {
            var opt = new Option(goodsNameNow[i]);
            document.getElementById('goodsNamePicker').options.add(opt);
        }
    } );
</script>
<script>
    $(document).ready(function() {
    } );
</script>
</body>
</html>