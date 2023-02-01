<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $new_project = new Post();
            $new_project->name=$faker->name();
            $new_project->price=$faker->randomNumber(2.2);
            $new_project->descrition=$faker->text();
            $new_project->type=$faker->company();
    
            $new_project->save();
        }   
    }
}