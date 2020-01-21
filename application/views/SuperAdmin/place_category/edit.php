<?php echo form_open('place_category/edit/'.$place_category['ID_PLACE_CATEGORY']); ?>

	<div>
		<span class="text-danger">*</span>CATEGORY :
		<input type="text" name="CATEGORY" value="<?php echo ($this->input->post('CATEGORY') ? $this->input->post('CATEGORY') : $place_category['CATEGORY']); ?>" />
		<span class="text-danger"><?php echo form_error('CATEGORY');?></span>
	</div>

	<button type="submit">Save</button>

<?php echo form_close(); ?>
