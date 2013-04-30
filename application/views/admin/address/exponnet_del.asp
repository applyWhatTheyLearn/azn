<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
		  w_helpid=trim(request.QueryString("w_helpid"))
		  w_id=trim(request.QueryString("w_id"))
		  class_id=Trim(Request.QueryString("class_id"))
		  
		  search="select w_id,w_filename,w_ext from w_address where w_id="&w_id&""
		  set rs=myConn.execute (search)
		  w_filename=Trim(rs("w_filename"))
		  w_ext=Trim(rs("w_ext"))
		  rs.close
		  set rs=nothing
		  t_picname=w_filename&"."&w_ext		  

		  
		  'ɾ���ļ�
		  Path=Request.ServerVariables("APPL_PHYSICAL_PATH") 'ȡ����������·��
		  Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
		  sMapFileName =Path&"folder\Addressbook\" & t_picname
		  'response.Write("sMapFileName="&sMapFileName )
		  If oFSO.FileExists(sMapFileName) = True Then
		  oFSO.DeleteFile(sMapFileName)
		  End If
		  Set oFSO = Nothing
		  
		  'ɾ����м�¼
		  DelPic="Delete from w_address where w_id="&w_id&""
		  myConn.execute (DelPic)		  
%>


<html>
<head>
<title>DelTableD</title>
<meta http-equiv="refresh" content="0;url=exponnet_list.asp">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>��Ϣ��ɾ��</strong></font> </p>
</div>
</body>
</html>
