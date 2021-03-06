<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Mahasiswa</title>
</head>

<body>
    <h2>Form Edit Mahasiswa</h2>
    <p>
        <button type="submit" onclick="window.location='<?= site_url('mahasiswa/index') ?>'">
            Kembali
        </button>
    </p>

    <p>
        <?= form_open('mahasiswa/updateData') ?>
        <table>
            <tr>
                <td>NIM :</td>
                <td>
                    <input type="text" name="nim" maxlength="10" value="<?= $nim; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap :</td>
                <td>
                    <input type="text" name="nama" maxlength="50" value="<?= $nama; ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" name="jenisKelamin" value="L" <?php if ($jenisKelamin == 'L') echo 'checked'; ?>>Laki-laki
                    <input type="radio" name="jenisKelamin" value="P" <?php if ($jenisKelamin == 'P') echo 'checked'; ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir :</td>
                <td>
                    <input type="text" name="tempat" size="30" value="<?= $tempat; ?>"> / <input type="date" name="tanggal" value="<?= $tanggal; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td>
                    <textarea name="alamat" cols="50" rows="5"><?= $alamat; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>No. Telepon :</td>
                <td>
                    <input type="text" name="telp" pattern="{0-9}" value="<?= $telp; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Update Data">
                </td>
            </tr>
        </table>
        <?= form_close(); ?>
    </p>
</body>

</html>