<html>
<NOSCRIPT> 
<IFRAME src="Draw_pic.asp"> </IFRAME> 
</NOSCRIPT>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>ͼ������</title>
<SCRIPT>
function switchSysBar(){
if (document.all("switchPoint").innerText==3){
document.all("switchPoint").innerText=4;
document.all("frmTitle").style.display="none";
}else{
document.all("switchPoint").innerText=3;
document.all("frmTitle").style.display="";
}}
</SCRIPT>
</head>
<BODY scroll=no style="MARGIN: 0px" oncontextmenu="return false">
<TABLE border=0 cellPadding=0 cellSpacing=0 height=100% width=100%>
  <TBODY>
    <TR>
	  <TD align=middle id=frmTitle noWrap vAlign=center>
	  <IFRAME frameBorder=0 name=window_left scrolling="yes" src=memberClass_List.html  style="HEIGHT:100%;VISIBILITY:inherit;WIDTH:200px;Z-INDEX:2" target="main">
	  </IFRAME>
      <TD bgColor=#CCCCCC>
       <TABLE width="2" height=100% border=0 cellPadding=1 cellSpacing=1 bgColor=#CCCCCC>
         <TBODY>
		  <tr>
		   <TD onclick=switchSysBar() style="HEIGHT:100%;" bgColor=#CCCCCC>
		   <font style="COLOR:ff0000;CURSOR:hand;FONT-FAMILY:Webdings;FONT-SIZE:9pt">
		   <SPAN id=switchPoint title=����/��������>3</SPAN></font>
         </TBODY>
		</TABLE>
      </TD>
       <TD style="WIDTH:100%">
	   <IFRAME frameBorder=0 name=window_main scrolling="auto" src="member_temp.html" style="HEIGHT:100%;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:1"></IFRAME>
    </TR>
	 </TBODY>
	</TABLE>
</body></html>

 