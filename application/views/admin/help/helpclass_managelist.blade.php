

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>帮助中心分类列表</title></head>
</html>
<html>
<head>
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
              <td width="232" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">帮助中心分类列表</font></td>
              <form name="form1" method="post" action="helpClass_managelist.html">
                <td width="1016" bgcolor="#FFFFFF"><div align="right"><a href="helpClass_add.html">添加分类</a>&nbsp;</div></td>
              </form>
            </tr>
            <tr>
              <td height="1" bgcolor="#A24E12"></td>
              <td height="1" bgcolor="#009999"></td>
            </tr>
          </table>
          <table width="700" border="0" cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="10">&nbsp;</td>
            </tr>
            <tr> 
              <td width="41" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
              <td width="438" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">分类名称</font></td>
              <td width="58" bgcolor="#999999">&nbsp;<font color="#FFFFFF">排序</font></td>
              <td width="57" bgcolor="#999999"><div align="center"><font color="#FFFFFF">状态</font></div></td>
              <td width="41" bgcolor="#999999"><div align="center"><font color="#FFFFFF">修改</font></div></td>
              <td width="41" bgcolor="#999999"><div align="center"><font color="#FFFFFF">删除</font></div></td>
            </tr>
     <?php $no=1 ?>
     @foreach($classes as $class )            
            <tr> 
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;<font color="#993300">{{$no++}}、</font></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<font color="#990000">{{$class->w_classname}}</font></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;{{$class->w_sort}}</td>
              <td height="18" valign="bottom" bgcolor="F1F0F1"><div align="center">{{$class->w_views}}</div></td>
              <td valign="bottom" bgcolor="F1F0F1"><div align="center"><a href="helpClass_modi.html?w_id={{$class->w_id}}">修改</a></div></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1"><div align="center"><a href="helpClass_del.html?w_id={{$class->w_id}}">删除</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="10" bgcolor="#999999"></td>
            </tr>
     @endforeach
        </table></td>
    </tr>
  </table>
</div>
</body>
</html>

 
 
