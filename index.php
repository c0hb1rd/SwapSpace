<!doctype html>
<html>
    <head>
        <title>cohbird Personal Page</title> 
        <meta charset="utf-8" />
    </head>
    <style type="text/css">
        body {
            margin:0 auto;
            padding:0;
            width:800px;
            text-align:center;
        }
div#body {
    text-align=center;
    width:800px;
    height:500px;
<!--     background:#000000 -->

}
div#body1 {
<!-- background:#ff0000 -->
}
div#body2 {
<!-- background:#ffff00 -->
}
div#body3 {
<!-- background:#aaafff -->
}
div#body4 {
<!-- background:#bbffff -->
}
    </style>
    <body> 
<div id="body">
        <div id="body1">
            <h1>Welcome to my page.</h1> 
        </div>
        <div id="body2">
            <p>Step 1</p>
</div>
<div id="body3">
<p>What's your name</p>
</div>
<div id="body4">
<form action="index.php" method="post">
<input type="text" name=name title="input your name" autofocus="aurofocus">
<br />
<br />
<input type="submit" value="Submit">
</form>
<div>
</div>
<?php
header('Content-Type: text/html; charset=utf-8');
$name = $_POST["name"];
                if($name != null && $name != "") {
                    $myDb = mysql_connect("localhost:3306", "root", "417811...");
                    mysql_set_charset("utf8");
                    mysql_select_db("myspace", $myDb);
                    mysql_query("set character set 'utf8'");
                    mysql_query("set names 'utf8'");
                    mysql_query("INSERT INTO useduser(name) values(\"$name\")");
                    mysql_close($myDb);
                }

            ?>
        </div>
    </body>
</html>
