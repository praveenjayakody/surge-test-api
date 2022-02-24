<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Todo::create([
            "user_id" => 3,
            "content" => "First todo created in the app!",
            "status" => "todo"
        ]);
        Todo::create([
            "user_id" => 3,
            "content" => "Just another normal todo",
            "status" => "done"
        ]);

        Todo::create([
            "user_id" => 4,
            "content" => "Ben created this todo",
            "status" => "progress"
        ]);
    }
}
