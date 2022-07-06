<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CategorieSeeder extends Seeder
{
    /** @return void*/
    public function run()
    {
      
        Categorie::factory()->count(100)->create();
      
    }
}
