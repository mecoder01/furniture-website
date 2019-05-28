<p>Welcome to Fran's Furniture. We're a family run furniture shop based in Northampton. We stock a wide variety of modern and antique furniture including laps, bookcases, beds and sofas.
THIS IS A HOME PAGE</p>
<?php 
	foreach ($offerQuery as $updateAsRow) {
?>
	<h1><?php echo $updateAsRow['title']; ?></h1>
	<!-- displaying image in the special offers page -->
	<img style="width:50%; height: 50%;" src="../images/furniture/<?php echo $updateAsRow['images']; ?>" alt="loading Image">
	<p><strong>Starting From: </strong><?php echo $updateAsRow['start_date'] ?></p>
	<p><strong>upto date: </strong> <?php echo $updateAsRow['end_date'] ?></p>
	<p><strong>Description of Products:</strong> <?php echo $updateAsRow['description'] ?></p>
<?php } ?>