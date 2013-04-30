<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
	w_id=Trim(Request.QueryString("w_id"))
	class_id=Trim(Request.QueryString("class_id"))
	
	search="select w_id,w_classname from w_loginfo where w_id="&class_id&""
	'response.Write("search="&search)
	set rs=myConn.execute (search)
	w_classname=Trim(rs("w_classname"))
	rs.close	
	
	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from w_logindetail where w_id="&w_id&""
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly
	w_name=Trim(rs("w_name"))
	w_detail=Trim(rs("w_detail"))
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
<title></title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top"> 
            <table width="770" border="0" cellspacing="1" cellpadding="0">
              <tr> 
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">��ϸ��Ϣ</font></td>
                <td width="516" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="112" bgcolor="#FFFFFF"><div align="center"><a href="core_list.asp?class_id=<%= class_id %>">����<%= w_classname %>�б�</a></div></td>
              </tr>
              <tr> 
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="138" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;�������:</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><font size="2"><%= w_name%></font></td>
              </tr>
              <tr>
                <td height="29" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;���ݣ�</font></td>
                <td height="29" colspan="2" valign="top" bgcolor="F1F0F1"><%= w_detail %></td>
              </tr>
              <tr>
                <td height="6" valign="top" bgcolor="F1F0F1">&nbsp;����</td>
                <td height="6" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2"><%= w_sort %></font></td>
              </tr>
              <tr> 
                <td height="23" bgcolor="F1F0F1">&nbsp;��ʾ״̬��</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><%= w_views %></td>
              </tr>
              <tr> 
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="button" name="Submit3" value="����<%= w_classname %>�б�" onClick="location='core_List.asp?class_id=<%= class_id %>'"></td>
              </tr>
              <tr> 
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
        </td>
    </tr>
  </table>
</body>
</html>

 