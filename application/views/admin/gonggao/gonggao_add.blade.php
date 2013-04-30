<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>添加公告内容</title>
    <script type="text/javascript" src="../ueditor/editor_config.js"></script>
    <script type="text/javascript" src="../ueditor/editor_all.js"></script>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
</head>
</html>

<html>
<head>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top" bgcolor="#E4E4E4"> 
          <form action="gonggao_add.html" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr> 
                <td height="21" bgcolor="#993300">&nbsp;<font color="#FFFFFF">添加公告内容</font></td>
                <td width="506" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="89" bgcolor="#FFFFFF"><div align="center"><a href="gonggao_list.html?page={{$page}}">返回公告列表</a></div></td>
              </tr>
              <tr></tr>
              <tr> 
                <td width="101" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1">&nbsp;公告标题<font size="2">：</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><input name="w_title" type="text" id="w_title" size="50" maxlength="50"></td>
              </tr>
              <tr>
                <td height="309" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;公告内容：</font></td>
                <td height="309" colspan="2" valign="top" bgcolor="F1F0F1">
                  <textarea name='w_detail' id="w_detail" ></textarea>
                    <script type="text/javascript">
                        UE.getEditor('w_detail')
                    </script>
               </td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="w_sort" type="text" id="w_sort" value="0" size="25" maxlength="6"> 
                *只能是小于6位数的数字（数字越大越靠前）</td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示
                  <input name="w_views" type="radio" value="显示" checked>
                  不显示
                  <input type="radio" name="w_views" value="不显示">
                </font></td>
              </tr>
              <tr> 
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1">
         <input type="hidden" name="page" value="{{$page}}">
         <input type="submit" name="Submit" value="添加">
                <input type="button" name="Submit3" value="返回前页" onClick="location='gonggao_list.html?page={{$page}}'"></td>
              </tr>
              <tr> 
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
        </form>        </td>
    </tr>
  </table>
</body>
</html>


 