<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\QuestionAnswer;
use App\Models\UserAnswer;

class TestController extends Controller
{
 
    public function index(Request $request)
    {

        return view("test/index");
    }

    public function nextQuestion(){

        $paginator = Question::paginate(1);

        $data['questions']       = $questions = $paginator->items();
        $data['nextPageUrl']     = $paginator->nextPageUrl();
        $data['previousPageUrl'] = $paginator->previousPageUrl();
        $data['currentPage']     = $paginator->currentPage();	
        $data['lastPage']        = $paginator->lastPage();
        $data['totalPage']       = $paginator->total();
        $questionId              = $questions[0]->id;

        $data['answers'] = QuestionAnswer::where('question_id',$questionId)->get();
        $data['alphabet'] =  self::alphabet;

        $user_id = session('user_id');
        $data['previous_answer'] = UserAnswer::select('answer_id')->where(["user_id"=>$user_id,"question_id"=>$questionId])->first();
                
        return view("test/_question",$data);
    }


    public function store(Request $request)
    {
        UserAnswer::updateOrCreate(
              ['question_id'=> $request->question_id,"user_id"=>session('user_id')],
              ["user_id"=>session('user_id'),'question_id'=> $request->question_id,'answer_id'=>$request->answer],
        );

        if(empty($request->nextPageUrl)){
            $user_id = $request->session()->increment('count');
            session(['user_id'=>$user_id]);
        }

        return $request->nextPageUrl;
    }


    public function result()
    {
        return view("test/result");
    }

    

}
