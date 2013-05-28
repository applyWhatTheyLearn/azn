<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>会员信息</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top" bgcolor="#E4E4E4"><table width="700" border="0" cellspacing="1" cellpadding="0">
        <tr>
          <td height="25" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">区域会员信息</font></td>
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
          <td valign="middle" bgcolor="#C8E3FF">&nbsp;所在区域:</td>
          <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->areaname}}</td>
        </tr>
        <tr>
          <td valign="middle" bgcolor="#C8E3FF">&nbsp;会员号:</td>
          <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF" class="member_id">{{$member->cnum}}</td>
        </tr>
        <tr>
          <td valign="middle" bgcolor="#C8E3FF">&nbsp;会员名称:</td>
          <td height="22" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->username}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;性别:</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->sex}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;出生日期:</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->birth}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;身份证号:</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->idcard1}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;Email:</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->email}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;学历:</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->educational}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;现职业:</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->profession1}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;单位名称:</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->company_name}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;工作地:</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF" >{{$member->work_address}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;联系地址:</font></td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->address}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;现邮政编码</font></td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->postcode1}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;固定电话</font></td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->tel}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;移动电话</font></td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->mobile}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;常用住址</font></td>
<td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->commonly_address}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;常用住址邮编</font></td>
<td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->postcode2}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;直系家属姓名</font></td>
<td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->immediate_family_name}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;职业</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->profession2}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;家属身份证</font></td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->idcard2}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;MSN</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->msn}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF">&nbsp;QQ</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->qq}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;微信帐号</font></td>
          <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->weixin}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#F1F0F1"><font size="2" color="#993300">&nbsp;银行信息</font></td>
          <td height="21" colspan="2" valign="middle" bgcolor="#F1F0F1">&nbsp;</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#99CCCC">&nbsp;申请人结算银行</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC">{{$member->clearing_bank}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#99CCCC">&nbsp;分行</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC">{{$member->branch}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#99CCCC">&nbsp;户名</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC">{{$member->account_name}}</td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#99CCCC">&nbsp;帐号</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#99CCCC">{{$member->account_number}}</td>
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
<td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;<font color="#FFFFCC">{{$member->question1}}{{$member->question1_other}}</font></td>
        </tr>
        <tr>
          <td rowspan="2" align="right" valign="top" bgcolor="#99CC99">2、</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;如果从家人/朋友/同事/认识采暖平台，其是否从事采暖平台的业务？】</td>
        </tr>
        <tr>
<td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;<font color="#FFFFCC">{{$member->question2}}</font></td>
        </tr>
        <tr>
          <td rowspan="4" align="right" valign="top" bgcolor="#99CC99">3、</td>
          <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;您是否曾为采暖平台的ED、IHH、IBO 中的任一身份</td>
        </tr>
        <tr>
           <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;原身份编码：<font color="#FFFFCC">{{$member->question3_cnum}}</font> 失效日期： <font color="#FFFFCC">{{$member->question3_date}}</font></td>
        </tr>
        <tr>
          <td height="21" colspan="2" valign="middle" bgcolor="#99CC99">&nbsp;<font color="#FFFFCC">原因： {{$member->question3_reason}}</font></td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#C8E3FF"><font size="2">&nbsp;排序：</font></td>
           <td height="21" colspan="2" valign="middle" bgcolor="#C8E3FF">{{$member->sort}}</td>
        </tr>
        <tr>
          <td height="23" valign="middle" bgcolor="#C8E3FF">&nbsp;显示状态：</td>
           <td height="23" colspan="2" valign="middle" bgcolor="#C8E3FF"><font size="2"> &nbsp;{{$member->views}}</font></td>
        </tr>
        <tr>
          <td height="46" valign="middle" bgcolor="#C8E3FF">&nbsp;</td>
          <td height="46" colspan="2" valign="middle" bgcolor="#C8E3FF">
            <input type="button" name="Submit3" value="返回前页" onClick="location='top_member_list.html?page={{$page}}'"></td>
        </tr>
        <tr>
          <td height="21" colspan="3" valign="top">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</body>
</html>

 

