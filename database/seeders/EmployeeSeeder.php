<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'kategori'=>'alat',
            'nama' => 'lampu belajar',
            'harga'=> '21000',
            'foto'=> '',
            'stok' => '12',
        ]);
    }
}
