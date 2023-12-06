<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama'=>'Dr.Eng. Adi Wibowo, S.Si., M.Kom.',
                'email'=>'adiwibowo@lecturer.undip.ac.id',
                'role'=>'dosen',
                'password'=>bcrypt('adminadmin')
            ],
            [
                'nama'=>'Dr. Retno Kusumaningrum, S.Si., M.Kom.',
                'email'=>'retno@lecturer.undip.ac.id',
                'role'=>'dosen',
                'password'=>bcrypt('adminadmin')
            ],
            [
                'nama'=>'Edy Suharto, S.T., M.Kom.',
                'email'=>'edysuharto@lecturer.undip.ac.id',
                'role'=>'dosen',
                'password'=>bcrypt('adminadmin')
            ],
            [
                'nama'=>'Prajanto Wahyu Adi, M.Kom.',
                'email'=>'prajanto@lecturer.undip.ac.id',
                'role'=>'dosen',
                'password'=>bcrypt('adminadmin')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
