<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>总公司公告通知列表</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
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
              <td width="134" height="21" bgcolor="#993300">&nbsp;<font color="#FFFFFF">总公司公告通知列表</font></td>
                <td width="471" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="91" bgcolor="#FFFFFF"><div align="center"><a href="gonggao_add.html?page={{$page}}">添加公告通知</a></div></td>

            </tr>
            <tr>
              <td height="1" bgcolor="#A24E12"></td>
              <td height="1" colspan="2" bgcolor="#009999"></td>
            </tr>
          </table>
          <table width="700" border="0" cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="11"><div align="right"></div></td>
            </tr>
            <tr> 
              <td width="41" height="22" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
              <td width="404" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">公告标题</font></td>
              <td width="98" bgcolor="#999999">&nbsp;<font color="#FFFFFF">发布日期</font></td>
              <td width="54" bgcolor="#999999">&nbsp;<font color="#FFFFFF">发布者</font></td>
              <td width="50" bgcolor="#999999"><div align="center"><font color="#FFFFFF">显示</font></div></td>
              <td width="24" bgcolor="#999999"><div align="center"><font color="#FFFFFF">改</font></div></td>
              <td width="21" bgcolor="#999999"><div align="center"><font color="#FFFFFF">删</font></div></td>
            </tr>
                  <?php $no=1 ?>
            @foreach($gonggaos->results as $gonggao)
            <tr> 
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="#" title="文件名称："><font color="#993300">{{$no++}}、</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="gonggao_detail.html?w_id={{$gonggao->w_id}}&page={{$page}}" ><font color="#990000">{{$gonggao->w_title}}</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;{{$gonggao->w_inputime}}</td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;总公司</td>
              <td height="18" valign="bottom" bgcolor="F1F0F1"><div align="center"><font>{{$gonggao->w_views}}</font></div></td>
              <td valign="bottom" bgcolor="F1F0F1"><div align="center">
                <div align="center"><a href="gonggao_modi.html?w_id={{$gonggao->w_id}}&page={{$page}}"><font size="2">改</font></a></div>
                <a href="gonggao_modi.html?w_id={{$gonggao->w_id}}&page={{$page}}"><font size="2"></font></a></div></td>
              <td valign="bottom" bgcolor="F1F0F1"> <div align="center"><a href="gonggao_del.html?w_id={{$gonggao->w_id}}&page={{$page}}"> 
              删</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="11" bgcolor="#999999"></td>
            </tr>
              @endforeach

            <tr> 
              <td height="21" colspan="11" align="right" valign="middle">
               {{$gonggaos->links()}}
         </td>
            </tr>
        </table></td>
    </tr>
  </table>
</div>
</body>
</html>

 
 