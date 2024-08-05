<?php
$conn = mysqli_connect("localhost","root","","phpdasar");

$result = mysqli_query($conn,"SELECT * FROM input_nama");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>murojaah</title>
</head>
<body>
    <table>
        <tr>
            <th>No ID</th>
            <th>actions</th>
            <th>Nama</th>
            <th>jenis kelamin</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">delet</a> | 
                <a href="">edit</a>
            </td>
            <td><?= $row ["name"];?></td>
            <td><?= $row["jenis_kelamin"];?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>