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
            'nama' => 'Ali AnakBudi',
            'umur'=> '21',
            'alamat'=> 'Jalan Kaki 2 No. 7, Jakarta Barat',
            'notelpon'=> '08111223332',
        ]);
    }
}
