<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/css.css" rel="stylesheet" type="text/css">
     <script type="text/javascript" src="../ueditor/editor_config.js"></script>
<script type="text/javascript" src="../ueditor/editor_all.js"></script>
    <title>商品信息</title>
    <style type="text/css">
        <!--
        .STYLE1 {color: #FF0000}
        .STYLE2 {color: #0000FF}
        -->
    </style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr bgcolor="#999999">
    <td height="1" valign="top"></td>
</tr>
<tr bgcolor="#E4E4E4">
<td height="246" valign="top" bgcolor="#E4E4E4">
<table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
<tr>
    <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">商品信息</font></td>
    <td width="552" height="21" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="74" bgcolor="#FFFFFF"><div align="center"><a href="pro_list.html?w_classid={{$w_classid}}&areaid={{$area->w_id}}&level=3&page={{$page}}">返回前页</a></div></td>
</tr>
<tr>
    <td height="18" colspan="3"> <div align="right"></div></td>
</tr>
<tr>
    <td width="110" height="1" bgcolor="#999999"></td>
    <td height="1" colspan="2" bgcolor="#999999"></td>
</tr>
<tr>
    <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;商品编号：</font></td>
    <td colspan="2" bgcolor="F1F0F1">{{$detail->l_number}}</td>
</tr>
<tr>
    <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;商品名称：</font></td>
    <td colspan="2" bgcolor="F1F0F1"><input name="l_name" type="text" id="l_name" value="{{$detail->l_name}}" size="70" maxlength="50"></td>
</tr>
<tr>
    <td height="23" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;基础信息：</font></td>
    <td height="100" colspan="2" valign="top" bgcolor="F1F0F1">{{$detail->l_basic}}</td>
</tr>
<tr>
    <td height="23" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;商品介绍：</font></td>
    <td height="100" colspan="2" valign="top" bgcolor="F1F0F1">{{$detail->l_extend}}</td>
</tr>
<tr>
    <td height="23" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;规格参数：</font></td>
    <td height="100" colspan="2" valign="top" bgcolor="F1F0F1">{{$detail->l_specifications}}</td>
</tr>
<tr>
    <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;市场价：</font></td>
    <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_price1" type="text" id="l_price1" value="{{$detail->l_price1}}" size="25" maxlength="6"></td>
</tr>
<tr>
    <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;商城价：</font></td>
    <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_price2" type="text" id="l_price2" value="{{$detail->l_price2}}" size="25" maxlength="6"></td>
</tr>
<tr>
    <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;单位：</font></td>
    <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_units" type="text" id="l_units" value="{{$detail->l_units}}" size="25" maxlength="10"></td>
</tr>
<tr>
    <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;库存数量：</font></td>
    <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_num" type="text" id="l_num" value="{{$detail->l_num}}" size="25" maxlength="6"></td>
</tr>
<tr>
    <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;排序状态：</font></td>
    <td colspan="2" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="{{$detail->l_sort}}" size="25" maxlength="6">
        *只能是小于6位数的数字（数字越大越靠前）</td>
</tr>
<tr>
    <td height="23" bgcolor="F1F0F1">&nbsp;<font size="2">新品推荐</font>：</td>
    <td height="23" colspan="2" bgcolor="F1F0F1">{{$detail->l_tuijian}}</td>
</tr>
<tr>
    <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
    <td height="23" colspan="2" bgcolor="F1F0F1">{{$detail->l_views}}</td>
</tr>
<tr>
    <td height="23" bgcolor="#FFFFCC"><strong>&nbsp;附加分类信息：</strong></td>
    <td height="23" colspan="2" bgcolor="#FFFFCC">&nbsp;</td>
</tr>
@foreach($classes as $k=>$v)
@if(stristr($k,'l_class')>-1 and !is_null($v))
<tr>
    <td height="23" valign="top" bgcolor="#FFFFCC"><strong>&nbsp;</strong>{{$k}}：</td>
    <td height="23" colspan="2" valign="top" bgcolor="#FFFFCC">
      <input name="{{$k}}" type="radio" value="{{$v}}" checked>
        {{$v}}
        
</tr>
@endif
@endforeach



<tr>
    <td height="46" bgcolor="F1F0F1">&nbsp;</td>
    <td height="46" colspan="2" bgcolor="F1F0F1">
        <input type="button" name="Submit3" value="返回前页" onClick="location='pro_list.html?w_classid={{$w_classid}}&areaid={{$area->w_id}}&level=3&page={{$page}}'"></td>
</tr>
<tr>
    <td height="21" colspan="3" valign="top">&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
