<?php

class db
{
    private $koneksi;
    function __construct()
    {
        $this->koneksi = $koneksi = new mysqli("localhost", "root", "password", "db_tugas_aldo");
    }
    function get_user($username, $password)
    {
        $data = $this->koneksi->query("select * from tbl_user where username='$username' and password='$password'");
        return $data;
    }
    // mahasiswa
    function get_allMhs()
    {
        $data = $this->koneksi->query("select * from tbl_mahasiswa");
        return $data;
    }

    function add_mhs($nim, $nama, $alamat, $jurusan)
    {
        $this->koneksi->query("insert into tbl_mahasiswa(nim,nama,alamat,Jurusan) values('$nim','$nama','$alamat', '$jurusan')");
        return true;
    }

    function update_mhs($nim, $nama, $alamat, $jurusan)
    {
        $this->koneksi->query("UPDATE tbl_mahasiswa SET nama = '$nama', alamat = '$alamat', Jurusan = '$jurusan' WHERE nim='$nim'");
        return true;
    }

    function get_MhdByNim($nim)
    {
        $data = $this->koneksi->query("select * from tbl_mahasiswa where nim='$nim'");
        return $data;
    }

    function del_mhs($nim)
    {
        $this->koneksi->query("delete from tbl_mahasiswa where nim='$nim'");
        return true;
    }

    function get_allDosen()
    {
        $data = $this->koneksi->query("select * from tbl_dosen");
        return $data;
    }

    function get_dosenByKdDosen($kd_dosen)
    {
        $data = $this->koneksi->query("select * from tbl_dosen where kd_dosen='$kd_dosen'");
        return $data;
    }

    function add_dosen($kd_dosen, $nama, $alamat)
    {
        $this->koneksi->query("insert into tbl_dosen(kd_dosen,nama,alamat) values('$kd_dosen','$nama','$alamat')");
        return true;
    }

    function update_dosen($kd_dosen, $nama, $alamat)
    {
        $this->koneksi->query("UPDATE tbl_dosen SET nama = '$nama', alamat = '$alamat' WHERE kd_dosen='$kd_dosen'");
        return true;
    }


    function del_dosen($kd_dosen)
    {
        $this->koneksi->query("delete from tbl_dosen where kd_dosen='$kd_dosen'");
        return true;
    }

    function get_allMatkul()
    {
        $data = $this->koneksi->query("select * from tbl_matkul");
        return $data;
    }

    function get_matkulByKdMatkul($kd_matkul)
    {
        $data = $this->koneksi->query("select * from tbl_matkul where kd_matkul='$kd_matkul'");
        return $data;
    }

    function add_matkul($kd_matkul, $nama, $sks)
    {
        $this->koneksi->query("insert into tbl_matkul(kd_matkul,nama,sks) values('$kd_matkul','$nama','$sks')");
        return true;
    }

    function update_matkul($kd_matkul, $nama, $sks)
    {
        $this->koneksi->query("UPDATE tbl_matkul SET nama = '$nama', sks = '$sks' WHERE kd_matkul='$kd_matkul'");
        return true;
    }


    function del_matkul($kd_matkul)
    {
        $this->koneksi->query("delete from tbl_matkul where kd_matkul='$kd_matkul'");
        return true;
    }
}
