<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->

<% 
  class_id=Trim(Request("w_id"))
	'Response.Write("InfoID="&InfoID &"<br>")


   		  search="select * from w_logindetail where w_classid="&class_id&""
		  set rs=myConn.execute (search)
		  
		  do while not rs.eof
		  w_detailid=Trim(rs("w_id"))
		  
		  'ɾ����¼
		  DelPic="Delete from w_logindetail where w_id="&w_detailid&""
		  myConn.execute (DelPic)
		  'response.Write("DelPic="&DelPic  &"<br>")		  
		  rs.movenext
		  loop
		  


   DelInfo="Delete from w_loginfo where w_id="&class_id&""
   myConn.execute (DelInfo)

   rs.close
   set rs=nothing	
   myConn.close
   set myConn=nothing		  	  



	''response.redirect("DelUserOK.asp")
%>
<script language="JavaScript">
		{
parent.topFrame.location.href= "core_top.asp"
		}
</script>
<html>
<head>
<title>ɾ��˾��Ϣ</title>
<meta http-equiv="refresh" content="0;url=coreclass_list.asp">
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


 