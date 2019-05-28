<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/styles.css"/>
	<title><?php echo $titleName; ?></title>
	<script src="../javascript/ajax.js"></script>
</head>
<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Fran's Furniture</h1>
		</section>
	</header>
	<nav>
		<ul>
			<li><a href="home">Home</a></li>
			<li><a href="furniture">Our Furniture</a></li>
			<li><a href="about">About Us</a></li>
			<li><a href="contact">Contact us</a></li>
			<li><a href="faq">FAQs</a></li>
			<?php if(isset($_SESSION['sessUsername'])){ ?>
				<li><a href="../admin/public_html/login">Admin Section</a></li>
				<li><a href="../admin/public_html/logout">Logout</a></li>
			<?php }else{?>
				<li><a href="../admin/public_html/login">Login</a></li>
			<?php } ?>
		</ul>
	</nav>
<img src="../images/randombanner.php"/>
	<main class="<?php echo $class_name; ?>">
		<?php echo $contents; ?>
	</main>
	<footer>
		<!-- Copyright date will be automatically update -->
		&copy; Fran's Furniture <?php echo Date("Y"); ?>
	</footer>
</body>
</html>
