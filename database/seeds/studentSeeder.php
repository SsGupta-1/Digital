<?php

use Illuminate\Database\Seeder;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'fname' => Str::random(5),
            'lname' => Str::random(5),

            'email' => Str::random(5).'@example.com',
            'address' => Str::random(5),
        ]);
        
    }
}
