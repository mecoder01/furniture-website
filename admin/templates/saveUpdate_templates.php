<section class="right">
	<h2>Save Update</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="update_id" value="<?php if(isset($_GET['updateId'])) echo $fetchUpdate['update_id']; ?>" />

		<label>Title:</label>
		<input type="text" name="title" value="<?php if(isset($_GET['updateId'])) echo $fetchUpdate['title']; ?>" />

		<label>Start Date:</label>
		<input type="date" name="start_date" value="<?php if(isset($_GET['updateId'])) echo $fetchUpdate['start_date'] ?>" />
		
		<label>End Date:</label>
		<input type="date" name="end_date" value="<?php if(isset($_GET['updateId'])) echo $fetchUpdate['end_date'] ?>" />

		<label>Description:</label>
		<input type="text" name="description" value="<?php if(isset($_GET['updateId'])) echo $fetchUpdate['description'] ?>" />	
		<label>Images:</label>
		<input type="file" name="images" />

		<input type="submit" name="submit" value="Save Update" />
		
	</form>
	
</section>