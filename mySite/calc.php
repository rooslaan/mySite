<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<link rel="stylesheet" href="css/stylecalc.css" >
</head>
<body>
<header class="header">
        <a href="indexhome.html" class="menu__logo">mysite</a>
        <nav class="menu">
            <ul class="menu__ul">
                <li class="menu__li"><a href="indexhome.html" class="menu__link">HOME</a></li> 
                <li class="menu__li"><a href="indexlabs.html" class="menu__link">LABS</a></li>   
                <li class="menu__li"><a href="indexstory.html" class="menu__link">STORY</a></li>   
                <li class="menu__li"><a href="indexblog.html" class="menu__link">BLOG</a></li>   
            </ul>
        </nav>
</header>
<?php 
if (isset($_GET["arg1"])) $arg1 = $_GET["arg1"];
if (isset($_GET["arg2"])) $arg2 = $_GET["arg2"];
$res = "";
if (isset($_GET["calc"]))
	switch ($_GET["calc"]){
		case "add": $res = $arg1 + $arg2; break;
		case "sub": $res = $arg1 - $arg2; break;
		case "mul": $res = $arg1 * $arg2; break;
		case "div": if ($arg2 != 0) $res = $arg1 / $arg2; else $res = "Error"; break;
		case "C": $res = " "; $arg1 = " "; $arg2 = " "; break;
		case "cos": $res = cos($arg1); $res = round($res, $arg2); break;
		case "sin": $res = sin($arg1); $res = round($res, $arg2); break;
		case "tan": if (cos($arg1) != 0) {$res = sin($arg1)/cos($arg1); $res = round($res, $arg2);} else $res = "Error"; break;
		case "ctan": if(sin($arg1) != 0){$res =  cos($arg1)/sin($arg1); $res = round($res, $arg2);} else $res = "Error"; break;
		case "^2": $res = pow($arg1,2); break;
	}
?>
	<form action="calc.php" method="get">
		<?php if($res !== "") echo "<p>arg1:".$arg1."   arg2:".$arg2."<br>Result: ".$res."</p>"?>
		<input type="text" name="arg1">
		<input type="text" name="arg2" ><br/>
		<input id="but_1" class="button" type="submit" name="calc" value="add">
		<input id="but_2" class="button" type="submit" name="calc" value="sub">
		<input id="but_3" class="button" type="submit" name="calc" value="mul">
		<input id="but_4" class="button" type="submit" name="calc" value="div"><br/>
		<input id="but_5" class="button" type="submit" name="calc" value="^2">
		<input id="but_6" class="button" type="submit" name="calc" value="C"><br/>
		<input id="but_7" class="button" type="submit" name="calc" value="cos">
		<input id="but_8" class="button" type="submit" name="calc" value="sin">
		<input id="but_9" class="button" type="submit" name="calc" value="tan">
		<input id="but_10" class="button" type="submit" name="calc" value="ctan">
	</form>
</body>
</html>