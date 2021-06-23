<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Answer;
use Illuminate\Support\Facades\Validator;
use App\Models\Question;
use Illuminate\Http\Request;
use Yajra\Datatables\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Answer::with('questions')->orderBy('id', 'asc')->get();
        /* dd($data); */
        return view('admin.answers', compact('data'));
    }

    /**
     * Display the data for listing of the resource.
     *
     * @return DataTables
     */
    public function list()
    {
        $data = Answer::with('questions', 'classifications')->orderBy('id', 'asc')->get();
        return Datatables::of($data)
            ->editColumn('created_at', function ($d) {
                return $d->created_at->format('d/m/Y');
            })

            ->editColumn('classifications', function ($d) {
                return implode(', ', $d->classifications()->pluck('description')->toArray());
            })
            ->addColumn('actions', function ($d) {
                return '<a href="'.route('admin.answers.edit', $d->id).'" class="btn btn-sm btn-secondary"><i class="bi bi-pencil-square"></i> Ver mais</a>';
            })
            ->rawColumns(['actions'])
        ->make();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Answer::findOrFail($id);
        $questions = Answer::with('questions')->orderBy('id', 'asc')->get();
        return view('admin.answer', compact('data', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    } 
}
