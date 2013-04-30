

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>修改信息</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top"> 
          <form action="au_modi_sub.asp" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="25" bgcolor="#669966">&nbsp;<font color="#FFFFFF">修改会员信息</font></td>
                <td width="531" height="25" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="106" height="25" bgcolor="#FFFFFF"><div align="center"><a href="member_list.html">返回前页</a></div></td>
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
                <td valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;所在区域:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#66CCCC">北京</td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;会员号:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#66CCCC" class="member_id">123456789</td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;会员名称:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="username" type="text" id="username" value="张三" size="30" maxlength="20">
                  <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;会员密码:</font></td>
                <td height="22" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="userpass" type="text" id="userpass" value="123456" size="30" maxlength="20">
                  <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;确认密码:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="reuserpass" type="text" id="reuserpass" value="123456" size="30" maxlength="20">
                  <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;性别:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="sex      " type="radio" id="radio" value="男" checked>
                  男
                  <input type="radio" name="sex      " id="radio2" value="女">
                  女</td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;出生日期:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC">日期选择器</td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;身份证号:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="idcard1" type="text" id="idcard1" value="123456789012345678990" size="40" maxlength="20">
                  <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;Email:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="email" type="text" id="email" value="123@email.com" size="40" maxlength="100">
                  <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;学历:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="educational" type="text" id="educational" value="本科" size="20" maxlength="25"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;现职业:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="profession1" type="text" id="profession1" value="市场销售" size="20" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;单位名称:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="company_name" type="text" id="company_name" value="北京XXX有限公司" size="40" maxlength="100"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;工作地:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="work_address" type="text" id="work_address" value="北京" size="40" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;联系地址:</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="address" type="text" id="address" value="北京市西城区XXX胡同2号" size="50" maxlength="100"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;现邮政编码</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="postcode1" type="text" id="postcode1" value="100035" size="20" maxlength="6"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;固定电话</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="tel" type="text" id="tel" value="010-12345678" size="30" maxlength="50"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;移动电话</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="mobile" type="text" id="mobile" value="123456789012" size="30" maxlength="50">
                  <font color="#FF0000">*</font></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;常用住址</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="commonly_address" type="text" id="commonly_address" value="省/直辖市/自治区" size="50" maxlength="100">
                  省/直辖市/自治区</td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;常用住址邮编</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="postcode2" type="text" id="postcode2" value="100018" size="20" maxlength="6"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;直系家属姓名</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="Immediate_family_name" type="text" id="Immediate_family_name" value="王某某" size="20" maxlength="16"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;职业</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="Profession2" type="text" id="Profession2" value="医生" size="20" maxlength="40"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;家属身份证</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="idcard2" type="text" id="idcard2" value="123456789012345678990" size="40" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2"></font>&nbsp;MSN</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="msn" type="text" id="msn" value="123@hotmail.com" size="40" maxlength="100"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;QQ</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="qq" type="text" id="qq" value="123456789" size="40" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;微信帐号</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="weixin" type="text" id="weixin" value="winxin123" size="40" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#F1F0F1"><font size="2" color="#993300">&nbsp;银行信息</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#F1F0F1">&nbsp;</td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CC66"><font size="2">&nbsp;申请人结算银行</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CC66"><input name="clearing_bank" type="text" id="clearing_bank" value="北京工商银行" size="20" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CC66"><font size="2">&nbsp;分行</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CC66"><input name="branch" type="text" id="branch" value="朝阳支行" size="20" maxlength="30"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CC66"><font size="2">&nbsp;户名</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CC66"><input name="account_name" type="text" id="account_name" value="某某某" size="20" maxlength="50"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CC66"><font size="2">&nbsp;帐号</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CC66"><input name="account_number" type="text" id="account_number" value="01234567890" size="40" maxlength="20"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#F1F0F1"><font size="2" color="#993300">&nbsp;其他信息</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#F1F0F1">&nbsp;</td>
              </tr>
              <tr>
                <td rowspan="2" align="right" valign="top" bgcolor="#669933">1、</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#669933">&nbsp;您是从何渠道认识采暖平台的？</td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#669933">&nbsp;网站
                  <input name="question1" type="radio" value="网站">
                  家人
                  <input name="question1" type="radio" value="家人">
                  朋友
                  <input name="question1" type="radio" value="朋友">
                  同事
                  <input name="question1" type="radio" value="同事">
                  其他
                  <input name="question1" type="radio" value="其他" checked>
                  <input name="question1_other" type="text" id="question1_other" value="报纸" size="20" maxlength="50"></td>
              </tr>
              <tr>
                <td rowspan="2" align="right" valign="top" bgcolor="#669933">2、</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#669933">&nbsp;如果从家人/朋友/同事/认识采暖平台，其是否从事采暖平台的业务？】</td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#669933">&nbsp;是
                  <input name="question2" type="radio" value="是" checked>
                  否
                  <input name="question2" type="radio" value="否"></td>
              </tr>
              <tr>
                <td rowspan="4" align="right" valign="top" bgcolor="#669933">3、</td>
                <td height="21" colspan="2" valign="middle" bgcolor="#669933">&nbsp;您是否曾为采暖平台的ED、IHH、IBO 中的任一身份</td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#669933">&nbsp;是
                  <input name="question3" type="radio" value="是" checked>
                  否
                  <input name="question3" type="radio" value="否"></td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#669933">&nbsp;原身份编码：
                  <input name="question3_cnum" type="text" id="question3_cnum" value="1123456" size="20" maxlength="20">
                  失效日期：
                  <input name="question3_date" type="text" id="question3_date" value="2013-02-01" size="20" maxlength="25"></td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="middle" bgcolor="#669933">&nbsp;原因：
                  <input name="question3_reason" type="text" id="question3_reason" value="出国深造" size="50" maxlength="100"></td>
              </tr>
              <tr>
                <td height="21" valign="middle" bgcolor="#66CCCC"><font size="2">&nbsp;排序：</font></td>
                <td height="21" colspan="2" valign="middle" bgcolor="#66CCCC"><input name="w_sort" type="text" id="w_sort" value="0" size="20" maxlength="6"></td>
              </tr>
              <tr>
                <td height="23" valign="middle" bgcolor="#66CCCC">&nbsp;显示状态：</td>
                <td height="23" colspan="2" valign="middle" bgcolor="#66CCCC"><font size="2"> &nbsp;显示
                  <input name="w_views" type="radio" value="显示" checked>
                  不显示
                  <input type="radio" name="w_views" value="不显示">
                </font></td>
              </tr>
              <tr>
                <td height="46" valign="middle" bgcolor="#66CCCC">&nbsp;</td>
                <td height="46" colspan="2" valign="middle" bgcolor="#66CCCC"><input type="submit" name="Submit" value="修改">
                <input type="button" name="Submit3" value="返回前页" onClick="location='member_list.html'"></td>
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

 