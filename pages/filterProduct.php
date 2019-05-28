<?php 
	require '../database/database_connect.php';
	require '../classes/FurnitureDatabaseTable.php';
	
	$furniture_table = new FurnitureDatabaseTable('furniture_table');
	$category_table= new FurnitureDatabaseTable('category_table');

	$postFurniture = $furniture_table->select('furniture_details', $_POST['filter_details']);
	$categoryQuery = $category_table->selectAll();
	?>
	<li class="furniture">
		<?php
		foreach ($postFurniture as $furniture) {
			if($furniture['view']=='enable'){
				$categoryQuery = $category_table->select('category_id',$furniture['category_id']);
				$category = $categoryQuery->fetch();
				echo '<li>';
				if (file_exists('../images/furniture/' . $furniture['furniture_id'] . '.jpg')) {
					echo '<a href="../images/furniture/' . $furniture['furniture_id'] . '.jpg"><img src="../images/furniture/' . $furniture['furniture_id'] . '.jpg" /></a>';
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
		}
		?>
	</li>