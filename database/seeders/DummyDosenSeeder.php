<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'NIP'=> '198203092006041002',
                'nama_doswal'=>'Dr.Eng. Adi Wibowo, S.Si., M.Kom.',
                'email'=>'adiwibowo@lecturer.undip.ac.id',
                'alamat'=>'Jalan Viltem 1',
                'no_HP'=>'08322313221',
                'foto'=>'',
            ],
            [
                'NIP'=> '198104202005012001',
                'nama_doswal'=>'Dr. Retno Kusumaningrum, S.Si., M.Kom.',
                'email'=>'retno@lecturer.undip.ac.id',
                'alamat'=>'Jalan Viltem 2',
                'no_HP'=>'083223232441',
                'foto'=>'',
            ],
            [
                'NIP'=> '198009142006041002',
                'nama_doswal'=>'Edy Suharto, S.T., M.Kom.',
                'email'=>'edysuharto@lecturer.undip.ac.id',
                'alamat'=>'Jalan Viltem 3',
                'no_HP'=>'083224422321',
                'foto'=>'',
            ],
            [
                'NIP'=> '198803222020121010',
                'nama_doswal'=>'Prajanto Wahyu Adi, M.Kom.',
                'email'=>'prajanto@lecturer.undip.ac.id',
                'alamat'=>'Jalan Viltem',
                'no_HP'=>'083232134810',
                'foto'=>'',
            ],
        ];

        foreach($userData as $key => $val){
            Dosen::create($val);
        }
    }
}
