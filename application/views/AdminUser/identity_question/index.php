<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo $title; ?></h3>
                	<div class="box-tools">
                        <a href="<?php echo site_url('identity_question/add'); ?>" class="btn btn-success btn-sm">Add</a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
    						<th>ID IDENTITY QUESTION</th>
    						<th>QUESTION</th>
    						<th>Actions</th>
                        </tr>
                        <?php foreach($identity_question as $I){ ?>
                        <tr>
    						<td><?php echo $I['ID_IDENTITY_QUESTION']; ?></td>
    						<td><?php echo $I['QUESTION']; ?></td>
    						<td>
                                <a href="<?php echo site_url('identity_question/edit/'.$I['ID_IDENTITY_QUESTION']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('identity_question/remove/'.$I['ID_IDENTITY_QUESTION']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
