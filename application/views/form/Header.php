<?php echo form_open('simpan'); ?>
<center>
        <h1><?php echo $form['TITLE']; ?>
</h1>
        <table border="1" cellspacing="0" cellpadding="5" width="80%">
            <tr>
                <td width="200">NAMA PUSKESMAS</td>
                <td colspan="3">---</td>
            </tr>
            <tr>
                <td>JENIS PUSKESMAS</td>
                <td colspan="3">PUSKESMAS NON RAWAT INAP / PUSKESMAS RAWAT INAP</td>
            </tr>
            <tr>
                <td>JENIS LAYANAN</td>
                <td colspan="3">RAWAT JALAN</td>
            </tr>
            <tr>
                <td>NO. RESPONDEN</td>
                <td>---</td>
                <td width="200">TANGGAL SURVEI</td>
                <td>---</td>
            </tr>
            <tr>
                <td>KODE SURVEYOR</td>
                <td>---</td>
                <td width="200">UNIT PELAYANAN</td>
                <td>---</td>
            </tr>
        </table>
        <table border="0"  width="80%">
            <tr>
                <td>
                    <p><?php echo $form['DESCRIPTION']; ?></p>
                </td>
            </tr>
        </table>
</center>
