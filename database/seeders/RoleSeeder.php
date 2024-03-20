<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Clubs']);

        Permission::create(['name' => 'view-dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'view-dashboard.categorias.index'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.categorias.create'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.categorias.edit'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.categorias.destroy'])->syncRoles([$role1, $role2]);;

        Permission::create(['name' => 'view-dashboard.comments.index'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.comments.create'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.comments.edit'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.comments.destroy'])->syncRoles([$role1, $role2]);;

        Permission::create(['name' => 'view-dashboard.eventos.index'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.eventos.create'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.eventos.edit'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.eventos.destroy'])->syncRoles([$role1, $role2]);;

        Permission::create(['name' => 'view-dashboard.images.index'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.images.create'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.images.edit'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.images.destroy'])->syncRoles([$role1, $role2]);;

        Permission::create(['name' => 'view-dashboard.tags.index'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.tags.create'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.tags.edit'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.tags.destroy'])->syncRoles([$role1, $role2]);;

        Permission::create(['name' => 'view-dashboard.videos.index'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.videos.create'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.videos.edit'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'view-dashboard.videos.destroy'])->syncRoles([$role1, $role2]);;
    }
}
