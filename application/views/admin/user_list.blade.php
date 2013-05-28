<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <title>用户列表</title>
    <script language="JavaScript">
        <!--
        Hiding
        function loadtwo(page2, page3) {
            parent.leftFrame.location.href = page2;
            parent.mainFrame.location.href = page3;
        }
        // -->
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
                    <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">登录用户列表</font></td>
                    <form name="form1" method="post" action="User_List.php">
                        <td width="514" bgcolor="#FFFFFF">
                            <div align="right"></div>
                        </td>
                        <td width="89" bgcolor="#FFFFFF">
                            <div align="center"><a href="user_add.html?page={{$page}}">添加用户</a></div>
                        </td>
                    </form>
                </tr>
            </table>
                <table width="740" border="0" cellpadding="0" cellspacing="1">
                    <tr>
                        <td height="15" colspan="11">
                            <div align="right">
                                {{$users->links()}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="95" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
                        <td width="165" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;会员姓名</font></td>
                        <td width="175" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;</font><font
                                color="#FFFFFF">建立时间</font>

                            <div align="center"></div>
                        </td>
                        <td width="78" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">开通状态</font></div>
                        </td>
                        <td width="64" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">权限设置</font></div>
                        </td>
                        <td width="74" bgcolor="#999999">
                            <div align="center"></div>
                            <div align="center"></div>
                            <div align="center"><font color="#FFFFFF">修改</font></div>
                        </td>
                        <td width="81" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">删除</font></div>
                        </td>
                    </tr>
                    <?php $no = 1 ?>
                    
                    @foreach($users->results as $user)

                            <tr>
                                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font
                                            color="#993300">{{$no++}}</font></font></td>
                                <td height="22" bgcolor="F1F0F1">&nbsp;{{$user->username}}</td>
                                <td bgcolor="F1F0F1"> &nbsp;{{$user->inputime}}</td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><font>{{$user->opens}}</a></font></div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><a href="#"
                                                           onClick="loadtwo('qx_list.html?username={{$user->username}}&id={{$user->id}}','managedetail.html')"><font
                                                color="#FF0000">权限设置</font></a></div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><a href="user_modi.html?id={{$user->id}}&page={{$page}}"><font
                                                size="2">修改</font></a>
                                    </div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><a href="user_del.html?id={{$user->id}}">
                                            删除</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="1" colspan="11" bgcolor="#999999"></td>
                            </tr>
                    @endforeach
                    <tr>
                        <td height="21" colspan="11" valign="top">
                            <div align="right">
                              {{$users->links()}}
                            </div>
                        </td>
                    </tr>
                </table>
            @if(count($users) == 0)
                <table width="740" height="69" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td bgcolor="#FFFFFF">
                            <div align="center"><a href="#">暂无内容，请点击右上方添加文字添加相关内容</a></div>
                        </td>
                    </tr>
                </table>
           @endif 
        </td>
    </tr>
</table>

</body>
</html>
