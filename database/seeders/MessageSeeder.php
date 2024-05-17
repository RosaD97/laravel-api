<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0; $i < 50; $i++){

            $project = Project::inRandomOrder()->first();

            $message = new Message();
            $message->name = fake()->name;
            $message->email = fake()->email();
            $message->message = fake()->text();
            $message->msg_id = $project->id;

            $message->save();

        }
    }
}
