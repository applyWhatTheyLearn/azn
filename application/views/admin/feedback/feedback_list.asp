<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->

<%
   delinfo="Delete from w_feedback_ip where  datediff(d, w_time, getdate()) > 7"
   myConn.execute (delinfo)

	
	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from w_feedback where 1=1 order by w_inputime desc"
	'response.Write("Search="&Search)
	'Search = "select * from w_hotel"
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly
		 
'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>������б�</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="230" valign="top">
          <table width="700" border="0" cellspacing="1" cellpadding="0">
            <tr> 
              <td width="134" height="21" bgcolor="#993300">&nbsp;<font color="#FFFFFF">������б�</font></td>
              <form name="form1" method="post" action="feedback_list.asp">
                <td bgcolor="#FFFFFF">&nbsp;</td>
              </form>
            </tr>
            <tr>
              <td height="1" bgcolor="#A24E12"></td>
              <td height="1" bgcolor="#009999"></td>
            </tr>
          </table>
<% if not rs.eof then %>
          <table width="700" border="0" cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="8"><div align="right"><font color="#333333" size="2">��ҳ 
                  &lt;</font><font size="2"> 
         <%
		if request.querystring("pageno")<=0 then
		pageno=1
		else
		pageno=request.querystring("pageno")
		end if	
						 
		intPageMax = 25 'ÿҳ�����ʾintPageMax����¼
		intPageintNo = 1
		if request.querystring("pageno") <= 0 then
		intPageintNo = 1
		else
		intPageintNo = request.querystring("pageno")
		end if
		intNo = 1
		intCountMax = rs.recordcount
		if intCountMax <= 0 then
		'   û����ؼ�¼
		 intPageintNo = 1
		 end if
		 if (intPageintNo * intPageMax > intCountMax) then
		 intPageintNo = int(intCountMax / intPageMax) + 1
		 end if
		 rs.move (intPageintNo-1)*intPageMax
							 
		 dim count
		  count=rs.pagecount
									  
		 if intCountMax > 0 then
		  if intPageintNo > 1 then
		 %>
                  <a href="feedback_list.asp?pageno=1&w_classid=<%= w_classid %>"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp; 
          <%
				  response.write("<a href='feedback_list.asp?pageno="&intPageintNo-1&"&w_classid="&w_classid&"'>&lt;&lt;&lt;&lt;</a>")
				  end if
				  for i = 1 to int((intCountMax-1)/intPageMax)+1
					  if int(i) = int(intPageintNo) then
					  response.write("<font color=red>"&i&"</font> ")	
					  else
		  %>
                 <a href="feedback_list.asp?pageno=<%=i%>&w_classid=<%= w_classid %>"><%=i%></a> 
          <%
					  end if
				  next
				  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 then
					 response.write("<a href='feedback_list.asp?pageno="&intPageintNo+1&"&w_classid="&w_classid&"'>&gt;&gt;&gt;&gt;</a>")
		 %>
                  &nbsp;&nbsp;<a href="feedback_list.asp?pageno=<%=count%>&w_classid=<%= w_classid %>"><font color="#333333">βҳ</font></a> 
                  <%
				  end if
			 end if
				
		%>
                  <font color="#333333">&gt;</font></font> </div></td>
            </tr>
            <tr> 
              <td width="41" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">���</font></td>
              <td width="436" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">����</font></td>
              <td width="178" bgcolor="#999999">&nbsp;<font color="#FFFFFF">�ύʱ��</font></td>
              <td width="40" bgcolor="#999999"><div align="center"><font color="#FFFFFF">ɾ��</font></div></td>
            </tr>
            <%
			dim num 
		 	num=1 
			do while (not rs.eof) and (intNo<=intPageMax) 
			w_id=Trim(Rs("w_id"))
			w_title=Trim(Rs("w_title"))
			w_inputime=Trim(Rs("w_inputime"))


			%>
            <tr> 
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="#" title="�ļ���ƣ�<%= w_filename %>"><font color="#993300"><%=Num%>��</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="feedback_Detail.asp?w_id=<%= w_id %>&w_classid=<%= w_classid %>" ><font color="#990000"><%=w_title%></font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<%= w_inputime %></td>
              <td valign="bottom" bgcolor="F1F0F1"> <div align="center"><a href="feedback_del.asp?w_id=<%=w_id%>"> 
                  ɾ��</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="8" bgcolor="#999999"></td>
            </tr>
            <%
					Num=Num+1
					intNo = intNo +1						
					rs.movenext
					loop
					%>
            <tr> 
              <td height="21" colspan="8" valign="top"><font color="#333333" size="2">��ҳ 
                &lt;</font><font size="2"> 
                <%
	       if intCountMax > 0 then
		          if intPageintNo > 1 then
				   %>
                <a href="feedback_list.asp?pageno=1&w_classid=<%= w_classid %>"><font color="#333333">��ҳ</font></a> 
                &nbsp;&nbsp; 
                <%
			          response.write("<a href='feedback_list.asp?pageno="&intPageintNo-1&"&w_classid="&w_classid&"'>&lt;&lt;&lt;&lt;</a>")
		          end if
		          for i = 1 to int((intCountMax-1)/intPageMax)+1
			              if int(i) = int(intPageintNo) then
				          response.write("<font color=red>"&i&"</font> ")	
			              else
              		%>
                <a href="feedback_list.asp?pageno=<%=i%>&w_classid=<%= w_classid %>"><%=i%></a> 
                <%
			              end if
		          next
		          if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 then
			         response.write("<a href='feedback_list.asp?pageno="&intPageintNo+1&"&w_classid="&w_classid&"'>&gt;&gt;&gt;&gt;</a>")
					  %>
                &nbsp;&nbsp;<a href="feedback_list.asp?pageno=<%=count%>&w_classid=<%= w_classid %>"><font color="#333333">βҳ</font></a> 
                <%
		          end if
	         end if
			%>
                <font color="#333333">&gt;</font></font></td>
            </tr>
        </table>
<% else %>
          <table width="700" height="69" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td bgcolor="#FFFFFF"><div align="center">
                <div align="center">�����������</div>
                <a href="help_add.asp?w_classid=<%= w_classid %>"></a></div></td>
            </tr>
          </table>
          <% end if %>
      </td>
    </tr>
  </table>
</div>
</body>
</html>
<%
	rs.close
	myconn.close
	set rs=nothing
	set myconn=nothing
'call comate(w_classid) '��ɺ������ҳ��
%>
 
 