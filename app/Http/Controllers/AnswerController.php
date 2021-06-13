<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Support\Facades\Validator;
use App\Models\Question;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function disciplina()
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
        return view('disciplina', compact('data'));
    }


    public function metodologia(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();

           return view('metodologia', compact('data'));
    }

    public function cursoads(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();

           return view('curso-ads', compact('data'));
    
    }

    public function professores(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();

           return view('professores', compact('data'));
    
    }
    public function coordenacao(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();

           return view('coordenacao', compact('data'));
    
    }
    public function cursoAtividade(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();

           return view('curso-atividade', compact('data'));
    
    }
    public function intercambio(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();

           return view('intercambio', compact('data'));
    
    }
    public function estagiotccprojeto(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();

           return view('estagiotccprojeto', compact('data'));
    
    }

    public function infra(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
           return view('infraestrutura', compact('data'));
    
    }

    public function store(Request $request)
    {
        $data = new Answer();
      /*  dd($request->all()); */
        $rules = [];
        $rules['value_id'] = 'required';
  
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'É necessário escolher uma opção!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data->matricula_id = Auth::user()->id;
        $data->save();
        $data->questions()->sync($request->value_id);
        Alert::success('Sucesso', 'Obrigado por nos avaliar!');
        return redirect()->route('home');
    }    
}
