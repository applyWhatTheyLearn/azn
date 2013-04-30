

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
     <script type="text/javascript" src="../ueditor/editor_config.js"></script>
     <script type="text/javascript" src="../ueditor/editor_all.js"></script>
<title>加盟信息</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top"> 
          <form action="law_modi.html" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="20" bgcolor="#996600">&nbsp;<font color="#FFFFFF">加盟信息</font></td>
                <td height="20" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td height="18" colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="101" height="1" bgcolor="#999999"></td>
                <td height="1" bgcolor="#999999"></td>
              </tr>
              <tr>
         <textarea name='w_detail' id="w_detail" >{{$law->w_detail}}</textarea>
         <script type="text/javascript">UE.getEditor('w_detail')</script>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" bgcolor="F1F0F1">
         <input type="hidden" name="w_id" value="{{$law->w_id}}">
         <input type="submit" name="Submit" value="修改"></td>
              </tr>
              
              <tr>
                <td height="21" colspan="2" valign="top">&nbsp;</td>
              </tr>
            </table>
        </form>
       </td>
    </tr>
  </table>
</body>
</html>

 
