<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>帮助中心内容列表</title>
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
              <td width="134" height="21" bgcolor="#006699">&nbsp;<font color="#FFFFFF">帮助中心内容列表</font></td>
              <form name="form1" method="post" action="help_list.html">
                <td width="494" bgcolor="#FFFFFF">&nbsp;所属分类：[ <span class="STYLE3">{{$class->w_classname}}</span> ]</td>
                <td width="68" bgcolor="#FFFFFF"><div align="center"><a href="help_add.html?page={{$page}}&w_classid={{$class->w_id}}">添加内容</a></div></td>
              </form>
            </tr>
            <tr>
              <td height="1" bgcolor="#A24E12"></td>
              <td height="1" colspan="2" bgcolor="#009999"></td>
            </tr>
          </table>
          <table width="700" border="0" cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="10"><div align="right"></div></td>
            </tr>
            <tr> 
              <td width="41" height="20" bgcolor="#006699">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
              <td width="419" bgcolor="#006699">&nbsp;<font color="#FFFFFF" size="2">标题名称</font></td>
              <td width="75" bgcolor="#006699">&nbsp;<font color="#FFFFFF">排序</font></td>
              <td width="76" bgcolor="#006699"><div align="center"><font color="#FFFFFF">状态</font></div>                <div align="center"></div></td>
              <td width="42" bgcolor="#006699"><div align="center"><font color="#FFFFFF">修改</font></div></td>
              <td width="40" bgcolor="#006699"><div align="center"><font color="#FFFFFF">删除</font></div></td>
            </tr>
         <?php $no = 1 ?>
         
         @foreach($details->results as $detail)            
            <tr> 
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="#" title="文件名称：<%= w_filename %>"><font color="#993300">{{$no++}}、</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="help_detail.html?w_id={{$detail->w_id}}&page={{$page}}&w_classid={{$class->w_id}}" ><font color="#990000">{{$detail->w_title}}</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;{{$detail->w_sort}}</td>
              <td height="18" valign="bottom" bgcolor="F1F0F1"><div align="center"><font color="#333333">{{$detail->w_views}}</font></div></td>
              <td valign="bottom" bgcolor="F1F0F1"><div align="center">
                <div align="center"><a href="help_modi.html?w_id={{$detail->w_id}}&page={{$page}}&w_classid={{$class->w_id}}"><font size="2">修改</font></a></div>
                </div></td>
              <td valign="bottom" bgcolor="F1F0F1"> <div align="center"><a href="help_del.html?w_id={{$detail->w_id}}&page={{$page}}&w_classid={{$class->w_id}}"> 
              删除</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="10" bgcolor="#999999"></td>
            </tr>
         @endforeach

            <tr> 
              <td height="21" colspan="10" align="right" valign="middle">{{$details->links()}}</td>
            </tr>
        </table></td>
    </tr>
  </table>
</div>
</body>
</html>

 
