<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $title; ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID IDENTITY ANSWER</th>
						<th>TYPE</th>
						<th>ADDRESS</th>
						<th>NO HP</th>
						<th>AGE</th>
						<th>GENDER</th>
						<th>EDUCATION</th>
						<th>JOB</th>
                    </tr>
                    <?php foreach($identity_answer as $I){ ?>
                    <tr>
						<td><?php echo $I['ID_IDENTITY_ANSWER']; ?></td>
						<td><?php echo $I['TYPE']; ?></td>
						<td><?php echo $I['ADDRESS']; ?></td>
						<td><?php echo $I['NO_HP']; ?></td>
						<td><?php echo $I['AGE']; ?></td>
						<td><?php echo $I['GENDER']; ?></td>
						<td><?php echo $I['EDUCATION']; ?></td>
						<td><?php echo $I['JOB']; ?></td>
						<td>
                            <a href="<?php echo site_url('identity_answer/edit/'.$I['ID_IDENTITY_ANSWER']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('identity_answer/remove/'.$I['ID_IDENTITY_ANSWER']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
