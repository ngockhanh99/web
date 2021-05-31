<?php

$cn = isset($_GET['cn']) ? $_GET['cn'] : 'home';
switch ($cn)
{
    case 'home':
        include_once 'site/controller/c_home.php';
        break;
    case 'giohang':
        include_once 'site/controller/c_gio_hang.php';
        break;
}
