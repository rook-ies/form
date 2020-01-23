<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title"><?php echo $title; ?></h3>
                </div>
    			<?php echo form_open('form/edit/'.$form['ID_FORM']); ?>
    			<div class="box-body">
    				<div class="row clearfix">
    					<div class="col-md-6">
    						<label for="ID_PLACE" class="control-label"><span class="text-danger">*</span>Place</label>
    						<div class="form-group">
    							<select name="ID_PLACE" class="form-control">
    								<option value="">select place</option>
    								<?php
    								foreach($all_place as $place)
    								{
    									$selected = ($place['ID_PLACE'] == $form['ID_PLACE']) ? ' selected="selected"' : "";

    									echo '<option value="'.$place['ID_PLACE'].'" '.$selected.'>'.$place['NAMA'].'</option>';
    								}
    								?>
    							</select>
    							<span class="text-danger"><?php echo form_error('ID_PLACE');?></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="ID_SERVICE_TYPE" class="control-label"><span class="text-danger">*</span>Service Type</label>
    						<div class="form-group">
    							<select name="ID_SERVICE_TYPE" class="form-control">
    								<option value="">select service_type</option>
    								<?php
    								foreach($all_service_type as $service_type)
    								{
    									$selected = ($service_type['ID_SERVICE_TYPE'] == $form['ID_SERVICE_TYPE']) ? ' selected="selected"' : "";

    									echo '<option value="'.$service_type['ID_SERVICE_TYPE'].'" '.$selected.'>'.$service_type['SERVICE_TYPE'].'</option>';
    								}
    								?>
    							</select>
    							<span class="text-danger"><?php echo form_error('ID_SERVICE_TYPE');?></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="TITLE" class="control-label"><span class="text-danger">*</span>TITLE</label>
    						<div class="form-group">
    							<input type="text" name="TITLE" value="<?php echo ($this->input->post('TITLE') ? $this->input->post('TITLE') : $form['TITLE']); ?>" class="form-control" id="TITLE" />
    							<span class="text-danger"><?php echo form_error('TITLE');?></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="DESCRIPTION" class="control-label"><span class="text-danger">*</span>DESCRIPTION</label>
    						<div class="form-group">
    							<input type="text" name="DESCRIPTION" value="<?php echo ($this->input->post('DESCRIPTION') ? $this->input->post('DESCRIPTION') : $form['DESCRIPTION']); ?>" class="form-control" id="DESCRIPTION" />
    							<span class="text-danger"><?php echo form_error('DESCRIPTION');?></span>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="box-footer">
                	<button type="submit" class="btn btn-success">
    					<i class="fa fa-check"></i> Save
    				</button>
    	        </div>
    			<?php echo form_close(); ?>
    		</div>
        </div>
    </div>
</div>
</div>
