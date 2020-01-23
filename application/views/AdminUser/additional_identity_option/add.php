<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title"><?php echo $title; ?></h3>
                </div>
                <?php echo form_open('additional_identity_option/add'); ?>
              	<div class="box-body">
              		<div class="row clearfix">
    					<div class="col-md-6">
    						<label for="ID_ADDITIONAL_IDENTITY_QUESTION" class="control-label"><span class="text-danger">*</span>Additional Identity Question</label>
    						<div class="form-group">
    							<select name="ID_ADDITIONAL_IDENTITY_QUESTION" class="form-control">
    								<option value="">select additional_identity_question</option>
    								<?php
    								foreach($all_additional_identity_question as $additional_identity_question)
    								{
    									$selected = ($additional_identity_question['ID_ADDITIONAL_IDENTITY_QUESTION'] == $this->input->post('ID_ADDITIONAL_IDENTITY_QUESTION')) ? ' selected="selected"' : "";

    									echo '<option value="'.$additional_identity_question['ID_ADDITIONAL_IDENTITY_QUESTION'].'" '.$selected.'>'.$additional_identity_question['QUESTION'].'</option>';
    								}
    								?>
    							</select>
    							<span class="text-danger"><?php echo form_error('ID_ADDITIONAL_IDENTITY_QUESTION');?></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="ID_INPUT_TYPE" class="control-label"><span class="text-danger">*</span>Input Type</label>
    						<div class="form-group">
    							<select name="ID_INPUT_TYPE" class="form-control">
    								<option value="">select input_type</option>
    								<?php
    								foreach($all_input_type as $input_type)
    								{
    									$selected = ($input_type['ID_INPUT_TYPE'] == $this->input->post('ID_INPUT_TYPE')) ? ' selected="selected"' : "";

    									echo '<option value="'.$input_type['ID_INPUT_TYPE'].'" '.$selected.'>'.$input_type['TYPE'].'</option>';
    								}
    								?>
    							</select>
    							<span class="text-danger"><?php echo form_error('ID_INPUT_TYPE');?></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="OPTION" class="control-label"><span class="text-danger">*</span>OPTION</label>
    						<div class="form-group">
    							<input type="text" name="OPTION" value="<?php echo $this->input->post('OPTION'); ?>" class="form-control" id="OPTION" />
    							<span class="text-danger"><?php echo form_error('OPTION');?></span>
    						</div>
    					</div>
    				</div>
    			</div>
              	<div class="box-footer">
                	<button type="submit" class="btn btn-success">
                		<i class="fa fa-check"></i> Save
                	</button>
                  <?php echo anchor(base_url('additional_identity_option'), 'Cancel'); ?>
              	</div>
                <?php echo form_close(); ?>
          	</div>
        </div>
    </div>
</div>
</div>
