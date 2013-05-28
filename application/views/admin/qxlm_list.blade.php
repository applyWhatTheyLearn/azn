<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <title>栏目列表</title>
    <script language="JavaScript">
        <!--
        Hiding
        function loadtwo(page2, page3) {
            parent.leftFrame.location.href = page2;
            parent.mainFrame.location.href = page3;
        }
        // -->
    </script>
    <script language="JavaScript">
        {
            parent.leftFrame.location.href = "manageleft.html"
        }
    </script>
    <style type="text/css">
        <!--
        .STYLE1 {
            color: #FFFFFF
        }

        -->
    </style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
        <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
        <td height="230" valign="top" bgcolor="#E4E4E4">
            <table width="740" border="0" cellspacing="1" cellpadding="0">
                <tr>
                    <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">网站栏目列表</font></td>
                    <form name="form1" method="post" action="QuanXian/QxLm_List.php">
                        <td width="514" bgcolor="#FFFFFF">
                            <div align="right"></div>
                        </td>
                        <td width="89" bgcolor="#FFFFFF">
                            <div align="center"><a href="qxlm_addbig.html">添加主栏目</a></div>
                        </td>
                    </form>
                </tr>
            </table>
            @if(count($menus)>0)
                <table width="740" border="0" cellpadding="0" cellspacing="1">
                    <tr>
                        <td height="15" colspan="11">
                            <div align="right">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="51" height="25" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
                        <td bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;栏目名称</font></td>
                        <td width="318" bgcolor="#999999"><span class="STYLE1">&nbsp;子栏目名称</span></td>
                        <td width="60" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">排序</font></div>
                        </td>
                        <td width="61" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">添加</font></div>
                        </td>
                        <td width="62" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">修改</font></div>
                        </td>
                        <td width="72" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">删除</font></div>
                        </td>
                    </tr>
                    <?php $no = 1 ?>
                    
                    @foreach($menus as $menu)

                    <tr bgcolor="#CCCCCC" onMouseOver="this.style.background = '#ffffff'"
                                onMouseOut="this.style.background = '#CCCCCC'">
                                <td valign="top"><font size="2">&nbsp;<font
                                            color="#993300">{{$no++}}</font></font></td>
                                <td height="22" colspan="2">&nbsp;<font
                                        color="#990000">{{$menu->titlename_t}}</font></td>
                                <td height="22">

                                  <div align="center"><font color="#993300">{{$menu->compositor_t}}</font></div>
                                </td>
                                <td>
                                    <div align="center"><a href="qxlm_addsmall.html?accid_t={{$menu->accid_t}}">添加</a>
                                    </div>
                                </td>
                                <td>
                                    <div align="center"><a href="qxlm_modi.html?accid_t={{$menu->accid_t}}"><font
                                                size="2">修改</font></a></div>
                                </td>
                                <td>
                                    <div align="center"><a
                                            href="qxlm_del.html?accid_t={{$menu->accid_t}}&fotherid_t={{$menu->accid_t}}">
                                            <删除></删除>
                                        </a></div>
                                </td>
                            </tr>
                            <?php $subno = 1 ?>
                            @foreach($menu->subMenus as $subMenu)
                                <tr bgcolor="#F1F0F1" onMouseOver="this.style.background = '#ffcc00'"
                                    onMouseOut="this.style.background = '#F1F0F1'">
                                    <td valign="top">&nbsp;</td>
                                    <td width="108" height="22"><p align="right"><font
                                                color="#003366">{{$subno++}}、</font></p></td>
                                    <td>&nbsp;<font color="#003366">{{$subMenu->titlename_t}}</font></td>
                                    <td>
                                        <div align="center"><font color="#003366">{{$subMenu->compositor_t}}</font>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center"></div>
                                    </td>
                                    <td>
                                        <div align="center"><a
                                                href="qxlm_modi.html?accid_t={{$subMenu->accid_t}}"><font
                                                    size="2">修改</font></a></div>
                                    </td>
                                    <td>
                                        <div align="center"><a
                                                href="qxlm_del.html?accid_t={{$subMenu->accid_t}}&fotherid_t={{$subMenu->fotherid_t}}">
                                                删除</a></div>
                                    </td>
                                </tr>
                            <tr>
                                <td height="1" colspan="11" bgcolor="#CCCCCC"></td>
                            </tr>
                            @endforeach
                    @endforeach
                    <tr>
                        <td height="21" colspan="11" valign="top">
                        
                        </td>
                    </tr>
                </table>
            @else
                <table width="740" height="69" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td bgcolor="#FFFFFF">
                            <div align="center"><a href="../2006manage/MemberModi.php">暂无内容，请点击右上方添加文字添加相关内容</a></div>
                        </td>
                    </tr>
                </table>
            @endif
        </td>
    </tr>
</table>

</body>
</html>
