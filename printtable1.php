<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php
	if (date("a") == "pm") {
		$hour = (int) date("h") + 12;
		$datetime = date("Ymd") . $hour . date("is");
	}
	else if (date("h") == 12) {
		$hour = (int)date("h") - 12;
		$datetime = date("Ymd") . "0" . $hour . date("is");
	}
	else {
		$hour = date("h");
		$datetime = date("Ymd") . $hour . date("is");
	}
	
	//数据库用户名和密码
	$db_user = "";
	$db_passwd = "";
	
	$sum = (float)$_POST['cash'];
	$remark = $_POST['remark'];
	$user = $_POST['user'];
	$apartment = $_POST['apartment'];
	
	$year = $_POST['year'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	
	function turn2($mode) {
		switch ($mode) {
			case 1: return "拾";
			case 2: return "万";
			case 3: return "仟";
			case 4: return "佰";
			case 5: return "拾";
			case 6: return "元";
			case 7: return "角";
			case 8: return "分";
		}
	}

	function turn($arg, $mode1, $mode2) {
		switch (result($arg, $mode1)) {
			case 0 . "": return "零" . turn2($mode2);
			case 1 . "": return "壹" . turn2($mode2); 
			case 2 . "": return "贰" . turn2($mode2); 
			case 3 . "": return "叁" . turn2($mode2); 
			case 4 . "": return "肆" . turn2($mode2); 
			case 5 . "": return "伍" . turn2($mode2); 
			case 6 . "": return "陆" . turn2($mode2); 
			case 7 . "": return "柒" . turn2($mode2); 
			case 8 . "": return "捌" . turn2($mode2); 
			case 9 . "": return "玖" . turn2($mode2); 
			default: return " ";
		}
	}
	
	function result($arg, $mode) {
		$result = array("", "", "", "", "", "", "", "");
		$i = 0;
		$arg *= 100;
		while((int)$arg > 0) {
			$result[$i++] = $arg % 10;
			$arg /=10;
		}
		return $result[$mode - 1];
	}
	
	$total = turn($sum, 8, 1) . turn($sum, 7, 2) . turn($sum, 6, 3) . turn($sum, 5, 4) . turn($sum, 4, 5) . turn($sum, 3, 6) . turn($sum, 2, 7) . turn($sum, 1, 8);
	if (result($sum, 1) == 0 && result($sum, 2) == 0 && result($sum, 3) == 0 && result($sum, 4) == 0 && result($sum, 5) && result($sum, 6) == 0 && result($sum, 7) == 0) {
		$total = substr($total, 0, (strlen($total) - 42)) . "整";
	} else if (result($sum, 1) == 0 && result($sum, 2) == 0 && result($sum, 3) == 0 && result($sum, 4) == 0 && result($sum, 5) && result($sum, 6) == 0) {
		$total = substr($total, 0, (strlen($total) - 36)) . "整";
	} else if (result($sum, 1) == 0 && result($sum, 2) == 0 && result($sum, 3) == 0 && result($sum, 4) == 0 && result($sum, 5)) {
		$total = substr($total, 0, (strlen($total) - 30)) . "整";
	} else if (result($sum, 1) == 0 && result($sum, 2) == 0 && result($sum, 3) == 0 && result($sum, 4) == 0) {
		$total = substr($total, 0, (strlen($total) - 24)) . "整";
	} else if (result($sum, 1) == 0 && result($sum, 2) == 0 && result($sum, 3) == 0)  {
		$total = substr($total, 0, (strlen($total) - 18)) . "整";
	} else if (result($sum, 1) == 0 && result($sum, 2) == 0) {
		$total = substr($total, 0, (strlen($total) - 12)) . "整";
	} else if (result($sum, 1) == 0){
		$total = substr($total, 0, (strlen($total) - 6));
	}
	
	if ($sum == "0")
		$total = "";
	echo "<p>$sum</p>";
    $myDb = mysql_connect("localhost:3306", $db_user. $db_passwd); 
	mysql_set_charset("utf8");
	mysql_select_db("formdb", $myDb);
	mysql_query("set character set 'utf8'");
	mysql_query("set names 'utf8'");
	mysql_query("insert into form1(id, username, apartment, total, remark) values($datetime, \"$user\", \"$apartment\", $sum, \"$remark\")");
	
?>
<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>汕尾职业技术学院借款审批单</title>
	<meta name="generator" content="LibreOffice 4.4.6.3 (Linux)"/>
	<meta name="author" content="微软用户"/>
	<meta name="created" content="2010-08-25T17:33:30"/>
	<meta name="changedby" content="Crackgg "/>
	<meta name="changed" content="2015-12-03T16:33:36.204168338"/>
	
	<style type="text/css">
		body {margin: 0 auto; padding: 0; width: 850px}
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"宋体"; font-size:small }
	</style>
	
</head>

<body>
<table cellspacing="0" border="0">
	<colgroup width="83"></colgroup>
	<colgroup width="99"></colgroup>
	<colgroup width="162"></colgroup>
	<colgroup width="154"></colgroup>
	<colgroup width="88"></colgroup>
	<colgroup width="19"></colgroup>
	<colgroup width="217"></colgroup>
	<colgroup width="91"></colgroup>
	<tr>
		<td height="60" align="left" valign=middle><br></td>
		<td colspan=6 align="center" valign=bottom><b><u><font face="Droid Sans Fallback" size=5>汕尾职业技术学院借款审批单<font></u></b></td>
		</tr>
	<tr>
		<td height="33" align="left" valign=middle><br></td>
		<td style="border-bottom: 1px solid #000000" colspan=6 align="center" valign=bottom><font face="Droid Sans Fallback"><?php echo $year . ""?>年<?php echo $month . ""?>月<?php if($day >= 10) echo $day . ""; else echo " " .$day?>日</font></td>
		<td align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="45" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback">部 门</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><?php echo $apartment . ""?></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback">借款人姓名</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><?php echo $user . ""?></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="51" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback">用 途</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><?php echo $remark . ""?></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="42" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback">借款金额:</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Droid Sans Fallback"><?php echo $total . ""?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle><font face="Droid Sans Fallback"></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle sdval="58612456" sdnum="1033;0;0.00_ "><?php echo "￥" . $sum?></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="46" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Droid Sans Fallback">领导批示</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><font face="Droid Sans Fallback">主管部门意见</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback">借款人签字</font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><font color="#FF0000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="77" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><br></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td height="46" align="left" valign=middle><br></td>
		<!-- <td style="border-top: 1px solid #000000" align="left" valign=middle></td> -->
		<td style="border-top: 1px solid #000000; border-bottom: 0px solid #000000; border-left: 0px solid #000000; border-right: 0px solid #000000" colspan=2 align="left" valign=middle><font face="Droid Sans Fallback" size=1><?php echo "单号：" . $datetime?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 0px solid #000000; border-left: 0px solid #000000; border-right: 0px solid #000000" colspan=3 align="center" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 0px solid #000000; border-left: 0px solid #000000; border-right: 0px solid #000000" align="center" valign=middle><br></td>
		<td align="left" valign=middle><font color="#FF0000"><br></font></td>
	</tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>
