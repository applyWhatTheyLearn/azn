
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="./css/css.css" rel="stylesheet" type="text/css">
        <title>登录用户信息</title>
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
                        <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">登录用户信息</font></td>
                        <form name="form1" method="post" action="User_List.php">
                            <td width="514" bgcolor="#FFFFFF">&nbsp;</td>
                            <td width="89" bgcolor="#FFFFFF">&nbsp;</td>
                        </form>
                    </tr>
                </table>
                
                    <table width="740" border="0" cellpadding="0" cellspacing="1">
                        <tr>
                            <td height="15" colspan="8">
                                <div align="right"><font color="#333333" size="2"></div>
                            </td>
                        </tr>
                        <tr>
                            <td width="95" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font>
                            </td>
                            <td width="165" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;会员姓名</font></td>
                            <td width="338" bgcolor="#999999"><font color="#FFFFFF">&nbsp;建立时间</font>
                
                                <div align="center"></div>
                            </td>
                            <td width="137" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF">修改</font></div>
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
                                <div align="center"><a
                                        href="login_user_modi.html?id={{$user->id}}&page={{$page}}"><font
                                            size="2">修改</font></a></div>
                            </td>
                        </tr>
                        <tr>
                            <td height="1" colspan="8" bgcolor="#999999"></td>
                        </tr>
                @endforeach
                        
                        <tr>
                            <td height="21" colspan="8" valign="top">&nbsp;</td>
                        </tr>
                    </table>
            </td>
        </tr>
    </table>
    </body>
    </html>

