<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>帮助中心内容列表</title>
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
              <td width="134" height="21" bgcolor="#669966">&nbsp;<font color="#FFFFFF">会员列表</font></td>
                <td width="494" bgcolor="#FFFFFF">&nbsp;所属区域：[ <span class="STYLE3">北京</span> ]</td>
                <td width="68" bgcolor="#FFFFFF">&nbsp;</td>
              
            </tr>
            <tr>
              <td height="1" bgcolor="#A24E12"></td>
              <td height="1" colspan="2" bgcolor="#009999"></td>
            </tr>
          </table>
          <br>
          
        <table width="700" border="0" cellspacing="1" cellpadding="0">
            <form name="form1" method="post" action="">
              <tr>
                <td height="21" bgcolor="#669966">&nbsp;<font color="#FFFFFF">会员人数：</font></td>
                <td bgcolor="#FFFFFF">&nbsp;<font color="#0000FF">100人</font> </td>
                <td bgcolor="#FFFFFF"> 查询：
                  <select name="select" id="select">
                    <option value="0" selected>年</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                  </select>
                  <select name="select2" id="select2">
                    <option value="0" selected>季度</option>
                    <option value="1">一季度</option>
                    <option value="2">二季度</option>
                    <option value="3">三季度</option>
                    <option value="4">四季度</option>
                  </select>
                  <select name="select3" id="select3">
                    <option value="0" selected>月</option>
                    <option value="1">一月</option>
                    <option value="2">二月</option>
                    <option value="3">三月</option>
                    <option value="4">四月</option>
                    <option value="5">五月</option>
                    <option value="6">六月</option>
                    <option value="7">七月</option>
                    <option value="8">八月</option>
                    <option value="9">九月</option>
                    <option value="10">十月</option>
                    <option value="11">十一月</option>
                    <option value="12">十二月</option>
                  </select>
                  <input type="submit" name="button" id="button" value="立即查询"></td>
              </tr>
              <tr>
                <td width="134" height="21" bgcolor="#669966">&nbsp;<font color="#FFFFFF">销售总额：</font></td>
                <td width="170" bgcolor="#FFFFFF">&nbsp;<font color="#FF0000">￥10000 元</font></td>
                <td width="392" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td height="1" bgcolor="#A24E12"></td>
                <td height="1" colspan="2" bgcolor="#009999"></td>
              </tr></form>
            </table>
          <table width="700" border="0" cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="12">&nbsp;</td>
            </tr>
            <tr> 
              <td width="41" height="20" bgcolor="#669966">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
              <td width="102" bgcolor="#669966">&nbsp;<font color="#FFFFFF" size="2">会员号码</font></td>
              <td width="113" bgcolor="#669966">&nbsp;<font color="#FFFFFF" size="2">会员名称</font></td>
              <td width="202" bgcolor="#669966">&nbsp;<font color="#FFFFFF" size="2">移动电话</font></td>
              <td width="75" bgcolor="#669966">&nbsp;<font color="#FFFFFF">排序</font></td>
              <td width="76" bgcolor="#669966"><div align="center"><font color="#FFFFFF">状态</font></div>                <div align="center"></div></td>
              <td width="42" bgcolor="#669966"><div align="center"><font color="#FFFFFF">修改</font></div></td>
              <td width="40" bgcolor="#669966"><div align="center"><font color="#FFFFFF">删除</font></div></td>
            </tr>
            <tr> 
              <td valign="middle" bgcolor="F1F0F1">&nbsp;<a href="#" title="文件名称：<%= w_filename %>"><font color="#993300">1、</font></a></td>
              <td height="18" valign="middle" bgcolor="F1F0F1">&nbsp;<a href="member_detail.html" class="member_link" >123456789</a></td>
              <td valign="middle" bgcolor="F1F0F1">&nbsp;<a href="member_modi.html" >会员名称</a></td>
              <td valign="middle" bgcolor="F1F0F1">&nbsp;会员名称</td>
              <td height="18" valign="middle" bgcolor="F1F0F1">&nbsp;0</td>
              <td height="18" valign="middle" bgcolor="F1F0F1"><div align="center"><font color="#333333">显示</font></div></td>
              <td valign="middle" bgcolor="F1F0F1"><div align="center">
                <div align="center"><a href="member_modi.html"><font size="2">修改</font></a></div>
                <a href="member_modi.html?w_id=<%=w_id%>&w_classid=<%= w_classid %>"><font size="2"></font></a></div></td>
              <td valign="middle" bgcolor="F1F0F1"> <div align="center"><a href="member_del.html"> 
              删除</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="12" bgcolor="#999999"></td>
            </tr>

            <tr> 
              <td height="21" colspan="12" align="right" valign="middle"><font color="#333333" size="2">换页 <a href="#">&lt;&lt;</a></font>&nbsp;<font color="#333333" size="2"><a href="#">首页</a></font> &nbsp;&nbsp; <a href="#">1</a>、<strong><a href="#">2</a></strong>、<a href="#">3</a>、<a href="#">4</a> &nbsp;&nbsp;<font color="#333333"><a href="#">尾页</a> <a href="#">&gt;&gt;</a></font></td>
            </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>

 