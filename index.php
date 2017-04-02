<?php 
if (@$_GET['error']==1) {
	$errMsg="How many cups of coffee do you want?";
} elseif (@$_GET['error']==2) {
	$errMsg="We gotta know the size of cup";
} elseif (@$_GET['error']==3) {
	$errMsg="How many creams do you want?";
}elseif (@$_GET['error']==4) {
	$errMsg="How many sugar do you want?";
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
						<h4>Make your Order</h4>

						<div class="jumbotron">
							<div class="single-bottom">
								<?php if (isset($errMsg)) { ?>
								
								
								<div class="alert alert-danger alert-dismissible">
									<p><?php echo $errMsg; ?> </p>
								</div>;

								<?php }
								?>
				<form action="process.php" method="POST">
						<div class="col-md-6 comment">
							<input type="number" min="0" placeholder="No. of Coffees" name="coffee">
						</div>
						<div class="col-md-6 comment">
							<input type="number" min="0" placeholder="No. of Sugars" name="sugar">
						</div>
						<div class="col-md-6 comment">
							<input type="number" min="0" placeholder="No. of Creams" name="cream">
						</div>
						<div class="col-md-6 comment">
							<select class="opt" name="size">
								<option value="select">Select</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
								<option value="extralarge">Extra Large</option>
							</select>
						</div>
						<div class="clearfix"> </div>
	
							<button class="btn btn-success" type="submit" name="submit">Order</button>
						
				</form>
			
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