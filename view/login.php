<?php
 /* Created by PhpStorm.
 * User: Galih
 * Date: 9/15/2017
 * Time: 5:25 PM
 */
?>
<html>
<head>
    <link rel="stylesheet" href="../asset/css/login.css" type="text/css">
    <title>Administrator Ketapang Indah</title>
</head>
<body class="bg">
    <div class="login">
        <div class="login-triangle"></div>
        <h2 class="login-header">Log in</h2>
        <form class="login-container" name="login" method="post" action="../controller/loginadmin.php">
            <p><input name="username" type="text" placeholder="Nama Pengguna"></p>
            <p><input name="password" type="password" placeholder="Kata Sandi"></p>
            <p><input name="login" type="submit" value="Masuk"></p>
        </form>
    </div>
</body>
</html>
