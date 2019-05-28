<section class="right">	
		<h2>Special Offer Updates</h2>
		<a class="new" href="saveUpdate">Add new offers</a>
		<?php
		// auto generating a table for updates data table
		$gen_table->setTableHeadings([
				'S.N.', 
				'Title',
				'Start Date',
				'End Date',
				'Description',
				'Images',
				'Action']);
			$serialNum = 1;
			foreach ($selectUpdates as $update) {
				$gen_table->addTableRow([
					$serialNum++, 
					$update['title'],
					$update['start_date'],
					$update['end_date'],
					$update['description'],				
					'<img style="width:100%;" src="../../images/furniture/'.$update['images'].'" alt="">',				
					'<a href="saveUpdate&updateId='. $update['update_id']. '">Edit</a>|
					<a href="update&updateId='. $update['update_id']. '">Delete</a>'
				]);
			}
			$gen_table->getTable();
?>
</section>