<?php

namespace Database\Seeders;


use App\Enums\Role as RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'role_id' => RoleEnum::ADMIN,
            'first_name' => 'Борис',
            'last_name' => 'Ким',
            'birthday' => '1990-10-13',
            'phone' => '7713404056',
            'email' => 'kimboris1310@gmail.com',
        ]);
    }
}
