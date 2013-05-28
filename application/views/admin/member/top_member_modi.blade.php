<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
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
          <form action="top_member_modi.html" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr> 
                <td height="25" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改区域会员</font></td>
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
                  <option value="{{$area->w_id}}">{{$area->w_name}}</option>
                  @endforeach
                </select></td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;会员号:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF" class="member_id">{{$member->cnum}}</td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;会员名称:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="username" type="text" id="username" value="{{$member->username}}" size="30" maxlength="20">
                <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;会员密码:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="userpass" type="password" id="userpass" value="{{$member->userpass}}" size="30" maxlength="20">
                <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;确认密码:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="reuserpass" type="text" id="reuserpass" value="" size="30" maxlength="20">
                <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;性别:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="sex" type="radio" id="radio" value="男" @if($member->sex =='男')checked@endif>
                男
                  <input type="radio" name="sex" id="radio2" value="女" @if($member->sex == '女')checked@endif>
                女</td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;出生日期:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">
                  <input name="birth" type="text" id="birth" value="{{$member->birth}}"/>
                </td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;身份证号:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="idcard1" type="text" id="idcard1" value="{{$member->idcard1}}" size="40" maxlength="20">
                <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;Email:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="email" type="text" id="email" value="{{$member->email}}" size="40" maxlength="100">
                <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;学历:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="educational" type="text" id="educational" value="{{$member->educational}}" size="20" maxlength="25"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;现职业:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="profession1" type="text" id="profession1" value="{{$member->profession1}}" size="20" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;单位名称:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="company_name" type="text" id="company_name" value="{{$member->company_name}}" size="40" maxlength="100"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;工作地:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="work_address" type="text" id="work_address" value="{{$member->work_address}}" size="40" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;联系地址:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="address" type="text" id="address" value="{{$member->address}}" size="50" maxlength="100"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;现邮政编码</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="postcode1" type="text" id="postcode1" value="{{$member->postcode1}}" size="20" maxlength="6"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;固定电话</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="tel" type="text" id="tel" value="{{$member->tel}}" size="30" maxlength="50"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;移动电话</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="mobile" type="text" id="mobile" value="{{$member->mobile}}" size="30" maxlength="50">
                <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;常用住址</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="commonly_address" type="text" id="commonly_address" value="{{$member->commonly_address}}" size="50" maxlength="100">
                </td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;常用住址邮编</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="postcode2" type="text" id="postcode2" value="{{$member->postcode2}}" size="20" maxlength="6"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;直系家属姓名</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="immediate_family_name" type="text" id="immediate_family_name" value="{{$member->immediate_family_name}}" size="20" maxlength="16"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;职业</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="profession2" type="text" id="profession2" value="{{$member->profession2}}" size="20" maxlength="40"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;家属身份证</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="idcard2" type="text" id="idcard2" value="{{$member->idcard2}}" size="40" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2"></font>&nbsp;MSN</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="msn" type="text" id="msn" value="{{$member->msn}}" size="40" maxlength="100"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;QQ</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="qq" type="text" id="qq" value="{{$member->qq}}" size="40" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;微信帐号</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="weixin" type="text" id="weixin" value="{{$member->weixin}}" size="40" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#F1F0F1"><font size="2" color="#993300">&nbsp;银行信息</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#F1F0F1">&nbsp;</td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#99CCCC"><font size="2">&nbsp;申请人结算银行</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC"><input name="clearing_bank" type="text" id="clearing_bank" value="{{$member->clearing_bank}}" size="20" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#99CCCC"><font size="2">&nbsp;分行</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC"><input name="branch" type="text" id="branch" value="{{$member->branch}}" size="20" maxlength="30"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#99CCCC"><font size="2">&nbsp;户名</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC"><input name="account_name" type="text" id="account_name" value="{{$member->account_name}}" size="20" maxlength="50"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#99CCCC"><font size="2">&nbsp;帐号</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC"><input name="account_number" type="text" id="account_number" value="{{$member->account_number}}" size="40" maxlength="20"></td>
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
                  <input name="question1" type="radio" value="网站" @if($member->question1=='网站')checked@endif>
                家人
                <input name="question1" type="radio" value="家人" @if($member->question1=='家人')checked@endif>
                 朋友
                <input name="question1" type="radio" value="朋友" @if($member->question1=='朋友')checked@endif>
                 同事
                <input name="question1" type="radio" value="同事" @if($member->question1=='同事')checked@endif>
                 其他
                 <input name="question1" type="radio" value="其他" @if($member->question1=='其他')checked@endif>
                
                <input name="question1_other" type="text" id="question1_other" value="{{$member->question1_other}}" size="20" maxlength="50"></td>
              </tr>
              <tr>
                <td rowspan="2" align="right" valign="top" bgcolor="#99CC99">2、</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;如果从家人/朋友/同事/认识采暖平台，其是否从事采暖平台的业务？】</td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;是
                  <input name="question2" type="radio" value="是" @if($member->question2=='是')checked@endif>
                否
                <input name="question2" type="radio" value="否" @if($member->question2=='否')checked@endif>
                </td>
              </tr>
              <tr>
                <td rowspan="4" align="right" valign="top" bgcolor="#99CC99">3、</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;您是否曾为采暖平台的ED、IHH、IBO 中的任一身份</td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;是
                  <input name="question3" type="radio" value="是" @if($member->question3=='是')checked@endif>
                否
                <input name="question3" type="radio" value="否" @if($member->question3=='否')checked@endif>
                </td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;原身份编码：
                  <input name="question3_cnum" type="text" id="question3_cnum" value="{{$member->question3_cnum}}" size="20" maxlength="20">
失效日期：
<input name="question3_date" type="text" id="question3_date" value="2013-02-01" size="20" maxlength="25"></td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;原因：
                  <input name="question3_reason" type="text" id="question3_reason" value="{{$member->question3_reason}}" size="50" maxlength="100"></td>
              </tr>
              <tr> 
                <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;排序：</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF"><input name="sort" type="text" id="sort" value="0" size="20" maxlength="6"></td>
              </tr>
              <tr>
                <td height="23" valign="middle" bgcolor="#C8E3FF">&nbsp;显示状态：</td>
                <td height="23" colspan="2" valign="middle" bgcolor="#C8E3FF"><font size="2"> &nbsp;显示
                  <input name="views" type="radio" value="显示" @if($member->views=='显示')checked@endif>
                  不显示
                  <input type="radio" name="views" value="不显示" @if($member->views=='不显示')checked@endif>
                </font></td>
              </tr>
              <tr> 
                <td height="46" valign="middle" bgcolor="#C8E3FF">&nbsp;</td>
                <td height="46" colspan="2" valign="middle" bgcolor="#C8E3FF">
                  <input type="hidden" name="id" value="{{$member->meid}}">
                  <input type="hidden" name="page" value="{{$page}}">
                  <input type="hidden" name="cnum" value="{{$member->cnum}}">
                  <input type="submit" name="Submit" value="修改">
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

 
