<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 10px 10px 10px;
        }
    </style>
    <h3>
        <center>Laporan Data Buku Perpustakaan Online</center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Terbit</th>
                <th>Tahun Penerbit</th>
                <th>ISBN</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($buku as $b) {
            ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <th><?= $b['judul_buku']; ?></th>
                    <th><?= $b['pengarang']; ?></th>
                    <th><?= $b['penerbit']; ?></th>
                    <th><?= $b['tahun_terbit']; ?></th>
                    <th><?= $b['isbn']; ?></th>
                    <th><?= $b['stok']; ?></th>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>