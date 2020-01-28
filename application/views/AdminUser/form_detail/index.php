<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $title; ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>ID SUBMIT</th>
						<th>NO RESPONDEN</th>
						<th>KODE SURVEYOR</th>
						<th>UNIT PELAYANAN</th>
                    </tr>
                    <?php foreach($form_detail as $F){ ?>
                    <tr>
						<td><?php echo $F['ID']; ?></td>
						<td><?php echo $F['ID_SUBMIT']; ?></td>
						<td><?php echo $F['NO_RESPONDEN']; ?></td>
						<td><?php echo $F['KODE_SURVEYOR']; ?></td>
						<td><?php echo $F['UNIT_PELAYANAN']; ?></td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
