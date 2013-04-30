
<html>
<head>
<title>后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-color: #999966;
}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div align="center">
  <table width="180" border="0" align="center" cellpadding="0" cellspacing="2">
    <tr bgcolor="#EEEEEE">
      <td height="22" colspan="3" bgcolor="#999966">&nbsp;<font color="#FFFFFF"><strong>关于我们</strong></font></td>
    </tr>
    <tr bgcolor="#EEEEEE">
      <td height="22" colspan="3" bgcolor="#996600">&nbsp;<font color="#FFFFFF">[ 分类名称 ] |</font> <a href="auClass_managelist.html"  target="window_main"><font color="#FFFF00">分类管理</font></a></td>
    </tr><form name="form1" method="post" action=""></form>
    <tr>
      <td width="88%" height="2" bgcolor="#666666"></td>
      <td width="12%" height="2" colspan="2" bgcolor="#666666"></td>
    </tr>
  </table>
  <table width="180" border="0" align="center" cellpadding="1" cellspacing="1">
     @foreach($classes as $class)
     
    <tr>
      <td height="22" background="images/line-2.gif" bgcolor="#EEEEEE">&nbsp;<font color="#999999">■</font>&nbsp;<a href="au_list.html?w_classid={{$class->w_id}}" target="window_main">{{$class->w_classname}}</a></td>
    </tr>
    @endforeach
     
  </table>
  <table width="180" border="0" align="center" cellpadding="2">
    <tr>
      <td width="14" height="1" bgcolor="#666666"></td>
      <td height="1" bgcolor="#666666"></td>
    </tr>
  </table>
</div>
</body>
</html>
