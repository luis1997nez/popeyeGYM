<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission; // importamos la instancia de Permission

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Navegar usuario',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle usuario',
            'slug'          => 'users.show',
            'description'   => 'Ver en detalle cada usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Edicion usuario',
            'slug'          => 'users.edit',
            'description'   => 'Editar cualquier dato de un usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Elimininar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar cualquier usuarios del sistema',
        ]);

        //Roles

        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle roles',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle cada roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Creacion roles',
            'slug'          => 'roles.create',
            'description'   => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name'          => 'Edicion roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar cualquier dato de un roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Elimininar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar cualquier roles del sistema',
        ]);


         //Products

         Permission::create([
            'name'          => 'Navegar productos',
            'slug'          => 'products.index',
            'description'   => 'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle productos',
            'slug'          => 'products.show',
            'description'   => 'Ver en detalle cada productos del sistema',
        ]);

        Permission::create([
            'name'          => 'Creacion productos',
            'slug'          => 'products.create',
            'description'   => 'Editar cualquier dato de un producto del sistema',
        ]);

        Permission::create([
            'name'          => 'Edicion productos',
            'slug'          => 'products.edit',
            'description'   => 'Editar cualquier dato de un productos del sistema',
        ]);

        Permission::create([
            'name'          => 'Elimininar productos',
            'slug'          => 'products.destroy',
            'description'   => 'Eliminar cualquier productos del sistema',
        ]);
    }
}
