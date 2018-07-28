<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);
    }
}
class userSeeder extends Seeder
{
    public function run()

    {   
        $faker = Faker\Factory::create();
        for ($i=0; $i < 3; $i++) { 
        
        DB::table('users')->insert([

            'name'=>$faker->name,'email'=>$faker->email,'password'=>bcrypt($faker->password)
            ]);
        }
    }
}