<?php 
	$submit=$_POST['submit'];

if (isset($submit)) {
	$coffee=$_POST['coffee'];
	$size=$_POST['size'];
	$cream=$_POST['cream'];
	$sugar=$_POST['sugar'];

	if ($coffee <= 0) {
		header("Location:index.php?error=1");
		exit();
	} elseif (!strcasecmp("select", $size)) {
		header("Location:index.php?error=2");
		exit();
	} elseif ($cream==0) {
		header("Location:index.php?error=3");
		exit();
	} elseif ($sugar==0) {
		header("Location:index.php?error=4");
		exit();
	}

	header("Location:order.php?c=$coffee&s=$size&cr=$cream&su=$sugar");	
}
else{
	header("location:index.php");

}
	
 ?>