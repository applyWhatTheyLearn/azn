<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->

<% 
	w_id=trim(request.QueryString("w_id"))
				
   DelInfo="Delete from w_feedback where w_id="&w_id&""
   myConn.execute (DelInfo)
   myConn.close
   set myConn=nothing
	''response.redirect("DelUserOK.asp")
%>
<html>
<head>
<title>ɾ����Ϣ</title>
<meta http-equiv="refresh" content="0;url=feedback_list.asp">
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


 