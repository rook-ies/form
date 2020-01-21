<?php echo form_open('service_type/add'); ?>

	<div>
		<span class="text-danger">*</span>SERVICE TYPE :
		<input type="text" name="SERVICE_TYPE" value="<?php echo $this->input->post('SERVICE_TYPE'); ?>" />
		<span class="text-danger"><?php echo form_error('SERVICE_TYPE');?></span>
	</div>

	<button type="submit">Save</button>

<?php echo form_close(); ?>
