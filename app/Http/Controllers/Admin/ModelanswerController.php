<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Modelo;
use Yajra\Datatables\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class ModelanswerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('admin.models');
  }

  /**
   * Display the data for listing of the resource.
   *
   * @return DataTables
   */
  public function list()
  {
      $data = Modelo::orderBy('id')->get();
      return DataTables::of($data)
          ->editColumn('created_at', function ($d) {
              return $d->created_at->format('d/m/Y');
          })
          ->editColumn('updated_at', function ($d) {
              return $d->updated_at->format('d/m/Y');
          })
          ->addColumn('actions', function ($d) {
              return '<a href="'.route('admin.models.edit', $d->id).'" class="btn btn-sm btn-secondary"><i class="bi bi-pencil-square"></i> Ver/Editar</a>';
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
          $data = new Modelo;
          $data->id = 0;
      }
      else {
          $data = Modelo::findOrFail($id);
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
          $data = new Modelo;
      }
      else {
          $data = Modelo::findOrFail($id);
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

      Alert::success('Sucesso', 'Modelo de resposta salvo com sucesso!');
      return redirect()->route('admin.models');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $data = Modelo::findOrFail($id);

      $data->delete();

      Alert::success('Sucesso', 'Modelo de resposta removido com sucesso.');
      return redirect()->route('admin.models');
  }
}
