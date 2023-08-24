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

        
        public function login($email, $pass){

            $conn = new C_koneksi();

            //untuk mengecek tombol login sudah di tekan atau di klik oleh user 
            if (isset($_POST['login'])) {
                
                //untuk menampilkan semua data dari tabel user berdasaran email yang diinputkan oleh user
                $sql = "SELECT * FROM user WHERE email = '$email'";

                $query = mysqli_query($conn->conn(), $sql);

                //mengubah data dari bertipe data objek menjadi array asosiatif
                $data = mysqli_fetch_assoc($query);

                //untuk mengecek apakah ada data dari hasil query
                if ($data) {
                    
                    //untuk mengecek atau membandingkan inputan password dari user dengan password dari tabel user
                    if (password_verify($pass,$data['password'])) {
                        
                        //unutk mengecek apakah posisi login sebagai admin, atau mengecek apakah role user itu sebagai admin atau bukan
                        if ($data['role'] == 'admin') {
                            
                            //untuk menampung data dari query database yang akan digunakan ketika halaman admin/user setelah proses logi berhasi;
                            $_SESSION['data'] = $data;
                            $_SESSION['role'] = $data['role'];

                            //memindahkan halaman ke halaman home
                            header("Location: ../views/home.php");
                            
                            //untuk menghentikan proses dibawahnya
                            exit;
                        
                            //unutk mengecek apakah posisi login sebagai user, atau mengecek apakah role user itu sebagai admin atau bukan
                        }elseif ($data['role'] == 'user') {
                            
                            $_SESSION['data'] = $data;
                            $_SESSION['role'] = $data['role'];

                            header("Location: ../views/home_user.php");
                            exit;
                        }

                    }else{
                        echo "cek password";
                    }

                }else {
                    echo "cek username dan password";
                }
            }
        }

        

    }


?>