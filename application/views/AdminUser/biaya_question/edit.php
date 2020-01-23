<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title"><?php echo $title; ?></h3>
                </div>
    			<?php echo form_open('biaya_question/edit/'.$biaya_question['ID_BIAYA_QUESTION']); ?>
    			<div class="box-body">
    				<div class="row clearfix">
    					<div class="col-md-6">
    						<label for="ID_TIPE_BAYAR" class="control-label"><span class="text-danger">*</span>Tipe Bayar</label>
    						<div class="form-group">
    							<select name="ID_TIPE_BAYAR" class="form-control">
    								<option value="">select tipe_bayar</option>
    								<?php
    								foreach($all_tipe_bayar as $tipe_bayar)
    								{
    									$selected = ($tipe_bayar['ID_TYPE_BAYAR'] == $biaya_question['ID_TIPE_BAYAR']) ? ' selected="selected"' : "";

    									echo '<option value="'.$tipe_bayar['ID_TYPE_BAYAR'].'" '.$selected.'>'.$tipe_bayar['NAMA_TYPE_BAYAR'].'</option>';
    								}
    								?>
    							</select>
    							<span class="text-danger"><?php echo form_error('ID_TIPE_BAYAR');?></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="ID_FORM" class="control-label"><span class="text-danger">*</span>Form</label>
    						<div class="form-group">
    							<select name="ID_FORM" class="form-control">
    								<option value="">select form</option>
    								<?php
    								foreach($all_form as $form)
    								{
    									$selected = ($form['ID_FORM'] == $biaya_question['ID_FORM']) ? ' selected="selected"' : "";

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
    							<textarea name="QUESTION" class="form-control" id="QUESTION"><?php echo ($this->input->post('QUESTION') ? $this->input->post('QUESTION') : $biaya_question['QUESTION']); ?></textarea>
    							<span class="text-danger"><?php echo form_error('QUESTION');?></span>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="box-footer">
                	<button type="submit" class="btn btn-success">
    					<i class="fa fa-check"></i> Save
    				</button>
            <?php echo anchor(base_url('biaya_question'), 'Cancel'); ?>
    	        </div>
    			<?php echo form_close(); ?>
    		</div>
        </div>
    </div>
</div>
</div>
