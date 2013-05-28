
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../csscss.css" rel="stylesheet" type="text/css">
    <title>修改用户信息</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
        <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
        <td height="246" valign="top">
            <form name="form1" method="post" action="login_user_modi.html">
                <table width="740" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改用户信息</font></td>
                        <td width="517" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                        <td width="104" bgcolor="#FFFFFF">
                            <div align="center"><a href="login_user.html?page={{$page}}">返回前页</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="18" colspan="3">
                            <div align="right"></div>
                        </td>
                    </tr>
                    <tr>
                        <td width="115" height="22" bgcolor="#999999">
                            <div align="right"></div>
                        </td>
                        <td colspan="2" bgcolor="#999999">
                            <div align="center"></div>
                            <div align="center"></div>
                            <div align="center"></div>
                            <div align="center"></div>
                            <div align="center"></div>
                            <div align="left"></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="22" bgcolor="F1F0F1">&nbsp;用户名称：</td>
                        <td colspan="2" bgcolor="F1F0F1">
                          <input name="username" type="text" id="username"
                                 value= {{Input::old('username')?Input::old('username'):$user->username}} size="20"
                          maxlength="15"><font color="#990000">* {{$errors->first('username')}}</font></td>
                    </tr>
                    <tr>
                        <td height="22" bgcolor="F1F0F1">&nbsp;输入密码：</td>
                        <td colspan="2" bgcolor="F1F0F1">
                                <input name="password" type="password" id="password"
                                       value= {{Input::old('password')}} size="40" maxlength="15">
                                  <font color="#990000">* {{$errors->first('password')}}</font></td>
                    </tr>
                    <tr>
                        <td height="22" bgcolor="F1F0F1">&nbsp;重复密码：</td>
                        <td colspan="2" bgcolor="F1F0F1"><input name="password_confirmation" type="password" id="password_confirmation"
                                                                size="40" maxlength="15">
                            <font color="#990000">*</font></td>
                    </tr>
                    <tr>
                        <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                        <td height="46" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="修改">
                            <input type="button" name="Submit3" value="返回前页" onClick="location='login_user.html?page={{$page}}'">
                              <input type="hidden" name="id" value="{{$id}}">
                                <input type="hidden" name="page" value="{{$page}}">
                          </td>
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
