
<!--#include file="../_inc/checkoutTime.php"-->
<?php
	ManageName=trim($_POST["ManageName"))
	AddClass=trim($_POST["AddClass"))
    UserID=trim($_POST["OUserID"))
	AccID_t=trim($_POST["AccID_t"))
	'Response.Write("AddClass="&AddClass &"<br>")
	'Response.Write("UserID="&UserID &"<br>")
	'Response.Write("ManageName="&ManageName &"<br>")
	if addclass<>"0" {
	$_REQUEST[
	Search = "select * from Accredit  where TitleName='"&AddClass&"' and AdminID="&UserID&""
    $msql->query($Search);
	if($msql->next_record()){
	?>
	<script language=vbscript>
			history.back()
			alert("��ģ������Ӳ����ٴ���ӣ�")
	</script>
	<?php
	response.end 
	}

	
	$_REQUEST[
	Search = "select * from Accredit_t  where TitleName_t='"&AddClass&"'"
    $msql->query($Search);
	'Response.Write("Search="&Search &"<br>")
	AccID_t=trim($msql->f("AccID_t"))
	TitleName_t=trim($msql->f("TitleName_t"))
	LinkName_t=trim($msql->f("LinkName_t"))
	FotherID_t=trim($msql->f("FotherID_t"))
	compositor_t=trim($msql->f("compositor_t"))
	UpdateInfo="insert into  Accredit (AdminID,AccID_t,TitleName,LinkName,FotherID,compositor) values ('"&UserID&"','"&AccID_t&"','"&TitleName_t&"','"&LinkName_t&"','"&FotherID_t&"','"&compositor_t&"') "
    $msql->query (UpdateInfo)



	set myconn=nothing
	
	}
'
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="refresh" content="0;url=QX_list.php?UserID=<?php echo $UserID?>&amp;ManageName=<?php echo(ManageName?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  </div>
</body>
</html>
