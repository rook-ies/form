<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title"><?php echo $title; ?></h3>
            </div>
			<?php echo form_open(site_url('Identity_option/edit/'.$identity_option['ID_IDENTITY_OPTION'])); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ID_IDENTITY_QUESTION" class="control-label">ID IDENTITY QUESTION</label>
						<div class="form-group">
							<input type="text" name="ID_IDENTITY_QUESTION" value="<?php echo ($this->input->post('ID_IDENTITY_QUESTION') ? $this->input->post('ID_IDENTITY_QUESTION') : $identity_option['ID_IDENTITY_QUESTION']); ?>" class="form-control" id="ID_IDENTITY_QUESTION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ID_INPUT_TYPE" class="control-label">ID INPUT TYPE</label>
						<div class="form-group">
							<input type="text" name="ID_INPUT_TYPE" value="<?php echo ($this->input->post('ID_INPUT_TYPE') ? $this->input->post('ID_INPUT_TYPE') : $identity_option['ID_INPUT_TYPE']); ?>" class="form-control" id="ID_INPUT_TYPE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="OPTION" class="control-label">OPTION</label>
						<div class="form-group">
							<input type="text" name="OPTION" value="<?php echo ($this->input->post('OPTION') ? $this->input->post('OPTION') : $identity_option['OPTION']); ?>" class="form-control" id="OPTION" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
        <?php echo anchor(site_url('Identity_option'), 'Cancel'); ?>
	        </div>
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
