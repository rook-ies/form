<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo $title; ?></h3>
                	<div class="box-tools">
                        <a href="<?php echo site_url('form/add'); ?>" class="btn btn-success btn-sm">Add</a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
    						<th>ID FORM</th>
    						<th>ID PLACE</th>
    						<th>ID SERVICE TYPE</th>
    						<th>TITLE</th>
    						<th>DESCRIPTION</th>
    						<th>Actions</th>
                        </tr>
                        <?php foreach($form as $F){ ?>
                        <tr>
    						<td><?php echo $F['ID_FORM']; ?></td>
    						<td><?php echo $F['ID_PLACE']; ?></td>
    						<td><?php echo $F['ID_SERVICE_TYPE']; ?></td>
    						<td><?php echo $F['TITLE']; ?></td>
    						<td><?php echo $F['DESCRIPTION']; ?></td>
    						<td>
                                <a href="<?php echo site_url('form/edit/'.$F['ID_FORM']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('form/remove/'.$F['ID_FORM']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
