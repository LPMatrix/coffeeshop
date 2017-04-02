<?php 
	$coffee=$_GET['c'];
	$size=$_GET['s'];
	$cream=$_GET['cr'];
	$sugar=$_GET['su'];

	if ($size == "extralarge") {
		$cost = 4;
	} elseif ($size=="large") {
		$cost=3.5;
	} elseif ($size=="medium") {
		$cost=3;
	} elseif ($size="small") {
		$cost=2.5;
	}
	
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>My Shop</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script src="js/menu_jquery.js"></script>
</head>
<?php include 'header.php'; ?>
<!--single start here-->
		 <div class="single">
			<div class="container">
			<div class="col-md-8 ">
				<div class=" single-grid">

					<div class="lone-line">
						<h4>Your Order</h4>

						<div class="jumbotron">
							<div class="single-bottom">
		
				<div class="jumbotron" style="background-color:#fff;padding:10px">
					<?php 
					for ($i=1; $i <= $coffee; $i++) { 
						if ($size=="small") {
							echo '<img src="images/small.jpg" style="height:50px;width:50px;">';
						} elseif ($size=="medium") {
							echo '<img src="images/medium.jpg" style="height:80px;width:80px;">';
						} elseif ($size=="large") {
							echo '<img src="images/large.jpg" style="height:100px;width:100px;">';
						} elseif ($size=="extralarge") {
						echo '<img src="images/extralarge.jpg" style="height:120px;width:120px;">';
						}
					}
						

						if ($cream>0 || $sugar>0) {
							if ($cream>0) {
								echo '<img src="images/plus.png">';
								for ($i=1; $i <=$cream ; $i++) { 
								echo '<img src="images/cream.jpg">';
								}
							}
							if ($sugar>0) {
								echo '<img src="images/plus.png">';
								for ($i=1; $i <=$sugar ; $i++) { 
								echo '<img src="images/sugar.jpg">';
								}
							}
						}
						
					 ?>
				</div>
				<div class="clearfix"></div>
				<p>Cost: $<?php 
					$p=$cost*$coffee+(0.13*$cost);
				echo $cost." X ".$coffee."+ tax = $".$p; ?></p>
			
		</div>
						</div>

					</div>
				</div>


				</div>
					<div class="col-md-3 categories-grid">
				<div class="grid-categories">
					<h4>Categories</h4>
					<ul class="popular ">
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Coffee</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Wifi</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Coffee</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Wifi</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Coffee</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Wifi</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Coffee</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Wifi</a></li>
					</ul>
				</div>

			</div>
				<div class="clearfix"> </div>
			
			</div>
	</div>

<!--//single end here-->
<?php include 'footer.php'; ?>