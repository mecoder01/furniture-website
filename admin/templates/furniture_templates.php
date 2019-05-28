<section class="right">		
	<h2>Furnitures</h2>
	<a class="new" href="saveFurniture">Add new furniture</a>
	<?php
	// auto generating a table for furniture data table
		$gen_table->setTableHeadings([
			'S.N.', 
			'Furniture Name',
			'Description',
			'Furniture View',
			'Price',
			'Furniture Details',
			'Category Name',
			'Images',
			'Action']);
		$serialNum = 1;
		foreach ($selectFurnitures as $furniture) {
			$gen_table->addTableRow([
				$serialNum++, 
				$furniture['furniture_name'],
				$furniture['description'],
				$furniture['view'],
				'£' . $furniture['furniture_price'],
				$furniture['furniture_details'],
				$furniture['category_name'],
				'<img style="width:100%;" src="../../images/furniture/'.$furniture['images'].'" alt="">',
				'<a href="saveFurniture&furnitureId=' . $furniture['furniture_id'] . '">Edit</a> | 
				<form method="post" action="">
					<input type="hidden" name="furniture_id" value="' . $furniture['furniture_id'] . '" />
					<input type="submit" name="deleteFurniture" value="Delete" />
				</form>'
			]);
		}
		$gen_table->getTable();
	?>
</section>