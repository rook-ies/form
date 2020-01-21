<table border="1" width="100%">
    <tr>
		<th>ID PLACE TYPE</th>
		<th>TYPE</th>
		<th>Actions</th>
    </tr>
	<?php foreach($place_type as $P){ ?>
    <tr>
		<td><?php echo $P['ID_PLACE_TYPE']; ?></td>
		<td><?php echo $P['TYPE']; ?></td>
		<td>
            <a href="<?php echo site_url('place_type/edit/'.$P['ID_PLACE_TYPE']); ?>">Edit</a> | 
            <a href="<?php echo site_url('place_type/remove/'.$P['ID_PLACE_TYPE']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
