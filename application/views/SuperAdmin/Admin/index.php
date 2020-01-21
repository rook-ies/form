<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
                  <h4 class="card-title"><?php echo $title ?></h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            <th>ID ADMIN</th>
                    		<th>ID PLACE</th>
                    		<th>NAMA</th>
                    		<th>EMAIL</th>
                    		<th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach($admin as $A){ ?>
                        <tr>
                            <td><?php echo $A['ID_ADMIN']; ?></td>
                    		<td><?php echo $A['NAMA_TEMPAT']; ?></td>
                    		<td><?php echo $A['NAMA']; ?></td>
                    		<td><?php echo $A['EMAIL']; ?></td>
                    		<td>
                                <a href="<?php echo site_url('admin/edit/'.$A['ID_ADMIN']); ?>">Edit</a> |
                                <a href="<?php echo site_url('admin/remove/'.$A['ID_ADMIN']); ?>">Delete</a>
                            </td>
                        </tr>
                        	<?php } ?>
                      </tbody>
                    </table>
                    <a href=<?php echo base_url('admin/add') ?>><button class="btn btn-success mr-2">Tambah</button></a>
                  </div>
                </div>
		</div>
	</div>
</div>
