<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>产品分类列表</title></head>
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
              <td width="232" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">产品分类列表</font></td>
              <form name="form1" method="post" action="proClass_managelist.html">
                <td width="1016" bgcolor="#FFFFFF"><div align="right"><a href="proClass_add.html?areaid={{$area->w_id}}">添加产品顶层分类</a>&nbsp;</div></td>
              </form>
            </tr>
            <tr>
              <td height="1" bgcolor="#A24E12"></td>
              <td height="1" bgcolor="#009999"></td>
            </tr>
          </table>
          <table width="700" border="0" cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="11">&nbsp;</td>
            </tr>
            <tr> 
              <td width="42" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
              <td width="392" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">分类名称</font></td>
              <td width="120" bgcolor="#999999">&nbsp;<font color="#FFFFFF">添加分类</font></td>
              <td width="49" bgcolor="#999999">&nbsp;<font color="#FFFFFF">排序</font></td>
              <td width="45" align="center" bgcolor="#999999"><div align="center"><font color="#FFFFFF">状态</font></div></td>
              <td width="23" bgcolor="#999999"><div align="center"><font color="#FFFFFF">改</font></div></td>
              <td width="21" bgcolor="#999999"><div align="center"><font color="#FFFFFF">删</font></div></td>
            </tr>
           <?php $no1 = 1 ?>
             @foreach($classes as $class)
           @if(count(explode('-',$class->abs)) == 2)
            <tr> 
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;<font color="#993300">{{$no1++}}、</font></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;{{$class->l_name}}</td>
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="proClass_add.html?areaid={{$area->w_id}}&l_fid={{$class->l_id}}&page={{$page}}"><font color="#990000">添加二级分类</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;{{$class->l_sort}}</td>
              <td height="18" align="center" valign="bottom" bgcolor="F1F0F1"><div align="center">{{$class->l_views}}</div></td>
              <td align="center" valign="bottom" bgcolor="F1F0F1"><div align="center"><a href="proClass_modi.html?areaid={{$area->w_id}}&w_id={{$class->l_id}}&page={{$page}}">改</a></div></td>
              <td height="18" align="center" valign="bottom" bgcolor="F1F0F1"><div align="center"><a href="proClass_del.html?areaid={{$area->w_id}}&w_id={{$class->l_id}}&l_classpath={{$class->l_classpath}}&page={{$page}}">删</a></div></td>
            </tr>
            @endif
            @if(count(explode('-',$class->abs)) == 3)
            <tr>
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;</td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<font color="#990000">■ {{$class->l_name}}</font></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="proClass_add.html?areaid={{$area->w_id}}&l_fid={{$class->l_id}}&page={{$page}}"><font color="#006600">添加三级分类</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;{{$class->l_sort}}</td>
              <td height="18" align="center" valign="bottom" bgcolor="F1F0F1">{{$class->l_views}}</td>
              <td align="center" valign="bottom" bgcolor="F1F0F1"><a href="proClass_modi.html?areaid={{$area->w_id}}&w_id={{$class->l_id}}&page={{$page}}">改</a></td>
              <td height="18" align="center" valign="bottom" bgcolor="F1F0F1"><a href="proClass_del.html?areaid={{$area->w_id}}&w_id={{$class->l_id}}&l_classpath={{$class->l_classpath}}&page={{$page}}">删</a></td>
            </tr>
            @endif
            @if(count(explode('-',$class->abs)) == 4)
            <tr>
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;</td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;&nbsp;&nbsp; <font color="#006600">■ {{$class->l_name}}</font></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="proClass_add.html?areaid={{$area->w_id}}&l_fid={{$class->l_id}}&page={{$page}}&type=additional&additional_fid=0"><font color="#0000FF">添加辅助一级分类</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;{{$class->l_sort}}</td>
              <td height="18" align="center" valign="bottom" bgcolor="F1F0F1">{{$class->l_views}}</td>
              <td align="center" valign="bottom" bgcolor="F1F0F1"><a href="proClass_modi.html?areaid={{$area->w_id}}&w_id={{$class->l_id}}&page={{$page}}">改</a></td>
                                                                         <td height="18" align="center" valign="bottom" bgcolor="F1F0F1"><a href="proClass_del.html?areaid={{$area->w_id}}&w_id={{$class->l_id}}&l_classpath={{$class->l_classpath}}&page={{$page}}">删</a></td>
            </tr>
            
            @endif
            @if(count(explode('-',$class->abs)) == 6 )
          <tr>
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;</td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <font color="#0000FF">■ {{$class->l_name}}</font></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="proClass_add.html?areaid={{$area->w_id}}&l_fid={{$class->l_id}}&page={{$page}}&type=additional&additional_fid={{$class->l_id}}"><font color="#666600">添加辅助二级分类</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;{{$class->l_sort}}</td>
              <td height="18" align="center" valign="bottom" bgcolor="F1F0F1">{{$class->l_views}}</td>
              <td align="center" valign="bottom" bgcolor="F1F0F1"><a href="proClass_modi.html?areaid={{$area->w_id}}&w_id={{$class->l_id}}&page={{$page}}&type=additional">改</a></td>
                                                                         <td height="18" align="center" valign="bottom" bgcolor="F1F0F1"><a href="proClass_del.html?areaid={{$area->w_id}}&w_id={{$class->l_id}}&l_classpath={{$class->l_classpath}}&page={{$page}}&type=additional">删</a></td>
            </tr>
            @endif
           @if(count(explode('-',$class->abs)) == 7 )
            <tr>
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;</td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <font color="#666600">■ {{$class->l_name}}</font></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;</td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;{{$class->l_sort}}</td>
              <td height="18" align="center" valign="bottom" bgcolor="F1F0F1">{{$class->l_views}}</td>
              <td align="center" valign="bottom" bgcolor="F1F0F1"><a href="proClass_modi.html?areaid={{$area->w_id}}&w_id={{$class->l_id}}&page={{$page}}&type=additional">改</a></td>
              <td height="18" align="center" valign="bottom" bgcolor="F1F0F1"><a href="proClass_del.html?areaid={{$area->w_id}}&w_id={{$class->l_id}}&l_classpath={{$class->l_classpath}}&page={{$page}}&type=additional">删</a></td>
            </tr>
          
            @endif 
          @endforeach
           
            <tr> 
              <td height="1" colspan="11" bgcolor="#999999"></td>
            </tr>

            <tr> 
              <td height="21" colspan="11" align="right" valign="middle"></td>
            </tr>
        </table>
        <p>辅助一级分类最多十条记录，对应产品内容库中的十个字段</p></td>
    </tr>
  </table>
</div>
</body>
</html>
