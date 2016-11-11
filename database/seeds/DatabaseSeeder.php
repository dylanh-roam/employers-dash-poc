<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        \App\Application::truncate();
        \App\Job::truncate();
        \App\User::truncate();
        Schema::enableForeignKeyConstraints();


        $this->call(UsersTableSeeder::class);
        $this->call(JobsTableSeeder::class);
    }
}
