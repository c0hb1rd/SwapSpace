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
	
	$apartment = $_GET['apartment'];
	
	$cash1 = (int)$_GET['cash1'];
	$cash2 = (int)$_GET['cash2'];
	$cash3 = (int)$_GET['cash3'];
	$cash4 = (int)$_GET['cash4'];
	$sum = $cash1 + $cash2 + $cash3 + $cash4;
	
	$information1 = $_GET['information1'];
	$information2 = $_GET['information2'];
	$information3 = $_GET['information3'];
	$information4 = $_GET['information4'];
	
	$remark = $_GET['remark'];
	
	function turn($arg) {
		switch ($arg) {
			case 0: echo "零"; break;
			case 1: echo "壹"; break;
			case 2: echo "贰"; break;
			case 3: echo "叁"; break;
			case 4: echo "肆"; break;
			case 5: echo "伍"; break;
			case 6: echo "陆"; break;
			case 7: echo "柒"; break;
			case 8: echo "捌"; break;
			case 9: echo "玖"; break;
		}
	}
	
    $myDb = mysql_connect("localhost:3306", "root", "hackingme?233333");
	mysql_set_charset("utf8");
	mysql_select_db("formdb", $myDb);
	mysql_query("set character set 'utf8'");
	mysql_query("set names 'utf8'");
	mysql_query("INSERT INTO form(apartment, id_page, cash1, cash2, cash3, cash4, sum, information1, information2, information3, information4, remark) values(\"$apartment\", \"$datetime\", $cash1, $cash2, $cash3, $cash4, $sum, \"$information1\", \"$information2\", \"$information3\", \"$information4\", \"$remark\")");
?>

<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 4.4.6.3 (Linux)"/>
	<meta name="author" content="Crackgg "/>
	<meta name="created" content="2015-11-30T18:29:41.959705587"/>
	<meta name="changedby" content="Crackgg "/>
	<meta name="changed" content="2015-11-30T19:50:55.881707019"/>
	
	<style type="text/css">
	body{
		margin: 0 auto;
		padding: 0;
		width: 840px
	}
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Liberation Sans"; font-size:x-small }
	</style>
	
</head>

<body>
<table cellspacing="0" border="0">
	<colgroup span="2" width="85"></colgroup>
	<colgroup width="88"></colgroup>
	<colgroup width="85"></colgroup>
	<colgroup span="8" width="19"></colgroup>
	<colgroup width="28"></colgroup>
	<colgroup span="3" width="85"></colgroup>
	<colgroup width="48"></colgroup>
	<tr>
		<td colspan=17 rowspan=2 height="58" align="center" valign=middle bgcolor="#FFFFFF"><u><font face="Droid Sans Fallback" size=6>     汕尾职业技术学院费用报销审批单    </font></u></td>
		</tr>
	<tr>
		</tr>
		
	<tr>
		<td height="29" align="center" valign=middle><font face="Droid Sans Fallback" size=3>报销部门：</font></td>
		<td align="left"><font size=2><?php  echo $apartment?></font></td>
		<td align="left"><font size=3><br></font></td>
		<td align="left"><font size=3><br></font></td>
		<td colspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2><?php echo date("Y")?>年</font></td>
		<td align="left"><font size=3><br></font></td>
		<td colspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2><?php echo date("m")?>月</font></td>
		<td align="left"><font size=3><br></font></td>
		<td colspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=2><?php echo date("d")?>日</font></td>
		<td align="left"><font size=3><br></font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td colspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3>单据及附件共</font></td>
		<td align="center" valign=middle><font face="Droid Sans Fallback" size=3>页</font></td>
	</tr>
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000" rowspan=2 height="58" align="right" valign=middle><font face="Droid Sans Fallback" size=3>用</font></td>
		<td style="border-top: 1px ridge #000000" align="left"><font size=3><br></font></td>
		<td style="border-top: 1px ridge #000000" align="left"><font size=3><br></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="left" valign=middle><font face="Droid Sans Fallback" size=3>途</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" colspan=8 align="center" valign=middle><font face="Droid Sans Fallback" size=3>金                        额</font></td>
		<td style="border-top: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=3 align="center" valign=middle><font face="Droid Sans Fallback" size=3>备</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" colspan=4 rowspan=6 align="left" valign=middle><font size=3><?php  echo $remark?></font></td>
		</tr>
	<tr>
		<td style="border-bottom: 1px ridge #000000" align="left"><font size=3><br></font></td>
		<td style="border-bottom: 1px ridge #000000" align="left"><font size=3><br></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=3>十</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="left" valign=middle><font face="Droid Sans Fallback" size=3>万</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="left" valign=middle><font face="Droid Sans Fallback" size=3>千</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="left" valign=middle><font face="Droid Sans Fallback" size=3>百</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="left" valign=middle><font face="Droid Sans Fallback" size=3>十</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="left" valign=middle><font face="Droid Sans Fallback" size=3>元</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="left" valign=middle><font face="Droid Sans Fallback" size=3>角</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="left" valign=middle><font face="Droid Sans Fallback" size=3>分</font></td>
		</tr>
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" colspan=4 rowspan=2 height="58" align="center" valign=middle><font size=3><?php  echo $information1?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash1 / 100000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash1 % 100000 / 10000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash1 % 10000 / 1000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash1 % 1000 / 100); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash1 % 100 / 10); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash1 % 10); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  0 / $cash1; echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  0 / $cash1; echo "$result"?></font></td>
		</tr>
	<tr>
		<td style="border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=3 align="center" valign=middle><font face="Droid Sans Fallback" size=3>注</font></td>
		</tr>
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" colspan=4 rowspan=2 height="58" align="center" valign=middle><font size=3><?php  echo $information2?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash2 / 100000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash2 % 100000 / 10000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash2 % 10000 / 1000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash2 % 1000 / 100); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash2 % 100 / 10); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash2 % 10); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  0 / $cash2; echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  0 / $cash2; echo "$result"?></font></td>
		</tr>
	<tr>
		</tr>
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" colspan=4 rowspan=2 height="58" align="center" valign=middle><font size=3><?php  echo $information3?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash3 / 100000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash3 % 100000 / 10000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash3 % 10000 / 1000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash3 % 1000 / 100); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash3 % 100 / 10); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash3 % 10); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  0 / $cash3; echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  0 / $cash3; echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle><font size=3><br></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" colspan=4 rowspan=6 align="center" valign=middle><font size=3><br></font></td>
		</tr>
	<tr>
		<td style="border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=3>领</font></td>
		</tr>
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" colspan=4 rowspan=2 height="58" align="center" valign=middle><font size=3><?php  echo $information4?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash4 / 100000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash4 % 100000 / 10000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash4 % 10000 / 1000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash4 % 1000 / 100); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash4 % 100 / 10); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($cash4 % 10); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  0 / $cash4; echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  0 / $cash4; echo "$result"?></font></td>
		<td style="border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=3>导</font></td>
		</tr>
	<tr>
		<td style="border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=3>审</font></td>
		</tr>
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000" rowspan=2 height="58" align="right" valign=middle><font size=3><br></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3>合</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3>计</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="left" valign=middle><font size=3><br></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($sum / 100000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($sum % 100000 / 10000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($sum % 10000 / 1000); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($sum % 1000 / 100); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($sum % 100 / 10); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  (int) ($sum % 10); echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  0 / $sum; echo "$result"?></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" rowspan=2 align="center" valign=middle><font size=3><?php $result =  0 / $sum; echo "$result"?></font></td>
		<td style="border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle><font face="Droid Sans Fallback" size=3>批</font></td>
		</tr>
	<tr>
		<td style="border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="left"><font size=3><br></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000" rowspan=2 height="58" align="center" valign=middle><font face="Droid Sans Fallback" size=3>金额大写：</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3><?php $result =  (int) ($sum / 100000); if ($result >= 10) echo "$result"; else turn($result)?>拾</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3><?php $result =  (int) ($sum % 100000 / 10000); turn($result)?>万</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3><?php $result =  (int) ($sum % 10000 / 1000); turn($result)?>仟</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000" colspan=3 rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3><?php $result =  (int) ($sum % 1000 / 100); turn($result)?>佰</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000" colspan=3 rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3><?php $result =  (int) ($sum % 100 / 10); turn($result)?>拾</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000" colspan=3 rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3><?php $result =  (int) ($sum % 10); turn($result)?>元</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3><?php $result =  0 / $sum; turn($result)?>角</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000" rowspan=2 align="center" valign=middle><font face="Droid Sans Fallback" size=3><?php $result =  0 / $sum; turn($result)?>分</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-right: 1px ridge #000000" colspan=2 rowspan=2 align="left" valign=middle><font face="Droid Sans Fallback" size=3>     ￥ <?php echo "$sum"?></font></td>
		</tr>
	<tr>
		</tr>
	<tr>
		<td height="29" align="center" valign=middle><font face="Droid Sans Fallback" size=3>会计主管：</font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font face="Droid Sans Fallback" size=3>审核：</font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font face="Droid Sans Fallback" size=3>证明：</font></td>
		<td align="center" valign=middle><font size=3><br></font></td>
		<td align="center" valign=middle><font face="Droid Sans Fallback" size=3>报销人：</font></td>
		<td align="left"><br></td>
	</tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>
<?php
	echo "<p>单号：" . $datetime . "</p>";
?>