<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title"><?php echo $title; ?></h3>
                </div>
                <?php echo form_open('tkm/add'); ?>
              	<div class="box-body">
              		<div class="row clearfix">
                        <?php echo form_hidden('ID_FORM',$this->session->currentForm); ?>
    					<div class="col-md-6">
    						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>QUESTION</label>
    						<div class="form-group">
    							<input type="text" name="QUESTION" value="<?php echo $this->input->post('QUESTION'); ?>" class="form-control" id="QUESTION" />
    							<span class="text-danger"><?php echo form_error('QUESTION');?></span>
    						</div>
    					</div>
    				</div>
    			</div>
              	<div class="box-footer">
                	<button type="submit" class="btn btn-success">
                		<i class="fa fa-check"></i> Save
                	</button>
                    <?php echo anchor(base_url('/form/edit/'.$this->session->currentForm), 'back'); ?>
              	</div>
                <?php echo form_close(); ?>
          	</div>
        </div>

    </div>
</div>
</div>
