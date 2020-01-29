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
        						<!-- <th>ID TKM ANSWER</th>
        						<th>ID SUBMIT</th> -->
        						<th>Pertanyaan</th>
        						<th>Jawaban</th>
                                <th>Priotitas</th>
                            </tr>
                            <?php foreach($tkm_answer as $T){ ?>
                            <tr>
        						<!-- <td><?php echo $T['ID_TKM_ANSWER']; ?></td>
        						<td><?php echo $T['ID_SUBMIT']; ?></td> -->
        						<td><?php echo $T['QUESTION']; ?></td>
        						<td><?php echo $T['VALUE']; ?></td>
                                <td><?php echo $T['PRIORITY']; ?></td>
                            </tr>
                            <?php } ?>
                        </table>
        			</div>
        		</div>
            </div>
        </div>
    </div>
</div>
