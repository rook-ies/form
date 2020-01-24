<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tkm Question Listing</h3>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
    						<th>ID TKM QUESTION</th>
    						<th>ID TKM</th>
    						<th>QUESTION</th>
    						<th>Actions</th>
                        </tr>
                        <?php foreach($tkm_question as $T){ ?>
                        <tr>
    						<td><?php echo $T['ID_TKM_QUESTION']; ?></td>
    						<td><?php echo $T['ID_TKM']; ?></td>
    						<td><?php echo $T['QUESTION']; ?></td>
    						<td>
                                <a href="<?php echo site_url('tkm_question/edit/'.$T['ID_TKM_QUESTION']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('tkm_question/remove/'.$T['ID_TKM_QUESTION']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
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
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
