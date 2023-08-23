<?php
include_once '../controllers/C_login.php';

$login = new C_login();

    //untuk mengecek apakah action pada form  mengirimkan aksi register
    if ($_GET['aksi'] == 'register') {
        
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $role = $_POST['role'];

        //memanggil method/fungsi register ke dalam r_login
        $login->register($id=0, $nama, $email, $pass, $role);
    }
    elseif ($_GET['aksi'] == 'login') {
        # code...
    }


?>