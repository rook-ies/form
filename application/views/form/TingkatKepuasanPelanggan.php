<center>
    <table border="0" cellspacing="0" cellpadding="5" width="80%">
        <tr>
            <td colspan="4"><b>II.Tingkat Kepuasan Pelanggan</b></td>
        </tr>
        <tr>
            <td colspan="4">Mohon untuk memberi tanda centang (√) pada kolom yang Anda anggap mewakili kepuasan Anda terhadap sub indikator yang tertera di bawah ini.
            </td>
        </tr>
        <tr>
            <td><b>STP = Sangat Tidak Puas</b></td>
            <td><b>TP = Tidak Puas</b></td>
            <td><b>P = Puas</b></td>
            <td><b>SP = Sangat Puas</b></td>
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
            <?php if ($i!=3) { ?>
                <?php echo form_hidden('TKMjumlahQuestion'.$i, $data[$i]['count']); ?>
                <?php foreach ($data[$i]['question'] as $key2): ?>
                    <tr>
                        <td><?php echo $j+1 ?></td>
                        <td><?php echo $key2->QUESTION; ?></td>
                        <td><?php echo form_radio('TKManswer'.$i.$j, '1', FALSE); ?></td>
                        <td><?php echo form_radio('TKManswer'.$i.$j, '2', FALSE); ?></td>
                        <td><?php echo form_radio('TKManswer'.$i.$j, '3', TRUE); ?></td>
                        <td><?php echo form_radio('TKManswer'.$i.$j, '4', FALSE); ?></td>
                    </tr>
                    <?php $j++; ?>
                <?php  ?>
                <?php endforeach; ?>
            <?php } else { ?>
                <tr>
                    <td></td>
                    <td>Pasien BPJS/Asuransi (Non Bayar Sendiri)</td>
                    <td colspan="4"><?php echo form_radio('TKMpilihanBayar', '1', TRUE); ?></td>
                </tr>
                <?php $k=0; ?>
                <?php echo form_hidden('TKMjumlahQuestionNonBayar', $data[$i]['non_bayar']['count']); ?>
                <?php foreach ($data[$i]['non_bayar']['question'] as $key2): ?>
                    <tr>
                        <td><?php echo $k+1 ?></td>
                        <td><?php echo $key2->QUESTION; ?></td>
                        <td><?php echo form_radio('TKManswerNonbayar'.$i.$k, '1', FALSE); ?></td>
                        <td><?php echo form_radio('TKManswerNonbayar'.$i.$k, '2', FALSE); ?></td>
                        <td><?php echo form_radio('TKManswerNonbayar'.$i.$k, '3', TRUE); ?></td>
                        <td><?php echo form_radio('TKManswerNonbayar'.$i.$k, '4', FALSE); ?></td>
                    </tr>
                    <?php $k++; ?>
                <?php endforeach; ?>
                <tr>
                    <td></td>
                    <td>Pasien Umum/ Bayar Sendiri</td>
                    <td><?php echo form_radio('TKMpilihanBayar', '2', FALSE); ?></td>
                </tr>
                <?php $k=0; ?>
                <?php echo form_hidden('TKMjumlahQuestionBayar', $data[$i]['bayar']['count']); ?>
                <?php foreach ($data[$i]['bayar']['question'] as $key2): ?>
                    <tr>
                        <td><?php echo $k+1 ?></td>
                        <td><?php echo $key2->QUESTION; ?></td>
                        <td><?php echo form_radio('TKManswerBayar'.$i.$k, '1', FALSE); ?></td>
                        <td><?php echo form_radio('TKManswerBayar'.$i.$k, '2', FALSE); ?></td>
                        <td><?php echo form_radio('TKManswerBayar'.$i.$k, '3', TRUE); ?></td>
                        <td><?php echo form_radio('TKManswerBayar'.$i.$k, '4', FALSE); ?></td>
                    </tr>
                    <?php $k++; ?>
                <?php endforeach; ?>
            <?php } ?>
            <?php $i++; ?>
        <?php endforeach; ?>
        <?php echo form_hidden('TKMjumlahBab',$i); ?>
    </table>
</center>
