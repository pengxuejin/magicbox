<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html >
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大博云柜 - 云柜版本列表 - </title>
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
		<li><a href="#" class="active">云柜版本列表</a></li>
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
		<li><a href="<?php echo U('statistics/statsales');?>">销售统计列表</a></li>
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
					<div class="panel-title">云柜版本列表</div>
					<div class="panel-body table-responsive">

						<table id="example" class="table display">
							<thead>
							<tr>
								<th style="min-width: 60px; max-width: 60px; width: 60px; text-align:center;">ID</th>
								<th style="min-width: 100px; max-width: 100px; width: 100px; text-align:center;">版本编号</th>
								<th style="min-width: 150px; max-width: 150px; width: 150px; text-align:center;">TarUrl</th>
								<th style="min-width: 80px; max-width: 80px; width: 80px; text-align:center;">城市</th>
								<th style="min-width: 100px; max-width: 100px; width: 100px; text-align:center;">产品类型</th>
								<th style="min-width: 100px; max-width: 100px; width: 100px; text-align:center;">硬件号</th>
								<th style="min-width: 150px; max-width: 150px; width: 150px; text-align:center;">Mac</th>
								<th style="width: auto; text-align:center;">创建日期</th>
							</tr>
							</thead>

							<!--<tfoot>-->
							<!--<tr>-->
								<!--<th>Name</th>-->
								<!--<th>Position</th>-->
								<!--<th>Office</th>-->
								<!--<th>Age</th>-->
								<!--<th>Start date</th>-->
								<!--<th>Salary</th>-->
							<!--</tr>-->
							<!--</tfoot>-->

							<tbody>
							<?php if(is_array($versionList)): $i = 0; $__LIST__ = $versionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td style="min-width: 60px; max-width: 60px; width: 60px; word-break: break-all; text-align:center;"><?php echo ($vo["_id"]); ?></td>
								<td style="min-width: 100px; max-width: 100px; width: 100px; word-break: break-all; text-align:center;"><?php echo ($vo["versionname"]); ?></td>
								<td style="min-width: 150px; max-width: 150px; width: 150px; word-break: break-all; text-align:center;"><?php echo ($vo["tarurl"]); ?></td>
								<td style="min-width: 80px; max-width: 80px; width: 80px; word-break: break-all; text-align:center;"><?php echo ($vo["city"]); ?></td>
								<td style="min-width: 100px; max-width: 100px; width: 100px; word-break: break-all; text-align:center;"><?php echo ($vo["apptype"]); ?></td>
								<td style="min-width: 100px; max-width: 100px; width: 100px; word-break: break-all; text-align:center;"><?php echo ($vo["hardware"]); ?></td>
								<td style="min-width: 150px; max-width: 150px; width: 150px; word-break: break-all; text-align:center;"><?php echo ($vo["rmac"]); ?></td>
								<td style="width: auto; word-break: break-all; text-align:center;"><?php echo ($vo["createat"]); ?></td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							<tr><td colspan="9" align="center" height="45"><?php echo ($versionPage); ?></td></tr>
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
	$(document).ready(function() {
		//$('#example0').DataTable();
	} );
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