<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title"><?php echo $title; ?></h3>
                </div>
    			<?php echo form_open('tkm/edit/'.$tkm['ID_TKM']); ?>
    			<div class="box-body">
    				<div class="row clearfix">
    					<div class="col-md-6">
    						<label for="ID_FORM" class="control-label"><span class="text-danger">*</span>Form</label>
    						<div class="form-group">
    							<select name="ID_FORM" class="form-control">
    								<option value="">select form</option>
    								<?php
    								foreach($all_form as $form)
    								{
    									$selected = ($form['ID_FORM'] == $tkm['ID_FORM']) ? ' selected="selected"' : "";

    									echo '<option value="'.$form['ID_FORM'].'" '.$selected.'>'.$form['TITLE'].'</option>';
    								}
    								?>
    							</select>
    							<span class="text-danger"><?php echo form_error('ID_FORM');?></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>QUESTION</label>
    						<div class="form-group">
    							<input type="text" name="QUESTION" value="<?php echo ($this->input->post('QUESTION') ? $this->input->post('QUESTION') : $tkm['QUESTION']); ?>" class="form-control" id="QUESTION" />
    							<span class="text-danger"><?php echo form_error('QUESTION');?></span>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="box-footer">
                	<button type="submit" class="btn btn-success">
    					<i class="fa fa-check"></i> Save
    				</button>
            <?php echo anchor(base_url('tkm'), 'Cancel'); ?>
    	        </div>
    			<?php echo form_close(); ?>
    		</div>
        </div>
    </div>
</div>
</div>
