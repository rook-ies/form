<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title">Tkm Question Edit</h3>
                </div>
    			<?php echo form_open('tkm_question/edit/'.$tkm_question['ID_TKM_QUESTION']); ?>
    			<div class="box-body">
    				<div class="row clearfix">
    					<div class="col-md-6">
    						<label for="ID_TKM" class="control-label"><span class="text-danger">*</span>Tkm</label>
    						<div class="form-group">
    							<select name="ID_TKM" class="form-control">
    								<option value="">select tkm</option>
    								<?php
    								foreach($all_tkm as $tkm)
    								{
    									$selected = ($tkm['ID_TKM'] == $tkm_question['ID_TKM']) ? ' selected="selected"' : "";

    									echo '<option value="'.$tkm['ID_TKM'].'" '.$selected.'>'.$tkm['QUESTION'].'</option>';
    								}
    								?>
    							</select>
    							<span class="text-danger"><?php echo form_error('ID_TKM');?></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>QUESTION</label>
    						<div class="form-group">
    							<textarea name="QUESTION" class="form-control" id="QUESTION"><?php echo ($this->input->post('QUESTION') ? $this->input->post('QUESTION') : $tkm_question['QUESTION']); ?></textarea>
    							<span class="text-danger"><?php echo form_error('QUESTION');?></span>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="box-footer">
                	<button type="submit" class="btn btn-success">
    					<i class="fa fa-check"></i> Save
    				</button>
            <?php echo anchor(base_url('tkm_question'), 'Cancel'); ?>
    	        </div>
    			<?php echo form_close(); ?>
    		</div>
        </div>
    </div>
</div>
</div>
