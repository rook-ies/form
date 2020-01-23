<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Additional Identity Answer Listing</h3>
            	<div class="box-tools">
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID ADDITIONAL IDENTITY ANSWER</th>
						<th>ID SUBMIT</th>
						<th>ID ADDITIONAL IDENTITY QUESTION</th>
						<th>VALUE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($additional_identity_answer as $A){ ?>
                    <tr>
						<td><?php echo $A['ID_ADDITIONAL_IDENTITY_ANSWER']; ?></td>
						<td><?php echo $A['ID_SUBMIT']; ?></td>
						<td><?php echo $A['ID_ADDITIONAL_IDENTITY_QUESTION']; ?></td>
						<td><?php echo $A['VALUE']; ?></td>
						<td>
                            <a href="<?php echo site_url('additional_identity_answer/edit/'.$A['ID_ADDITIONAL_IDENTITY_ANSWER']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('additional_identity_answer/remove/'.$A['ID_ADDITIONAL_IDENTITY_ANSWER']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
