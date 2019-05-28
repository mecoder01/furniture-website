<section class="right">
	<h2>Categories</h2>
	<a class="new" href="savecategory">Add new category</a>
	<?php
		$gen_table->setTableHeadings([
			'S.N.', 
			'Category Name', 
			'Action']);
		$serialNum = 1;
		foreach ($selectCategories as $category) {
			$gen_table->addTableRow([
				$serialNum++, 
				$category['category_name'],
				'<a href="savecategory&categoryId=' . $category['category_id'].'">Edit</a>|
				<form method="POST" action="">
					<input type="hidden" name="category_id" value="' . $category['category_id'] . '" />
					<input type="submit" name="deleteCategory" value="Delete" />
				</form>'
			]);
		}
		$gen_table->getTable();
	?>
</section>