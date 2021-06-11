<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Answerquestion;
use App\Models\Question;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function disciplina()
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();;
     /*    dd($data); */
        return view('disciplina', compact('data'));
    }


    public function metodologia(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();;
        /*    dd($data); */
           return view('metodologia', compact('data'));
    }

    public function cursoads(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();;
        /*    dd($data); */
           return view('curso-ads', compact('data'));
    
    }

    public function professores(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();;
        /*    dd($data); */
           return view('professores', compact('data'));
    
    }
    public function coordenacao(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();;
        /*    dd($data); */
           return view('coordenacao', compact('data'));
    
    }
    public function cursoAtividade(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();;
        /*    dd($data); */
           return view('curso-atividade', compact('data'));
    
    }
    public function intercambio(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();;
        /*    dd($data); */
           return view('intercambio', compact('data'));
    
    }
    public function estagiotccprojeto(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();;
        /*    dd($data); */
           return view('estagiotccprojeto', compact('data'));
    
    }

    public function infra(Request $request)
    {
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();;
        /*    dd($data); */
           return view('infraestrutura', compact('data'));
    
    }

    public function store(Request $request)
    {

        $data = new Answer();
        $data->matricula_id = Auth::user()->id;
/*         $data->nao_sabe = $request->nao_sabe; */
        $data->save();
        $data->questions()->sync($request->value_id);
        Alert::success('Sucesso', 'Obrigado por nos avaliar!');
        return view('home');
    }
    
    
}
