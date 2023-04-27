<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {

            $project = new Project();
            $project->title = $faker->unique()->sentence($faker->numberBetween(2, 6));
            $project->client = $faker->text(50);
            $project->description = $faker->text(500);
            $project->url = $faker->url();
            $project->slug = Str::slug($project->title, '-');
            
            $project->save();
        }
    }
}
