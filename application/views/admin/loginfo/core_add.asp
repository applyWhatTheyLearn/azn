<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
	class_id=trim(request.QueryString("class_id"))
	search="select w_id,w_classname from w_loginfo where w_id="&class_id&""
	'response.Write("search="&search)
	set rs=myConn.execute (search)
	w_classname=Trim(rs("w_classname"))
	rs.close
%>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>��ӳ�Ա</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top" bgcolor="#E4E4E4"> 
          <form action="core_add_sub.asp" method="post" name="sample" id="sample">
            <table width="770" border="0" cellspacing="1" cellpadding="0">
              <tr> 
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">���<%= w_classname %>��Ա</font></td>
                <td width="487" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="150" bgcolor="#FFFFFF"><div align="right"><a href="core_list.asp?class_id=<%= class_id %>">����<%= w_classname %>�б�</a>&nbsp;</div></td>
              </tr>
              <tr> 
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="129" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;���⣺</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><input name="w_name" type="text" id="w_name" size="50" maxlength="50">
                  <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="29" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;���ݣ�</font></td>
                <td height="29" colspan="2" valign="top" bgcolor="F1F0F1"><iframe ID="eWebEditor1" src="../../editor/ewebeditor.asp?id=w_detail&style=standard1" frameborder="0" scrolling="no" width="100%" HEIGHT="200"></iframe>
                  <textarea name="w_detail" style="display:none" rows="1" cols="20"></textarea></td>
              </tr>
              <tr> 
                <td height="21" bgcolor="F1F0F1"><font size="2">&nbsp;����</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="w_sort" type="text" id="w_sort" value="0" size="20" maxlength="6"></td>
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
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="���">
                <input type="button" name="Submit3" value="����<%= w_classname %>�б�" onClick="location='core_list.asp?class_id=<%= class_id %>'">
                <input name="class_id" type="hidden" id="class_id" value="<%= class_id %>"></td>
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

 