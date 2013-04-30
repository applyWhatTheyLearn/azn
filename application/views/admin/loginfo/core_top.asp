<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->

<%
set rs=myConn.execute ("select w_id,w_classname from w_loginfo where 1=1 order by w_sort desc")
itemname=""
do while not rs.eof
class_id=Trim(rs("w_id"))
w_classname=Trim(rs("w_classname"))

itemname=itemname&"<a href=core_list.asp?class_id="&class_id &" target=itemFrame ><font color=#ffffff>"&w_classname&"</font></a> <font color=#ffff00>|</font> "
'itemname=itemname&w_classname &"|"
rs.movenext
loop
rs.close
myconn.close
set rs=nothing
set myconn=nothing

%>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>��̨��Ϣ�������</title>
<style type="text/css">
<!--
body {
	background-color: #999966;
}
-->
</style></head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="14%" valign="top">&nbsp;<font color="#FFFFFF">��̨��Ϣ������ƣ�</font></td>
    <td width="86%" valign="top"><font color=#ffff00> | </font><%=itemname%> <a href="coreclass_list.asp" target="itemFrame"><font color="#FFFFFF">�� ����������ҳ�� ��</font></a></td>
  </tr>
</table>
</body>
</html>
