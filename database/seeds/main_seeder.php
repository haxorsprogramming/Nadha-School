<?php

use Illuminate\Database\Seeder;

class main_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_user') -> insert([
            'username' => 'kasir',
            'nama' => 'Kasir',
            'password' =>  password_hash("kasir", PASSWORD_DEFAULT),
            'tipe' => 'kasir',
            'last_login' => date("Y-m-d H:i:s")
        ]);
    }
}
