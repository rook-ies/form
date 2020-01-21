<div class="col-12 stretch-card">
  <div class="card">
	  <div class="card-body">
        <h4 class="card-title"><?php echo $title ?></h4>
		<?php echo form_open('admin/add'); ?>
		  <div class="form-group row">
	          <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label">Place</label>
			  <div class="col-sm-9">
		          <select class="form-control" id="exampleFormControlSelect2" name="ID_PLACE">
		            <option value="">select place</option>
					<?php
					foreach($all_place as $place)
					{
						$selected = ($place['ID_PLACE'] == $this->input->post('ID_PLACE')) ? ' selected="selected"' : "";

						echo '<option value="'.$place['ID_PLACE'].'" '.$selected.'>'.$place['NAMA'].'</option>';
					}
					?>
		          </select>
		  		</div>
	        </div>
			<div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NAMA</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="NAMA" value="<?php echo $this->input->post('NAMA'); ?>" />
              </div>
            </div><div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">EMAIL</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="EMAIL" value="<?php echo $this->input->post('EMAIL'); ?>" />
              </div>
            </div><div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">PASSWORD</label>
              <div class="col-sm-9">
                <input class="form-control" type="password" name="PASSWORD" value="<?php echo $this->input->post('PASSWORD'); ?>" />
              </div>
            </div>
          <button type="submit" class="btn btn-success mr-2">Submit</button>
		  <?php echo anchor(base_url('admin'), 'Cancel'); ?>
		 <?php echo form_close(); ?>
      </div>
  </div>
</div>
