<?php

namespace Database\Seeders;


use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Role as RoleEnum;

class RoleSeeder extends Seeder
{
    /**
     * Create or update roles.
     *
     * @param array $roles
     * @return void
     */
    private function createOrUpdateRoles(array $roles)
    {
        foreach ($roles as $role) {
            Role::query()->updateOrCreate(['slug' => $role['slug']], $role);
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = RoleEnum::LIST;

        $this->createOrUpdateRoles($roles);
    }
}
