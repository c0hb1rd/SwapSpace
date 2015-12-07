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
	
	$pages = $_POST['pages'];
	$apartment = $_POST['apartment'];
	
	$year = $_POST['year'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	
	$cash1 = (float)$_POST['cash1'];
	$cash2 = (float)$_POST['cash2'];
	$cash3 = (float)$_POST['cash3'];
	$cash4 = (float)$_POST['cash4'];
	$cash5 = (float)$_POST['cash5'];
	$sum = (float)($cash1 + $cash2 + $cash3 + $cash4 + $cash5);
	
	$information1 = $_POST['information1'];
	$information2 = $_POST['information2'];
	$information3 = $_POST['information3'];
	$information4 = $_POST['information4'];
	$information5 = $_POST['information5'];
	
	$remark = $_POST['remark'];
	
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
		$arg = $arg . ""; //float 直接转成 string 会出误差
		while((int)$arg > 0) {
			$result[$i++] = $arg % 10;
			$arg /=10;
		}
		if ($i != 8 && $i != 0) {
			$result[$i] = "￥";
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
	
    $myDb = mysql_connect("localhost:3306", "root", "hackingme?233333");
	mysql_set_charset("utf8");
	mysql_select_db("formdb", $myDb);
	mysql_query("set character set 'utf8'");
	mysql_query("set names 'utf8'");
?>
<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>汕尾职业技术学院费用报销审批单</title>
	<meta name="generator" content="LibreOffice 4.4.6.3 (Linux)"/>
	<meta name="author" content="Crackgg "/>
	<meta name="created" content="2015-12-02T16:46:52.190424048"/>
	<meta name="changedby" content="Crackgg "/>
	<meta name="changed" content="2015-12-02T18:22:16.672746450"/>
	
	<style type="text/css">
		body {width: 850px; margin: 0 auto; padding: 0}
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Liberation Sans"; font-size:x-small }
	</style>
	<script>
	</script>
</head>

<body>
<table cellspacing="0" border="0">
	<colgroup width="92"></colgroup>
	<colgroup width="167"></colgroup>
	<colgroup width="138"></colgroup>
	<colgroup span="8" width="19"></colgroup>
	<colgroup width="48"></colgroup>
	<colgroup width="257"></colgroup>
	<colgroup width="85"></colgroup>
	<tr>
		<td height="60" align="left"><br></td>
		<td colspan=12 align="center" valign=bottom><b><u><font face="Droid Sans Fallback" size=5>汕尾职业技术学院费用报销审批单</font></u></b></td>
		<td align="left"><br></td>
	</tr>
	<tr>
		<td height="45" align="left"><br></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Droid Sans Fallback" size=2><?php echo "报销部门：" . $apartment?></font></td>
		<td style="border-bottom: 1px solid #000000" align="left"><font size=3><br></font></td>
		<td style="border-bottom: 1px solid #000000" colspan=9 align="center" valign=bottom><font face="Droid Sans Fallback" size=2><?php echo $year . ""?>年<?php echo $month . ""?>月<?php if($day >= 10) echo $day . ""; else echo " " .$day?>日</font></td>
		<td style="border-bottom: 1px solid #000000" align="right" valign=bottom><font face="Droid Sans Fallback" size=2><?php echo "单据及附件共 " . $pages . " 张"?></font></td>
		<td align="left"><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="20" align="left"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2> 用</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>途</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=4 align="center" valign=middle><font face="Droid Sans Fallback" size=2>金</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=middle><font face="Droid Sans Fallback" size=2>额</font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=bottom><font face="Droid Sans Fallback" size=2>备</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=4 align="center" valign=middle sdval="6" sdnum="1033;"><lable style="font-size: 14px"><?php echo "$remark"?></lable></td>
		<td style="border-left: 1px solid #000000" align="left"><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="17" align="left" sdnum="1033;0;[$$-409]#,##0.00;[RED]-[$$-409]#,##0.00"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[$$-409]#,##0.00;[RED]-[$$-409]#,##0.00"><font face="Droid Sans Fallback">十</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[$$-409]#,##0.00;[RED]-[$$-409]#,##0.00"><font face="Droid Sans Fallback">万</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[$$-409]#,##0.00;[RED]-[$$-409]#,##0.00"><font face="Droid Sans Fallback">千</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[$$-409]#,##0.00;[RED]-[$$-409]#,##0.00"><font face="Droid Sans Fallback">百</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[$$-409]#,##0.00;[RED]-[$$-409]#,##0.00"><font face="Droid Sans Fallback">十</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[$$-409]#,##0.00;[RED]-[$$-409]#,##0.00"><font face="Droid Sans Fallback">元</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[$$-409]#,##0.00;[RED]-[$$-409]#,##0.00"><font face="Droid Sans Fallback">角</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[$$-409]#,##0.00;[RED]-[$$-409]#,##0.00"><font face="Droid Sans Fallback">分</font></td>
		<td style="border-left: 1px solid #000000" align="left" sdnum="1033;0;[$$-409]#,##0.00;[RED]-[$$-409]#,##0.00"><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="27" align="left"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="1" sdnum="1033;"><lable style="font-size: 13px"><?php echo "$information1"?></lable></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash1, 8)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash1, 7)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash1, 6)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash1, 5)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash1, 4)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash1, 3)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash1, 2)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash1, 1)?></font></td>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font face="Droid Sans Fallback" size=2>注</font></td>
		<td style="border-left: 1px solid #000000" align="left"><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="27" align="left"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="2" sdnum="1033;"><lable style="font-size: 13px"><?php echo "$information2"?></lable></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash2, 8)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash2, 7)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash2, 6)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash2, 5)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash2, 4)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash2, 3)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash2, 2)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash2, 1)?></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top><font size=3><br></font></td>
		<td style="border-left: 1px solid #000000" align="left"><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="27" align="left"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="3" sdnum="1033;"><lable style="font-size: 13px"><?php echo "$information3"?></lable></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash3, 8)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash3, 7)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash3, 6)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash3, 5)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash3, 4)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash3, 3)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash3, 2)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash3, 1)?></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font face="Droid Sans Fallback" size=2>专项</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><font size=3><br></font></td>
		<td style="border-left: 1px solid #000000" align="left"><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="27" align="left"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="4" sdnum="1033;"><lable style="font-size: 13px"><?php echo "$information4"?></lable></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash4, 8)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash4, 7)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash4, 6)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash4, 5)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash4, 4)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash4, 3)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash4, 2)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash4, 1)?></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top><font face="Droid Sans Fallback" size=2>分类</font></td>
		<td style="border-left: 1px solid #000000" align="left"><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="27" align="left"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="5" sdnum="1033;"><lable style="font-size: 13px"><?php echo "$information5"?></lable></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash5, 8)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash5, 7)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash5, 6)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash5, 5)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash5, 4)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash5, 3)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash5, 2)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($cash5, 1)?></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font face="Droid Sans Fallback" size=2>领导</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><font size=3><br></font></td>
		<td style="border-left: 1px solid #000000" align="left"><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="27" align="left"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2 color="#000000">合</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle><font face="Droid Sans Fallback" size=2>计</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($sum, 8)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($sum, 7)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($sum, 6)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($sum, 5)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($sum, 4)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($sum, 3)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($sum, 2)?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center"><font size=2><?php echo result($sum, 1)?></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top><font face="Droid Sans Fallback" size=2>审批</font></td>
		<td style="border-left: 1px solid #000000" align="left"><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="46" align="left"><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="right" valign=middle><font face="Droid Sans Fallback" size=2>金额大写：</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" colspan=9 align="left" valign=middle><font face="Droid Sans Fallback" size=2><?php echo "" . $total;?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle><font face="Droid Sans Fallback" size=3></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle sdval="<?php echo "￥" . $sum?>" sdnum="1033;"><font face="宋体" size=2><?php echo "￥" . "$sum"?></font></td>
		<td style="border-left: 1px solid #000000" align="left"><br></td>
	</tr>
	<tr>
		<td height="27" align="left"><br></td>
		<td style="border-top: 1px solid #000000" align="left" valign=middle><font face="Droid Sans Fallback" size=2>会计主管： </font></td>
		<td style="border-top: 1px solid #000000" colspan=3 align="center" valign=middle><font face="Droid Sans Fallback" size=2>审批： </font></td>
		<td style="border-top: 1px solid #000000" align="left"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000" align="left"><font size=3><br></font></td>
		<td style="border-top: 1px solid #000000" colspan=5 align="right" valign=top><font face="Droid Sans Fallback" size=2>证明： </font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=top><font face="Droid Sans Fallback" size=2>报销人： </font></td>
		<td align="left"><br></td>
	</tr>
	<tr>
		<td height="24" align="left"><br></td>
		<td colspan=2 align="left" valign=middle><font face="Droid Sans Fallback" size=1><?php echo "单号：" . $datetime?></font></td>
		<td align="left"><br></td>
		<td align="left"><br></td>
		<td align="left"><br></td>
		<td align="left"><br></td>
		<td align="left"><br></td>
		<td align="left"><br></td>
		<td align="left"><br></td>
		<td align="left"><br></td>
		<td align="left"><br></td>
		<td align="left"><br></td>
		<td align="left"><br></td>
	</tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>