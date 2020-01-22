<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <h4 class="card-title"><?php echo $title; ?></h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>ID PLACE CATEGORY</th>
              		<th>CATEGORY</th>
              		<th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($place_category as $P){ ?>
                  <tr>
                  <td><?php echo $P['ID_PLACE_CATEGORY']; ?></td>
                  <td><?php echo $P['CATEGORY']; ?></td>
                  <td>
                          <a href="<?php echo site_url('place_category/edit/'.$P['ID_PLACE_CATEGORY']); ?>">Edit</a> |
                          <a href="<?php echo site_url('place_category/remove/'.$P['ID_PLACE_CATEGORY']); ?>">Delete</a>
                      </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
             <a href=<?php echo base_url('place_category/add') ?>><button class="btn btn-success mr-2">Tambah</button></a>
          </div>
        </div>
    </div>
  </div>
</div>
