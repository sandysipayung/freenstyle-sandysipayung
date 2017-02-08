<?php
    if(!empty($_POST['submitLogin'])){
        require_once 'koneksi.php';
        $cek_user=mysql_query("select * from user where email='".$_POST['email']."' and password='".md5($_POST['password'])."'");
        if(mysql_num_rows($cek_user)==1)
        {
            //login berhasil
             $pesan ='LOGIN BERHASIL Bro';
        }
        else{
            //login gagal. Username / Password salah
            $pesan ='Username / Password Salah Bro';
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
            <h2>Login</h2><br>
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
                                <input type="text" name="email"/>
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
                                <input type="submit" name="submitLogin" value="Login"/>
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
