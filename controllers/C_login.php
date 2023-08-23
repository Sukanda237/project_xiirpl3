<?php

    //untuk menghubungkan file C_koneksi kedalam c_login
    include_once 'C_koneksi.php';

    
    class C_login{

        //fungsi untuk menangani register dari user
        public function register($id=0, $nama, $email, $pass, $role) {

            //membuat variabel bertipe data objek dari kelas c_koneksi
            $koneksi = new C_koneksi();

            //perintah untuk memasukan data dari form regis kedalam tabel user
            $sql = "INSERT INTO user VALUES ('$id','$nama','$email','$pass','$role','')";

            // $sql2 = "INSERT INTO (id, nama, email, password, role, photo) users VALUES ('$id', '$nama', '$email', '$pass', '$role','')";

            //mysqli_query = function bawaan dari php
            //mengeksekusi printah 
            //2 parameter, 1. koneksi, 2. perintah nya
            $query = mysqli_query($koneksi->conn(), $sql); // -> true/false

            //untuk mengecek data hasil dari query 
            if ($query) {
                echo "Data berhasil di tambahkan";
            }else{
                echo "Data gagal di tambahkan";
            }
        }

        
        public function login(){

        }

        

    }


?>