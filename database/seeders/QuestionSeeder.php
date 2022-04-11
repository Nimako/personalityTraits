<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
                    "You’re really busy at work and a colleague is telling you their life story and personal woes. You:",
                    "You’ve been sitting in the doctor’s waiting room for more than 25 minutes. You:",
                    "You’re having an animated discussion with a colleague regarding a project that you’re in charge of. You:",
                    "You are taking part in a guided tour of a museum. You:",
                    "During dinner parties at your home, you have a hard time with people who:",
        ];

        foreach($questions as $question):
            DB::table('questions')->insert([
                'uuid' => Str::uuid(),
                'question' => $question,
            ]);
        endforeach;
    }
}
