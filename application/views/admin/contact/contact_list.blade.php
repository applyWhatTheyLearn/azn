<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>联系信息</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="230" valign="top">
          <table width="770" border="0" cellspacing="1" cellpadding="0">
            <tr> 
              <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">联系信息</font></td>
                <td width="514" bgcolor="#FFFFFF"> <div align="right"> </div></td>
                <td width="89" bgcolor="#FFFFFF"><div align="center"><a href="contact_add.html?page={{$page}}">添加信息</a></div></td>
            </tr>
          </table>
          <table width="770" border="0" cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="12"><div align="right"></div></td>
            </tr>
            <tr> 
              <td width="51" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
              <td width="70" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;所在地</font></td>
              <td width="286" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;地址</font></td>
              <td width="173" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;联系电话</font></td>
              <td width="61" bgcolor="#999999"><div align="center"><font color="#FFFFFF" size="2">排序</font></div></td>
              <td width="61" bgcolor="#999999"><div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">显示状态</font></div></td>
              <td width="29" bgcolor="#999999"><div align="center"><font color="#FFFFFF">修改</font></div></td>
              <td width="30" bgcolor="#999999"><div align="center"><font color="#FFFFFF">删除</font></div></td>
            </tr>
            <?php $no = 1 ?>
@foreach($contacts->results as $contact)
            <tr> 
              <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font color="#993300">{{$no++}}、</font></font></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<a href="contact_detail.html?w_id={{$contact->w_id}}&page={{$page}}">{{$contact->w_areaname}}</a></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<a href="contact_detail.html?w_id={{$contact->w_id}}&page={{$page}}">{{$contact->w_address}}</a></td>
              <td bgcolor="F1F0F1">&nbsp;{{$contact->w_postcode}}</td>
              <td bgcolor="F1F0F1"><div align="center"><font color="#333333">{{$contact->w_sort}}</font></div></td>
              <td align="center" bgcolor="#E1DFE1"><font >{{$contact->w_views}}</font></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="contact_modi.html?w_id={{$contact->w_id}}&page={{$page}}"><font size="2">修改</font></a></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="contact_del.html?w_id={{$contact->w_id}}&page={{$page}}"> 
                  删除</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="12" bgcolor="#999999"></td>
            </tr>
@endforeach
            <tr> 
              <td height="21" colspan="12" align="right" valign="top">
                {{$contacts->links()}}
              </td>
            </tr>
          </table></td>
    </tr>
  </table>
</div>
</body>
</html>

 
