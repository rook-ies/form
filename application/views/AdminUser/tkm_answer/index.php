<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $title; ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID TKM ANSWER</th>
						<th>ID SUBMIT</th>
						<th>ID TKM</th>
						<th>VALUE</th>
                    </tr>
                    <?php foreach($tkm_answer as $T){ ?>
                    <tr>
						<td><?php echo $T['ID_TKM_ANSWER']; ?></td>
						<td><?php echo $T['ID_SUBMIT']; ?></td>
						<td><?php echo $T['ID_TKM']; ?></td>
						<td><?php echo $T['VALUE']; ?></td>
						<td>
                            <a href="<?php echo site_url('tkm_answer/edit/'.$T['ID_TKM_ANSWER']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('tkm_answer/remove/'.$T['ID_TKM_ANSWER']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
