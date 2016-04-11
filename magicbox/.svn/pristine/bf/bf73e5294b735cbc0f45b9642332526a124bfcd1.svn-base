var versionTemplate = '<tr>'
    + '<td style="min-width: 20px; max-width: 20px; word-break: break-all;">_id</td>'
	+ '<td style="min-width: 20px; max-width: 20px; word-break: break-all;">versionName</td>'
	+ '<td style="min-width: 20px; max-width: 20px; word-break: break-all;">tarUrl</td>'
	+ '<td style="min-width: 20px; max-width: 20px; word-break: break-all;">city</td>'
	+ '<td style="min-width: 20px; max-width: 20px; word-break: break-all;">hardware</td>'
	+ '<td style="min-width: 20px; max-width: 20px; word-break: break-all;">rmac</td>'
	+ '<td style="min-width: 20px; max-width: 20px; word-break: break-all;">appType</td>'
	+ '<td style="min-width: 20px; max-width: 20px; word-break: break-all;">createAt</td>'
    + '</tr>';
//var versionTemplate = '<tr>'
//    + '<td>_id</td>'
//	+ '<td>versionName</td>'
//	+ '<td>tarUrl</td>'
//	+ '<td>city</td>'
//	+ '<td>hardware</td>'
//	+ '<td>rmac</td>'
//	+ '<td>appType</td>'
//	+ '<td>createAt</td>'
//    + '</tr>';
var versionTitle = '<tr>'
	+ '<th style="min-width: 20px; max-width: 20px; word-break: break-all;">Id</th>'
	+ '<th style="min-width: 35px; max-width: 35px; word-break: break-all;">版本编号</th>'
	+ '<th style="min-width: 90px; max-width: 90px; word-break: break-all;">TarUrl</th>'
	+ '<th style="min-width: 40px; max-width: 40px; word-break: break-all;">城市</th>'
	+ '<th style="min-width: 60px; max-width: 60px; word-break: break-all;">硬件号</th>'
	+ '<th style="min-width: 80px; max-width: 80px; word-break: break-all;">Mac</th>'
	+ '<th style="min-width: 35px; max-width: 35px; word-break: break-all;">产品类型</th>'
	+ '<th style="min-width: 45px; max-width: 45px; word-break: break-all;">创建日期</th>'
	+ '</tr>';
//获取数据 
function getData(page) {
	$
			.ajax( {
				type : 'POST',
				url : "VersionOperation.php",
				data : {
					'pageNum' : page
				},
				dataType : 'json',
				// beforeSend:function(){
				// $("#list ul").append("<li
				// id='loading'>loading...</li>");//显示加载动画
				// },
				success : function(json) {
					$("#versions").empty();
					total = json.numTotal; // 总记录数
					pageSize = json.pageSize; // 每页显示条数
					curPage = page; // 当前页
					totalPage = json.pageTotal; // 总页数

					var tr = "";
					tr += versionTitle;
					for ( var i = 0; i < json.cnt; i++) {
						tr += versionTemplate;
						tr = tr.replace("_id", json.versions[i]._id);
						tr = tr.replace("versionName", json.versions[i].versionName);
						tr = tr.replace("tarUrl", json.versions[i].tarUrl);
						tr = tr.replace("city", json.versions[i].city);
						tr = tr.replace("hardware", json.versions[i].hardware);
						tr = tr.replace("rmac", json.versions[i].rmac);
						tr = tr.replace("appType", json.versions[i].appType);
						tr = tr.replace("createAt", json.versions[i].createAt);
					}
					// $("#versions").append(tr);
					$("#versions").html(tr);
				},
				complete : function() { // 生成分页条
					getPageBar();
				},
				error : function() {
					alert("数据加载失败");
				}
			});
} 



// 获取分页条
function getPageBar() {
	// 页码大于最大页数
	if (parseInt(curPage) > parseInt(totalPage))
		curPage = totalPage;
	//页码小于1 
	if (parseInt(curPage) < 1)
		curPage = 1;

	var pageStr = "<ul>";

	//如果是第一页 
	if (parseInt(curPage) == 1) {
		pageStr += "<li><a href='###' class='btn disabled' title='上一页'><i class='arrow-left'></i>上一页</a></li>";
	} else {
		pageStr += "<li><a href='javascript:void(0)' rel='"
				+ (parseInt(curPage) - 1)
				+ "' class='btn'  title='上一页'><i class='arrow-left'></i>上一页</a></li>";
	}
	for ( var i = 1; i < parseInt(curPage); i++) {
		pageStr += "<li><a href='javascript:void(0)' rel='" + i
				+ "' class='btn'><i class='arrow-left'></i>" + i.toString()
				+ "</a></li>";
	}
	pageStr += "<li><a href='###' class='btn disabled'><i class='arrow-left'></i>"
			+ curPage.toString() + "</a></li>";
	for ( var i = parseInt(curPage) + 1; i < parseInt(totalPage) + 1; i++) {
		pageStr += "<li><a href='javascript:void(0)' rel='" + i
				+ "' class='btn'><i class='arrow-left'></i>" + i.toString()
				+ "</a></li>";
	}

	//如果是最后页 
	if (curPage >= totalPage) {
		pageStr += "<li><a href='###' class='btn disabled' title='下一页'><i class='arrow-left'></i>下一页</a></li>";
	} else {
		pageStr += "<li><a href='javascript:void(0)' rel='"
				+ (parseInt(curPage) + 1)
				+ "' class='btn'  title='下一页'><i class='arrow-left'></i>下一页</a></li>";
	}

	pageStr += "</ul>";
	$("#pagecount").html(pageStr); 
}

function VersionAddShow() {
	$("#versionAdd").click(function() {
		$("#versionTitle").text("新增路由器版本");
		$("#versionAdd").hide();
		$("div.holl-cnt").hide();
		$(".versionAddGroup").show();
		$("#City").hide();
		$("#HardWare").hide();
		$("#Mac").hide();
	});
}

function VersionAddReturn() {
	$("#versionAddReturn").click(function() {
		$("#versionTitle").text("路由器版本列表");
		$("#versionAdd").show();
		$("div.holl-cnt").show();
		$(".versionAddGroup").hide();
	})
}

function VersionAddVerify() {
	if ("" == $("#productType").attr("value")) {
		alert("产品类型不能为空");
		$("#productType").focus();
		return false;
	}
	
	if ("" == $("#txtVersionName").attr("value")) {
		alert("版本名称不能为空");
		$("#txtVersionName").focus();
		return false;
	}
	
	if (0 == $("#publishType").attr("value")) {
		alert("发布类型不能为空");
		$("#publishType").focus();
		return false;
	}
	
	if (0 == $("#txtTarUrl").attr("value")) {
		alert("TarUrl不能为空");
		$("#txtTarUrl").focus();
		return false;
	}
	
	switch (parseInt($("#publishType").attr("value"))) {
	case 1:
		if ("" == $("#txtCity").attr("value")) {
			alert("城市不能为空");
			$("#txtCity").focus();
			return false;
		}
		break;
	case 2:
		if ("" == $("#txtHardware").attr("value")) {
			alert("硬件版本号不能为空");
			$("#txtHardware").focus();
			return false;
		}
		break;
	case 3:
		if ("" == $("#txtMac").attr("value")) {
			alert("MAC地址不能为空");
			$("#txtMac").focus();
			return false;
		}
		break;
	case 4:
		if ("" == $("#txtCity").attr("value")) {
			alert("城市不能为空");
			$("#txtCity").focus();
			return false;
		}
		
		if ("" == $("#txtHardware").attr("value")) {
			alert("硬件版本号不能为空");
			$("#txtHardware").focus();
			return false;
		}
		break;
	default:
		break;
	}
	
	return true;
}

function PublishTypeChange() {
	$("#publishType").change(function() {
		// notice the type, or it will not work  // parseInt
		// same effect
		// switch (parseInt($("#publishType").attr("value"))) {
		switch (parseInt($(this).children('option:selected').val())) {
		case 0:
			$("#City").hide();
			$("#HardWare").hide();
			$("#Mac").hide();
			alert("请选择发布类型");
			break;
		case 1:
			$("#City").show();
			$("#HardWare").hide();
			$("#Mac").hide();
			break;
		case 2:
			$("#City").hide();
			$("#HardWare").show();
			$("#Mac").hide();
			break;
		case 3:
			$("#City").hide();
			$("#HardWare").hide();
			$("#Mac").show();
			break;
		case 4:
			$("#City").show();
			$("#HardWare").show();
			$("#Mac").hide();
			break;
		default:
			break;
		}
	});
}

function PageChange() {
	$("#pagecount li a").live('click',function(){
		var rel = $(this).attr("rel");
		if(rel){
			getData(rel);
		}
	});
}

function LogOut() {
	$("#logOut").click(function() {
		// $("#versionForm").hide();
		var logOut = confirm('您确定要退出系统吗？');
		if (logOut) {
			window.location.href = "logout.php";
		}
	});
}