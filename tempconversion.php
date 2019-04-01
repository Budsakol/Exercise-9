<html>
<body>
<?php 
	$temperature = $_REQUEST["temperature"];
	$result = 0;
	$unit = "";
	if (isset($_REQUEST["FtoC"])) /*issetคือ ใช้เพื่อตรวจสอบว่า "ตัวแปรนั้นๆ ได้ถูกกำหนดขึ้น และมีค่าที่ไม่ใช่ null หรือไม่"
 */ { 
		$result = 5.0/9.0 * ($temperature - 32);
		$unit = "Celsius";
	} elseif(isset($_REQUEST["CtoF"])) {
		$result = 9.0/5.0 * $temperature + 32;
		$unit = "Fahrenheit";
	}
	
	echo "The result is " .$result. " ". $unit;
	 
?>
</body>
</html>