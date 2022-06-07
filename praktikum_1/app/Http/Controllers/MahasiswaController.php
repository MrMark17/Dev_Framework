<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function cekObject(){
        $mahasiswa = new Mahasiswa;

        dump($mahasiswa);
    }

    public function insert(){
        $mahasiswa = new Mahasiswa;
        $mahasiswa -> nim = '19003036';
        $mahasiswa -> nama = 'Sari Citra Lestari';
        $mahasiswa -> tanggal_lahir = '20-12-31';
        $mahasiswa -> ipk = '3.5';
        $mahasiswa -> save();

        dump($mahasiswa);
    }
    public function update(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa -> tanggal_lahir = '2001-01-01';
        $mahasiswa -> ipk = 2.9;
        $mahasiswa -> save();

        dump($mahasiswa);
    }
    public function all(){
        $result = Mahasiswa::all();
        dump($result);
    }
}
?>
