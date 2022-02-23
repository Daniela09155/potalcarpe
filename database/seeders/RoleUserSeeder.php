<?php
namespace Database\Seeders;

use App\Models\Role_User\Category;
use App\Models\Role_User\Permission;
use App\Models\Role_User\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Desacticar todas las claves foraneas
        DB::statement('SET foreign_key_checks=0');
        //Truncar o vaciar las tablas
        DB::table('role_user')->truncate();
        DB::table('permission_role')->truncate();
        Permission::truncate();
        Role::truncate();
        Category::truncate();

        $useradmin = User::where('email', 'admin@admin.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin = User::create([

            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('1234') // password sin encriptar
        ]);
        $userguest = User::where('email', 'guest@guest.com')->first();
        if ($userguest) {
            $userguest->delete();
        }
        $userguest = User::create([

            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('1234') // password sin encriptar
        ]);


        //rol de admin
        $roleadmin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrator',
            'full_access' => 'yes'
        ]);
        //Definir role_user
        $useradmin->roles()->sync([$roleadmin->id]);

        //rol de guest
        $roleguest = Role::create([
            'name' => 'Guest',
            'slug' => 'guest',
            'description' => 'Guest',
            'full_access' => 'no'
        ]);


        //Definir role_user
        $userguest->roles()->sync([$roleguest->id]);

        //Categorias
        $user_category = Category::create([
            'name' => 'Usuario',
            'description' => 'Todas las funciones de usuario'
        ]);
        $role_category = Category::create([
            'name' => 'Rol',
            'description' => 'Todas las funciones de roles'
        ]);
        $self_category = Category::create([
            'name' => 'Modulo',
            'description' => 'Todas las funciones de modulos'
        ]);
        $calen_category = Category::create([
            'name' => 'Calendario',
            'description' => 'Todas las funciones de calendario'
        ]);
        $emp_category = Category::create([
            'name' => 'Empleados',
            'description' => 'Todas las funciones de empleados'
        ]);
        $hora_category = Category::create([
            'name' => 'Horarios',
            'description' => 'Todas las funciones de horarios'
        ]);
        $info_category = Category::create([
            'name' => 'Informes',
            'description' => 'Todas las funciones de informes'
        ]);
        $solic_category = Category::create([
            'name' => 'Solicitudes',
            'description' => 'Todas las funciones de solicitudes'
        ]);

        

        //Permissions
        $permission_all = [];

        //permission_role


        //====================USERS
        //permission_role
        $permission = Permission::create([
            'category_id' => $user_category->id,
            'name' => 'Lista usuarios',
            'slug' => 'user.index',
            'description' => 'PUede ver la lista de usuarios'
        ]);
        //add permission to array
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'category_id' => $user_category->id,
            'name' => 'Ver usuario',
            'slug' => 'user.show',
            'description' => 'Puede ver detalles de usuarios'
        ]);

        $permission_all[] = $permission->id;



        //add permission to array

        //add permission to array
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'category_id' => $user_category->id,
            'name' => 'Editar usuario',
            'slug' => 'user.edit',
            'description' => 'Puede editar usuarios'
        ]);
        //add permission to array
        $permission_all[] = $permission->id;




        $permission = Permission::create([
            'category_id' => $user_category->id,
            'name' => 'Eliminar usuario',
            'slug' => 'user.destroy',
            'description' => 'Puede eliminar usuarios'
        ]);


        //add permission to array
        $permission_all[] = $permission->id;




        //add global permission to array
        $permission = Permission::create([
            'category_id' => $user_category->id,
            'name' => 'editar propio',
            'slug' => 'userown.edit',
            'description' => 'Puede editar su propio usuario'
        ]);
        //add golbal permission to array
        $permission_all[] = $permission->id;



        $permission = Permission::create([
            'category_id' => $user_category->id,
            'name' => 'Ver su propio usuario',
            'slug' => 'userown.show',
            'description' => 'Puede ver detalles propios'
        ]);
        $permission_all[] = $permission->id;


        //======================Role
        $permission = Permission::create([
            'category_id' => $role_category ->id,
            'name' => 'Lista roles',
            'slug' => 'role.index',
            'description' => 'Puede ver lista de roles'
        ]);
        //add permission to array
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'category_id' => $role_category ->id,
            'name' => 'Ver roles',
            'slug' => 'role.show',
            'description' => 'Puede ver detalles de roles'
        ]);
        //add permission to array
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'category_id' => $role_category ->id,
            'name' => 'Crear rol',
            'slug' => 'role.create',
            'description' => 'Puede crear roles'
        ]);
        //add permission to array
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'category_id' => $role_category ->id,
            'name' => 'Editar rol',
            'slug' => 'role.edit',
            'description' => 'Puede editar roles'
        ]);
        //add permission to array
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'category_id' => $role_category ->id,
            'name' => 'Eliminar roles',
            'slug' => 'role.destroy',
            'description' => 'Puede eliminar roles'
        ]);


        //add permission to array
        $permission_all[] = $permission->id;



        //=====================Modulos===================


        $permission = Permission::create([
            'category_id' => $self_category->id,
            'name' => 'Lista modullos',
            'slug' => 'category.index',
            'description' => 'Puede ver lista de modulos'
        ]);
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'category_id' => $self_category->id,
            'name' => 'Crear modulos',
            'slug' => 'category.create',
            'description' => 'Puede crear modulos'
        ]);
        $permission_all[] = $permission->id;




        $permission = Permission::create([
            'category_id' => $self_category->id,
            'name' => 'Ver modulos',
            'slug' => 'category.show',
            'description' => 'Puede ver detalles de modulo'
        ]);
        $permission_all[] = $permission->id;



        $permission = Permission::create([
            'category_id' => $self_category->id,
            'name' => 'Editar modulo',
            'slug' => 'category.edit',
            'description' => 'Puede editar modulos'
        ]);
        $permission_all[] = $permission->id;


        $permission = Permission::create([
            'category_id' => $self_category->id,
            'name' => 'Eliminar modulo',
            'slug' => 'category.destroy',
            'description' => 'Pued elliminar modulo'
        ]);
        $permission_all[] = $permission->id;

        //=================Calendario
        $permission = Permission::create([
            'category_id' => $calen_category->id,
            'name' => 'Lista calendario',
            'slug' => 'calendar.index',
            'description' => 'Puede ver modulo calendario'
        ]);
        $permission_all[] = $permission->id;
//=================Empleados
        $permission = Permission::create([
            'category_id' => $emp_category->id,
            'name' => 'Lista empleados',
            'slug' => 'empleado.index',
            'description' => 'Puede ver modulo empleados'
        ]);
        $permission_all[] = $permission->id;
//=================Horarios
        $permission = Permission::create([
            'category_id' => $hora_category->id,
            'name' => 'Lista horarios',
            'slug' => 'horarios.index',
            'description' => 'Puede ver modulo horarios'
        ]);
        $permission_all[] = $permission->id;

        //=================Informes
        $permission = Permission::create([
            'category_id' => $info_category->id,
            'name' => 'Lista informes',
            'slug' => 'informes.index',
            'description' => 'Puede ver modulo informes'
        ]);
        $permission_all[] = $permission->id;

        //=================Solicitudes
        $permission = Permission::create([
            'category_id' => $solic_category->id,
            'name' => 'Lista solicitudes',
            'slug' => 'solicitud.index',
            'description' => 'Puede ver modulo Solicitudes'
        ]);
        $permission_all[] = $permission->id;

        $roleadmin->permissions()->sync($permission_all);
    }
}
