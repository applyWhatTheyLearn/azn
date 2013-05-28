<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="./css/css.css" rel="stylesheet" type="text/css">
<title>可操作的子模块</title>
<script language="JavaScript">
<!-- Hiding
  function loadtwo(page2, page3) {
     parent.leftFrame.location.href=page2;
     parent.mainFrame.location.href=page3;
}
// -->
</script>
<link href="css.css" rel="stylesheet" type="text/css">
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
              <td width="130" height="21" bgcolor="#009999">&nbsp;<font color="#FFFFFF">可操作的子模块</font></td>
              <form name="form1" method="post" action="../2006manage/QX_Detail.phpp">
                <td width="607" bgcolor="#FFFFFF"> <div align="right"> </div>
                  <div align="center"></div></td>
              </form>
            </tr>
          </table>
          <table width="740" border="0" cellpadding="0" cellspacing="1">
            <tr>
              <td height="15" colspan="7"><div align="right"> </div></td>
            </tr>
            <tr>
              <td width="129" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF">主模块名称：</font></td>
              <td width="608" height="20" colspan="2" bgcolor="#FFFFFF">&nbsp;<font color="#FF0000"><strong>{{$titlename}}</strong></font></td>
            </tr>
            <tr>
              <td height="22" colspan="3" bgcolor="F1F0F1">
                <div align="right">
                  <table width="100%" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                      <td width="26%" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="19"><div align="right"><font color="#003366">可操作的下属子模块名称：</font></div></td>
                          </tr>
                        </table> </td>
                      <td width="74%" bgcolor="#E0E0E0"><table width="174" border="0" cellspacing="2" cellpadding="0">
                        <?php $no = 1 ?>
                        @foreach($menus as $menu)
                          <tr>
                            <td width="170">&nbsp;{{$no++}}、{{$menu->titlename}}</td>
                          </tr>
                        @endforeach
                        </table> </td>
                    </tr>
                  </table>
                </div></td>
            </tr>
            <tr>
              <td height="1" colspan="7" bgcolor="#999999"></td>
            </tr>
            <tr>
              <td height="21" colspan="7" valign="top">&nbsp;</td>
            </tr>
          </table>
         
          <table width="740" border="0" cellspacing="1" cellpadding="0">
            <form name="AddSmallClass" method="post" action="qx_addsmallclass.html">
              <tr>
                <td width="130" height="22" bgcolor="#CCCCCC">&nbsp;<font color="#FF0000">添加子模块：</font></td>
                <td width="610"><select name="titlename">
                    <option value="0" selected>选择需添加的子模块</option>
                    <?php $no = 1 ?>
                    @foreach($menus_t as $menu_t)
                    <option value="{{$menu_t->titlename_t}}">{{$no++}}、{{$menu_t->titlename_t}}</option>
                    @endforeach
                  </select>
                  <input name="Submit" type="submit" class="SubmitButtom" value="添加可操作子模块权限">
                    <input type="hidden" name="id" value="{{$id}}">
                    <input type="hidden" name="accid" value="{{$accid}}">
                    <input type="hidden" name="accid_t" value="{{$accid_t}}">
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr></form>
            </table>
          
          <hr width="740" size="1">
          <br>
          <table width="740" border="0" cellspacing="1" cellpadding="0">
            <form name="DelSmallClass" method="post" action="qx_delsmallclass.html">
              <tr>
                <td width="130" height="22" bgcolor="#CCCCCC">&nbsp;<font color="#FF0000">删除子模块：</font></td>
                <td width="610"><select name="delSmallClassID">
                    <option value="0" selected>选择需删除的子模块</option>
                    <?php $no = 1 ?>
                    
                    @foreach($menus as $menu)

                    <option value="{{$menu->accid}}">{{$no++}}、{{$menu->titlename}}</option>
                    @endforeach
                   </select> <input name="Submit2" type="submit" class="SubmitButtom" value="删除子模块操作权限">
                   <input type="hidden" name="id" value="{{$id}}">
                     <input type="hidden" name="accid" value="{{$accid}}">
                    <input type="hidden" name="accid_t" value="{{$accid_t}}">
                  </td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
            </form>
          </table>
       </td>
    </tr>
  </table>
</body>
</html>
