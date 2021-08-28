<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$er5358zLagPnjJlmxstLYuWBd.jJzTwE6sVzeXNSm96RQAgqLXoi2', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 2, 'name' => 'Edison Ramos', 'email' => 'ediramos_@hotmail.com', 'password' => 'eramos1218', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 3, 'name' => 'Alexei Ramos', 'email' => 'alexynaru@hotmail.com', 'password' => 'aramos738', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 4, 'name' => 'Kathy Paez', 'email' => 'pollitollavero@hotmail.com', 'password' => 'kpaez2002', 'role_id' => 2, 'remember_token' => '',],
            ['id' => 5, 'name' => 'Usuario Simple', 'email' => 'usuario@user.com', 'password' => 'usuariosimple123', 'role_id' => 2, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
