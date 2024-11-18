<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>REGISTRASI</title>

    <style>
        body{
            background:url(<?= base_url('assets/img/mountain.jpg')?>), center, no-repeat;
            background-size: cover;
            color: #fff;
        }
        .kotak{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 250px;
            width: 300px;
            border: 1px solid salmon;
            border-radius: 5%;
            padding:10px;
        } 
        table {
            width: 100px;
            border-collapse: ;
        }

        td{
            padding: 5px;
        }

    </style>   
</head>
<body>
    <div class="kotak">
            <form action="<?= base_url('signin/regis')?>" Method="POST" name="formregis">
        <table>
            <tr>
                <td colspan="3" align="center">
                <h1>REGISTRASI</h1>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>
                    <input type="text" name="user" id="user" required>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <input type="password" name="pass" id="pass" required>
                </td>
            </tr>
            <tr>
                <td>Level</td>
                <td>:</td>
                <td>
                    <select name="level" id="level">
                        <option value="0">Super Admin</option>
                        <option value="1">Admin</option>
                        <option value="2">Owner</option>
                        <option value="3">Pembeli</option>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Registrasi">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Belum punya akun. <a href="<?= base_url()?>">Login</a>
                </td>
            </tr>
        </table>
    </form>
    </div>  
</body>
</html>