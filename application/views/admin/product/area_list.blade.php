
<html>
<head>
<title>商品所在区域</title>
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
      <td height="22" colspan="3" bgcolor="#999966">&nbsp;<strong><font color="#FFFFFF">商品所在区域</font></strong></td>
    </tr>
    <tr bgcolor="#EEEEEE">
      <td height="22" colspan="3" bgcolor="#006666">&nbsp;<font color="#FFFFFF">[ 区域名称 ] </font></td>
    </tr><form name="form2" method="post" action="memberClass_List.html">
    <tr bgcolor="#EEEEEE">
      <td height="22" colspan="3" bgcolor="#CCCCCC">
        <input name="textfield" type="text" class="text" id="textfield" value="北京" size="10">
        <input name="button" type="submit" class="SubmitButtom" id="button" value="搜索">
        <input name="button2" type="submit" class="SubmitButtom" id="button2" value="全部">
      </td>
    </tr>
    </form>
    <tr>
      <td width="88%" height="2" bgcolor="#666666"></td>
      <td width="12%" height="2" colspan="2" bgcolor="#666666"></td>
    </tr>
  </table>
  <table width="180" border="0" align="center" cellpadding="1" cellspacing="1">
     @foreach($areas as $area)

    <tr>
      <td height="22" background="images/line-2.gif" bgcolor="#EEEEEE">&nbsp;<font color="#999999">■</font>&nbsp;<a href="proclass_list.html?areaid={{$area->w_id}}" target="_self">【{{$area->w_name}}】{{$area->username}}</a></td>
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
