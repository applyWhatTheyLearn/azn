<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%

w_companyname=trim(request.Form("w_companyname"))
LogTime=date()
w_tongji=request.Form("w_tongji")
address=request.Form("address")
w_copyright=request.Form("w_copyright")
w_beiannum=request.Form("w_beiannum")

	updateInfo="update w_copyright set w_companyname='"&w_companyname&"',w_tongji='"&w_tongji&"',w_copyright='"&w_copyright&"',w_beiannum='"&w_beiannum&"' where 1=1"		
	myConn.execute (updateInfo)

      'Set rs = Server.CreateObject("ADODB.Recordset")
      'sql="select * from w_copyright"
      'rs.open sql,Myconn,1,3
      'rs.addnew
	  'rs("w_companyname")=w_companyname
	  'rs("w_tongji")=w_tongji
	  'rs("w_copyright")=w_copyright
	  'rs("w_beiannum")=w_beiannum
      'rs.update
	  'rs.close
'response.Write("updateInfo="&updateInfo)

'
%>
<meta http-equiv=refresh content="0; url=copyright_modi.asp">
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
 