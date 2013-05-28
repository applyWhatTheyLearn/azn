<html>
<style type="text/css">
    <!--
    body {
        margin-left: 0px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        background-color: #E4E4E4;
    }
    .STYLE1 {color: #0033FF}
    -->
</style>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/css.css" rel="stylesheet" type="text/css">
    <title>添加图片</title>
    <script language="javascript">
        function CheckForm (frm)
        {

            if (frm.file1.value.length==0)
            {
                frm.file1.focus();
                frm.file1.select();
                alert ("请选择图片！");
                return false;

            }

        }
    </script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="pro_pic_add.html" name="theForm" enctype="multipart/form-data" onSubmit="return CheckForm(this);">
    <table width="740" border="0" align="center" cellpadding="0" cellspacing="1">
        <tr>
            <td height="3" colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">添加图片</font></td>
        <td width="507" height="21" bgcolor="#FFFFCC">&nbsp;所属产品：[ <font color="#0000FF">{{$classname}}</font> ]</td>
            <td width="92" bgcolor="#FFFFCC"><div align="center"><a href="pro_pic_list.html?l_classid={{$classid}}&page={{$page}}">返回图片列表</a></div></td>
        </tr>
        <tr>
            <td height="18" colspan="3">
                <div align="right"></div></td>
        </tr>
        <tr>
            <td width="137" height="1" bgcolor="#999999"></td>
            <td height="1" colspan="2" bgcolor="#999999"></td>
        </tr>
        <tr>
            <td height="32" bgcolor="F1F0F1"><font size="2">&nbsp;选择图片：</font></td>
            <td colspan="2" bgcolor="F1F0F1"><input type="file" name="image" style="width:300" class="tx1" value="">
                <span class="STYLE1">图片大小不能超过不能超过100K</span></td>
        </tr>
        <tr>
            <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
            <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="0" size="25" maxlength="6">
                *只能是小于6位数的数字（数字越大越靠前）</td>
        </tr>
        <tr>
            <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
            <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示
                    <input name="l_views" type="radio" value="显示" checked>
                    不显示
                    <input type="radio" name="l_views" value="不显示">
                </font></td>
        </tr>

        <tr>
            <td height="16" valign="top" bgcolor="F1F0F1">&nbsp;</td>
            <td colspan="2" bgcolor="F1F0F1">&nbsp;</td>
        </tr>
        <tr>
            <td height="46" bgcolor="F1F0F1">&nbsp;</td>
            <td height="46" colspan="2" bgcolor="F1F0F1"><p>
                    <input type="hidden" name="page" value="{{$page}}">
                    <input type="hidden" name="classid" value="{{$classid}}">
                    <input type="hidden" name="classname" value="{{$classname}}">
                    <input type="submit" name="Submit" value="开始上传">
                    <input type="reset" name="reset" value="重新选择">
                    <input type="button" name="Submit2" value="取消" onClick="location='pro_pic_List.html?l_classid={{$classid}}&page={{$page}}'">
                </p></td>
        </tr>
        <tr>
            <td height="21" colspan="3" valign="top">&nbsp;</td>
        </tr>
    </table>
</form>
</body>
</html>
