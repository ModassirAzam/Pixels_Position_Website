<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

use App\Models\Tag;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create(); //

        // so that each tags that generated above is situated in the each 20 jobs here belongsToMany relationship
        Job::factory(20)->hasAttached($tags)->create(new Sequence([ //sequence do partitaion from available 20 entity in 10 10 set for each  featured and normal section
            'featured' => false,
            'schedule' => 'Full Time'
        ],
        [
            'featured' => true,
            'schedule' => 'Part Time'
        ])) ;
    }
}
