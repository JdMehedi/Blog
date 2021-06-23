<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

            'site_name'=>'youtube site',
            'contact_number'=>'01782314143',
            'contact_email'=>'mehedi@yahoo.com',
            'address'=>'9\1 Bagmara main road khulna',
            'about'=>'I am new in laravel framework and it is my first big project'


        ]);
    }
}
