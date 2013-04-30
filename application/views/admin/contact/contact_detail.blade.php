<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>联系信息</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top" bgcolor="#E4E4E4"> 
          <form action="contact_add_sub.html" method="post" name="sample" id="sample">
            <table width="770" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">联系信息</font></td>
                <td width="505" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="107" bgcolor="#FFFFFF"><div align="center"><a href="contact_list.html?page={{$page}}">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"><div align="right"></div></td>
              </tr>
              <tr>
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;所在地:</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1">{{$contact->w_areaname}}</td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="26">&nbsp;<font size="2">公司地址:</font></td>
                  </tr>
                </table></td>
                <td colspan="2" bgcolor="F1F0F1">{{$contact->w_address}}</td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;联系电话：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><font size="2">{{$contact->w_phone}}</font></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;邮政编码：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">{{$contact->w_postcode}}</font></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;联系人：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">{{$contact->w_name}}</font></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;移动电话：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><font size="2">{{$contact->w_phone}}</font></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;固定电话：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><font size="2">{{$contact->w_tel}}</font></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1">&nbsp;传真<font size="2">：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1">{{$contact->w_fax}}</td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1">&nbsp;Email<font size="2">：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1">{{$contact->w_email}}</td>
              </tr>
              <tr>
                <td height="25" bgcolor="F1F0F1">&nbsp;QQ<font size="2">：</font></td>
                <td height="25" colspan="2" bgcolor="F1F0F1">{{$contact->w_qq}}</td>
              </tr>
              <tr>
                <td height="25" bgcolor="F1F0F1">&nbsp;MSN<font size="2">：</font></td>
                <td height="25" colspan="2" bgcolor="F1F0F1">{{$contact->w_msn}}</td>
              </tr>
              <tr>
                <td height="25" bgcolor="F1F0F1">&nbsp;微信<font size="2">：</font></td>
                <td height="25" colspan="2" bgcolor="F1F0F1">{{$contact->w_weixin}}</td>
              </tr>
              <tr>
                <td height="25" valign="top" bgcolor="F1F0F1">&nbsp;介绍<font size="2">：</font></td>
                <td height="25" colspan="2" bgcolor="F1F0F1">{{$contact->w_detail}}</td>
              </tr>
              <tr>
                <td height="25" bgcolor="F1F0F1">&nbsp;排序状态：</td>
                <td height="25" colspan="2" bgcolor="F1F0F1">{{$contact->w_sort}}</td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;{{$contact->w_views}}
                </font></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="button" name="Submit3" value="返回前页" onClick="location='contact_list.html?page={{$page}}'"></td>
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

 
