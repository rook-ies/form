<table border="1" width="100%">
    <tr>
		<th>ID PLACE</th>
		<th>ID PLACE TYPE</th>
		<th>ID PLACE CATEGORY</th>
		<th>NAMA</th>
		<th>Actions</th>
    </tr>
	<?php foreach($place as $P){ ?>
    <tr>
		<td><?php echo $P['ID_PLACE']; ?></td>
		<td><?php echo $P['ID_PLACE_TYPE']; ?></td>
		<td><?php echo $P['ID_PLACE_CATEGORY']; ?></td>
		<td><?php echo $P['NAMA']; ?></td>
		<td>
            <a href="<?php echo site_url('place/edit/'.$P['ID_PLACE']); ?>">Edit</a> |
            <a href="<?php echo site_url('place/remove/'.$P['ID_PLACE']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
