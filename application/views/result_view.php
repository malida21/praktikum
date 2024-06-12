<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa oleh Gia Riady dan 2110020096</title>
</head>

<body>
    <h1>Selamat Datang di Web Malida</h1>
    <table border="3">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($result as $row) { ?>
                <tr>
                    <th><?php echo $no++ ?></th>
                    <th><?php echo $row->NIM ?></th>
                    <th><?php echo $row->nama_mhs ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>