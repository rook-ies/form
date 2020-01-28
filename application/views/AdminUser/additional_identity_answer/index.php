<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $title; ?></h3>
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
                    </tr>
                    <?php foreach($additional_identity_answer as $A){ ?>
                    <tr>
						<td><?php echo $A['ID_ADDITIONAL_IDENTITY_ANSWER']; ?></td>
						<td><?php echo $A['ID_SUBMIT']; ?></td>
						<td><?php echo $A['QUESTION']; ?></td>
						<td><?php echo $A['VALUE']; ?></td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
