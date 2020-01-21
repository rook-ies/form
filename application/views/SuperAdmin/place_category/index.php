<table border="1" width="100%">
    <tr>
		<th>ID PLACE CATEGORY</th>
		<th>CATEGORY</th>
		<th>Actions</th>
    </tr>
	<?php foreach($place_category as $P){ ?>
    <tr>
		<td><?php echo $P['ID_PLACE_CATEGORY']; ?></td>
		<td><?php echo $P['CATEGORY']; ?></td>
		<td>
            <a href="<?php echo site_url('place_category/edit/'.$P['ID_PLACE_CATEGORY']); ?>">Edit</a> |
            <a href="<?php echo site_url('place_category/remove/'.$P['ID_PLACE_CATEGORY']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
