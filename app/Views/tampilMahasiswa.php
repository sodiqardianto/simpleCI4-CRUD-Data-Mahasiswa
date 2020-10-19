<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h2>Data Mahasiswa</h2>

    <p>
        <button type="submit" onclick="window.location='<?= site_url('mahasiswa/formTambah') ?>'">
            Tambah Data
        </button>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $nomor = 0;
            foreach ($tampilData as $row) :
                $nomor++;
            ?>

                <tr>
                    <th><?= $nomor; ?></th>
                    <td><?= $row->mhs_nim ?></td>
                    <td><?= $row->mhs_nama ?></td>
                    <td><?= $row->mhs_jenisKelamin ?></td>
                    <td><?= $row->mhs_tempatLahir . ' / ' . $row->mhs_tanggalLahir ?></td>
                    <td><?= $row->mhs_alamat ?></td>
                    <td><?= $row->mhs_telepon ?></td>
                    <td>
                        <button type="button" onclick="hapus('<?= $row->mhs_nim ?>')">
                            Hapus
                        </button>
                        <button type="submit" onclick="window.location='<?= site_url('mahasiswa/formEdit/' . $row->mhs_nim) ?>'">
                            Edit
                        </button>
                    </td>
                </tr>

            <?php
            endforeach;
            ?>
        </tbody>
    </table>

    <script>
        function hapus(nim) {
            pesan = confirm('Yakin hapus data mahasiswa ?');

            if (pesan) {
                window.location.href = ("<?= site_url('mahasiswa/hapus/') ?>") + nim;
            } else return false;
        }
    </script>
</body>

</html>