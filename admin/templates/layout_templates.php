<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../../css/styles.css"/>
		<title><?php echo $titleName ?></title>
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
			<li><a href="../../public_html/home">Home</a></li>
			<li><a href="../../public_html/furniture">Our Furniture</a></li>
			<li><a href="../../public_html/about">About Us</a></li>
			<li><a href="../../public_html/contact">Contact us</a></li>
			<li><a href="../../public_html/faq">FAQs</a></li>
			<?php if (isset($_SESSION['sessAdmin']) || isset($_SESSION['sessSuperAdmin'])) {?>
				<li><a href="../public_html/logout">Logout</a></li>
			<?php } ?>
		</ul>
	</nav> 
<img src="../../images/randombanner.php"/>
	<main class="admin">
		<?php if (isset($_SESSION['sessAdmin']) || isset($_SESSION['sessSuperAdmin'])) { 
			require 'sectionLeft_templates.php'; }?>
		<?php echo $contents; ?>
	</main>
	<footer>
		&copy; Fran's Furniture <?php echo Date("Y"); ?>
	</footer>
</body>
</html>

