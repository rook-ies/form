<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">TINGKAT KEPUASAN MASYARAKAT</h3>
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
    						<!-- <td><?php echo $T['ID_TKM']; ?></td> -->
    						<!-- <td><?php echo $T['ID_FORM']; ?></td> -->
    						<td><?php echo $T['QUESTION']; ?></td>
                            <?php if($T['QUESTION'] != 'BIAYA/TARIF'){ ?>
    						<td>
                                <a href="<?php echo site_url('Tkm/edit/'.$T['ID_TKM']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('Tkm/remove/'.$T['ID_TKM']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        <?php } else { ?>
                            <td>
                                <a href="<?php echo site_url('Biaya_question/load/'.$T['ID_FORM']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('Tkm/remove/'.$T['ID_TKM']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        <?php } ?>
                        </tr>
                        <?php } ?>
                    </table>
                    <div class="box-header">
                        <h3 class="box-title">Tambahkan data Baru</h3>
                    </div>
                    <?php echo form_open(site_url('Tkm/add')); ?>
                  	<div class="box-body">
                  		<div class="row clearfix">
                            <?php echo form_hidden('ID_FORM',$this->session->currentForm); ?>
        					<div class="col-md-6">
        						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>QUESTION</label>
                                <label for="QUESTION" class="control-label"><span class="text-danger"></span> [Gunakan "BIAYA/TARIF"  untuk pertanyaan tentang biaya dan tarif]</label>
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
