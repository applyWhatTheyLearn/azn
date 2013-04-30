<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->

<% 
  w_id=Trim(Request.QueryString("w_id"))
  class_id=Trim(Request.QueryString("class_id"))
	'Response.Write("class_id="&class_id &"<br>")

   DelInfo="Delete from w_logindetail where w_id="&w_id&""
   myConn.execute (DelInfo)
		  
   myConn.close
   set myConn=nothing		  	  

	''response.redirect("DelUserOK.asp")
	'Response.Write("class_id="&class_id &"<br>")
%>
<html>
<head>
<title>ɾ��˾��Ϣ</title>
<meta http-equiv="refresh" content="0;url=core_list.asp?class_id=<%=class_id%>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>


 