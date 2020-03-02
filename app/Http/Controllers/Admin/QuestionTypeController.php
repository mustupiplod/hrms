<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\QuestionTypeMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionTypeController extends Controller
{
    //
    public function index()
    {
        $types = DB::table('question_type_masters')->get();
        return view('admin.questiontype.index',['types'=>$types]);
    }
    public function create()
    {
        return view('admin.questiontype.create');
    }
    public function store(Request $request)
    {
        $question = QuestionTypeMaster::create($request->all());
        $question->save();
        return redirect('/admin/questiontype');
    }
    public function edit($id)
    {
        $questions = QuestionTypeMaster::findOrFail($id);
        $questions->all();
        return view('admin.questiontype.edit',['questions'=>$questions]);
    }
    public function update(Request $request,$id)
    {
        $type = QuestionTypeMaster::find($id);
        $type->update($request->all());
        $type->save();
        return redirect('/admin/questiontype');
    }
    public function delete($id)
    {
        $type = QuestionTypeMaster::whereId($id);
        $type->delete();
        return redirect('/admin/questiontype');
    }

}
