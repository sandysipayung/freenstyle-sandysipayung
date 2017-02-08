<?php
require_once 'session.php';
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
                    <span>Member Information</span>
                </div>
                <div id="navigasi">
                    <div id="add" align="left">
                        <a href="addmember.php">
                            <img src="images/add.png" height="20" />
                        </a>
                    </div>
                    <div id="search" align="right">
                        <form method="post" action="member.php">
                            <input type="text" name="keyword"/>
                            &nbsp;&nbsp;
                            <input type="submit" name="submitSearch" value="Search"/>
                        </form>
                    </div>
                </div>
                <div id="content_isi" align="center">
                    
                    
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