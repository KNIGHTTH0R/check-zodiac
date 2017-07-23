<!DOCTYPE html>
<html>
<head>
	<title> Cung hoàng đạo </title>	
	<link rel="shortcut icon" href="/cunghoangdao/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">	
	<meta charset="UTF-8">
</head>
<body>
	<?php
		$day="";
		$month="";
		$image = "";
		$name = "";
		$time = "";
		$flagShow="";
		$result="";
		if(isset($_POST["day"]) && isset($_POST["month"])){
			 $day = $_POST["day"];
			 $month = $_POST["month"];
			 $flagShow = true;
			 if (is_numeric($day) && is_numeric($month)) {
			 	switch ($month) {
					case 1:
						if($day <= 19){$image = "capricorn";   $name = "Ma Kết";   $time = "22/12 - 19/1";};
						if($day >  19){$image = "aquarius";    $name = "Bảo Bình"; $time = "20/1 - 18/2";};
						if($day < 1 || $day > 31) {$flagShow = false;};
						break;
					case 2:
						if($day <= 18){$image = "aquarius";    $name = "Bảo Bình"; $time = "20/1 - 18/2";};
						if($day > 18){$image = "pisces";	$name = "Song Ngư";	$time = "19/2 - 20/3";;};
						if($day < 1 || $day > 29) {$flagShow = false;};
						break;
					case 3:
						if($day <= 20){$image = "pisces";	$name = "Song Ngư";	$time = "19/2 - 20/3";};
						if($day > 20){$image = "aries"; $name = "Bạch Dương"; $time = "21/3 - 19/4";};
						if($day < 1 || $day > 31) {$flagShow = false;};
						break;
					case 4:
						if($day <= 19){$image = "aries"; $name = "Bạch Dương"; $time = "21/3 - 19/4";};
						if($day > 19){$image = "taurus"; $name = "Kim Ngưu"; $time = "20/4 - 20/5";};
						if($day < 1 || $day > 30) {$flagShow = false;};
						break;
					case 5:
						if($day <= 20){$image = "taurus"; $name = "Kim Ngưu"; $time = "20/4 - 20/5";};
						if($day > 20){$image = "gemini"; $name = "Song Tử"; $time = "21/5 - 21/6";};
						if($day < 1 || $day > 31) {$flagShow = false;};
						break;
					case 6:
						if($day <= 21){$image = "gemini"; $name = "Song Tử"; $time = "21/5 - 21/6";};
						if($day > 21){$image = "cancer"; $name = "Cự Giải"; $time = "22/6 - 22/7";};
						if($day < 1 || $day > 30) {$flagShow = false;};
						break;
					case 7:
						if($day <= 22){$image = "cancer"; $name = "Cự Giải"; $time = "22/6 - 22/7";};
						if($day > 22){$image = "leo"; $name = "Sư Tử"; $time = "23/7 - 22/8";};
						if($day < 1 || $day > 31) {$flagShow = false;};
						break;
					case 8:
						if($day <= 22){$image = "leo"; $name = "Sư Tử"; $time = "23/7 - 22/8";};
						if($day > 22){$image = "virgo"; $name = "Xử Nữ"; $time = "23/8 - 22/9";};
						if($day < 1 || $day > 31) {$flagShow = false;};
						break;
					case 9:
						if($day <= 22){$image = "virgo"; $name = "Xử Nữ"; $time = "23/8 - 22/9";};
						if($day > 22){$image = "libra"; $name = "Thiên Bình"; $time = "23/9 - 23/10";};
						if($day < 1 || $day > 30) {$flagShow = false;};
						break;
					case 10:
						if($day <= 23){$image = "libra"; $name = "Thiên Bình"; $time = "23/9 - 23/10";};
						if($day > 23){$image = "scorpio"; $name = "Thiên Yết"; $time = "24/10 - 22/11";};
						if($day < 1 || $day > 31) {$flagShow = false;};
						break;
					case 11:
						if($day <= 22){$image = "scorpio"; $name = "Thiên Yết"; $time = "24/10 - 22/11";};
						if($day > 22){$image = "sagittarius"; $name = "Nhân Mã"; $time = "23/11 - 21/12";};
						if($day < 1 || $day > 30) {$flagShow = false;};
						break;
					case 12:
						if($day <= 21){$image = "sagittarius"; $name = "Nhân Mã"; $time = "23/11 - 21/12";};
						if($day > 21){$image = "capricorn"; $name = "Ma Kết"; $time = "22/12 - 19/1";};
						if($day < 1 || $day > 31) {$flagShow = false;};
						break;
					default:
							$flagShow =  false;
						break;
				};
				
			 } else $flagShow = false;
			 if ($flagShow==true) {
						$result =  '<div class="result">
							<img src="images/'.$image.'.jpg" alt="'.$image.'">
							<p>'.$name." ".'<span>(' .ucfirst($image).' : '.$time.')</span></p>
					    </div>';} else $result = "Dữ liệu không hợp lệ.";
		}
	?>
	<div class="content">
		<h1> Bạn thuộc cung hoàng đạo gì ? </h1>
		<form action="#" method="post" name="main-form">
			<div class="row">
				<span> Ngày sinh </span>
				<input type="text" name="day" value="<?php echo  $day?>">
			</div>
			<div class="row">
				<span> Tháng sinh </span>
				<input type="text" name="month" value="<?php echo  $month?>">
			</div>
			<div class="row">
				<input type="submit" name="kiemtra" value="Kiểm tra">
			</div>				
		</form>
		<?php
		echo $result;
		?>
		
	</div>
	
<p><center><font color="white" family="Tahoma" size="5">About <a href="https://www.facebook.com/foll.jsame" target="#">Đỗ Nguyễn Cương</a></font></center></p>
</body>
</html>