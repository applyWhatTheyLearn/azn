
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>视频连接列表</title>

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
              <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">视频连接列表</font></td>
                <td width="514" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="89" align="right" bgcolor="#FFFFFF"><a href="video_add.html?page={{$page}}">添加视频连接</a></td>
            </tr>
          </table>
          <table width="770" border="0" cellpadding="0" cellspacing="1">
            <tr></tr>
            <tr> 
              <td width="49" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
              <td width="501" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;连接名称</font></td>
              <td width="77" bgcolor="#999999">&nbsp;<font color="#FFFFFF">排序</font></td>
              <td width="69" bgcolor="#999999"><div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">显示状态</font></div></td>
              <td width="30" bgcolor="#999999"><div align="center"><font color="#FFFFFF">修改</font></div></td>
              <td width="37" bgcolor="#999999"><div align="center"><font color="#FFFFFF">删除</font></div></td>
            </tr>
            <?php $no = 1 ?>
             @foreach($videolinks->results as $videolink)
            <tr> 
              <td height="20" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font color="#993300">{{$no++}}、</font></font></td>
              <td height="20" bgcolor="F1F0F1">&nbsp;<a href="http://{{$videolink->w_url}}" target="_blank">{{$videolink->w_name}}</a></td>
              <td height="20" bgcolor="F1F0F1">&nbsp;{{$videolink->w_sort}}</td>
              <td height="20" bgcolor="F1F0F1"> 
              <div align="center"><font >{{$videolink->w_views}}</font></div></td>
              <td height="20" bgcolor="F1F0F1"> <div align="center"><a href="video_modi.html?w_id={{$videolink->w_id}}&page={{$page}}"><font size="2">修改</font></a></div></td>
              <td height="20" bgcolor="F1F0F1"> <div align="center"><a href="video_del.html?w_id={{$videolink->w_id}}&page={{$page}}"> 
                  删除</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="10" bgcolor="#999999"></td>
            </tr>
             @endforeach

            <tr> 
              <td height="21" colspan="10" valign="top">&nbsp;</td>
            </tr>
          </table></td>
    </tr>
  </table>
</div>
</body>
</html>
