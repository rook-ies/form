<table border="1">
    <tr>
        <th>Nama </th>
        <th>Deskripsi</th>
        <th>aksi</th>
    </tr>
<?php foreach ($forms as $key): ?>
    <tr>
        <td><?php echo $key->TITLE; ?></td>
        <td><?php echo $key->DESCRIPTION; ?></td>
        <td><?php echo anchor('form/show/'.$key->ID_FORM, 'Lihat'); ?></td>
    </tr>
<?php endforeach; ?>

</table>
