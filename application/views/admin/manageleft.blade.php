<html>
<head>
<title>后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/css.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-color: #99CCFF;
}
.STYLE1 {color: #FF0000}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="207" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FF0000"> 
    <td height="1" colspan="3"></td>
  </tr>
  <tr bgcolor="#FF9900"> 
    <td height="22" colspan="3" bgcolor="#0099FF"> &nbsp;&nbsp;<font color="#ffffff">欢迎你：<strong>{{$username}}</strong></font></td>
  </tr>
  <tr>
    <td height="5" colspan="3" align="center" bgcolor="#cccccc"></td>
  </tr>
  <tr> 
    <td colspan="3" align="center" bgcolor="#cccccc"><div align="center"><img src="images/b_pic_1.gif"></div></td>
  </tr>
  <tr> 
    <td colspan="3"><img src="images/ht_pic1_r2_c1.gif" width="207" height="10"></td>
  </tr>
  <tr> 
    <td width="4" background="images/ht_pic1_r3_c1.gif">&nbsp;</td>
    <td width="196" valign="top" bgcolor="#cccccc"><table width="180" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr bgcolor="#EEEEEE"> 
          <td height="22" colspan="3" bgcolor="#0099CC">&nbsp;<font color="#FFFFFF">栏目列表</font></td>
        </tr>
        <tr> 
          <td width="33%" height="1" bgcolor="#666666"></td>
          <td width="67%" height="1" colspan="2" bgcolor="#ff000"></td>
        </tr>
    </table>

      <table width="180" border="0" align="center" cellpadding="1" cellspacing="1">
    @foreach($menus as $item)
        <tr>
          <td colspan="2" background="images/line-2.gif" bgcolor="#EEEEEE">&nbsp;<font color="#999999">■</font>&nbsp;<a href="{{$item->linkname}}" target="mainFrame"><font color="#ff0000">{{$item->titlename}}</font></a></td>
          <td bgcolor="#EEEEEE"><font color="#ff0000"><img src="images/Head_r1_c3.gif" border="0" ></font></td>
        </tr>
        
        <?php $no = 1 ?>
       
        @foreach($item->subMenus as $subMenu)
         <tr>
          <td width="25" align="right" bgcolor="#F5F5F5"> {{$no++}}、</td>
          <td width="124"  bgcolor="#F5F5F5"><a href="{{$subMenu->linkname}}" target="mainFrame">{{$subMenu->titlename}}</a></td>
          <td bgcolor="#F5F5F5">&nbsp;</td>
        </tr>
        @endforeach

    @endforeach
      </table>

      
      <table width="180" border="0" align="center" cellpadding="2">
        <tr> 
          <td height="1" bgcolor="#666666"></td>
          <td height="1" colspan="2" bgcolor="#ff0000"></td>
        </tr>
        <tr>
          <td width="14" bgcolor="#EEEEEE">&nbsp;</td>
          <td width="152" bgcolor="#EEEEEE">&nbsp;<font color="#ff0000">|</font> <a href="logout.html" target="_parent"><font color="#ff0000">退出登陆</font></a> <div id="stylevalue" style="visibility:hidden"></div></td>
        </tr>
    </table></td>
    <td width="7" background="images/ht_pic1_r3_c3.gif">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td height="11" colspan="3"><img src="images/ht_pic1_r4_c1.gif" width="207" height="11"></td>
  </tr>
</table>
</body>
</html>
