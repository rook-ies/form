<?php echo form_open('place_type/edit/'.$place_type['ID_PLACE_TYPE']); ?>

	<div>
		<span class="text-danger">*</span>TYPE : 
		<input type="text" name="TYPE" value="<?php echo ($this->input->post('TYPE') ? $this->input->post('TYPE') : $place_type['TYPE']); ?>" />
		<span class="text-danger"><?php echo form_error('TYPE');?></span>
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>