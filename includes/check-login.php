<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/5/17
 * Time: 3:16 AM
 */

if (isset($_POST)) {
    $username = (isset($_POST['username']) && !empty($_POST['username']))? $_POST['username'] : FALSE;
    $password = (isset($_POST['password']) && !empty($_POST['password']))? $_POST['password'] : FALSE;

    $error = '';
    if (!$username) {
        $error = "username tidak boleh kosong";
    } elseif (!$password) {
        $error = "password tidak boleh kosong";
    } else {
        $username = $koneksi->escape_string($username);
        $password = $koneksi->escape_string($password);

        $password = md5($password);

        $sql = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['_login'] = 'open';
            $_SESSION['_username'] = ucfirst($username);

            header('location:'.$base_url.'/admin');
            exit();
        } else {
            $error = 'username dan password tidak ada';
        }
    }

    if ($error != '') {
        $_SESSION['error_login'] = $error;
        header('location:'.$base_url.'/login.php');
        exit();
    }
}