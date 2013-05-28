
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-color: #e4e4e4;
}
</style>
<title>套餐管理</title>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
 // eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  eval(targ+".location='package.html?w_classid={{$w_classid}}&l_id={{$l_id}}&areaid={{$areaid}}&page={{$page}}&top_classid="+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>
</html>
<html>
<head>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="700" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td width="232" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">套餐管理</font></td>
    <form name="form1" method="post" action="proClass_managelist.html">
      <td width="1016" bgcolor="#FFFFFF"><div align="right"><a href="pro_list.html">返回前页</a></div></td>
    </form>
  </tr>
  <tr>
    <td height="1" bgcolor="#A24E12"></td>
    <td height="1" bgcolor="#009999"></td>
  </tr>
</table>
<table width="700" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td height="155"><IFRAME frameBorder=0 name=window_main scrolling="auto" src="package_list.html?w_classid={{$w_classid}}&page={{$page}}&areaid={{$areaid}}&l_id={{$l_id}}&top_classid={{$top_classid}}" style="HEIGHT:100%;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:1"></IFRAME></td>
  </tr>
  <tr></tr>
  <tr></tr>
</table>
<form name="form2" method="post" action="">
  <table width="700" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">商品列表</font></td>
      <td bgcolor="#FFFFFF">&nbsp;商品分类：
        <select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('document',this,0)">
        <option value="#" @if($top_classid == '#')selected@endif>商品分类选择</option>
        @foreach($top_classes as $top_class)
          <option value="{{$top_class->l_id}}" @if($top_classid == $top_class->l_id)selected@endif>
          {{$top_class->l_name}}
          </option>
        @endforeach
    </select></td>
    </tr>
  </table>
  <table width="700" border="0"  cellpadding="0" cellspacing="1">
    <tr>
      <td height="5" colspan="12"></td>
    </tr>
    <tr>
      <td width="59" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
      <td width="375" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">商品名称</font></td>
      <td width="130" bgcolor="#999999">&nbsp;<font color="#FFFFFF">价格</font></td>
      <td width="76" align="center" bgcolor="#999999"><font color="#FFFFFF">排序</font></td>
      <td width="54" align="center" bgcolor="#999999"><font color="#FFFFFF">选择</font></td>
    </tr>
    <?php $no = 1 ?>
    @if($products)
    @foreach($products->results as $product)
    <tr>
      <td valign="top" bgcolor="F1F0F1">&nbsp;<font color="#993300">{{$no++}}、</font></td>
      <td valign="bottom" bgcolor="F1F0F1">&nbsp;{{$product->l_name}} &nbsp;</td>
      <td align="left" valign="middle" bgcolor="F1F0F1">&nbsp;<font color="#FF0000">￥{{$product->l_price1}} 元</font></td>
      <td bgcolor="F1F0F1"><div align="center"><font color="<%= SelectColor %>">{{$product->l_sort}}</font></div></td>
      <td bgcolor="F1F0F1"><div align="center">
      <a href="package.html?self_id={{$product->l_id}}&self_price={{$product->l_price1}}&w_classid={{$w_classid}}&l_id={{$l_id}}&areaid={{$areaid}}&page={{$page}}&top_classid={{$top_classid}}">添加</a> </div></td>
    </tr>
    <tr>
      <td height="1" colspan="12" bgcolor="#999999"></td>
    </tr>
    @endforeach
    @endif

    <tr>
      <td height="21" colspan="12" align="right" valign="middle">
        @if($products)
        {{$products->links()}}
        @endif
      </td>
    </tr>
  </table>

</form>
<p>&nbsp;</p>
</body>
</html>
