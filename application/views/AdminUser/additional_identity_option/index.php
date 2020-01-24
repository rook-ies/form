<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Additinal identity option</h3>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
    						<!-- <th>ID ADDITIONAL IDENTITY OPTION</th>
    						<th>ID ADDITIONAL IDENTITY QUESTION</th> -->
    						<th>INPUT TYPE</th>
    						<th>OPTION</th>
    						<th>Actions</th>
                        </tr>
                        <?php foreach($additional_identity_option as $A){ ?>
                        <tr>
    						<!-- <td><?php echo $A['ID_ADDITIONAL_IDENTITY_OPTION']; ?></td>
    						<td><?php echo $A['ID_ADDITIONAL_IDENTITY_QUESTION']; ?></td> -->
    						<td><?php echo $A['TYPE']; ?></td>
    						<td><?php echo $A['OPTION']; ?></td>
    						<td>
                                <a href="<?php echo site_url('additional_identity_option/edit/'.$A['ID_ADDITIONAL_IDENTITY_OPTION']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('additional_identity_option/remove/'.$A['ID_ADDITIONAL_IDENTITY_OPTION']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                    <div class="box-header">
                        <h3 class="box-title">Tambahkan data Baru</h3>
                    </div>
                    <?php echo form_open('additional_identity_option/add'); ?>
                    <div class="row clearfix">
                        <?php echo form_hidden('ID_ADDITIONAL_IDENTITY_QUESTION',$this->uri->segment(3)); ?>
                        <?php echo form_hidden('ID_FORM',$this->uri->segment(4)); ?>
                        <div class="col-md-6">
    						<label for="ID_INPUT_TYPE" class="control-label"><span class="text-danger">*</span>tipe masukan</label>
    						<div class="form-group">
    							<select name="ID_INPUT_TYPE" class="form-control">
    								<option value="">select type</option>
    								<?php
    								foreach($all_input_type as $inputType)
    								{
                                        $selected = ($inputType['ID_INPUT_TYPE'] == $this->input->post('ID_INPUT_TYPE')) ? ' selected="selected"' : "";

    									echo '<option value="'.$inputType['ID_INPUT_TYPE'].'" '.$selected.'>'.$inputType['TYPE'].'</option>';
    								}
    								?>
    							</select>
    							<span class="text-danger"><?php echo form_error('ID_FORM');?></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>Add new additional indentiti question here</label>
    						<div class="form-group">
    							<textarea name="OPTION" class="form-control" id="QUESTION"><?php echo $this->input->post('QUESTION'); ?></textarea>
    							<span class="text-danger"><?php echo form_error('QUESTION');?></span>
    						</div>
    					</div>
    				</div>
                    <div class="box-footer">
                    	<button type="submit" class="btn btn-success">
                    		<i class="fa fa-check"></i> Add
                    	</button>
                  	</div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
