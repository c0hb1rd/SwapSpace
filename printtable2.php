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
	
	$myYear = $_POST['year'];
	$myMonth = $_POST['month'];
	$myDay = $_POST['day'];

	$month1 = $_POST['month1'];
	$day1 = $_POST['day1'];
	$start1 = $_POST['start1'];
	$end1 = $_POST['end1'];
	$car_cash1 = $_POST['car_cash1'];
	$house_cash1 = $_POST['house_cash1'];
	$meet_cash1 = $_POST['meet_cash1'];
	$people1 = $_POST['people1'];
	$days1 = $_POST['days1'];
	$traffic_cash1 = $_POST['traffic_cash1'];
	$food_cash1 = $_POST['food_cash1'];
	$total_cash1 = $_POST['total_cash1'];
	$total1 = $_POST['SUM1'];

	$month2 = $_POST['month2'];
	$day2 = $_POST['day2'];
	$start2 = $_POST['start2'];
	$end2 = $_POST['end2'];
	$car_cash2 = $_POST['car_cash2'];
	$house_cash2 = $_POST['house_cash2'];
	$meet_cash2 = $_POST['meet_cash2'];
	$people2 = $_POST['people2'];
	$days2 = $_POST['days2'];
	$traffic_cash2 = $_POST['traffic_cash2'];
	$food_cash2 = $_POST['food_cash2'];
	$total_cash2 = $_POST['total_cash2'];
	$total2 = $_POST['SUM2'];
	if ($total2 == "0")
		$total2 = "";

	$month3 = $_POST['month3'];
	$day3 = $_POST['day3'];
	$start3 = $_POST['start3'];
	$end3 = $_POST['end3'];
	$car_cash3 = $_POST['car_cash3'];
	$house_cash3 = $_POST['house_cash3'];
	$meet_cash3 = $_POST['meet_cash3'];
	$people3 = $_POST['people3'];
	$days3 = $_POST['days3'];
	$traffic_cash3 = $_POST['traffic_cash3'];
	$food_cash3 = $_POST['food_cash3'];
	$total_cash3 = $_POST['total_cash3'];
	$total3 = $_POST['SUM3'];
	if ($total3 == "0")
		$total3 = "";

	$month4 = $_POST['month4'];
	$day4 = $_POST['day4'];
	$start4 = $_POST['start4'];
	$end4 = $_POST['end4'];
	$car_cash4 = $_POST['car_cash4'];
	$house_cash4 = $_POST['house_cash4'];
	$meet_cash4 = $_POST['meet_cash4'];
	$people4 = $_POST['people4'];
	$days4 = $_POST['days4'];
	$traffic_cash4 = $_POST['traffic_cash4'];
	$food_cash4 = $_POST['food_cash4'];
	$total_cash4 = $_POST['total_cash4'];
	$total4 = $_POST['SUM4'];
	if ($total4 == "0")
		$total4 = "";

	$month5 = $_POST['month5'];
	$day5 = $_POST['day5'];
	$start5 = $_POST['start5'];
	$end5 = $_POST['end5'];
	$car_cash5 = $_POST['car_cash5'];
	$house_cash5 = $_POST['house_cash5'];
	$meet_cash5 = $_POST['meet_cash5'];
	$people5 = $_POST['people5'];
	$days5 = $_POST['days5'];
	$traffic_cash5 = $_POST['traffic_cash5'];
	$food_cash5 = $_POST['food_cash5'];
	$total_cash5 = $_POST['total_cash5'];
	$total5 = $_POST['SUM5'];
	if ($total5 == "0")
		$total5 = "";

	$sum = "" . ((float)$total1 + (float)$total2 + (float)$total3 + (float)$total4 + (float)$total5);
	
	$Car_cash = $_POST['Car_cash'];
	$House_cash = $_POST['House_cash'];
	$Meet_cash = $_POST['Meet_cash'];
	$People = $_POST['People'];
	$Days = $_POST['Days'];
	$Traffic_cash = $_POST['Traffic_cash'];
	$Food_cash = $_POST['Food_cash'];
	$Total_cash = $_POST['Total_cash'];
	$SUM = $_POST['SUM'];

	$apartment = $_POST['apartment'];
	$pages = $_POST['pages'];
	$work = $_POST['work'];
	$user = $_POST['user'];
	$information = $_POST['information'];

	// $car_cash = "" . ((float)(float)$car_cash1 + (float)$car_cash2 + (float)$car_cash3 + (float)$car_cash4 + (float)$car_cash5);
	// $house_cash = "" . ((float)$house_cash1 + (float)$house_cash2 + (float)$house_cash3 + (float)$house_cash4 + (float)$house_cash5);
	// // $meet_cash = 
	// // $peopel = 
	// // $days = 
	// // $trafic_cash = 
	// // $food_cash = 
	// // $total_cash = 

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
	
	$myDb = mysql_connect("localhost:3306", $db_user. $db_passwd); 
	mysql_set_charset("utf8");
	mysql_select_db("formdb", $myDb);
	mysql_query("set charset set 'utf8'");
	mysql_query("set name 'utf8'");
	mysql_query("INSERT INTO form2(id, pages, apartment, username, total, work, remark,
	 month1, day1, start1, end1, car_cash1, house_cash1, meet_cash1, people_cash1, days_cash1, traffic_cash1, food_cash1, total_cash1, total1, 
	 month2, day2, start2, end2, car_cash2, house_cash2, meet_cash2, people_cash2, days_cash2, traffic_cash2, food_cash2, total_cash2, total2,
	 month3, day3, start3, end3, car_cash3, house_cash3, meet_cash3, people_cash3, days_cash3, traffic_cash3, food_cash3, total_cash3, total3,
	 month4, day4, start4, end4, car_cash4, house_cash4, meet_cash4, people_cash4, days_cash4, traffic_cash4, food_cash4, total_cash4, total4,
	 month5, day5, start5, end5, car_cash5, house_cash5, meet_cash5, people_cash5, days_cash5, traffic_cash5, food_cash5, total_cash5, total5)
	 values(\"$datetime\", $pages, \"$apartment\", \"$user\", $SUM, \"$work\", \"$information\",
	 $month1, $day1, \"$start1\", \"$end1\", $car_cash1, $house_cash1, $meet_cash1, $people1, $days1, $traffic_cash1, $food_cash1, $total_cash1, $total1,
	 $month2, $day2, \"$start2\", \"$end2\", $car_cash2, $house_cash2, $meet_cash2, $people2, $days2, $traffic_cash2, $food_cash2, $total_cash2, $total2,
	 $month3, $day3, \"$start3\", \"$end3\", $car_cash3, $house_cash3, $meet_cash3, $people3, $days3, $traffic_cash3, $food_cash3, $total_cash3, $total3,
	 $month4, $day4, \"$start4\", \"$end4\", $car_cash4, $house_cash4, $meet_cash4, $people4, $days4, $traffic_cash4, $food_cash4, $total_cash4, $total4,
	 $month5, $day5, \"$start5\", \"$end5\", $car_cash5, $house_cash5, $meet_cash5, $people5, $days5, $traffic_cash5, $food_cash5, $total_cash5, $total5)");
?>
<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>汕尾职业技术学院差旅费报销单</title>
	<meta name="generator" content="LibreOffice 4.4.6.3 (Linux)"/>
	<meta name="author" content="微软用户"/>
	<meta name="created" content="2010-08-25T17:33:30"/>
	<meta name="changedby" content="Crackgg "/>
	<meta name="changed" content="2015-12-04T15:07:59.287931406"/>
	
	<style type="text/css">
		body {margin: 0 auto; padding: 0; width: 850px}
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"宋体"; font-size:small }
	</style>
	
	
</head>

<body>
<table cellspacing="0" border="0">
	<colgroup width="96"></colgroup>
	<colgroup span="2" width="27"></colgroup>
	<colgroup span="5" width="64"></colgroup>
	<colgroup width="51"></colgroup>
	<colgroup width="20"></colgroup>
	<colgroup span="4" width="64"></colgroup>
	<colgroup width="68"></colgroup>
	<colgroup width="59"></colgroup>
	<tr>
		<td height="60" align="left" valign=middle><br></td>
		<td colspan=14 align="center" valign=bottom><b><u><font face="Droid Sans Fallback" size=5>汕尾职业技术学院差旅费报销表</font></u></b></td>
		<td align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td height="27" align="left" valign=middle><br></td>
		<td style="border-bottom: 1px solid #333333" colspan=4 align="left" valign=bottom><font face="Droid Sans Fallback" size=2><?php echo "部门:" . $apartment?></font></td>
		<td style="border-bottom: 1px solid #333333" align="center" valign=middle><font size=2><br></font></td>
		<td style="border-bottom: 1px solid #333333" colspan=3 align="right" valign=bottom><font face="Droid Sans Fallback" size=2><?php echo $myYear . ""?>年<?php echo $myMonth . ""?>月<?php if($myDay >= 10) echo $myDay . ""; else echo " " .$myDay?>日</font></td>
		<td style="border-bottom: 1px solid #333333" align="center" valign=middle><font size=2><br></font></td>
		<td style="border-bottom: 1px solid #333333" align="center" valign=middle><font size=2><br></font></td>
		<td style="border-bottom: 1px solid #333333" align="left" valign=middle><font size=2><br></font></td>
		<td style="border-bottom: 1px solid #333333" colspan=3 align="right" valign=bottom><font face="Droid Sans Fallback" size=2><?php echo "单据及附件共 " . $pages . " 张"?></font></td>
		<td align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="27" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>姓名</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="4" sdnum="1033;"><font size=2><?php echo $user .""?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>职别</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="4" sdnum="1033;"><font size=2><?php echo "" . $work?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>事由</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle sdval="5" sdnum="1033;"><font size=2><?php echo $information . ""?></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="29" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>日期</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>起止地点</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>车船费</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>住宿费</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>会务费<br/>培训费</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 align="center" valign=middle><font face="Droid Sans Fallback" size=2>补  助  费</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>合计</font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="30" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>月</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>日</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>出发</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>到达</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>人数</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>天数</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>交通补助</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>伙食补助</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>金额</font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="25" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="6" sdnum="1033;"><font size=2><?php echo "" . $month1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="7" sdnum="1033;"><font size=2><?php echo "" . $day1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="8" sdnum="1033;"><font size=1><?php echo "" . $start1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="9" sdnum="1033;"><font size=1><?php echo "" . $end1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="10" sdnum="1033;"><font size=2><?php echo "" . $car_cash1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="11" sdnum="1033;"><font size=2><?php echo "" . $house_cash1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="12" sdnum="1033;"><font size=2><?php echo "" . $meet_cash1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="13" sdnum="1033;"><font size=2><?php echo "" . $people1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="14" sdnum="1033;"><font size=2><?php echo "" . $days1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="15" sdnum="1033;"><font size=2><?php echo "" . $traffic_cash1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="16" sdnum="1033;"><font size=2><?php echo "" . $food_cash1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="17" sdnum="1033;"><font size=2><?php echo "" . $total_cash1?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="18" sdnum="1033;"><font size=2><?php echo "" . $total1?></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="25" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="6" sdnum="1033;"><font size=2><?php echo "" . $month2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="7" sdnum="1033;"><font size=2><?php echo "" . $day2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="8" sdnum="1033;"><font size=1><?php echo "" . $start2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="9" sdnum="1033;"><font size=1><?php echo "" . $end2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="10" sdnum="1033;"><font size=2><?php echo "" . $car_cash2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="11" sdnum="1033;"><font size=2><?php echo "" . $house_cash2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="12" sdnum="1033;"><font size=2><?php echo "" . $meet_cash2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="13" sdnum="1033;"><font size=2><?php echo "" . $people2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="14" sdnum="1033;"><font size=2><?php echo "" . $days2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="15" sdnum="1033;"><font size=2><?php echo "" . $traffic_cash2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="16" sdnum="1033;"><font size=2><?php echo "" . $food_cash2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="17" sdnum="1033;"><font size=2><?php echo "" . $total_cash2?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="18" sdnum="1033;"><font size=2><?php echo "" . $total2?></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="25" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="6" sdnum="1033;"><font size=2><?php echo "" . $month3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="7" sdnum="1033;"><font size=2><?php echo "" . $day3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="8" sdnum="1033;"><font size=1><?php echo "" . $start3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="9" sdnum="1033;"><font size=1><?php echo "" . $end3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="10" sdnum="1033;"><font size=2><?php echo "" . $car_cash3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="11" sdnum="1033;"><font size=2><?php echo "" . $house_cash3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="12" sdnum="1033;"><font size=2><?php echo "" . $meet_cash3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="13" sdnum="1033;"><font size=2><?php echo "" . $people3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="14" sdnum="1033;"><font size=2><?php echo "" . $days3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="15" sdnum="1033;"><font size=2><?php echo "" . $traffic_cash3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="16" sdnum="1033;"><font size=2><?php echo "" . $food_cash3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="17" sdnum="1033;"><font size=2><?php echo "" . $total_cash3?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="18" sdnum="1033;"><font size=2><?php echo "" . $total3?></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="25" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="6" sdnum="1033;"><font size=2><?php echo "" . $month4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="7" sdnum="1033;"><font size=2><?php echo "" . $day4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="8" sdnum="1033;"><font size=1><?php echo "" . $start4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="9" sdnum="1033;"><font size=1><?php echo "" . $end4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="10" sdnum="1033;"><font size=2><?php echo "" . $car_cash4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="11" sdnum="1033;"><font size=2><?php echo "" . $house_cash4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="12" sdnum="1033;"><font size=2><?php echo "" . $meet_cash4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="13" sdnum="1033;"><font size=2><?php echo "" . $people4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="14" sdnum="1033;"><font size=2><?php echo "" . $days4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="15" sdnum="1033;"><font size=2><?php echo "" . $traffic_cash4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="16" sdnum="1033;"><font size=2><?php echo "" . $food_cash4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="17" sdnum="1033;"><font size=2><?php echo "" . $total_cash4?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="18" sdnum="1033;"><font size=2><?php echo "" . $total4?></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="25" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="6" sdnum="1033;"><font size=2><?php echo "" . $month5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="7" sdnum="1033;"><font size=2><?php echo "" . $day5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="8" sdnum="1033;"><font size=1><?php echo "" . $start5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="9" sdnum="1033;"><font size=1><?php echo "" . $end5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="10" sdnum="1033;"><font size=2><?php echo "" . $car_cash5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="11" sdnum="1033;"><font size=2><?php echo "" . $house_cash5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="12" sdnum="1033;"><font size=2><?php echo "" . $meet_cash5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="13" sdnum="1033;"><font size=2><?php echo "" . $people5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="14" sdnum="1033;"><font size=2><?php echo "" . $days5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="15" sdnum="1033;"><font size=2><?php echo "" . $traffic_cash5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="16" sdnum="1033;"><font size=2><?php echo "" . $food_cash5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="17" sdnum="1033;"><font size=2><?php echo "" . $total_cash5?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="18" sdnum="1033;"><font size=2><?php echo "" . $total5?></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="25" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=middle><font face="Droid Sans Fallback" size=2>合   计</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="19" sdnum="1033;"><font size=2><?php echo $Car_cash . "";?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="20" sdnum="1033;"><font size=2><?php echo $House_cash . "";?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="21" sdnum="1033;"><font size=2><?php echo $Meet_cash . "";?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdval="22" sdnum="1033;"><font size=2><?php echo $People . "";?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="23" sdnum="1033;"><font size=2><?php echo $Days . "";?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="24" sdnum="1033;"><font size=2><?php echo $Traffic_cash . "";?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="25" sdnum="1033;"><font size=2><?php echo $Food_cash . "";?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="26" sdnum="1033;"><font size=2><?php echo $Total_cash . "";?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="27" sdnum="1033;"><font size=2><?php echo $SUM . "";?></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="22" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><font face="Droid Sans Fallback" size=2>应报金额</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>（大写）</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=4 rowspan=2 align="left" valign=middle><font face="Droid Sans Fallback" size=2><?php echo $total?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="right" valign=middle><font face="Droid Sans Fallback" size=2 color="#333333"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="left" valign=middle sdnum="1033;0;0.00_ "><font face="Droid Sans Fallback" size=2>￥<?php echo "" . $SUM?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>已汇款</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font size=2><br></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="21" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><font face="Droid Sans Fallback" size=2>人 民 币</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>已借款</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font size=2><br></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" height="32" align="left" valign=middle><br></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2>备注</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="center" valign=middle><font size=2><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=2>实报金额</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font size=2><br></font></td>
		<td style="border-left: 1px solid #000000" align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td height="24" align="left" valign=middle></td>
		<td style="border-top: 1px solid #333333" colspan=4 align="left" valign=top><font face="Droid Sans Fallback" size=2>领导审批：</font></td>
		<td style="border-top: 1px solid #333333" colspan=3 align="left" valign=top><font face="Droid Sans Fallback" size=2>会计主管：</font></td>
		<td style="border-top: 1px solid #333333" colspan=3 align="left" valign=top><font face="Droid Sans Fallback" size=2>审核：</font></td>
		<td style="border-top: 1px solid #333333" colspan=2 align="left" valign=top><font face="Droid Sans Fallback" size=2>证明：</font></td>
		<td style="border-top: 1px solid #333333" colspan=2 align="left" valign=top><font face="Droid Sans Fallback" size=2>报销人：</font></td>
		<td align="left" valign=middle><br></td>
	</tr>
	<tr>
		<td height="24" align="left" valign=middle><br></td>
		<td colspan=5 align="left" valign=middle><font face="Droid Sans Fallback" size=1><?php echo "单号：" . $datetime?></font></td>
		<td align="left" valign=middle><br></td>
		<td align="left" valign=middle><br></td>
		<td align="left" valign=middle><br></td>
		<td align="left" valign=middle><br></td>
		<td align="left" valign=middle><br></td>
		<td align="left" valign=middle><br></td>
		<td align="left" valign=middle><br></td>
		<td align="left" valign=middle><br></td>
		<td align="left" valign=middle><br></td>
		<td align="left" valign=middle><br></td>
	</tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>
