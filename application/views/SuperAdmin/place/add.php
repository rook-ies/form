<?php echo form_open('place/add'); ?>

	<div>
		<span class="text-danger">*</span>Place Type :
		<select name="ID_PLACE_TYPE">
			<option value="">select place_type</option>
			<?php
			foreach($all_place_type as $place_type)
			{
				$selected = ($place_type['ID_PLACE_TYPE'] == $this->input->post('ID_PLACE_TYPE')) ? ' selected="selected"' : "";

				echo '<option value="'.$place_type['ID_PLACE_TYPE'].'" '.$selected.'>'.$place_type['TYPE'].'</option>';
			}
			?>
		</select>
		<span class="text-danger"><?php echo form_error('ID_PLACE_TYPE');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Place Category :
		<select name="ID_PLACE_CATEGORY">
			<option value="">select place_category</option>
			<?php
			foreach($all_place_category as $place_category)
			{
				$selected = ($place_category['ID_PLACE_CATEGORY'] == $this->input->post('ID_PLACE_CATEGORY')) ? ' selected="selected"' : "";

				echo '<option value="'.$place_category['ID_PLACE_CATEGORY'].'" '.$selected.'>'.$place_category['CATEGORY'].'</option>';
			}
			?>
		</select>
		<span class="text-danger"><?php echo form_error('ID_PLACE_CATEGORY');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>NAMA :
		<input type="text" name="NAMA" value="<?php echo $this->input->post('NAMA'); ?>" />
		<span class="text-danger"><?php echo form_error('NAMA');?></span>
	</div>

	<button type="submit">Save</button>

<?php echo form_close(); ?>
