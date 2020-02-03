<div class="col-md-12 d-flex align-items-stretch grid-margin">
  <div class="row flex-grow">
    <div class="col-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><?php echo $title ?></h4>
          <?php echo form_open(site_url('Place_category/add')); ?>
            <div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">CATEGORY</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="CATEGORY" value="<?php echo $this->input->post('CATEGORY'); ?>">
								<span class="text-danger"><?php echo form_error('CATEGORY');?></span>
							</div>
            </div>
            <button type="submit" class="btn btn-success mr-2">Save</button>
            <?php echo anchor(site_url('Place_category'), 'Cancel'); ?>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
