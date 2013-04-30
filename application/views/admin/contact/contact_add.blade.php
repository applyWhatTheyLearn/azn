<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../ueditor/editor_config.js"></script>
<script type="text/javascript" src="../ueditor/editor_all.js"></script>
<title>添加联系信息</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top" bgcolor="#E4E4E4"> 
          <form action="contact_add.html" method="post" name="sample" id="sample">
            <table width="770" border="0" cellspacing="1" cellpadding="0">
              <tr> 
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">添加联系信息</font></td>
                <td width="505" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="107" bgcolor="#FFFFFF"><div align="center"><a href="contact_list.html?page={{$page}}">返回前页</a></div></td>
              </tr>
              <tr> 
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;所在地:</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><select name="w_areaname" id="w_areaname">
                  <option value="0">区域选择</option>
                  @foreach($areas as $area)
                  <option value="{{$area->w_name}}">{{$area->w_name}}</option>
                  @endforeach
                </select></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="26">&nbsp;<font size="2">公司地址:</font></td>
                  </tr>
                </table></td> 
                <td colspan="2" bgcolor="F1F0F1"><input name="w_address" type="text" id="w_address" size="50" maxlength="50"></td>
              </tr>
              
              <tr> 
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;联系电话：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="w_phone" type="text" id="w_phone" size="50" maxlength="50"></td>
              </tr>
              <tr> 
                <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;邮政编码：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="w_postcode" type="text" id="w_postcode" size="20" maxlength="6"></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;联系人：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="w_name" type="text" id="w_name" size="20" maxlength="10"></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;移动电话：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="w_phone" type="text" id="w_phone" size="50" maxlength="25"></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;固定电话：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="w_tel" type="text" id="w_phone3" size="50" maxlength="25"></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1">&nbsp;传真<font size="2">：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="w_fax" type="text" id="Fax" size="50" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1">&nbsp;Email<font size="2">：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="w_email" type="text" id="w_email" size="50" maxlength="50"></td>
              </tr>
              <tr>
                <td height="25" bgcolor="F1F0F1">&nbsp;QQ<font size="2">：</font></td>
                <td height="25" colspan="2" bgcolor="F1F0F1"><input name="w_qq" type="text" id="w_qq" size="50" maxlength="50"></td>
              </tr>
              <tr>
                <td height="25" bgcolor="F1F0F1">&nbsp;MSN<font size="2">：</font></td>
                <td height="25" colspan="2" bgcolor="F1F0F1"><input name="w_msn" type="text" id="w_msn" size="50" maxlength="50"></td>
              </tr>
              <tr>
                <td height="25" bgcolor="F1F0F1">&nbsp;微信<font size="2">：</font></td>
                <td height="25" colspan="2" bgcolor="F1F0F1"><input name="w_weixin" type="text" id="w_weixin" size="50" maxlength="10"></td>
              </tr>
              <tr>
                <td height="25" valign="top" bgcolor="F1F0F1">&nbsp;介绍<font size="2">：</font></td>
                <td height="25" colspan="2" bgcolor="F1F0F1">
        <textarea name='w_detail' id="w_detail" ></textarea>
         <script type="text/javascript">UE.getEditor('w_detail')</script>
        </td>
              </tr>
              <tr>
                <td height="25" bgcolor="F1F0F1">&nbsp;排序状态：</td>
                <td height="25" colspan="2" bgcolor="F1F0F1"><input name="w_sort" type="text" id="w_sort" value="0" size="20" maxlength="6"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示
                  <input name="w_views" type="radio" value="显示" checked>
                  不显示
                  <input type="radio" name="Views" value="不显示">
                </font></td>
              </tr>
              <tr> 
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1">
                  <input type="hidden" name="page" value="{{$page}}">
                  <input type="submit" name="Submit" value="添加">
                <input type="button" name="Submit3" value="返回前页" onClick="location='Contact_List.html?page={{$page}}'"></td>
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

 
