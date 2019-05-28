<section class="left">
		<ul>
			<?php foreach ($categoryQuery as $category_row) { ?>
				<li class="<?php if($_GET['category_id']==$category_row['category_id']) echo "current"; ?>"><a href="categories&category_id=<?php echo $category_row['category_id'] ?>"><?php echo $category_row['category_name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>
	<section class="right">
	<ul class="furniture">
	<?php
	foreach ($furnitureQuery as $furniture) {
		if($furniture['view'] == 'enable'){
		echo '<li>';
		if (file_exists('../images/furniture/' . $furniture['furniture_id'] . '.jpg')) {
			echo '<a href="../images/furniture/' . $furniture['furniture_id'] . '.jpg"><img src="../images/furniture/' . $furniture['furniture_id'] . '.jpg" /></a>';
		}
		echo '<div class="details">';
		echo '<h2>' . $furniture['furniture_name'] . '</h2>';
		echo '<h3>£' . $furniture['furniture_price'] . '</h3>';
		echo '<p>' . $furniture['description'] . '</p>';
		echo '<p>' . $furniture['furniture_details'] . '</p>';
		echo '</div>';
		echo '</li>';
		}
	}
	?>
</ul>
</section>