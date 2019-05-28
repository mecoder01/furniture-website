<section class="right">
	<h2>Save Furniture</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="furniture_id" value="<?php if(isset($_GET['furnitureId'])) echo $fetchFurniture['furniture_id']; ?>" />

		<label>Furniture Name:</label>
		<input type="text" name="furniture_name" value="<?php if(isset($_GET['furnitureId'])) echo $fetchFurniture['furniture_name']; ?>" />

		<label>Furniture Description:</label>
		<textarea name="description" rows="5" cols="40"><?php if(isset($_GET['furnitureId'])) echo $fetchFurniture['description']; ?> </textarea>

		<label>Furniture Price:</label>
		<input type="text" name="furniture_price" value="<?php if(isset($_GET['furnitureId'])) echo $fetchFurniture['furniture_price']; ?>" />

		<label>View:</label>
		<select name="view">
			<option value="enable">Enable</option>
			<option value="disable">Disable</option>
		</select>
		
		<label>Furniture Details:</label>
		<select name="furniture_details">
			<option value="new">New</option>
			<option value="second hand">Second Hand</option>
		</select>

		<label>Category Name:</label>
		<select name="category_id">
			<?php foreach ($selectCategories as $verticalDisplay) { ?>
					<option value="<?php echo $verticalDisplay['category_id']; ?>">
						<?php echo $verticalDisplay['category_name']?>
					</option>
			<?php }?> 
		</select>

		<label>Images:</label>
		<input type="file" name="images" />

		<input type="submit" name="submit" value="Save Furniture" />
	</form>
</section>