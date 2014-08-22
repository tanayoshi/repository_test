<?php
	/*Gitテスト用*/
	require_once("./admin/common/convert.php");
	require_once("./admin/common/db.php");
	$mydb = db_con();
	
	//商品一覧取得
//	$sql = "DELETE FROM SWE_FIELD ".
//				"WHERE 商品番号 NOT IN( ".
//				" 			SELECT MAX(商品番号) FROM SWE_FIELD ".
//				"			)".
//				";";
	$sql = "SELECT MAX(商品番号) FROM SWE_FIELD; ";
	$res = mysql_query($sql, $mydb);
	
//	$sql = "SELECT * FROM SWE_FIELD ;";
//	$res = mysql_query($sql, $mydb);
	$row = mysql_array($res );
	echo $row[0]['MAX(商品番号)'];
	print_r($row);
	
	//HTMLを生成
	$html = "<table border='1px'><tr><td>商品番号</td><td>商品名</td><td>価格</td></tr>";
	foreach($row as $value){
		$html.='<tr><td>'.$value['商品番号'].'</td><td>'.$value['商品名'].'</td><td>'.$value['価格'].'</td></tr>';
	}
	$html.= "</table>";
	
/*	$sql = "SELECT * FROM ".
				   "       TEST_FIELD;";
	$res = mysql_query($sql, $mydb );
	$row = mysql_array($res );
	$rows_num = mysql_num_rows($res);
	print_r($row);*/
	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>田中練習用</title>
</head>

<body>
<!--
<?php
	function test(){
		$a = $_POST['a'];
		$b = $_POST['b'];
		if(($a != "") &&($b != "")){
			$temp = $a * $b;
			echo $temp;
		}else{echo "値を入力してください";}
	}
	
	function test2(){
		$c = $_POST['c'];
		if($c != ""){
			$temp2 = 1;
			for($i = 1; $i <= $c; $i++){
				$temp2 = $temp2 * $i;
			}
			echo $temp2;
		}else{echo "値を入力してください";}
	}
	
	$mail = $_POST['d'];
	$array_mail = explode("@", $mail);
	$mail_f = $array_mail[0];
	$mail_b = $array_mail[1];
?>

<form method="post">
	<p>
		a : <input type="text" name="a"><br />
        b : <input type="text" name="b"><br />
        a * b = <?php test(); ?><br>
    </p>
    <p>
    		max : <input type="text" name="c"><br />
        max ! = <?php test2(); ?><br>
    </p>
    <p>
    		mail : <input type="text" name="d"><br />
        @前 : <?php echo $mail_f; ?><br />
        @後 : <?php echo $mail_b; ?><br />
    </p>
    <p>
	    	<input type="submit">
    </p>
</form>
<?php
	echo "<p>";
	$array_imp = array("東", "西", "南", "北");
	echo implode("->", $array_imp);
	echo "</p>";
?>-->

<?php
	$sql = "";
	$res = mysql_query($sql, $mydb);
?>
	<!-- ここに書き出し -->
	<?= $html ?>
</body>
</html>
