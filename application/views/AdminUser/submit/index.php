<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $submit; ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID SUBMIT</th>
						<th>ID IDENTITY ANSWER</th>
						<th>ID FORM</th>
						<th>UNIT EXPECTANCY</th>
						<th>PLACE EXPECTANCY</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($submit as $S){ ?>
                    <tr>
						<td><?php echo $S['ID_SUBMIT']; ?></td>
						<td><?php echo $S['ID_IDENTITY_ANSWER']; ?></td>
						<td><?php echo $S['ID_FORM']; ?></td>
						<td><?php echo $S['UNIT_EXPECTANCY']; ?></td>
						<td><?php echo $S['PLACE_EXPECTANCY']; ?></td>
						<td>
                            <a href="<?php echo site_url('submit/edit/'.$S['ID_SUBMIT']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('submit/remove/'.$S['ID_SUBMIT']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
