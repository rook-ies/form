<div class="col-12 stretch-card">
  <div class="card">
	  <div class="card-body">
        <h4 class="card-title"><?php echo $title ?></h4>
		<?php echo form_open('place/edit/'.$place['ID_PLACE']); ?>
		  <div class="form-group row">
	          <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label">Place Type</label>
			  <div class="col-sm-9">
		          <select class="form-control" id="exampleFormControlSelect2" name="ID_PLACE_TYPE">
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
      </div>

			<div class="form-group row">
	          <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label">Place Category</label>
			  <div class="col-sm-9">
		          <select class="form-control" id="exampleFormControlSelect2" name="ID_PLACE_CATEGORY">
		            <option value="">select place category</option>
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
      </div>
			<div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NAMA</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="NAMA" value="<?php echo $this->input->post('NAMA'); ?>" />
								<span class="text-danger"><?php echo form_error('NAMA');?></span>
							</div>
          <button type="submit" class="btn btn-success mr-2">Submit</button>
		  <?php echo anchor(base_url('place'), 'Cancel'); ?>
		 <?php echo form_close(); ?>
      </div>
  </div>
</div>
