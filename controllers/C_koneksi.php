<?php
// - buatkan kelas sesuai dengan nama file
// - didalamnya terdapat sebuah fungsi yang bernama connection 

// ini adalah kelas, nama kelas harus sama persis dengan nama file 
class C_koneksi{

    // ini ada fungsi atau method yang bernama connection dan fungsi harus ada didalam kelas 
    public function conn(){
        // untuk isinya kita lanjutkan hari rabu 

        // membuat fungsi untuk terkoneksi kedalam database project_xiirpl3
        $conn = mysqli_connect('localhost','root','','project_xiirpl3');

        // untuk mengecek apakah koneksi berhasil dibuat atau tidak 
        if (!$conn) {
            die("Koneksi gagal dibuat : ".mysqli_connect_error());
        }else{
            //untuk mengembalikan nilai koneksi
            return $conn;
        }

    }

   
}

// inisialisasi objek, harus diluar kelas 
//$koneksi = new C_koneksi();
// memanggil method atau fungsi yang ada didalam kelas c_koneksi 
//$koneksi->connection();



?>



