<div class="main-card mb-3 card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
              	<div class="box box-info">
                    <div class="box-header with-border">
                      	<h3 class="box-title">Data graph</h3>
                        <?php echo anchor('dashboardAdminBiasa', 'back'); ?>
                    </div>
        			<div class="box-body">
                        <table class="table table-striped">
                            <tr>
        						<th>TKM question</th>
                                <th>TKM nilai</th>
                                <th>TKM prioritas</th>
                            </tr>
                            <?php foreach($chart as $var){ ?>
                            <tr>
                                <!-- <td><?php print_r($var) ?></td> -->
                                <td><?php echo $var['QUESTION']; ?></td>
                                <td><?php echo $var['TKM']; ?></td>
                                <td><?php echo $var['PRIORITY']; ?></td>
                            </tr>
                            <?php } ?>
                        </table>
        			</div>
        		</div>
            </div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
              	<div class="box box-info">
                    <div class="box-header with-border">
                      	<h3 class="box-title"><?php echo $titleForm['TITLE']; ?></h3>
                    </div>
        			<div class="box-body">
                        <table class="table table-striped">
                            <tr>
        						<th>Nomer RESPONDEN</th>
        						<!-- <th>ID FORM</th> -->
        						<th>UNIT EXPECTANCY</th>
        						<th>PLACE EXPECTANCY</th>
                            </tr>
                            <?php foreach($submit as $S){ ?>
                            <tr>
        						<td><a href="<?php echo base_url() ?>dashboardAdminBiasa/submitDetail/<?php echo $S['ID_SUBMIT']; ?>"><?php echo $S['ID_SUBMIT']; ?></td>
        						<!-- <td><?php echo $S['ID_FORM']; ?></td> -->
        						<td><?php echo $S['UNIT_EXPECTANCY']; ?></td>
        						<td><?php echo $S['PLACE_EXPECTANCY']; ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                        <?php echo $this->pagination->create_links();	?>
        			</div>
        		</div>
            </div>
        </div>
    </div>
</div>
