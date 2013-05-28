<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>修改密码</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top" bgcolor="#E4E4E4"> 
          <form action="auClass_modi_sub.asp" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr> 
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改密码</font></td>
                <td width="531" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="106" bgcolor="#FFFFFF"><div align="center"><a href="top_member_list.html?page={{$page}}">返回前页</a></div></td>
              </tr>
              <tr> 
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="129" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;会员密码:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="userpass" type="password" id="userpass" size="30" maxlength="20" value='{{$member->userpass}}'>
                  <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;确认密码:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="reuserpass" type="text" id="reuserpass" size="30" maxlength="20">
                  <font color="#FF0000">*</font></td>
              </tr>
              <tr> 
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1">
                  <input type="hidden" name="page" value="{{$page}}">
                  <input type="hidden" name="id" value="{{$member->meid}}">
                  <input type="submit" name="Submit" value="修改">
                  <input type="button" name="Submit3" value="返回前页" onClick="location='top_member_list.html?page={{$page}}'"></td>
              </tr>
              <tr> 
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
        </form>
      </td>
    </tr>
  </table>
</body>
</html>

 
