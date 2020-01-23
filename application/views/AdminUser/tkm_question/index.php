<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tkm Question Listing</h3>
                	<div class="box-tools">
                        <a href="<?php echo site_url('tkm_question/add'); ?>" class="btn btn-success btn-sm">Add</a>
                    </div>
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

                </div>
            </div>
        </div>
    </div>
  </div>
</div>
