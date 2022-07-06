<?php

namespace Database\Seeders;
use App\Models\Categorie;
use App\Models\Tag;
use App\Models\User;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorieSeeder::class,
            TagSeeder::class,
            UserSeeder::class


        ]);
        $admin = tag::create([
            'name' => 'Admin'
       
        ]);
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@ajicod.com',
            // 'avatar' => '2022/05/avatar-31.png',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
      
      
    }
}
