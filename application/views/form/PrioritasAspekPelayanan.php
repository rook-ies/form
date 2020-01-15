<center>
    <table border="0" cellspacing="0" cellpadding="5" width="80%">
        <tr>
            <td colspan="4"><b>V.PRIORITAS ASPEK PELAYANAN</b></td>
        </tr>
        <tr>
            <td colspan="4">Mohon berikan prioritas tingkat kepentingan aspek berikut menurut Anda dengan mengisikan angka 1 – 9 (1 = Sangat Penting hingga 9 = Sangat Tidak Penting).
            </td>
        </tr>
    </table>
    <table border="1" cellspacing="0" cellpadding="5" width="80%">
        <tr>
            <th>No</th>
            <th>Aspek</th>
            <th>Prioritas</th>
        </tr>
        <?php $i=0; ?>
        <?php foreach ($TingkatKepuasanPelanggan as $key): ?>
            <tr>
                <td><?php echo $i+1?></td>
                <td><?php echo $key->QUESTION ?></td>
                <td><input type="range" min="1" max="9" id="get<?php echo $i; ?>" onchange="fetch(<?php echo $i; ?>)"/>
                    <input name="nilaiPrioritas<?php echo $i;?>" type="text" id="put<?php echo "$i"; ?>" ></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</center>
