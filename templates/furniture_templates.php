<section class="left">
		<ul>
			<?php foreach ($categoryQuery as $category_row) { ?>
				<li><a href="categories&category_id=<?php echo $category_row['category_id'] ?>"><?php echo $category_row['category_name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>
	<section class="right">
		<form action="" method="POST">
			<select class="filter_details">
				<option value="new">New</option>
				<option value="second hand">Second Hand</option>
			</select>
		</form>
		<br>
		<hr>
		<h1>Furniture</h1>
		<ul id="furnitureSelectQuery" class="furniture">
			<?php
			foreach ($furnitureQuery as $furniture) {
				$categoryQuery = $category_table->select('category_id',$furniture['category_id']);
				$category = $categoryQuery->fetch();
				echo '<li>';
				if (file_exists('../images/furniture/' . $furniture['images'])) {
					echo '<img style="width:50%;" src="../images/furniture/'.$furniture['images']. '" alt="">';
				}
				echo '<div class="details">';
				echo '<h2>' . $furniture['furniture_name'] . '</h2>';
				echo '<h3>' . $category['category_name'] . '</h3>';
				echo '<h4>£' . $furniture['furniture_price'] . '</h4>';
				echo '<p>' . $furniture['description'] . '</p>';
				echo '<p style="color:red;">' . $furniture['furniture_details'] . '</p>';
				echo '</div>';
				echo '</li>';
			}
			?>
		</ul>
</section>