<?php
    if(!empty($_POST['submitRegister']))
    {
        require_once 'koneksi.php';
        $cek_email=mysql_query("select * from user where email='".$_POST['email']."'");
        if(mysql_num_rows($cek_email)==0)
        {
            //belum terdaftara emailnya
            $tambah=mysql_query("insert into user (email, password, nama, alamat, telepon, type, status) values
                    ('".$_POST['email']."',
                        '".md5($_POST['password'])."',
                            '".$_POST['nama']."', 
                                '".$_POST['alamat']."',
                                    '".$_POST['telepon']."',
                                        'member',
                                        'active')");
            if($tambah==true)
            {
                $pesan='Register Berhasil, Silahkan Login Bro';
            }else{
                $pesan='Register Gagal, Silahkan Hubungi Administrator';
            }
            
        }else{
            //email sudah ada bro
            $pesan='Email Sudah Terdaftar Bro, Loe Harus Ganti';
        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once 'title.php';?>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<div id="wrapper">
	<?php require_once 'header.php';?>
        <?php require_once 'menu.php';?>
    <div id="content">
        <div id="contenttext">
            <h2>Register</h2><br>
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
                                <input type="password" name="username"/>
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
                        if(!empty($pesan))
                        {
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
    <?php require_once 'footer.php';?>
</div>
</body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

