<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

    	$data = array(
    		array(
    			'name'             => 'Junior Ferreira',
    			'email'            => 'junior@codeje.com',
    			'password'         => Hash::make('@superadmincodejeBH14')
    			),
    		array(
    			'name'             => 'Eduardo Rabelo',
    			'email'            => 'eduardo.rabelo@codeje.com',
    			'password'         => Hash::make('@superadmincodejeBH14')
    			)
    		);

	    //insert data
	    foreach ($data as $datas) {
	         DB::table('users')->insert($datas);
	    }
    }
}