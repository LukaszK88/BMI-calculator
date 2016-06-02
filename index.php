<?php


if (isset($_POST['height']) or isset($_POST['weight'])){
	$height = htmlentities($_POST['height']);
	$weight = htmlentities($_POST['weight']);
	
	$H_W = ($height and $weight);
	$height_dec = ($height * (0.01));
	$final_height = ($height_dec * $height_dec);
	@$BMI = ($weight / $final_height);
	$BMI_F = number_format($BMI, 1, ',', ' ');
	
	$perfect_BMI_low = number_format(($final_height * 19), 1, ',', ' ');
	$perfect_BMI_high = number_format(($final_height * 22), 1, ',', ' ');
	
		if(!empty($H_W)){
			if(strlen($height)>3 || strlen($weight)>3){
				echo 'Please adhere to maxlength of three characters in cm and kg';
			}
				
			
		}else{
			echo'enter your data';
		}
}
include 'form.php';

  @$underweight = ($BMI_F)<=18.5;
  @$normal = (($BMI_F)>=18.6 and ($BMI_F)<=24.9);
  @$overweight = (($BMI_F)>=25 and ($BMI_F)<=29.9);
  @$obese = ($BMI_F)>=30;
	
		if(isset($H_W) and !empty($H_W)){
			if($underweight){
				echo "<font color='red'>you are undeweight</font>";
			} if($normal){
				echo "<font color='green'>you are in normal range</font>";
			} if($overweight){
				echo "<font color='red'>you are FAT</font>";
			} if($obese){
				echo "<font color='red'>you are  super FAT....</font>";
			} 
	
				if($BMI_F>22.1 or $BMI_F<18.9){
					echo "<br>your ideal weight should be between $perfect_BMI_low kg and $perfect_BMI_high kg ";
					
				}


					if($BMI_F<18.9){
					 echo '<br> You need to beef up!';
					}elseif($BMI_F>22.1) {
					 echo '<br> You seriously need to lose some weight...<br>
					 Try our Body Fat calculator<br>
					<a href="http://127.0.0.1/body_fat_calculator/index.php">
					<input type="button" value="try it out!"></a>';
					 
					}else {
					 echo '<br> You are the PERFECT weight. Keep it up!';
				 }
if(isset($H_W) and !empty($H_W)){
		include 'bmi_chart.php';
	} 
}	
?>
