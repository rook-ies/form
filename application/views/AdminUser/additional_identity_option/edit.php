<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title"><?php echo $title; ?></h3>
                </div>
    			<?php echo form_open(site_url('Additional_identity_option/edit/'.$additional_identity_option['ID_ADDITIONAL_IDENTITY_OPTION'].'/'.$this->uri->segment(4).'/'.$this->uri->segment(5))); ?>
    			<div class="box-body">
    				<div class="row clearfix">
                        <?php echo form_hidden('ID_ADDITIONAL_IDENTITY_QUESTION',$this->session->currentAdditionalIdentityQuestion); ?>
    					<div class="col-md-6">
    						<label for="ID_INPUT_TYPE" class="control-label"><span class="text-danger">*</span>Input Type</label>
    						<div class="form-group">
    							<select name="ID_INPUT_TYPE" class="form-control">
    								<option value="">select input_type</option>
    								<?php
    								foreach($all_input_type as $input_type)
    								{
    									$selected = ($input_type['ID_INPUT_TYPE'] == $additional_identity_option['ID_INPUT_TYPE']) ? ' selected="selected"' : "";

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
    							<input type="text" name="OPTION" value="<?php echo ($this->input->post('OPTION') ? $this->input->post('OPTION') : $additional_identity_option['OPTION']); ?>" class="form-control" id="OPTION" />
    							<span class="text-danger"><?php echo form_error('OPTION');?></span>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="box-footer">
                	<button type="submit" class="btn btn-success">
    					<i class="fa fa-check"></i> Save
    				</button>
            <?php echo anchor(site_url('Additional_identity_question/edit/'.$this->session->currentAdditionalIdentityQuestion), 'back'); ?>
    	        </div>
    			<?php echo form_close(); ?>
    		</div>
        </div>
    </div>
</div>
</div>
