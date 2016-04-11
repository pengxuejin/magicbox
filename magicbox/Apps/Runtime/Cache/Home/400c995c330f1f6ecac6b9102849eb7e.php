<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>服务器基本信息</title>
</head>
<body>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
        <td class="text"><?php echo ($key); ?>：</td>
        <td class="input"><?php echo ($v); ?></td>
        <br>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>