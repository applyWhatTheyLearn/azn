<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
	l_id=trim(request.QueryString("l_id"))

	'Set rs = myConn.execute (search)
	'if not rs.eof then product_name=Trim(rs("l_name"))	
	'rs.close
	
	search="select l_id,l_title,l_url from w_ad_pic where l_id="&l_id&""
	Set rs = myConn.execute (search)

	if not rs.eof then 
	l_id=Trim(Rs("l_id"))
	l_title=trim(rs("l_title"))
	l_url=Trim(Rs("l_url"))
	end if
	rs.close
	
	'response.Write("l_classid="&l_classid&"<br>")	
	'response.Write("l_id="&l_id&"<br>")

%>

<html>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #E4E4E4;
}
.STYLE1 {color: #0033FF}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>�޸�ͼƬ</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="Pic_modiPic_Save.asp" name="theForm" enctype="multipart/form-data"> 
  <table width="740" border="0" cellpadding="0" cellspacing="1">
    <tr></tr>
    <tr>
      <td height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">�޸�ͼƬ</font></td>
      <td width="502" height="21" bgcolor="#FFFFCC">&nbsp;</td>
      <td width="97" bgcolor="#FFFFCC"><div align="center"><a href="pic_list.html">����ͼƬ�б�</a></div></td>
    </tr>
    <tr>
      <td height="18" colspan="3">
      <div align="right"></div></td>
    </tr>
    <tr>
      <td width="137" height="1" bgcolor="#999999"></td>
      <td height="1" colspan="2" bgcolor="#999999"></td>
    </tr>
    <tr>
      <td height="32" bgcolor="F1F0F1"><font size="2">&nbsp;ѡ��ͼƬ��</font></td>
      <td colspan="2" bgcolor="F1F0F1"><input type="file" name="file1" style="width:400" class="tx1" value=""></td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1">&nbsp;</td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><span class="STYLE1">ͼƬ��С���ܳ����ܳ���200K</span></td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;��Ҫ˵����</font></td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_title" type="text" id="l_title" value="<%= l_title %>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;���ӵ�ַ��</font></td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_url" type="text" id="l_url" value="<%= l_url %>" size="50" maxlength="50">
      ��������Http://</td>
    </tr>
    
    <tr>
      <td height="16" valign="top" bgcolor="F1F0F1">&nbsp;</td>
      <td colspan="2" bgcolor="F1F0F1">&nbsp;</td>
    </tr>
    <tr>
      <td height="46" bgcolor="F1F0F1">&nbsp;</td>
      <td height="46" colspan="2" bgcolor="F1F0F1"><p>
        <input type="submit" name="Submit" value="�޸�ȷ��">
        <input type="reset" name="reset" value="����ѡ��">
        <input type="button" name="Submit2" value="ȡ��" onClick="location='pic_list.asp'">
        <input type="hidden" name="l_id" value="<%= l_id %>">
      </p></td>
    </tr>
    <tr>
      <td height="21" colspan="3" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
