<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        'name' => 'Chan Myae Lwin',
        'email' => 'admin@hsulucksan.com',
        'phone' => '09787676632',
        'password' => bcrypt('123456789'),
        'balance' => '100000'
        ]);
        
        $role = Role::create(['name' => 'Admin']);
        
        $permissions = Permission::pluck('id','id')->all();
        
        $role->syncPermissions($permissions);
        
        $user->assignRole([$role->id]);
    }
}
