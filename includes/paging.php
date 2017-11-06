<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/5/17
 * Time: 8:22 AM
 */
if( !defined('index') ) die('Halaman Di lindungi');

/**
 * paging.php berfungsi untuk menangan perpindahan halaman dan
 * menghindari mengakses file secara langsung( ini masih sederhana )
 * fungsi ini didasarkan pada $_GET untuk menangkap parameter dari URL
 * contoh : http://localhost/login/?page=check-login
 * maka parameter yang ditangkap adalah page dengan syntax $_GET['page']
 * yang kemudian di eksekusi dengan IF inline dan Switch Case
 */

$paging = ( isset($_GET['page']) && $_GET['page'] ) ? $_GET['page'] : '';

switch ($paging) {
    case 'check-login':
        require 'includes/check-login.php';
        break;
    case 'logout':
        session_destroy();
        header('location:'.$base_url.'/login-page.php');
        break;
    default:
        $_SESSION['error_log'] = $paging;
        require rootdir . '/login.php';
        break;
}