<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $title; ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID EXPERIENCE</th>
						<th>ID SUBMIT</th>
						<th>UNPLEASANT EXPERIENCE</th>
						<th>LOCATION</th>
						<th>TIME</th>
                    </tr>
                    <?php foreach($experience as $E){ ?>
                    <tr>
						<td><?php echo $E['ID_EXPERIENCE']; ?></td>
						<td><?php echo $E['ID_SUBMIT']; ?></td>
						<td><?php echo $E['UNPLEASANT_EXPERIENCE']; ?></td>
						<td><?php echo $E['LOCATION']; ?></td>
						<td><?php echo $E['TIME']; ?></td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
