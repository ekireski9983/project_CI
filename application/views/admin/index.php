<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <!-- <center><h2>Hallo <?php echo $user->nama ?></h2></center>
    <a href="<?= base_url('signin/logout') ?>">Logout</a> -->

    <table width="100%" border="1">
        <tr>
            <td width="15%"></td>
            <td width="65%"></td>
            <td width="10">
                <?php echo $user->nama ?>
            </td>
            <td width="10">
                <a href="<?= base_url('signin/logout') ?>">Logout</a>
            </td>
        </tr>
        <tr>
            <td>Dashboard</td>
            <td colspan="3" rowspan="3">
                <iframe id="fm" name="fm" width="100%" height="500px" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in picture; web-share" allowfullscreen></iframe>
            </td>
        </tr>
        <tr>
            <td>
                <a href="<?= base_url('admin/setting_pembeli') ?>" target="fm">
                    <button>Konfigurasi user pembeli</button>
                </a>
            </td>
        </tr>
        <tr>
            <td>Konfigurasi barang</td>
        </tr>
        <tr>
            <!-- alt+0153 -->
            <td align="center" colspan="4">
                Copyright
                <?php echo date('Y') ?>Tokokoko™
            </td>
        </tr>
    </table>
</body>

</html>