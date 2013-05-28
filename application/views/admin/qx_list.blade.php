<html>
<head>
<title>后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="./css/css.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
<!-- Hiding
  function loadtwo(page2, page3) {
     parent.leftFrame.location.href=page2;
     parent.mainFrame.location.href=page3;
}
// -->
</script>
</head>

<body bgcolor="#CCCCCC" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="207" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#009999">
    <td height="1" colspan="3"></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25" colspan="3"> &nbsp;登陆者名称：{{$username}}
      <div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/ht_pic1_r2_c1.gif" width="207" height="10"></td>
  </tr>
  <tr>
    <td width="4" background="images/ht_pic1_r3_c1.gif">&nbsp;</td>
    <td width="196" valign="top">
      <table width="180" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr>
          <td height="19" colspan="2" bgcolor="#EEEEEE">&nbsp;管理员姓名：<font color="#0000FF">{{$username}}</font></td>
        </tr>
        <tr>
          <td height="19" colspan="2" bgcolor="#EEEEEE">&nbsp;<font color="#FF0000">可操作的主模块如下：</font></td>
        </tr>
        <tr>
          <td width="17%" height="1" bgcolor="#666666"></td>
          <td width="83%" height="1" bgcolor="#666666"></td>
        </tr>
        <?php $no = 1 ?>
        
        @foreach($menus as $menu)

        <tr>
          <td height="17" bgcolor="#EEEEEE"><div align="center">{{$no++}}</div></td>
          <td bgcolor="#EEEEEE">&nbsp;<a href="qx_detail.html?id={{$menu->adminid}}&accid={{$menu->accid}}&accid_t={{$menu->accid_t}}" target="mainFrame">{{$menu->titlename}}</a></td>
        </tr>
        @endforeach
        <tr>
          <td height="1" bgcolor="#666666"></td>
          <td height="1" bgcolor="#666666"></td>
        </tr>
        <tr bgcolor="#EEEEEE">
          <td height="18">&nbsp;</td>
          <td bgcolor="#EEEEEE">&nbsp;<a href="#" onClick="loadtwo('manageleft.html','user_list.html')"><font color="#FF0000">返回前页</font></a></td>
        </tr>
      </table></td>
    <td width="7" background="images/ht_pic1_r3_c3.gif">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="16" colspan="3"><img src="images/ht_pic1_r4_c1.gif" width="207" height="11"></td>
  </tr>
</table>

  
<div align="center"><br>
  
</div>
<table width="207" border="0" align="center" cellpadding="0" cellspacing="0">
  <form name="form1" method="post" action="qx_addclass.html" >
    <tr>
      <td colspan="3"><img src="images/ht_pic1_r2_c1.gif" width="207" height="10"></td>
    </tr>
    <tr>
      <td width="10" background="images/ht_pic1_r3_c1.gif">&nbsp;</td>
      <td width="190"><div align="center">
	  	
          <table width="180" border="0" cellspacing="2" cellpadding="0">
            <tr>
              <td>添加分类：@if(Session::has('error_qx')) <font color='red'>相同模块已经添加 </font>@endif</td>
            </tr>
            <tr>
              <td><select name="titlename">
                  <option value="0" selected>选择需添加的分类</option>
                  <?php $no = 1 ?>
                  @foreach($menuClasses as $menuClass)
                  <option value="{{$menuClass->titlename_t}}">{{$no++}}、{{$menuClass->titlename_t}}</option>
                  @endforeach
                </select></td>
            </tr>
            <tr>
              <td><input name="Submit" type="submit" class="SubmitButtom" value="添加分类">
                  <input name="id" type="hidden" value="{{$id}}">
		  <input name="username" type="hidden" value="{{$username}}">
              </td>
            </tr>
          </table>
        </div></td>
      <td width="7" background="images/ht_pic1_r3_c3.gif">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><img src="images/ht_pic1_r4_c1.gif" width="207" height="11"></td>
    </tr></form>
  </table>
<div align="center">
  
</div>
<div align="center"><br>
  
    <table width="207" border="0" align="center" cellpadding="0" cellspacing="0">
	<form name="Form2" method="post" action="qx_delclass.html">
      <tr>
        <td colspan="3"><img src="images/ht_pic1_r2_c1.gif" width="207" height="10"></td>
      </tr>
      <tr>
        <td width="10" background="images/ht_pic1_r3_c1.gif">&nbsp;</td>
        <td width="190"><div align="center">
            <table width="180" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td>删除分类：</td>
              </tr>
              <tr>
                <td><select name="titlename">
                    <option value="0" selected>选择需删除的分类</option>
                    <?php $no = 1 ?>
                    @foreach($menus as $menu)
                    <option value="{{$menu->titlename}}">{{$no++}}、{{$menu->titlename}}</option>
                    @endforeach
                  </select></td>
              </tr>
              <tr>
                <td><input name="Submit2" type="submit" class="SubmitButtom" value="删除分类">
                  <input type="hidden" name="id" value="{{$id}}">
                    <input type="hidden" name="username" value="{{$username}}">
				  </td>
              </tr>
            </table>
          </div></td>
        <td width="7" background="images/ht_pic1_r3_c3.gif">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><img src="images/ht_pic1_r4_c1.gif" width="207" height="11"></td>
      </tr></form>
    </table>
  
  <br>
  <table width="207" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3"><img src="images/ht_pic1_r2_c1.gif" width="207" height="10"></td>
      </tr>
      <tr>
        <td width="10" background="images/ht_pic1_r3_c1.gif">&nbsp;</td>
        <td width="190"><div align="center">
            
          <input name="Submit22" type="button" class="QxReturn" onClick="loadtwo('manageleft.html','user_list.html)"  value="返回前页">
          </div></td>
        <td width="7" background="images/ht_pic1_r3_c3.gif">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><img src="images/ht_pic1_r4_c1.gif" width="207" height="11"></td>
      </tr>
  </table>
  <br>
</div>
</body>
</html>
