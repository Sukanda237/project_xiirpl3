<?php

//modularisasi
    include_once 'C_koneksi.php';

    //membuat kelas login 
    class C_login{

        // membuat fungsi untuk menangani registrasi user
        //Parameter adalah nilai yang diberikan kepada sebuah fungsi, metode, atau prosedur sebagai masukan untuk mengatur atau mengubah perilaku dari tindakan yang dijalankan oleh fungsi tersebut.
        public function register($id=0, $nama=null, $email=null, $pass=null, $role=null) {

            //membuat sebuah variabel yang bertipe data objek dari kelas/file C_koneksi
            $koneksi = new C_koneksi();
        }

        //membuat fungsi untuk login user
        public function login(){

        }

    }


?>