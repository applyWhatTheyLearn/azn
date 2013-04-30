<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
w_id=trim(request.QueryString("w_id"))
class_id=trim(request.QueryString("class_id"))

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
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>����ļ�</title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="exponnet_file_save.asp" name="form1" enctype="multipart/form-data">
  <table width="740" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">����ļ�</font></td>
      <td width="517" height="21" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="95" bgcolor="#FFFFFF"><div align="center"><a href="exponnet_list.asp">�����б�</a></div></td>
    </tr>
    <tr>
      <td height="18" colspan="3"><div align="right"></div></td>
    </tr>
    <tr>
      <td width="124" height="1" bgcolor="#999999"></td>
      <td height="1" colspan="2" bgcolor="#999999"></td>
    </tr>
    <tr>
      <td height="30" bgcolor="F1F0F1"><font size="2">&nbsp;������ƣ�</font></td>
      <td height="30" colspan="2" bgcolor="F1F0F1"><input name="w_title" type="text" id="w_title" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td height="32" bgcolor="F1F0F1"><font size="2">&nbsp;ѡ���ļ���</font></td>
      <td colspan="2" bgcolor="F1F0F1"><input type="file" name="file1" style="width:400" class="tx1" value=""></td>
    </tr>
    <tr>
      <td height="31" bgcolor="F1F0F1"><font size="2">&nbsp;����</font></td>
      <td height="31" colspan="2" bgcolor="F1F0F1"><input name="w_sort" type="text" id="w_sort" value="0" size="20" maxlength="6">
        ע��ֻ���ǲ�����6λ�������</td>
    </tr>
    <tr>
      <td height="23" bgcolor="F1F0F1">&nbsp;��ʾ״̬��</td>
      <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;��ʾ
        <input name="w_views" type="radio" value="��ʾ" checked>
        ����ʾ
        <input type="radio" name="w_views" value="����ʾ">
      </font></td>
    </tr>
    
    <tr>
      <td height="46" bgcolor="F1F0F1">&nbsp;</td>
      <td height="46" colspan="2" bgcolor="F1F0F1"><p>
        <input type="submit" name="Submit" value="��ʼ�ϴ�">
        <input type="reset" name="reset" value="����ѡ��">
        <input type="button" name="Submit2" value="ȡ��" onClick="location='exponnet_list.asp'">
        <input type="hidden" name="w_id" value="<%=w_id%>">
        <input type="hidden" name="class_id" value="<%=class_id%>">
      </p></td>
    </tr>
    <tr>
      <td height="21" colspan="3" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
