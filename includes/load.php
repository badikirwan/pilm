<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/6/17
 * Time: 11:13 AM
 */

if (!defined('index')) die('Maaf.. halaman ini di tidak boleh di akses');

define('basedir', __DIR__);
define('modul', basedir . '/modul');
define('includes', basedir . '/includes');
define('rootdir', dirname(dirname(__FILE__)));

if (!file_exists(rootdir . '/config.php')) die('Maaf.. file config.php tidak ditemukan');
require rootdir . '/config.php';

if (empty($dbhost)) die();
if (empty($dbuser)) die();
if (empty($dbpass)) die();
if (empty($dbname)) die();

$koneksi = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($koneksi->connect_error) {
    die('Oops.. terjadi kesalahan :' . $koneksi->connect_error);
}
