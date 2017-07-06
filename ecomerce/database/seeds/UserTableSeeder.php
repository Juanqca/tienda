<?php

use Illuminate\Database\Seeder;
use mercado\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
        [
        	'name'=>'Primo',
        	'last_name'=>'Mamani',
			'email'=>'primoxhero@hotmail.com',
        	'user'=>'primoxhero',
        	'password'=>\Hash::make('123456'),
        	'type'=>'admin',
        	'active'=>1,
        	'address'=>'Zona Villa el carmen 1104',
        	'created_at'=>new DateTime,
        	'updated_at'=>new DateTime,
        ],
        [
        	'name'=>'Luis',
        	'last_name'=>'Choque',
			'email'=>'luis@hotmail.com',
        	'user'=>'luisito',
        	'password'=>\Hash::make('123456'),
        	'type'=>'user',
        	'active'=>1,
        	'address'=>'Zona Cotahuma 125',
        	'created_at'=>new DateTime,
        	'updated_at'=>new DateTime,
        ]
        );
        DB::table('users')->insert($data);
    }
}
