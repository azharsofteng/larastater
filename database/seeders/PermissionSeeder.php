<?php
namespace Database\Seeders;

use App\Models\Moduale;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modualeAppDashboard = Moduale::updateOrCreate(['name' => 'Admin Dashboard']);
        Permission::updateOrCreate([
            'moduale_id' => $modualeAppDashboard->id,
            'name' => 'Access Dashboard',
            'slug' => 'app.dashboard'
        ]);
        $modualeRole = Moduale::updateOrCreate(['name' => 'Role Management']);
        Permission::updateOrCreate([
            'moduale_id' => $modualeRole->id,
            'name' => 'Access Role',
            'slug' => 'app.roles.index'
        ]);
        Permission::updateOrCreate([
            'moduale_id' => $modualeRole->id,
            'name' => 'Create Role',
            'slug' => 'app.roles.create'
        ]);
        Permission::updateOrCreate([
            'moduale_id' => $modualeRole->id,
            'name' => 'Edit Role',
            'slug' => 'app.roles.edit'
        ]);
        Permission::updateOrCreate([
            'moduale_id' => $modualeRole->id,
            'name' => 'Delete Role',
            'slug' => 'app.roles.destroy'
        ]);

        $modualeUser = Moduale::updateOrCreate(['name' => 'User Management']);
        Permission::updateOrCreate([
            'moduale_id' => $modualeUser->id,
            'name' => 'Access User',
            'slug' => 'app.users.index'
        ]);
        Permission::updateOrCreate([
            'moduale_id' => $modualeUser->id,
            'name' => 'Create User',
            'slug' => 'app.users.create'
        ]);
        Permission::updateOrCreate([
            'moduale_id' => $modualeUser->id,
            'name' => 'Edit User',
            'slug' => 'app.users.edit'
        ]);
        Permission::updateOrCreate([
            'moduale_id' => $modualeUser->id,
            'name' => 'Delete User',
            'slug' => 'app.users.destroy'
        ]);
    }
}
