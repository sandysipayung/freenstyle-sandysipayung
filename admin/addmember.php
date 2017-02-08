<?php
require_once 'session.php';
if (!empty($_POST['submitRegister'])) {
    //require_once '../koneksi.php';
    $cek_email = mysql_query("select * from user where email='" . $_POST['email'] . "'");
    if (mysql_num_rows($cek_email) == 0) {
        //belum terdaftara emailnya
        $tambah = mysql_query("insert into user (email, password, nama, alamat, telepon, type, status) values
                    ('" . $_POST['email'] . "',
                        '" . md5($_POST['password']) . "',
                            '" . $_POST['nama'] . "', 
                                '" . $_POST['alamat'] . "',
                                    '" . $_POST['telepon'] . "',
                                        'member',
                                        'active')");
        if ($tambah == true) {
            $pesan = 'Register Berhasil,';
        } else {
            $pesan = 'Register Gagal, Silahkan Hubungi Administrator';
        }
    } else {
        //email sudah ada bro
        $pesan = 'Email Sudah Terdaftar Bro, Loe Harus Ganti';
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>

    <body id="menu3">

        <div id="container">
            <div id="header">
<?php
include 'header.php';
?>
            </div>
            <div id="menu">
                <?php
                include 'menu.php';
                ?>
            </div>
            <div id="content">
                <div align="center" class="judulContent">
                    <span>ADD MEMBER</span>
                </div>

                <div id="content_isi" align="center">
                    <form action="#" method="post">
                        <table>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="email" name="email"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Password
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="password" name="password"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nama
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="text" name="nama"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Alamat
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <textarea name="alamat"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Telepon
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="text" name="telepon"/>
                                </td>
                            </tr>
<?php
if (!empty($pesan)) {
    ?>
                                <tr>
                                    <td colspan="3" align="center">
                                <?php echo $pesan; ?>
                                    </td>
                                </tr>
                                        <?php
                                    }
                                    ?>
                            <tr>
                                <td colspan="3" align="center">
                                    <input type="submit" name="submitRegister" value="Register"/>
                                    &nbsp;&nbsp;
                                    <input type="reset" name="reset" value="Reset"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div id="footer">
<?php
include 'footer.php';
?> 
            </div>
        </div>
    </body>
</html>