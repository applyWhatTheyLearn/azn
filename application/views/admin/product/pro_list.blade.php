<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/css.css" rel="stylesheet" type="text/css">
    <title>商品列表</title>
    <script type="text/javascript">
        <!--
        function MM_openBrWindow(theURL,winName,features) { //v2.0
            window.open(theURL,winName,features);
        }
        //-->
    </script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
        <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
        <td height="230" valign="top">
            <table width="740" border="0" cellspacing="1" cellpadding="0">
                <tr>
                    <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">商品列表</font></td>
                    <td width="540" bgcolor="#FFFFFF"> <div align="right"></div></td>
                    <td width="63" bgcolor="#FFFFFF"><div align="center">
     @if($level == 3)<a href="pro_add.html?w_classid={{$class->l_id}}&areaid={{$area->w_id}}&page={{$page}}">添加商品</a> @endif</div></td>

                </tr>
            </table>
            <table width="740" border="0"  cellpadding="0" cellspacing="1">
                <tr>
                    <td height="15" colspan="16"><div align="right"></div></td>
                </tr>
                <tr>
                    <td width="89" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
                    <td width="385" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;商品名称</font></td>
                    <td width="37" bgcolor="#999999"><div align="center"><font color="#FFFFFF">套餐</font></div></td>
                    <td width="46" bgcolor="#999999"><div align="center"><font color="#FFFFFF" size="2">荐</font></div></td>
                    <td width="59" bgcolor="#999999">
                        <div align="center"><font color="#FFFFFF">排序</font> </div></td>
                    <td width="47" bgcolor="#999999"><div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">状态</font></div></td>
                    <td width="22" bgcolor="#999999"><div align="center"><font color="#FFFFFF" size="2">图</font></div></td>
                    <td width="22" bgcolor="#999999"><div align="center"><font color="#FFFFFF">改</font></div></td>
                    <td width="23" bgcolor="#999999"><div align="center"><font color="#FFFFFF">删</font></div></td>
                </tr>
                <?php $no = 1 ?>
                   @foreach($details->results as $detail)
                <tr>
                    <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font color="#993300">{{$no++}}</font>、</font></td>
                    <td valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="pro_detail.html?l_id={{$detail->l_id}}&page={{$page}}">{{$detail->l_name}}</a> &nbsp;</td>
                    <td align="center" valign="middle" bgcolor="F1F0F1"><a href="package.html">套餐</a></td>
                    <td bgcolor="F1F0F1"><div align="center">{{$detail->l_tuijian}}</div></td>
                    <td bgcolor="F1F0F1"><div align="center"><font>{{$detail->l_sort}}</font></div></td>
                    <td bgcolor="F1F0F1">
                        <div align="center"><font color="#ff0000">{{$detail->l_views}}</font></div></td>
                    <td bgcolor="F1F0F1"><div align="center"><a href="#" onClick="MM_openBrWindow('pro_pic_list.html?l_classid=<%=l_id%>','','scrollbars=yes,resizable=yes,width=780,height=400')">图</a></div></td>
                    <td bgcolor="F1F0F1"> <div align="center"><a href="pro_modi.html?l_id={{$detail->l_id}}&page={{$page}}"><font size="2">改</font></a></div></td>
                    <td bgcolor="F1F0F1"> <div align="center"><a href="Pro_del.html?l_id={{$detail->l_id}}&page={{$page}}">删</a></div></td>
                </tr>
                <tr>
                    <td height="1" colspan="16" bgcolor="#999999"></td>
                </tr>
               @endforeach
                <tr>
                    <td height="21" colspan="16" align="right" valign="middle"><font color="#333333" size="2">换页 <a href="#">&lt;&lt;</a></font>&nbsp;<font color="#333333" size="2"><a href="#">首页</a></font> &nbsp;&nbsp; <a href="#">1</a>、<strong><a href="#">2</a></strong>、<a href="#">3</a>、<a href="#">4</a> &nbsp;&nbsp;<font color="#333333"><a href="#">尾页</a> <a href="#">&gt;&gt;</a></font></td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
