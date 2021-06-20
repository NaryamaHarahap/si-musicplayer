<?php

$album = new App\Album();
$rows = $album->tampil();

?>

<h2> Data Album </h2>

<a href="index.php?page=album_input" >MENAMBAHKAN</a>
<table border="1">
	<tr>
		<th>NO</th>
		<th>NAMA ALBUM</th>
        <th>NAMA ARTIST</th>
		<th>EDIT</th>
	</tr>
	<?php foreach($rows as $row){ ?>
	<tr>
		<td><?php echo $row['album_id']; ?></td>
		<td><?php echo $row['album_name']; ?></td>
		<td><?php echo $row['artist_id']; ?> - <?php echo $row['artist_name']; ?></td>
		<td>
			<a href="index.php?page=edit_album&id=<?php echo $row['album_id']; ?>">Edit</a>					
		</td>
    </tr>
    <?php } ?>
</table>