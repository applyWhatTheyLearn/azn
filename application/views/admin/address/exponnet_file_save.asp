<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<%Server.ScriptTimeOut=5000%>


<%
dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file
set upload=new upload_5xsoft ''�����ϴ�����
w_title=upload.form("w_title")
w_sort=upload.form("w_sort")
w_views=upload.form("w_views")
ChackNum w_sort,"����"

'response.write ("t_id="&t_id &"<br>")
'response.write upload.Version&"<br><br>"  ''��ʾ�ϴ���İ汾
	formPath="../../folder/downloadfile/"
	if right(formPath,1)<>"/" then formPath=formPath&"/" 

			Set oFile = upload.file("file1")
	   		If oFile.FileSize <1024 Then
	   		imageSize=oFile.FileSize & " Bytes"
			ElseIf oFile.FileSize < 1048576 Then
	   		imageSize= Round(oFile.FileSize / 1024.1) & " KB"
	   		Else
	   		imageSize= Round((oFile.FileSize/1024)/1024.1) & " MB"
	   		End If	
			
			FileExt="rar/zip/doc/pdf/xls/"
			if Instr(FileExt,oFile.FileExt)=0 then 
			 %>
			 <script language=javascript>
                     history.back()
                     alert("��ֻ���ϴ���׺Ϊ{ <%=FileExt%> }�ļ�")
             </script>
             <%
            response.end			
			end if
			
			if oFile.FileSize>=10000000 then 
			 %>
			 <script language=javascript>
                     history.back()
                     alert("�ϴ��ļ����ܳ����ܳ���10�ף���������ļ���СΪ{ <%=imageSize%> }�ѳ���������")
             </script>
             <%
            response.end
			end if		

			PicName=GetNewFileName()
			
			'ͼƬ��Ϣ���
		    AddPic="INSERT INTO w_address (w_title,w_filename,w_ext,w_filesize,w_sort,w_views) VALUES ('"&w_title&"','"&PicName&"','"&oFile.FileExt&"','"&imageSize&"','"&w_sort&"','"&w_views&"')"
		    'response.write "AddPic="&AddPic &"<br>"
			myConn.Execute (AddPic)
			oFile.SaveAs Server.mappath(formPath&PicName&"."&oFile.FileExt)
		
			
set oFile=nothing
set upload=nothing  ''ɾ��˶���




%>
<html>
<head>
<title>modipic</title>
<meta http-equiv="refresh" content="0;url=exponnet_list.asp">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>��Ϣ���޸�</strong></font> </p>
</div>
</body>
</html>
