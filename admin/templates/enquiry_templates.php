<section class="right">		
		<h2>Enquiry</h2>
		<?php
		$gen_table->setTableHeadings([
				'S.N.', 
				'Full Name',
				'Email',
				'Telephone',
				'Enquiry',
				'Handled By',
				'Handled Complete'
			]);
			$serialNum = 1;
			foreach ($selectEnquiries as $enquiry) {
				if($enquiry['handled_complete'] == 'no'){
					$completehandle = '<a href="enquiries&enquiryId='.$enquiry['enquiry_id'].'">Complete Handle</a>';
				}else{
					$completehandle = "Done";
				}
				$gen_table->addTableRow([
					$serialNum++, 
					$enquiry['fullname'],
					$enquiry['email'],
					$enquiry['telephone'],				
					$enquiry['enquiry'],				
					$enquiry['handled_by'],	
					$completehandle
				]);
			}
			$gen_table->getTable();
?>
</section>