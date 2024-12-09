<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Sample data for users with different roles
        $users = [
            [
                'nama' => 'Mario Sijabat',
                'username' => 'ifs22030',
                'password' => Hash::make('admin'),
                'angkatan' => '2022',
                'nim' => '11S22030',
                'email' => 'mario@del.ac.id',
                'kelas' => 'Kelas A',
                'prodi' => 'S1 Informatika',
                'wali' => 'Wali Ortu',
                'role' => 'Orang Tua',
            ],
            [
                'nama' => 'Pak Leo',
                'username' => 'asrama123',
                'password' => Hash::make('admin'),
                'angkatan' => '2015',
                'nim' => null,
                'email' => 'asrama@del.ac.id',
                'kelas' => null,
                'prodi' => null,
                'wali' => null,
                'role' => 'Keasramaan',
            ],
            [
                'nama' => 'Bu Yoke',
                'username' => 'kmhsw123',
                'password' => Hash::make('admin'),
                'angkatan' => '2011',
                'nim' => null,
                'email' => 'kemahasiswaan@del.ac.id',
                'kelas' => null,
                'prodi' => null,
                'wali' => null,
                'role' => 'Kemahasiswaan',
            ],
            [
                'nama' => 'Pak Johannes',
                'username' => 'johannes',
                'password' => Hash::make('admin'),
                'angkatan' => '2005',
                'nim' => null,
                'email' => 'dosen@del.ac.id',
                'kelas' => null,
                'prodi' => 'S1 Informatika',
                'wali' => null,
                'role' => 'Dosen',
            ],
        ];

        // Insert predefined users
        foreach ($users as $user) {
            User::create($user);
        }

        // Generate 10 random users
        User::factory()->count(10)->create();
    }
}
