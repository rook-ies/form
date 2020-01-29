<div class="main-card mb-3 card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
              	<div class="box box-info">
                    <div class="box-header with-border">
                      	<h3 class="box-title"><?php echo $title; ?></h3>
                    </div>
        			<div class="box-body">
                        <table class="table table-striped">
                            <tr>
        						<!-- <th>ID ADDITIONAL IDENTITY ANSWER</th>
        						<th>ID SUBMIT</th> -->
        						<th>Pertanyaan</th>
        						<th>Jawaban</th>
                            </tr>
                            <?php foreach($additional_identity_answer as $A){ ?>
                            <tr>
        						<!-- <td><?php echo $A['ID_ADDITIONAL_IDENTITY_ANSWER']; ?></td>
        						<td><?php echo $A['ID_SUBMIT']; ?></td> -->
        						<td><?php echo $A['QUESTION']; ?></td>
        						<td><?php echo $A['VALUE']; ?></td>
                            </tr>
                            <?php } ?>
                        </table>
        			</div>
        		</div>
            </div>
        </div>
    </div>
</div>
