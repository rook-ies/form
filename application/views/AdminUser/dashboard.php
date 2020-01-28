<?php echo form_open('dashboardAdminBiasa/submit'); ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Dashboard Admin
                <div class="page-title-subheading">Selamat datang admin <?php echo $this->session->name_place ?>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <?php foreach($form as $F){ ?>
        <div class="col-12 col-lg-4">
            <div class="mb-3 text-center card card-body">
              <a href="<?php echo base_url() ?>dashboardAdminBiasa/submit/<?php echo $F['ID_FORM']; ?>">
                <h5 class="card-title"><?php echo $F['TITLE']; ?></h5>
                <h5 class="description"><?php echo $F['SERVICE_TYPE']; ?></h5>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
