<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Siswa extends Model
{
    // untuk table dan model jika tidak singular dan plural
    protected $table = 'siswa';
    //nambah data harus ditambah code dibawah ini(mass assigment)
    protected $fillable = ['nama_depan', 'nama_belakang', 'jenis_kelamin', 'agama', 'alamat'];
}
