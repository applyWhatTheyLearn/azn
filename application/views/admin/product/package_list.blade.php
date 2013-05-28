<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/css.css" rel="stylesheet" type="text/css">
<script src="../js/jquery-1.9.1.min.js"></script>
<title>无标题文档</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #CC9;
}
</style>
</head>

<body>

<table width="680" border="0"  cellpadding="0" cellspacing="1">
    <tr>
      <td height="20" valign="middle" bgcolor="#CCCCCC">&nbsp;<font color=#fff>序号</font></td>
      <td height="20" valign="middle" bgcolor="#CCCCCC">&nbsp;<font color=#fff>商品名称</font></td>
      <td valign="middle" bgcolor="#CCCCCC">&nbsp;<font color=#fff>价格</font></td>
      <td height="20" colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><font color=#fff>数量|</font><font color=#fff>修改</font></td>
      <td height="20" align="center" valign="middle" bgcolor="#CCCCCC"><font color=#fff>删除</font></td>
    </tr>
    <tr>
      <td height="1" colspan="6" valign="middle" bgcolor="#FFFFFF"></td>
    </tr>
    
  <?php $no = 1 ?>
  

  @foreach($package_details as $package_detail)
    <tr>
      <td width="59" height="20" valign="middle" bgcolor="F1F0F1">&nbsp;{{$no++}}、</td>
      <td width="375" height="20" valign="middle" bgcolor="F1F0F1">&nbsp;{{$package_detail->product_name}}&nbsp;
      <div align="center"></div></td>
      <td width="130" height="20" valign="middle" bgcolor="F1F0F1">&nbsp;<font color="#FF0000">￥ {{$package_detail->l_price}} 元</font></td>
      <td width="42" height="20" align="center" valign="middle" bgcolor="F1F0F1">
        <input name="textfield" type="text" class="textstyle_1" id="l_num{{$no}}" value="{{$package_detail->l_num}}" size="1" maxlength="3">
      </td>
      <td width="34" height="20" align="center" valign="middle" bgcolor="F1F0F1"><font color="<%= SelectColor %>"><a href="javascript:parent.location='package_modi.html?l_num='+$('#l_num{{$no}}').val()+'&w_classid={{$w_classid}}&detail_id={{$package_detail->l_id}}&l_id={{$l_id}}&areaid={{$areaid}}&page={{$page}}&top_classid={{$top_classid}}';">修改</a></font></td>
      <td width="33" height="20" align="center" valign="middle" bgcolor="F1F0F1"><div align="center"><a href="javascript:parent.location='package_del.html?w_classid={{$w_classid}}&detail_id={{$package_detail->l_id}}&l_id={{$l_id}}&areaid={{$areaid}}&page={{$page}}&top_classid={{$top_classid}}';">删除</a></div></td>
  </tr>
  @endforeach
   
  </table>

</body>
</html>
