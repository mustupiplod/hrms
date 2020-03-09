<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionMaster;
use App\Models\AnswerMaster;
use Illuminate\Support\Facades\DB;

class QuestionnaireMasterController extends Controller
{
    //
    public function index()
    {
        $question = DB::table('question_masters')
            ->join('question_type_masters','question_type_masters.id','=','question_masters.topic')
            ->join('departments','departments.id','=','question_masters.department_id')
            ->select('question_type_masters.*','departments.*','question_masters.*')
            ->get();
        return view('admin.questionnaire.index', ['questions' => $question]);
    }

    public function create()
    {
        $type = DB::table('question_type_masters')->get();
        $departments = DB::table('departments')->get();
        return view('admin.questionnaire.create', ['types' => $type, 'departments' => $departments]);
    }

    public function store(Request $request)
    {

        $questions = QuestionMaster::create(['topic' => $request->topic, 'question_name' => $request->question_name, 'department_id' => $request->department_id]);
        $questions->save();
        $question_id = DB::getPdo()->lastInsertId(); //  get last id
        $question = $request->question;
        $answer = $request->answer;
        $option1 = $request->option_1;
        $option2 = $request->option_2;
        $option3 = $request->option_3;

        for ($count = 0, $countMax = count($question); $count < $countMax; $count++) {
            $data = array(
                'question' => $question[$count],
                'question_master_id' => $question_id,
                'answer' => $answer[$count],
                'option_1' => $option1[$count],
                'option_2' => $option2[$count],
                'option_3' => $option3[$count]
            );
            $insert_data[] = $data;
        }

        DB::table('answer_masters')->insert($insert_data);
        return redirect('/admin/questionnaire');

    }

    public function show($id)
    {
        $question_dta = DB::table();
    }

    public function edit($id)
    {
        $questions = DB::table('question_masters')
            ->join('question_type_masters','question_type_masters.id','=','question_masters.topic')
            ->join('departments','departments.id','=','question_masters.department_id')
            ->join('answer_masters','answer_masters.question_master_id','=','question_masters.id')
            ->select('answer_masters.*','question_masters.*','question_type_masters.question_type','departments.department_name')
            ->where('question_masters.id','=',$id)
            ->get();
//        $answer_id = DB::table('answer_masters')->where('question_master_id','=',$id)->get();
        $departments = DB::table('departments')->get();
        return view('admin.questionnaire.edit',['questions'=>$questions,'departments'=>$departments]);
    }

    public function update(Request $request, $id)
    {
        $questions = QuestionMaster::find($id);
        $questions->update(['topic' => $request->topic, 'question_name' => $request->question_name, 'department_id' => $request->department_id,'is_active'=>$request->is_active]);
        $questions->save();

        foreach($request->get('members', []) as $member) {
            DB::table('answer_masters')->where('question_id','=',$member['question_id'])->update(array_except($member, ['question_id']));
    }

        $question = $request->question_;
        $answer = $request->answer_;
        $option1 = $request->option_1_;
        $option2 = $request->option_2_;
        $option3 = $request->option_3_;

        // for inserting the new question in answers master

        for ($count = 0, $countMax = count($question); $count < $countMax; $count++)
        {
            $data = array(
                    'question' => $question[$count],
                    'question_master_id' => $id,
                    'answer' => $answer[$count],
                    'option_1' => $option1[$count],
                    'option_2' => $option2[$count],
                    'option_3' => $option3[$count]
                );
            $insert_data[] = $data;
        }
        if($data['question'] == "")
        {
            return redirect('/admin/questionnaire');
        }
        else
        {
            DB::table('answer_masters')->insert($insert_data);
            return redirect('/admin/questionnaire');
        }

//       return redirect('/admin/questionnaire');
    }
    public function delete($id)
    {
        $questionnaire = QuestionMaster::whereId($id);
        $questionnaire->delete();
        return redirect('/admin/questionnaire');
    }
    public function questiondelete(Request $request,$id)
    {
        $question_delete = AnswerMaster::where('question_id','=',$id);
        $question_delete->delete();
        return redirect()->back();
    }

}
