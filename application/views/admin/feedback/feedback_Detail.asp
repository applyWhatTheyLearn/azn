<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
	w_id=trim(request.QueryString("w_id"))
	search="select * from w_feedback  where w_id="&w_id&"" 
	set rs=myConn.execute (search)	
	if not rs.eof then 	
	w_title=Trim(rs("w_title"))
	w_detail=Trim(rs("w_detail"))
	w_inputime=Trim(rs("w_inputime"))

	end if
	rs.close
	myconn.close
	set rs=nothing
	set myconn=nothing
	

'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>�����</title>
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
  <div align="center"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top" bgcolor="#E4E4E4"> 
          <form action="Visa_Add_Submit.asp" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#993300">&nbsp;<font color="#FFFFFF">�����</font></td>
                <td width="492" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="103" bgcolor="#FFFFFF"><div align="center"><a href="feedback_list.asp">����ǰҳ</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"><div align="right"></div></td>
              </tr>
              <tr>
                <td width="101" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1">&nbsp;����<font size="2">��</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><font color="#990000"><%= w_title %></font> [ <%= w_inputime %> ]</td>
              </tr>
              <tr>
                <td height="26" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;��ϸ���ݣ�</font></td>
                <td height="26" colspan="2" valign="top" bgcolor="F1F0F1"><%= w_detail %></td>
              </tr>
              
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="button" name="Submit3" value="����ǰҳ" onClick="location='feedback_list.asp'"></td>
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

