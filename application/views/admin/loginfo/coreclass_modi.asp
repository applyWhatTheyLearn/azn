<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
	w_id=Trim(Request.QueryString("w_id"))
	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from w_loginfo where w_id="&w_id&""
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly
	w_classname=Trim(rs("w_classname"))
    w_sort=Trim(rs("w_sort"))
    w_views=Trim(rs("w_views"))

	
	Select Case w_views
	   Case "��ʾ"
	   View1="checked"
	   Case "����ʾ"
	   View2="checked"
	End Select	
	
'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>�޸ķ���</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top"> 
          <form action="coreclass_modi_sub.asp" method="post" name="sample" id="sample">
            <table width="770" border="0" cellspacing="1" cellpadding="0">
              <tr> 
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�޸ķ���</font></td>
                <td width="505" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="107" bgcolor="#FFFFFF"><div align="center"><a href="coreclass_list.asp">����ǰҳ</a></div></td>
              </tr>
              <tr> 
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;�������:</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><font size="2">
                  <input name="w_classname" type="text" id="w_classname" value="<%= w_classname%>" size="30" maxlength="30">
                </font></td>
              </tr>
              <tr>
                <td height="6" valign="top" bgcolor="F1F0F1">&nbsp;����</td>
                <td height="6" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">
                  <input name="w_sort" type="text" id="w_sort" value="<%= w_sort %>" size="20" maxlength="6">
                </font></td>
              </tr>
              <tr> 
                <td height="23" bgcolor="F1F0F1">&nbsp;��ʾ״̬��</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;��ʾ 
                  <input name="w_views" type="radio" value="��ʾ" <%= View1 %>>
                  ����ʾ 
                  <input type="radio" name="w_views" value="����ʾ" <%= View2 %>>
                  </font></td>
              </tr>
              <tr> 
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="�޸�"> 
                  <input type="button" name="Submit3" value="����ǰҳ" onClick="location='coreclass_list.asp'"> 
                  <input name="w_id" type="hidden" value="<%=w_id%>"></td>
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

 