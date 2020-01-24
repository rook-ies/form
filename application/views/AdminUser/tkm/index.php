<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo $title; ?></h3>
                	<div class="box-tools">
                        <a href="<?php echo site_url('tkm/add'); ?>" class="btn btn-success btn-sm">Add</a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
    						<!-- <th>ID TKM</th>
    						<th>ID FORM</th> -->
    						<th>QUESTION</th>
    						<th>Actions</th>
                        </tr>
                        <?php foreach($tkm as $T){ ?>
                        <tr>
    						<td><?php echo $T['ID_TKM']; ?></td>
    						<!-- <td><?php echo $T['ID_FORM']; ?></td> -->
    						<td><?php echo $T['QUESTION']; ?></td>
                            <?php if($T['QUESTION'] != 'BIAYA/TARIF'){ ?>
    						<td>
                                <a href="<?php echo site_url('tkm/edit/'.$T['ID_TKM']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('tkm/remove/'.$T['ID_TKM']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        <?php } else { ?>
                            <td>
                                <a href="<?php echo site_url('biaya_question/load/'.$T['ID_FORM']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('tkm/remove/'.$T['ID_TKM']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        <?php } ?>
                        </tr>
                        <?php } ?>
                    </table>
                    <div class="box-header">
                        <h3 class="box-title">Tambahkan data Baru</h3>
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
                  	</div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
