<?php

include "koneksi.php";

if(isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nim, nama, alamat, prodi)    
        VALUES (
        '$_POST[tnim]',
        '$_POST[tnama]',
        '$_POST[talamat]',
        '$_POST[tprodi]')");

        if ($simpan) {
            echo "<script> 
            alert('simpan data berhasil');
            document.location='index.php';
            </script>";
        }else{
            echo "<script> 
            alert('simpan data gagal');
            document.location='index.php';
            </script>";
        }
}

else {  
    echo "No, mail is not set";
}


if(isset($_POST['bUbah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE tmhs SET 
    nim = '$_POST[tnim]',
    nama = '$_POST[tnama]',
    alamat = '$_POST[talamat]',
    prodi = '$_POST[tprodi]'
    WHERE id_mhs = '$_POST[id_mhs]'
    ");

        if ($ubah) {
            echo "<script> 
            alert('Ubah data berhasil');
            document.location='index.php';
            </script>";
        }else{
            echo "<script> 
            alert('Ubah data gagal');
            document.location='index.php';
            </script>";
        }
}

else {  
    echo "No, mail is not set";
}


if(isset($_POST['bHapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM tmhs WHERE id_mhs = '$_POST[id_mhs]'");

        if ($hapus) {
            echo "<script> 
            alert('Hapus data berhasil');
            document.location='index.php';
            </script>";
        }else{
            echo "<script> 
            alert('Hapus data gagal');
            document.location='index.php';
            </script>";
        }
}

else {  
    echo "No, mail is not set";
}

?>