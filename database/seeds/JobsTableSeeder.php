<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return factory(App\Job::class, 200)->create()->each(function ($job) {
            return factory(App\Application::class, rand(1,120))->create(['job_id' => $job->id]);
        });

    }
}
