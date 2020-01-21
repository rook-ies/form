<table border="1" width="100%">
    <tr>
		<th>ID SERVICE TYPE</th>
		<th>SERVICE TYPE</th>
		<th>Actions</th>
    </tr>
	<?php foreach($service_type as $S){ ?>
    <tr>
		<td><?php echo $S['ID_SERVICE_TYPE']; ?></td>
		<td><?php echo $S['SERVICE_TYPE']; ?></td>
		<td>
            <a href="<?php echo site_url('service_type/edit/'.$S['ID_SERVICE_TYPE']); ?>">Edit</a> |
            <a href="<?php echo site_url('service_type/remove/'.$S['ID_SERVICE_TYPE']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
