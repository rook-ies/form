<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo $title; ?></h3>
                	<div class="box-tools">
                        <a href="<?php echo site_url('additional_identity_question/add'); ?>" class="btn btn-success btn-sm">Add</a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
    						<th>ID ADDITIONAL IDENTITY QUESTION</th>
    						<th>ID FORM</th>
    						<th>QUESTION</th>
    						<th>Actions</th>
                        </tr>
                        <?php foreach($additional_identity_question as $A){ ?>
                        <tr>
    						<td><?php echo $A['ID_ADDITIONAL_IDENTITY_QUESTION']; ?></td>
    						<td><?php echo $A['ID_FORM']; ?></td>
    						<td><?php echo $A['QUESTION']; ?></td>
    						<td>
                                <a href="<?php echo base_url('additional_identity_question/edit/'.$A['ID_ADDITIONAL_IDENTITY_QUESTION']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo base_url('additional_identity_question/remove/'.$A['ID_ADDITIONAL_IDENTITY_QUESTION']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
