<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
class_id=Trim(request.Form("class_id"))
w_name=Trim(request.Form("w_name"))
w_detail=Trim(request.Form("w_detail"))
w_sort=Trim(request.Form("w_sort"))
w_views=Request("w_views")
ChackError w_name,"�������"
ChackNum w_sort,"����"
 'ChackError(NetAnswer)


	AddDetail="INSERT INTO w_logindetail (w_name,w_detail,w_sort,w_views,w_classid) VALUES ('" &w_name& "','"&w_detail&"','" &w_sort& "','" &w_views& "','"&class_id&"')"
    myConn.Execute (AddDetail)
'
%>

<html>
<head>
<title>�޸ĳɹ�!</title>
<meta http-equiv=refresh content="0; url=core_list.asp?class_id=<%= class_id %>">
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
 