<div class="main-card mb-3 card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
              	<div class="box box-info">
                    <div class="box-header with-border">
                      	<h3 class="box-title"><?php echo $title; ?></h3>
                        <?php echo anchor(site_url('dashboardAdminBiasa/submit/'.$this->session->currentForm), 'back'); ?>
                    </div>
        			<div class="box-body">
                        <table class="table table-striped">
                            <tr>
        						<!-- <th>ID</th>
        						<th>ID SUBMIT</th> -->
        						<th>NO RESPONDEN</th>
        						<!-- <th>KODE SURVEYOR</th>
        						<th>UNIT PELAYANAN</th> -->
                            </tr>
                            <?php foreach($form_detail as $F){ ?>
                            <tr>
        						<!-- <td><?php echo $F['ID']; ?></td>
        						<td><?php echo $F['ID_SUBMIT']; ?></td> -->
        						<!-- <td><?php echo $F['NO_RESPONDEN']; ?></td>
        						<td><?php echo $F['KODE_SURVEYOR']; ?></td>
        						<td><?php echo $F['UNIT_PELAYANAN']; ?></td> -->
                                <td><?php echo $this->uri->segment(3); ?></td>
                            </tr>
                            <?php } ?>
                        </table>
        			</div>
        		</div>
            </div>
        </div>
    </div>
</div>
