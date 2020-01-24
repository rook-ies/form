<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <h4 class="card-title"><?php echo $title; ?></h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
            		<th>ID PLACE</th>
            		<th>ID PLACE TYPE</th>
            		<th>ID PLACE CATEGORY</th>
            		<th>NAMA</th>
            		<th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($place as $P){ ?>
                  <tr>
              		<td><?php echo $P['ID_PLACE']; ?></td>
              		<td><?php echo $P['TYPE']; ?></td>
              		<td><?php echo $P['CATEGORY']; ?></td>
              		<td><?php echo $P['NAMA']; ?></td>
              		<td>
                          <a href="<?php echo site_url('place/edit/'.$P['ID_PLACE']); ?>">Edit</a> |
                          <a href="<?php echo site_url('place/remove/'.$P['ID_PLACE']); ?>">Delete</a>
                      </td>
                  </tr>
              	<?php } ?>
              </tbody>
            </table>
             <a href=<?php echo base_url('place/add') ?>><button class="btn btn-success mr-2">Tambah</button></a>
          </div>
        </div>
    </div>
  </div>
</div>
