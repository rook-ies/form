<div class="col-12 stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><?php echo $title ?></h4>
	   <?php echo form_open('service_type/add'); ?>
        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Service Type</label>
          <div class="col-sm-9">
            <input type="text" name="SERVICE_TYPE" value="<?php echo $this->input->post('SERVICE_TYPE'); ?>" />
          </div>
        </div>
		<span class="text-danger"><?php echo form_error('SERVICE_TYPE');?></span>
        <button type="submit" class="btn btn-success mr-2">Submit</button>
		<?php echo anchor(base_url('service_type'), 'Cancel'); ?>
		  <?php echo form_close(); ?>
    </div>
  </div>
</div>
