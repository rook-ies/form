<center>
    <table border="0" cellspacing="0" cellpadding="5" width="80%">
        <tr>
            <td><b>II.Tingkat Kepuasan Pelanggan></b></td>
        </tr>
    </table>
    <table border="1" cellspacing="0" cellpadding="5" width="80%">
        <tr>
            <td rowspan="2" width="20">NO</td>
            <td rowspan="2">Sub Indikator</td>
            <td colspan="4">Tingkat Kepuasan</td>
        </tr>
        <tr>
            <td>STP</td>
            <td>TP</td>
            <td>P</td>
            <td>SP</td>
        </tr>
        <?php $i=0; ?>
        <?php foreach ($TingkatKepuasanPelanggan as $key): ?>
                <tr>
                    <td><?php echo chr($i+65); ?></td>
                    <td colspan="5"><b><?php echo $key->QUESTION; ?></b></td>
                </tr>
            <?php $j=0; ?>
            <?php echo form_hidden('jumlahQuestion'.$i, $data[$i]['count']); ?>
            <?php foreach ($data[$i]['question'] as $key2): ?>
                <tr>
                    <td><?php echo $j+1 ?></td>
                    <td><?php echo $key2->QUESTION; ?></td>
                    <td><?php echo form_radio('answer'.$i.$j, '1', FALSE); ?></td>
                    <td><?php echo form_radio('answer'.$i.$j, '2', FALSE); ?></td>
                    <td><?php echo form_radio('answer'.$i.$j, '3', TRUE); ?></td>
                    <td><?php echo form_radio('answer'.$i.$j, '4', FALSE); ?></td>
                </tr>
                <?php $j++; ?>
            <?php  ?>
            <?php endforeach; ?>
            <?php $i++; ?>
        <?php endforeach; ?>
        <?php echo form_hidden('jumlahBab',$i); ?>
    </table>
</center>
