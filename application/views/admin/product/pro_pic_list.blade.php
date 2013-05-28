<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/css.css" rel="stylesheet" type="text/css">
    <title>商品图片列表</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
        <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
        <td height="230" valign="top">

            <table width="700" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                    <td height="21">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td width="133" height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">商品图片列表</font></td>
                    <td width="538" bgcolor="#FFFFCC">&nbsp;所属产品：[ {{$className}} ]</td>
                    <td width="65" bgcolor="#FFFFCC"><div align="center"><a href="pro_pic_add.html?classname={{$className}}&classid={{$classid}}&page={{$page}}">添加图片</a></div></td>
                </tr>
            </table>
            <table width="700" border="0" align="center"  cellpadding="0" cellspacing="1">
                <tr>
                    <td height="15" colspan="11"><div align="right"></div></td>
                </tr>
                <tr>
                    <td width="36" height="19" bgcolor="#999966">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
                    <td width="90" bgcolor="#999966"><font color="#FFFFFF" size="2">&nbsp;图片</font></td>
                    <td width="364" bgcolor="#999966">&nbsp;</td>
                    <td width="70" bgcolor="#999966">
                        <div align="center"><font color="#FFFFFF">排序</font> </div></td>
                    <td width="45" bgcolor="#999966"><div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">状态</font></div></td>
                    <td width="39" bgcolor="#999966"><div align="center"><font color="#FFFFFF">修改</font></div></td>
                    <td width="48" bgcolor="#999966"><div align="center"><font color="#FFFFFF">删除</font></div></td>
                </tr>
                <?php $no = 1 ?>
                @foreach($pics->results as $pic)
                <tr>
                    <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;{{$no++}}、</font></td>
                    <td height="18" bgcolor="F1F0F1">&nbsp;<a href="../uploads/{{$pic->l_pic}}.{{$pic->l_ext}}" target="_blank"><img src="../uploads/{{$pic->l_pic}}.{{$pic->l_ext}}" alt="" name="qas" height="30" border="0"></a></td>
                    <td height="18" bgcolor="F1F0F1">&nbsp;{{$pic->l_title}}</td>
                    <td bgcolor="F1F0F1"><div align="center">{{$pic->l_sort}}</td>
                    <td bgcolor="F1F0F1">
                        <div align="center">{{$pic->l_views}}</div></td>
                        <td bgcolor="F1F0F1"> <div align="center"><a href="pro_pic_modi.html?l_id={{$pic->l_id}}&className={{$className}}&classid={{$pic->l_productid}}&page={{$page}}"><font size="2">修改</font></a></div></td>
                    <td bgcolor="F1F0F1"> <div align="center"><a href="pro_pic_del.html?l_id={{$pic->l_id}}&className={{$className}}&classid={{$pic->l_productid}}&page={{$page}}">删除</a></div></td>
                </tr>
                <tr>
                    <td height="1" colspan="11" bgcolor="#999999"></td>
                </tr>
                @endforeach
                <tr>
                    <td height="21" colspan="11" align="right" valign="top">
                  {{$pics->links()}}
                    </td>
                </tr>
            </table></td>
    </tr>
</table>

</body>
</html>
