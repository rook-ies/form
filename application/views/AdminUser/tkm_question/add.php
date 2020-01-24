<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title">Tkm Question Add</h3>
                </div>
                <?php echo form_open('tkm_question/add'); ?>
              	<div class="box-body">
              		<div class="row clearfix">
                        <?php echo form_hidden('ID_TKM',$this->session->currentTKM); ?>
    					<div class="col-md-6">
    						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>QUESTION</label>
    						<div class="form-group">
    							<textarea name="QUESTION" class="form-control" id="QUESTION"><?php echo $this->input->post('QUESTION'); ?></textarea>
    							<span class="text-danger"><?php echo form_error('QUESTION');?></span>
    						</div>
    					</div>
    				</div>
    			</div>
              	<div class="box-footer">
                	<button type="submit" class="btn btn-success">
                		<i class="fa fa-check"></i> Save
                	</button>
                  <?php echo anchor(base_url('tkm/edit/'.$this->session->currentTKM), 'back'); ?>
              	</div>
                <?php echo form_close(); ?>
          	</div>
        </div>
    </div>
</div>
</div>
