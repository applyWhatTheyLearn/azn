
<html>
<head>
<title>管理登陆</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="center">
  <form action="login" method="post" name="form1" target="_self">
    <p>
     @if (Session::has('login_errors'))
     <font color="#FF0000" size="2">用户名或密码错误</font>
     @endif
    </p>
    <p>用户名： 
      <input name="username" type="text" id="username" size="15" maxlength="15">
      密码： 
      <input name="password" type="password" id="password" size="15" maxlength="20">
    </p>
    <p> 
      <input type="submit" name="Submit" value="登陆">
      <input type="reset" name="Submit2" value="重置">
    </p>
  </form>
</div>
</body>
</html>
