<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title"><?php echo $title; ?></h3>
                </div>
    			<?php echo form_open(site_url('Additional_identity_question/edit/'.$additional_identity_question['ID_ADDITIONAL_IDENTITY_QUESTION'])); ?>
    			<div class="box-body">
    				<div class="row clearfix">
    					<!-- <div class="col-md-6">
    						<label for="ID_FORM" class="control-label"><span class="text-danger">*</span>Form</label>
    						<div class="form-group">
    							<select name="ID_FORM" class="form-control">
    								<option value="">select form</option>
    								<?php
    								foreach($all_form as $form)
    								{
    									$selected = ($form['ID_FORM'] == $additional_identity_question['ID_FORM']) ? ' selected="selected"' : "";

    									echo '<option value="'.$form['ID_FORM'].'" '.$selected.'>'.$form['TITLE'].'</option>';
    								}
    								?>
    							</select>
    							<span class="text-danger"><?php echo form_error('ID_FORM');?></span>
    						</div>
    					</div> -->
                        <?php echo form_hidden('ID_FORM', $this->session->currentForm); ?>
    					<div class="col-md-6">
    						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>QUESTION</label>
    						<div class="form-group">
    							<textarea name="QUESTION" class="form-control" id="QUESTION"><?php echo ($this->input->post('QUESTION') ? $this->input->post('QUESTION') : $additional_identity_question['QUESTION']); ?></textarea>
    							<span class="text-danger"><?php echo form_error('QUESTION');?></span>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="box-footer">
                	<button type="submit" class="btn btn-success">
    					<i class="fa fa-check"></i> Save
    				</button>
            <?php echo anchor(site_url('Form/edit/'.$this->session->currentForm), 'Back'); ?>
    	        </div>
    			<?php echo form_close(); ?>
    		</div>
        </div>
    </div>
</div>
</div>
