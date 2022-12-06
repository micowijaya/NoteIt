<?php

namespace Database\Seeders;

use App\Models\Note;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::query()->insert([
            [
                "id" => "1",
                "user_id" => "1",
                "title" => "Notes #1",
                "usernote" => "lorem ipsum lorem lorem ipsum lorem lorem ipsum lorem lorem ipsum loremlorem ipsum lorem lorem ipsum lorem lorem ipsum lorem",
                "location" => "Jakarta",
                "created_at" => Date::now(),
                "updated_at" => Date::now(),
            ]
        ,
            [
                "id" => "2",
                "user_id" => "1",
                "title" => "Notes #2",
                "usernote" => "loremloremlorem",
                "location" => "Singapore",
                "created_at" => Date::now(),
                "updated_at" => Date::now(),
            ],
            [
                "id" => "3",
                "user_id" => "1",
                "title" => "Notes #3",
                "usernote" => "loremloremlorem",
                "location" => "Singapore",
                "created_at" => Date::now(),
                "updated_at" => Date::now(),
            ],
            [
                "id" => "4",
                "user_id" => "1",
                "title" => "Notes #4",
                "usernote" => "loremloremlorem",
                "location" => "Singapore",
                "created_at" => Date::now(),
                "updated_at" => Date::now(),
            ],
            [
                "id" => "5",
                "user_id" => "1",
                "title" => "Notes #5",
                "usernote" => "loremloremlorem",
                "location" => "Singapore",
                "created_at" => Date::now(),
                "updated_at" => Date::now(),
            ]
        ]
    );
    }
    
}
