<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Login</title>

    <style>
        body{
            background:url(<?= base_url('assets/img/img2.jpg')?>), center, no-repeat;
            background-size: cover;
            color: #fff;
        }
        .kotak{
            position: absolute;
            top: 30%;
            left: 40%;
            transform: translate(-50%, -50%);
            height: 250px;
            width: 300px;
            border: 5px solid white;
            border-radius: 5%;
            padding: 10px;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }

        td{
            padding: 5px;
        }

    </style> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>  
</head>
<body style="">
    <div class="kotak" data-aos="fade-down">
            <form action="<?= base_url('signin/login')?>" Method="POST" name="formlogin">
        <table>
            <tr>
                <td colspan="3" align="center">
                <h1>Login</h1>
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
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Login">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Belum punya akun. <a href="<?= base_url('signin/formregis')?>">Registrasi</a>
                </td>
            </tr>
        </table>
    </form>
    </div>  

    <script>
        <?php if (isset($this->session->pesan) == TRUE) { ?>
            Swal.fire({
                icon: 'error',
                title: 'ups',
                text: '<?php echo $this->session->pesan ?>'
            });
        <?php } ?>

        AOS.init(
            {
                delay:300,
                duration:1000,
                easing:"ease-in-back"
            }
        )
        </script>
</body>
</html>