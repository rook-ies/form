<?php echo form_open('place_type/add'); ?>

	<div>
		<span class="text-danger">*</span>TYPE :
		<input type="text" name="TYPE" value="<?php echo $this->input->post('TYPE'); ?>" />
		<span class="text-danger"><?php echo form_error('TYPE');?></span>
	</div>

	<button type="submit">Save</button>

<?php echo form_close(); ?>
