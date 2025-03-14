<?php

namespace App\Http\Controllers\Web\Backend;
//use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
//use Datatables;
use DataTables;
use PhpParser\Node\Stmt\TryCatch;

class FaqController extends Controller
{
    public function index()
    {
        return view('backend.admin.layouts.FaQ.faq');
    }
    public function createFqa()
    {
        return view('backend.admin.partials.modals');
    }

    //Insert FaQ in Database

    public function storeQuestion(Request $request)
    {
        $request->validate([
            'target_assign' => 'required',
            'question' => 'required|max:255'
        ]);
        //dd($request->all());
        $question = new Question();
        $question->vehicle_issue = $request->target_assign;
        $question->question = $request->question;
        $question->save();
        flash()->success('Question Added Successfully!');
        return redirect()->back();
    }


    public function showfaq(Request $request)
    {
        if ($request->ajax()) {
            $data = Question::query();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    // Buttons with inline class
                    $editBtn = '<a href="#" onclick="edit(' . $row->id . ')" class="edit " style="margin-left:30px;" ><i class="fa fa-pencil" style="font-size:20px"></i></a>';
                    $deleteBtn = '<a href="#" data-id="' . $row->id . '" class="delete" style="margin-left:10px;"  ><i class="fa fa-trash" style="font-size:20px"></i> </a>';
                    $buttons = '<div class="m-5 " style="margin-left:5px;">' . $editBtn  . ' ' . $deleteBtn . '</div>';
                    return $buttons;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.admin.layouts.FaQ.faq');
    }

    //Edit Fqa
    public function edit($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json([
                'success' => false,
                'message' => 'fqa id not found!',
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $question,
        ]);
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'vehicle_issue' => 'required|max:255',
            'question' => 'required|max:255',
            'status' => 'required',
        ]);

        $question = Question::findOrFail($id);
        $question->vehicle_issue = $request->vehicle_issue;
        $question->question = $request->question;
        $question->status = $request->status;
        $question->save();

        return response()->json([
            'success' => true,
            'message' => 'Question updated successfully!'
        ]);
    }

    //delete
    public function deletefaq($id)
    {
        try {
            $data = Question::findOrFail($id);
            $data->delete();
            return response()->json(['success' => true], 200);
            //return redirect()->back();
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
