<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        return view('backend.admin.layouts.FaQ.faq');
    }
    public function createFqa()
    {
        return view('backend.admin.layouts.FaQ.createfqa');
    }

    //Insert FaQ in Database

    public function storeQuestion(Request $request)
    { 
        //dd($request->all());
        $request->validate([
            'vehicle_issue'=>'required',
            'question'=>'required|max:255'
        ]);
        $question= new Question();
        $question->vehicle_issue=$request->input('vehicle_issue');
        $question->question=$request->input('question');
        $question->save();
        return redirect()->back();
    }
}
