
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/css.css" rel="stylesheet" type="text/css">
    <title>修改分类</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
        <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
        <td height="246" valign="top" bgcolor="#E4E4E4">
            <form action="proClass_modi.html" method="post" name="sample" id="sample">
                <table width="700" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改分类</font></td>
                        <td width="531" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                        <td width="106" bgcolor="#FFFFFF"><div align="center"><a href="proClass_managelist.html?areaid={{$area->w_id}}&page={{$page}}">返回分类前页</a></div></td>
                    </tr>
                    <tr>
                        <td height="18" colspan="3"> <div align="right"></div></td>
                    </tr>
                    <tr>
                        <td width="129" height="1" bgcolor="#999999"></td>
                        <td height="1" colspan="2" bgcolor="#999999"></td>
                    </tr>
                    <tr>
                        <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;分类名称:</font></td>
                        <td height="22" colspan="2" bgcolor="F1F0F1"><input name="w_classname" type="text" id="w_classname" value="{{$class->l_name}}" size="30" maxlength="50"></td>
                    </tr>
                    <tr>
                        <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
                        <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="w_sort" type="text" id="w_sort" value="{{$class->l_sort}}" size="20" maxlength="6"></td>
                    </tr>
                    <tr>
                        <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                        <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示 <input name="w_views" type="radio" value="显示"
                @if (trim($class->l_views) == '显示' ) checked="CHECKED" @endif>不显示 <input type="radio" name="w_views" value="不显示"
                @if (trim($class->l_views) == '不显示' ) checked="CHECKED" @endif> </font></td>
                    </tr>
                    <tr>
                        <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                        <td height="46" colspan="2" bgcolor="F1F0F1">
                               <input type="hidden" name="w_id" value="{{$class->l_id}}">
                               <input type="hidden" name="page" value="{{$page}}">
                    <input type="hidden" name="areaid" value="{{$area->w_id}}">
                    <input type="hidden" name="type" value="{{$type}}">
                               <input type="submit" name="Submit" value="修改">
                            <input type="button" name="Submit3" value="返回分类前页" onClick="location='proClass_managelist.html?areaid={{$area->w_id}}&page={{$page}}'"></td>
                    </tr>
                    <tr>
                        <td height="21" colspan="3" valign="top">&nbsp;</td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
</body>
</html>

 