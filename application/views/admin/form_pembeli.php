<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembeli</title>
</head>
<body>
    <form action="<?= base_url('admin/simpan_pembeli')?>" method="post">
<table>
    <tr>
        <td>User ID</td>
        <td></td>
        <td>
            <input type="text" name="userid" readonly value='<?= $user ?>'>
        </td>
    </tr>
    <tr>
        <td>Nama Pembeli</td>
        <td></td>
        <td>
            <input type="text" name="nama">
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td></td>
        <td>
            <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        </td>
    </tr>
    <tr>
        <td>Telepone</td>
        <td></td>
        <td>
            <input type="text" name="telepon" maxlength="13">
        </td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td></td>
        <td>
            <input type="email" name="email">
        </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td></td>
        <td>
            <input type="radio" name="jk" value="Laki-laki">Laki-laki
            <input type="radio" name="jk" value="Perempuan">Perempuan
        </td>
    </tr>
    <tr>
        <td colspan="3" align="right">
            <button type="submit">Simpan</button>
        </td>
    </tr>
</table>
</form>
</body>
</html>