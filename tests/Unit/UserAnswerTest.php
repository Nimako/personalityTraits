<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\UserAnswer;

class UserAnswerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

     /** @test */
    public function open_question(){

        $response = $this->get('/test');

        $response->assertStatus(200);
    }



    /** @test */
    public function answer_question(){

        UserAnswer::updateOrCreate(
            ['question_id'=> 1],
            ['question_id'=> 1,'answer_id'=>1],
        );

        $this->assertTrue(true);
    }

    /** @test */
    public function get_question_answer(){

        $data = UserAnswer::where('question_id',1)->first();

        $this->assertTrue(!empty($data));
    }

    /** @test */
    public function show_result(){

        $response = $this->get('/test/result');

        $response->assertStatus(200);
    }


}
