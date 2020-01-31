<?php echo form_open('form/simpan'); ?>
<center>
        <h1><?php echo $form['TITLE']; ?>
</h1>
        <table border="1" cellspacing="0" cellpadding="5" width="80%">
            <tr>
                <td width="200">NAMA <?php echo $place['TYPE']; ?></td>
                <td colspan="3"><?php echo $place['NAMA'] ?></td>
                <?php echo form_hidden('kodeSurveyor',$place['ID_PLACE']); ?>
            </tr>
            <tr>
                <td>JENIS <?php echo $place['TYPE']; ?></td>
                <td colspan="3"><?php echo $place['CATEGORY']; ?></td>
                <?php echo form_hidden('noResponden',1); ?>
            </tr>
            <tr>
                <td>JENIS LAYANAN </td>
                <td colspan="3"><?php echo $service['SERVICE_TYPE']; ?></td>
                <?php echo form_hidden('unitPelayanan',$service['ID_SERVICE_TYPE']); ?>
            </tr>
            <tr>
                <!-- <td>NO. RESPONDEN</td>
                <td><input type="input" name="noResponden"></td> -->
                <td width="200">TANGGAL SURVEI</td>
                <td><?php echo @date('d-m-Y'); ?></td>
            </tr>
            <!-- <tr>
                <td>KODE SURVEYOR</td>
                <td><input type="input" name="kodeSurveyor"></td>
                <td width="200">UNIT PELAYANAN</td>
                <td><input type="input" name="unitPelayanan"></td>
            </tr> -->
        </table>
        <table border="0"  width="80%">
            <tr>
                <td>
                    <p><?php echo $form['DESCRIPTION']; ?></p>
                </td>
            </tr>
        </table>
</center>
