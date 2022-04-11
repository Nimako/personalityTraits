<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers =[ 
                  "1"=> [
                    "Don’t dare to interrupt them",
                    "Think it’s more important to give them some of your time; work can wait",
                    "Listen, but with only with half an ear",
                    "Interrupt and explain that you are really busy at the moment",
                  ],
                  "2" => [
                    "Look at your watch every two minutes",
                    "Bubble with inner anger, but keep quiet",
                    "Explain to other equally impatient people in the room that the doctor is always running late",
                    "Complain in a loud voice, while tapping your foot impatiently",
                  ],
                  "3" => [                    
                        "Don’t dare contradict them",                       
                        "Think that they are obviously right",                       
                        "Defend your own point of view, tooth and nail",                      
                        "Continuously interrupt your colleague",
                  ],
                  "4" => [
                    "Are a bit too far towards the back so don’t really hear what the guide is saying",
                    "Follow the group without question",
                    "Make sure that everyone is able to hear properly",
                    "Are right up the front, adding your own comments in a loud voice"
                  ],
                  "5" => [
                    "Ask you to tell a story in front of everyone else",
                    "Talk privately between themselves",
                    "Hang around you all evening",
                    "Always drag the conversation back to themselves"
                  ]

               ];


        foreach($answers as $key => $answer):
            foreach($answer as $asw):
                DB::table('question_answers')->insert([
                    'uuid'        => Str::uuid(),
                    'question_id' => $key,
                    'answer'      =>  $asw          
                ]);
            endforeach;
        endforeach;

    }
}
