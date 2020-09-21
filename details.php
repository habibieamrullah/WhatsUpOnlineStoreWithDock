<?php
	include("config.php");
	include("functions.php");
	include("uilang.php");
?>

<div>
	<?php
	$currentlogo = "images/logo.png";
	if($logo != "")
		$currentlogo = "pictures/" . $logo;
	?>
	<a href="<?php echo $baseurl ?>"><img src="<?php echo $baseurl . $currentlogo ?>" style="height: 64px;"></a>
</div>

<h1 style="margin: 0px; font-size: 30px; color: <?php echo $maincolor ?>; font-weight: bold;"><a href="<?php echo $baseurl ?>"><?php echo $websitetitle ?></a></h1>
<div style="font-size: 13px;"><?php echo $about ?></div>

<div style="text-align: left">
<h3>Social Links</h3>
	<a href="#"><i class="fa fa-facebook"></i> Facebook Link</a><br>
	<a href="#"><i class="fa fa-instagram"></i> Instagram Link</a><br>
	<a href="#"><i class="fa fa-twitter"></i> Twitter Link</a><br>

	<h3>Chat with us</h3>
	<a href="https://wa.me/<?php echo $adminwhatsapp ?>"><i class="fa fa-whatsapp"></i> <?php echo $adminwhatsapp ?></a><br>

	<h3>Other Links</h3>
	<a href="#"><i class="fa fa-link"></i> Other Link</a><br>
	<a href="#"><i class="fa fa-link"></i> Other Link</a><br>
	<a href="#"><i class="fa fa-link"></i> Other Link</a><br>
	<a href="#"><i class="fa fa-link"></i> Other Link</a><br>
	<a href="#"><i class="fa fa-link"></i> Other Link</a><br>
	<a href="#"><i class="fa fa-link"></i> Other Link</a><br>
	<a href="#"><i class="fa fa-link"></i> Other Link</a><br>
	<a href="#"><i class="fa fa-link"></i> Other Link</a><br>
	<a href="#"><i class="fa fa-link"></i> Other Link</a><br>
</div>