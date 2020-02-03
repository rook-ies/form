<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <h4 class="card-title"><?php echo $title; ?></h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>ID PLACE TYPE</th>
              		<th>TYPE</th>
              		<th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($place_type as $P){ ?>
                  <tr>
              		<td><?php echo $P['ID_PLACE_TYPE']; ?></td>
              		<td><?php echo $P['TYPE']; ?></td>
              		<td>
                          <a href="<?php echo site_url('Place_type/edit/'.$P['ID_PLACE_TYPE']); ?>">Edit</a> |
                          <a href="<?php echo site_url('Place_type/remove/'.$P['ID_PLACE_TYPE']); ?>">Delete</a>
                      </td>
                  </tr>
              	<?php } ?>
              </tbody>
            </table>
             <a href=<?php echo site_url('Place_type/add') ?>><button class="btn btn-success mr-2">Tambah</button></a>
          </div>
        </div>
    </div>
  </div>
</div>
