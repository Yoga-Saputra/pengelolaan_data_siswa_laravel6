<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 4; $i++) { 
            DB::table('siswa')->insert([
                'nama_depan'    => 'alich'.$i,
                'nama_belakang'  => 'ajeng'.$i,
                'jenis_kelamin' => 'Wanita',
                'agama'         =>  'islam',
                'alamat'        =>  'padaan',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]);
            DB::table('siswa')->insert([
                'nama_depan'    => 'Yoga'.$i,
                'nama_belakang'  => 'saputra'.$i,
                'jenis_kelamin' => 'Pria',
                'agama'         =>  'islam',
                'alamat'        =>  'jogja',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]);
        }
    }
}
