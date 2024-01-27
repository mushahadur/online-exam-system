<?php

namespace App\Http\Controllers\Backend\Exam;

use App\Models\Exam;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function english(){
        $data = Question::where('exam_id', 1)->get();
        $examName = Exam::where('id', 1)->first();
        // dd($examName);
        return view('backend.pages.Exam.index', compact('data','examName'));
    }

    public function math(){
        $data = Question::where('exam_id', 2)->get();
        // dd($data);

        $examName = Exam::where('id', 2)->first();
        // dd($examName);
        return view('backend.pages.Exam.index', compact('data','examName'));
    }


    public function submitExam(Request $request){

        $data = $request->all();
        // dd($data);
        $check = 0;
        $count=0;
        $questions= -1;
        foreach ($data as $key => $value) {
            $check++;
            if($check>2){
                $questions++;
                $data = Question::where('correct_ans', $value)->first();
                if($data){
                    $count++;
                }
            }
            // dd($check);
        }

        $infoSave = new Answer();
        $infoSave->user_id = $request->user_id;
        $infoSave->exam_id = $request->exam_id;
        $infoSave->mark = $count;
        $data = $infoSave->save();
        if($data){
            $examName = Exam::where('id', $request->exam_id)->first();

            $data = Answer::where('user_id', $request->user_id)->first();
           
            return view('backend.pages.Exam.result', compact('data','examName','questions'));
        }else{
            return "data not saved !";
        }

        
    }

    public function myResult($id){
        $data = Answer::where('user_id',$id)->get();
        // dd($data);
        // $examName = [];
        // foreach ($data as $item) {
        //     $examName = Exam::where('id', $item->exam_id)->first();
        //     // print_r($examName->name );
        //     // echo '</br>';
        //     }

        //     dd( $examName);

      
        return view('backend.pages.result.index',compact('data'));

    }
}
