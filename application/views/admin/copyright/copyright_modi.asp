<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from w_copyright"
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly
	w_companyname=Trim(rs("w_companyname"))
    w_copyright=Trim(rs("w_copyright"))
    w_tongji=Trim(rs("w_tongji"))
	w_beiannum=Trim(rs("w_beiannum"))

	
	Select Case Views
	   Case "��ʾ"
	   View1="checked"
	   Case "����ʾ"
	   View2="checked"
	End Select	
	
'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>��Ϣ�޸�</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top"> 
          <form action="copyright_modi_sub.asp" method="post" name="sample" id="sample">
            <table width="770" border="0" cellspacing="1" cellpadding="0">
              <tr> 
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�޸ı�����Ϣ</font></td>
                <td width="505" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="107" bgcolor="#FFFFFF"><div align="center"><a href="contact_List.asp?class_id=<%= class_id %>">����ǰҳ</a></div></td>
              </tr>
              <tr> 
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="27" bgcolor="F1F0F1"><font size="2">&nbsp;��˾��ƣ�</font></td>
                <td height="27" colspan="2" bgcolor="F1F0F1"><font size="2">
                  <input name="w_companyname" type="text" id="w_companyname" value="<%= w_companyname %>" size="50" maxlength="50">
                </font></td>
              </tr>
              <tr> 
                <td height="27" bgcolor="F1F0F1"><font size="2">&nbsp;Copyright��Ϣ��</font></td>
                <td height="27" colspan="2" bgcolor="F1F0F1"><font size="2">
                  <input name="w_copyright" type="text" id="w_copyright" value="<%= w_copyright%>" size="50" maxlength="50">
                </font></td>
              </tr>
              <tr>
                <td rowspan="2" valign="top" bgcolor="F1F0F1">&nbsp;ͳ����Ϣ��</td>
                <td height="22" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">
                  <textarea name="w_tongji" cols="50" rows="5" id="w_tongji"><%= w_tongji%></textarea>
                </font></td>
              </tr>
              <tr>
                <td height="27" colspan="2" bgcolor="F1F0F1"><font size="2">�˴���ճ������ͳ�ƵĹ��ܴ��룬��Ӻ�ͳ����Ϣ����ʾ����ҳ���¶ˡ�</font></td>
              </tr>
              <tr>
                <td height="27" bgcolor="F1F0F1">&nbsp;������Ϣ��</td>
                <td height="27" colspan="2" bgcolor="F1F0F1"><font size="2">
                  <input name="w_beiannum" type="text" id="w_beiannum" value="<%= w_beiannum%>" size="50" maxlength="20">
                </font></td>
              </tr>
              <tr> 
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="�޸�"></td>
              </tr>
              <tr> 
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
          </form>
        </td>
    </tr>
  </table>

</body>
</html>

 