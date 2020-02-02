<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
                  <h4 class="card-title"><?php echo $title ?></h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID SERVICE TYPE</th>
                          <th>SERVICE TYPE</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach($service_type as $S){ ?>
                        <tr>
                            <td><?php echo $S['ID_SERVICE_TYPE']; ?></td>
                    		<td><?php echo $S['SERVICE_TYPE']; ?></td>
                    		<td>
                                <a href="<?php echo site_url('Service_type/edit/'.$S['ID_SERVICE_TYPE']); ?>">Edit</a> |
                                <a href="<?php echo site_url('Service_type/remove/'.$S['ID_SERVICE_TYPE']); ?>">Delete</a>
                            </td>
                        </tr>
                        	<?php } ?>
                      </tbody>
                    </table>
                    <a href=<?php echo site_url('Service_type/add') ?>><button class="btn btn-success mr-2">Tambah</button></a>
                  </div>
                </div>
		</div>
	</div>
</div>
