<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Movie;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory(4)->create();
        $Animations = Category::factory()->create(['name'=>'Animations', 'slug' => 'animations']);

        // Movie::factory()->create([
        //     'name' => '101 Domations',
        //     'category_id' => $Animations->id,
        //     'rating' => 'High',
        //     'released_date' => '2011',
        //     'slug' => 'domations'
        // ]);

        // Movie::factory()->create([
        //     'name' => 'Brave',
        //     'category_id' => $Animations->id,
        //     'rating' => 'High',
        //     'released_date' => '2011',
        //     'slug' => 'brave'
        // ]);

        // Movie::factory()->create([
        //     'name' => "Sammy's Adventures",
        //     'category_id' => $Animations->id,
        //     'rating' => 'High',
        //     'released_date' => '2014',
        //     'slug' => 'sammy'
        // ]);

        // Movie::factory()->create([
        //     'name' => 'Ants Bully',
        //     'category_id' => $Animations->id,
        //     'rating' => 'High',
        //     'released_date' => '2006',
        //     'slug' => 'ant'
        // ]);

        // Movie::factory()->create([
        //     'name' => 'Finding Neme',
        //     'category_id' => $Animations->id,
        //     'rating' => 'High',
        //     'released_date' => '2006',
        //     'slug' => 'nemo'
        // ]);
        

    }
}
