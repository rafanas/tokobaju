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
            font-family: 'Times New Roman', Times, serif;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
    <h3>
        <center>Laporan Penjualan Bulan <?= date('M'); ?></center>
    </h3> <br />
    <table class="table-data">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Pemesanan</th>
                <th>Nama Pembeli</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $d) { ?>
                <tr>
                    <th scope="row"><?= $d['id']; ?></th>
                    <td><?= $d['tgl_pesan']; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['keterangan']; ?></td>
                    <td><?= $d['jumlah']; ?></td>
                    <td>Rp. <?= number_format($d['harga'], 0, ',', '.'); ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="5">
                    <center><b>Total</b></center>
                </td>
                <td>
                    <b>
                        <?php $total = 0;
                        foreach ($data as $d) $total += $d['harga'];
                        echo ('Rp. ' . number_format($total, 0, ',', '.'));
                        ?>
                    </b>
                </td>
            </tr>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>