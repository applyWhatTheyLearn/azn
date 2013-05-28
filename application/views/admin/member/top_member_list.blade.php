<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>区域会员列表</title></head>
</html>
<html>
<head>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="230" valign="top">
          <table width="700" border="0" cellspacing="1" cellpadding="0">
            <tr> 
              <td width="134" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">区域会员列表</font></td>
              <form name="form1" method="post" action="top_member_list.html">
                <td width="471" bgcolor="#CECEB5">
                <input name="textfield" type="text" class="text" id="textfield" value="会员号">                  
                <input name="button" type="submit" class="SubmitButtom" id="button" value="搜索">                
                &nbsp;</td>
                <td width="91" align="right" bgcolor="#FFFFFF"><a href="top_member_add.html?page={{$page}}">添加区域会员</a></td>
              </form>
            </tr>
            <tr>
              <td height="1" bgcolor="#A24E12"></td>
              <td height="1" colspan="2" bgcolor="#009999"></td>
            </tr>
          </table>
          <table width="700" border="0" cellpadding="0" cellspacing="1">
            <tr>
              <td height="15" colspan="13">&nbsp;</td>
            </tr>
            <tr>
              <td width="42" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
              <td width="92" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">区域</font></td>
              <td width="101" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">会员号码</font></td>
              <td width="119" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">会员名称</font></td>
              <td width="117" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">移动电话</font></td>
              <td width="65" bgcolor="#999999">&nbsp;<font color="#FFFFFF">排序</font></td>
              <td width="60" bgcolor="#999999"><div align="center"><font color="#FFFFFF">状态</font></div></td>
              <td width="62" bgcolor="#999999"><div align="center"><font color="#FFFFFF">修改密码</font></div></td>
              <td width="32" bgcolor="#999999"><div align="center"><font color="#FFFFFF">删除</font></div></td>
            </tr>
            <?php $no = 1 ?>
            @foreach($classes->results as $class)
            <tr>
              <td valign="middle" bgcolor="F1F0F1">&nbsp;<font color="#993300">{{$no++}}、</font></td>
              <td height="18" valign="middle" bgcolor="F1F0F1">&nbsp;{{$class->areaname}}</td>
              <td height="18" valign="middle" bgcolor="F1F0F1">&nbsp;<a href="top_member_detail.html?id={{$class->meid}}&page={{$page}}" class="member_link">{{$class->cnum}}</a></td>
              <td height="18" valign="middle" bgcolor="F1F0F1"><font color="#333333" size="2">&nbsp;<a href="top_member_modi.html?id={{$class->meid}}&page={{$page}}">{{$class->username}}</a></font></td>
              <td height="18" valign="middle" bgcolor="F1F0F1">&nbsp;{{$class->mobile}}</td>
              <td height="18" valign="middle" bgcolor="F1F0F1">&nbsp;{{$class->sort}}</td>
              <td height="18" valign="middle" bgcolor="F1F0F1"><div align="center">{{$class->views}}</div></td>
              <td valign="middle" bgcolor="F1F0F1"><div align="center"><a href="top_member_pass_modi.html?id={{$class->meid}}&page={{$page}}">修改密码</a></div></td>
              <td height="18" valign="middle" bgcolor="F1F0F1"><div align="center"><a href="top_member_del.html?id={{$class->meid}}&page={{$page}}">删除</a></div></td>
            </tr>
            <tr>
              <td height="1" colspan="13" bgcolor="#999999"></td>
            </tr>
            @endforeach
            <tr>
              <td height="21" colspan="13" align="right" valign="middle">
                {{$classes->links()}}
              </td>
            </tr>
        </table></td>
    </tr>
  </table>
</div>
</body>
</html>

 
 
