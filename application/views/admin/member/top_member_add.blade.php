<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<link href="../css/jquery-ui.css" rel="stylesheet" type="text/css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../js/datepicker-cn.js"></script>

<script type="text/javascript">
  $(function() {
    $( "#birth" ).datepicker({changeMonth: true, changeYear: true, yearRange: '1960:2020'});
  });
</script>
<title>添加区域会员</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top" bgcolor="#E4E4E4"> 
          <form action="top_member_add.html" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr> 
                <td height="25" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">添加区域会员</font></td>
                <td width="531" height="25" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="106" height="25" bgcolor="#FFFFFF"><div align="center"><a href="top_member_list.html?page={{$page}}">返回前页</a></div></td>
              </tr>
              <tr> 
                <td width="129" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="22" valign="middle" bgcolor="#F1F0F1"><font size="2" color="#993300">&nbsp;会员信息:</font></td>
                <td height="22" valign="middle" bgcolor="#F1F0F1">&nbsp;</td>
                <td height="22" valign="middle" bgcolor="#F1F0F1">&nbsp;</td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;所在区域:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF"><select name="areaid" id="areaid">
                  <option value="选择区域">选择区域</option>
                  @foreach($areas as $area)
                  <option value="{{$area->w_id}}" >{{$area->w_name}}</option>
                  @endforeach
                </select></td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;会员号:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF" class="member_id">{{$cnum}}</td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;会员名称:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="username" type="text" id="username" size="30" maxlength="20" value='{{Input::old('username')}}'>
                  <font color="#FF0000">*{{$errors->first('username')}}</font></td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;会员密码:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="userpass" type="password" id="userpass" size="30" maxlength="20" value='{{Input::old('userpass')}}'>
                <font color="#FF0000">*{{$errors->first('userpass')}}</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;确认密码:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="userpass_confirmation" type="password" id="userpass_confirmation " size="30" maxlength="20">
                  <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;性别:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="sex" type="radio" id="sex" value="男" checked>
                男
                  <input type="radio" name="sex" id="sex" value="女">
                女</td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;出生日期:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">
                <input name="birth" type="text" id="birth" value='{{Input::old('birth')}}'/>
                </td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;身份证号:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="idcard1" type="text" id="idcard1" size="40" maxlength="20"value='{{Input::old('idcard1')}}'>
                <font color="#FF0000">*{{$errors->first('idcard1')}}</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;Email:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">
                <input name="email" type="text" id="email" size="40" maxlength="100" value='{{Input::old('email')}}'>
                <font color="#FF0000">*{{$errors->first('email')}}</font> </td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;学历:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="educational" type="text" id="educational" size="20" maxlength="25" value='{{Input::old('educational')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;现职业:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="profession1" type="text" id="profession1" size="20" maxlength="20" value='{{Input::old('profession1')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;单位名称:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="company_name" type="text" id="company_name" size="40" maxlength="100" value='{{Input::old('company_name')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;工作地:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="work_address" type="text" id="work_address" size="40" maxlength="20" value='{{Input::old('work_address')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;联系地址:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="address" type="text" id="address" size="50" maxlength="100" value='{{Input::old('address')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;现邮政编码</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="postcode1" type="text" id="postcode1" size="20" maxlength="6" value='{{Input::old('postcode1')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;固定电话</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="tel" type="text" id="tel" size="30" maxlength="50" value='{{Input::old('tel')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;移动电话</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="mobile" type="text" id="mobile" size="30" maxlength="50" value='{{Input::old('mobile')}}'>
                <font color="#FF0000">* {{$errors->first('mobile')}}</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;常用住址</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="commonly_address" type="text" id="commonly_address" size="50" maxlength="100" value='{{Input::old('commonly_address')}}'>
                省/直辖市/自治区</td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;常用住址邮编</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="postcode2" type="text" id="postcode2" size="20" maxlength="6" value='{{Input::old('postcode2')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;直系家属姓名</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="immediate_family_name" type="text" id="immediate_family_name" size="20" maxlength="16" value='{{Input::old('immediate_family_name')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;职业</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="profession2" type="text" id="profession2" size="20" maxlength="40" value='{{Input::old('profession2')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;家属身份证</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="idcard2" type="text" id="idcard2" size="40" maxlength="20" value='{{Input::old('idcard2')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;</font>MSN</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="msn" type="text" id="msn" size="40" maxlength="100" value='{{Input::old('msn')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;QQ</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="qq" type="text" id="qq" size="40" maxlength="20" value='{{Input::old('qq')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;微信帐号</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="weixin" type="text" id="weixin" size="40" maxlength="20" value='{{Input::old('weixin')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#F1F0F1"><font size="2" color="#993300">&nbsp;银行信息</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#F1F0F1">&nbsp;</td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#99CCCC"><font size="2">&nbsp;申请人结算银行</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC"><input name="clearing_bank" type="text" id="clearing_bank" size="20" maxlength="20" value='{{Input::old('clearing_bank')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#99CCCC"><font size="2">&nbsp;分行</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC"><input name="branch" type="text" id="branch" size="20" maxlength="30" value='{{Input::old('branch')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#99CCCC"><font size="2">&nbsp;户名</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC"><input name="account_name" type="text" id="account_name" size="20" maxlength="50" value='{{Input::old('account_name')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#99CCCC"><font size="2">&nbsp;帐号</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC"><input name="account_number" type="text" id="account_number" size="40" maxlength="20" value='{{Input::old('account_number')}}'></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#F1F0F1"><font size="2" color="#993300">&nbsp;其他信息</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#F1F0F1">&nbsp;</td>
              </tr>
              <tr>
                <td rowspan="2" align="right" valign="top" bgcolor="#99CC99">1、</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;您是从何渠道认识采暖平台的？</td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;网站
                  <input name="question1" type="radio" value="网站" checked>
                家人
                <input name="question1" type="radio" value="家人">
                 朋友
                <input name="question1" type="radio" value="朋友">
                 同事
                <input name="question1" type="radio" value="同事">
                 其他
                <input name="question1" type="radio" value="其他">
                
                <input name="question1_other" type="text" id="question1_other" size="20" maxlength="50" value='{{Input::old('question1_other')}}'></td>
              </tr>
              <tr>
                <td rowspan="2" align="right" valign="top" bgcolor="#99CC99">2、</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;如果从家人/朋友/同事/认识采暖平台，其是否从事采暖平台的业务？】</td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;是
                  <input name="question2" type="radio" value="是">
                否
                <input name="question2" type="radio" value="否" checked>
                </td>
              </tr>
              <tr>
                <td rowspan="4" align="right" valign="top" bgcolor="#99CC99">3、</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;您是否曾为采暖平台的ED、IHH、IBO 中的任一身份</td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;是
                  <input name="question3" type="radio" value="是">
                否
                <input name="question3" type="radio" value="否" checked>
                </td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;原身份编码：
                  <input name="question3_cnum" type="text" id="question3_cnum" size="20" maxlength="20">
失效日期：
<input name="question3_date" type="text" id="question3_date" size="20" maxlength="25" value='{{Input::old('question3_date')}}'></td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;原因：
                  <input name="question3_reason" type="text" id="question3_reason" size="50" maxlength="100" value='{{Input::old('question3_reason')}}'></td>
              </tr>
              <tr> 
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;排序：</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="sort" type="text" id="sort" value='{{Input::old('sort')}}' size="20" maxlength="6"></td>
              </tr>
              <tr>
                <td height="23" valign="middle" bgcolor="#C8E3FF">&nbsp;显示状态：</td>
                <td height="23" colspan="2" valign="middle" bgcolor="#C8E3FF"><font size="2"> &nbsp;显示
                  <input name="views" type="radio" value="显示" checked>
                  不显示
                  <input type="radio" name="views" value="不显示">
                </font></td>
              </tr>
              <tr> 
                <td height="46" valign="middle" bgcolor="#C8E3FF">&nbsp;</td>
                <td height="46" colspan="2" valign="middle" bgcolor="#C8E3FF">
                  <input type="hidden" name="page" value="{{$page}}">
                  <input type="hidden" name="cnum" value="{{$cnum}}">
                  <input type="submit" name="Submit" value="添加">
                  <input type="button" name="Submit3" value="返回前页" onClick="location='top_member_list.html?page={{$page}}'"></td>
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

 
