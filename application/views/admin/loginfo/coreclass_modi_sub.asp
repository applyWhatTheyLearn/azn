<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
w_id=request.Form("w_id")
w_classname=Trim(request.Form("w_classname"))
w_sort=Trim(request.Form("w_sort"))
w_views=Request("w_views")
ChackError w_classname,"�������"
ChackNum w_sort,"����"

      Set rs = Server.CreateObject("ADODB.Recordset")
      sql="select * from w_loginfo where w_id="&w_id&""
      rs.open sql,Myconn,1,3
      'rs.addnew
	  rs("w_classname")=w_classname
	  rs("w_sort")=w_sort
	  rs("w_views")=w_views
      rs.update
	  rs.close


'
%>
<script language="JavaScript">
		{
parent.topFrame.location.href= "core_top.asp"
		}
</script>
<html>
<head>
<title>������ӳɹ�!</title>
<meta http-equiv=refresh content="0; url=coreclass_list.asp">
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
 