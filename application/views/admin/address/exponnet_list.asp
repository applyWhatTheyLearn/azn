<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->

<%
	class_id=trim(request.QueryString("class_id"))
	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from w_address where 1=1 order by w_sort desc"
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly
		 
'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>�ļ��б�</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="230" valign="top">
          <table width="770" border="0" cellspacing="1" cellpadding="0">
            <tr> 
              <td width="138" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�ļ��б�</font></td>
              <form name="form1" method="post" action="exponnet_list.asp">
                <td width="521" bgcolor="#FFFFFF"> <div align="right"> </div></td>
                <td width="107" bgcolor="#FFFFFF"><div align="center"><a href="exponnet_add.asp">����ļ�</a></div></td>
              </form>
            </tr>
          </table>
          <% if not rs.eof then %>
          <table width="770" border="0" cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="12"><div align="right"><font color="#333333" size="2">��ҳ 
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
				'            û����ؼ�¼
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
                  <a href="exponnet_list.asp?pageno=1&class_id=<%= class_id %>"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp; 
                  <%
									  response.write("<a href='exponnet_list.asp?pageno="&intPageintNo-1&"&class_id="&class_id&"'>&lt;&lt;&lt;&lt;</a>")
								  end if
								  for i = 1 to int((intCountMax-1)/intPageMax)+1
										  if int(i) = int(intPageintNo) then
										  response.write("<font color=red>"&i&"</font> ")	
										  else
							  %>
                  <a href="exponnet_list.asp?pageno=<%=i%>&class_id=<%= class_id %>"><%=i%></a> 
                  <%
										  end if
								  next
								  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 then
									 response.write("<a href='exponnet_list.asp?pageno="&intPageintNo+1&"&class_id="&class_id&"'>&gt;&gt;&gt;&gt;</a>")
									 %>
                  &nbsp;&nbsp;<a href="exponnet_list.asp?pageno=<%=count%>&class_id=<%= class_id %>"><font color="#333333">βҳ</font></a> 
                  <%
								  end if
							 end if
				
							%>
                  <font color="#333333">&gt;</font></font> </div></td>
            </tr>
            <tr> 
              <td width="49" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">���</font></td>
              <td width="300" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;�������</font></td>
              <td width="146" bgcolor="#999999">&nbsp;<font color="#FFFFFF">����ʱ��</font></td>
              <td width="72" bgcolor="#999999">&nbsp;<font color="#FFFFFF">��С</font></td>
              <td width="70" bgcolor="#999999">&nbsp;<font color="#FFFFFF">����</font></td>
              <td width="57" bgcolor="#999999"><div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">״̬</font></div></td>
              <td width="33" bgcolor="#999999"><div align="center"><font color="#FFFFFF">�޸�</font></div></td>
              <td width="34" bgcolor="#999999"><div align="center"><font color="#FFFFFF">ɾ��</font></div></td>
            </tr>
            <%
						 dim num 
						 num=1 
						 do while (not rs.eof) and (intNo<=intPageMax) 
						 w_id=Trim(Rs("w_id"))
						 w_title=Trim(Rs("w_title"))
						 w_filename=Trim(Rs("w_filename"))
						 w_ext=Trim(Rs("w_ext"))
						 w_filesize=Trim(Rs("w_filesize"))
						 w_datetime=Trim(Rs("w_datetime"))
						 w_sort=Trim(Rs("w_sort"))
                         Views=Trim(rs("w_Views"))
						 
						 'Response.Write("OpenView="&OpenView )
						 'Response.Write("SelectColor="&SelectColor &"<br>")
						%>
            <tr> 
              <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font color="#993300"><%=Num%></font></font></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<a href="../../folder/downloadfile/<%=w_filename%>.<%=w_ext%>"><%=w_title%></a></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<%= w_datetime %></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<%= w_filesize %></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<%= w_sort %></td>
              <td bgcolor="F1F0F1"> 
              <div align="center"><font color="<%= SelectColor %>"><%=Views%></font></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="exponnet_Modi.asp?w_id=<%=w_id%>"><font size="2">�޸�</font></a></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="exponnet_del.asp?w_id=<%=w_id%>"> 
                  ɾ��</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="12" bgcolor="#999999"></td>
            </tr>
            <%
					Num=Num+1
					intNo = intNo +1						
					rs.movenext
					loop
					%>
            <tr> 
              <td height="21" colspan="12" valign="top"><font color="#333333" size="2">��ҳ 
                &lt;</font><font size="2"> 
                <%
	       if intCountMax > 0 then
		          if intPageintNo > 1 then
				   %>
                <a href="exponnet_list.asp?pageno=1&class_id=<%= class_id %>"><font color="#333333">��ҳ</font></a> 
                &nbsp;&nbsp; 
                <%
			          response.write("<a href='exponnet_list.asp?pageno="&intPageintNo-1&"&class_id="&class_id&"'>&lt;&lt;&lt;&lt;</a>")
		          end if
		          for i = 1 to int((intCountMax-1)/intPageMax)+1
			              if int(i) = int(intPageintNo) then
				          response.write("<font color=red>"&i&"</font> ")	
			              else
              		%>
                <a href="exponnet_list.asp?pageno=<%=i%>&class_id=<%= class_id %>"><%=i%></a> 
                <%
			              end if
		          next
		          if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 then
			         response.write("<a href='exponnet_list.asp?pageno="&intPageintNo+1&"&class_id="&class_id&"'>&gt;&gt;&gt;&gt;</a>")
					  %>
                &nbsp;&nbsp;<a href="exponnet_list.asp?pageno=<%=count%>&class_id=<%= class_id %>"><font color="#333333">βҳ</font></a> 
                <%
		          end if
	         end if
			%>
                <font color="#333333">&gt;</font></font></td>
            </tr>
          </table>
<% else %>
          <table width="770" height="69" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td bgcolor="#FFFFFF"><div align="center"><a href="exponnet_add.asp">�������ݣ��������Ϸ������������������</a></div></td>
            </tr>
          </table>
          <% end if %>
        </td>
    </tr>
  </table>
</div>
</body>
</html>
