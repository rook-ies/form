<table border="1" width="100%">
    <tr>
		<th>ID ADMIN</th>
		<th>ID PLACE</th>
		<th>NAMA</th>
		<th>EMAIL</th>
		<th>PASSWORD</th>
		<th>Actions</th>
    </tr>
	<?php foreach($admin as $A){ ?>
    <tr>
		<td><?php echo $A['ID_ADMIN']; ?></td>
		<td><?php echo $A['ID_PLACE']; ?></td>
		<td><?php echo $A['NAMA']; ?></td>
		<td><?php echo $A['EMAIL']; ?></td>
		<td><?php echo $A['PASSWORD']; ?></td>
		<td>
            <a href="<?php echo site_url('admin/edit/'.$A['ID_ADMIN']); ?>">Edit</a> |
            <a href="<?php echo site_url('admin/remove/'.$A['ID_ADMIN']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
