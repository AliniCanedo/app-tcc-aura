<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Classification;
use Yajra\Datatables\Datatables;
use RealRashid\SweetAlert\Facades\Alert;

class ClassificationController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('admin.classifications');
  }

  /**
   * Display the data for listing of the resource.
   *
   * @return DataTables
   */
  public function list()
  {
      $data = Classification::orderBy('id')->get();
      return Datatables::of($data)
          ->editColumn('created_at', function ($d) {
              return $d->created_at->format('d/m/Y');
          })
          ->editColumn('updated_at', function ($d) {
              return $d->updated_at->format('d/m/Y');
          })
          ->addColumn('actions', function ($d) {
              return '<a href="'.route('admin.classifications.edit', $d->id).'" class="btn btn-sm btn-secondary"><i class="bi bi-pencil-square"></i> Ver/Editar</a>';
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
      if ($id === 'new') {
          $data = new Classification;
          $data->id = 0;
      }
      else {
          $data = Classification::findOrFail($id);
      }
      return view('admin.classification', compact('data'));
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
      if ($id == 'new' || $id == 0) {
          $id = 0;
          $data = new Classification;
      }
      else {
          $data = Classification::findOrFail($id);
      }

      $rules = [];
      $rules['description'] = 'nullable|string';

      $validator = Validator::make($request->all(), $rules);

      if ($validator->fails()) {
          Alert::warning('Atenção', 'Existem campos com problemas de preenchimento: ' . $validator->errors()->first() . ' Verifique e tente novamente!');
          return redirect()->back()->withErrors($validator)->withInput();
      }
      $data->description = $request->description;
      $data->save();

      Alert::success('Sucesso', 'Classificação salva com sucesso!');
      return redirect()->route('admin.classifications');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $data = Classification::findOrFail($id);

      $data->delete();

      Alert::success('Sucesso', 'Classificação removida com sucesso.');
      return redirect()->route('admin.classifications');
  }
}
