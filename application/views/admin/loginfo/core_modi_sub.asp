<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
class_id=request.Form("class_id")
w_id=request.Form("w_id")
w_name=Trim(request.Form("w_name"))
w_detail=Trim(request.Form("w_detail"))
w_sort=Trim(request.Form("w_sort"))
w_views=Request("w_views")
ChackError w_name,"�������"
ChackNum w_sort,"����"
'ChackError(NetQuestion)
'response.write("LogTime="&LogTime &"<br>")
'response.write("ChanPinMC="&ChanPinMC &"<br>")
'response.write("ZongDaiJG="&ZongDaiJG &"<br>")
	updatepicname="update w_logindetail set w_name='"&w_name&"',w_detail='"&w_detail&"',w_sort='"&w_sort&"',w_views='"&w_views&"' where w_id="&w_id&""
	myConn.Execute (updatepicname)
'
%>
<meta http-equiv=refresh content="0; url=core_list.asp?class_id=<%= class_id %>">
<html>
<head>
<title>������ӳɹ�!</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
<% 
	Myconn.close
	set Rs=nothing
  	set Myconn=nothing
%>
 