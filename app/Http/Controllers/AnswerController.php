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
        $teste = Answer::get();
        foreach($teste as $teste) {
            $teste = $teste;
        }
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
        return view('disciplina', compact('data','teste'));
    }

    public function metodologia(Request $request)
    {
        $teste = Answer::get();
        foreach($teste as $teste) {
            $teste = $teste;
        }
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
        return view('metodologia', compact('data','teste'));
    }

    public function cursoads(Request $request)
    {
        $teste = Answer::get();
        foreach($teste as $teste) {
            $teste = $teste;
        }
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
    return view('curso-ads', compact('data','teste'));    
    }

    public function professores(Request $request)
    {
        $teste = Answer::get();
        foreach($teste as $teste) {
            $teste = $teste;
        }
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
        return view('professores', compact('data','teste'));    
    }
    public function coordenacao(Request $request)
    {
        $teste = Answer::get();
        foreach($teste as $teste) {
            $teste = $teste;
        }
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
        return view('coordenacao', compact('data','teste'));    
    }
    public function cursoAtividade(Request $request)
    {
        $teste = Answer::get();
        foreach($teste as $teste) {
            $teste = $teste;
        }
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
        return view('curso-atividade', compact('data','teste'));    
    }
    public function intercambio(Request $request)
    {
        $teste = Answer::get();
        foreach($teste as $teste) {
            $teste = $teste;
        }
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
        return view('intercambio', compact('data','teste'));    
    }
    public function estagiotccprojeto(Request $request)
    {
        $teste = Answer::get();
        foreach($teste as $teste) {
            $teste = $teste;
        }
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
        return view('estagiotccprojeto', compact('data','teste'));    
    }

    public function infra(Request $request)
    {
        $teste = Answer::get();
        foreach($teste as $teste) {
            $teste = $teste;
        }
        $data = Question::with('classifications', 'modelo')->orderby('id')->get();
        return view('infraestrutura', compact('data','teste'));    
    }

    public function disciplinastore(Request $request)
    {
       
        $data = new Answer();
        $rules = [];
        $rules['id_classification'] = 'required';

        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'Você já respondeu esse questionário!');
            return redirect()->back()->withErrors($validator)->withInput();
        }  
        
        $data->id_classification  = $request->id_classification;
        $data->id_matricula = Auth::user()->id;
        
        if(!empty($request->nao_sabe)) {
            $data->nao_sabe = $request->nao_sabe;
        }   
        else {
            $data->nao_sabe = 0;
        }
        $data->save();
        $data->questions()->sync($request->value_id);   

        $email = new \App\Mail\agradecimento();
        $email->subject = 'Pesquisa de Satisfação AURA';
        $user = $request->user();
        \Illuminate\Support\Facades\Mail::to($user)->send($email);

        Alert::success('Sucesso', 'Obrigado por nos avaliar!');
        return redirect()->route('home');
    }    

    public function metodologiaStore(Request $request)
    {
        $data = new Answer();

        $rules = [];
        $rules['id_classification'] = 'required';
  
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'Você já respondeu esse questionário!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data->id_classification  = $request->id_classification;
        $data->id_matricula = Auth::user()->id;        
        if(!empty($request->nao_sabe)) {
            $data->nao_sabe = $request->nao_sabe;
        }   
        else {
            $data->nao_sabe = 0;
        }
        $data->save();
        $data->questions()->sync($request->value_id);

        $email = new \App\Mail\agradecimento();
        $email->subject = 'Pesquisa de Satisfação AURA';
        $user = $request->user();

        \Illuminate\Support\Facades\Mail::to($user)->send($email);
        Alert::success('Sucesso', 'Obrigado por nos avaliar!');

        return redirect()->route('home');
    }   

    public function cursoadsStore(Request $request)
    {
        $data = new Answer();

        $rules = [];
        $rules['id_classification'] = 'required';
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'Você já respondeu esse questionário!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data->id_classification  = $request->id_classification;
        $data->id_matricula = Auth::user()->id;     
        if(!empty($request->nao_sabe)) {
            $data->nao_sabe = $request->nao_sabe;
        }   
        else {
            $data->nao_sabe = 0;
        }
        $data->save();
        $data->questions()->sync($request->value_id);
        $email = new \App\Mail\agradecimento();
        $email->subject = 'Pesquisa de Satisfação AURA';
        $user = $request->user();
        \Illuminate\Support\Facades\Mail::to($user)->send($email);
        Alert::success('Sucesso', 'Obrigado por nos avaliar!');
        return redirect()->route('home');
    }    

    public function professoresStore(Request $request)
    {
        $data = new Answer();

        $rules = [];
        $rules['id_classification'] = 'required';
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'Você já respondeu esse questionário!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
 

        $data->id_matricula = Auth::user()->id;       

        if(!empty($request->nao_sabe)) {
            $data->nao_sabe = $request->nao_sabe;
        }   
        else {
            $data->nao_sabe = 0;
        }
        $data->id_classification  = $request->id_classification;
        $data->save();
        $data->questions()->sync($request->value_id);
        
        $email = new \App\Mail\agradecimento(); 
        $email->subject = 'Pesquisa de Satisfação AURA';
        $user = $request->user();
        \Illuminate\Support\Facades\Mail::to($user)->send($email);

        Alert::success('Sucesso', 'Obrigado por nos avaliar!');
        return redirect()->route('home');
    }   
    public function coordenacaoStore(Request $request)
    {
        $data = new Answer();

        $rules = [];
        $rules['id_classification'] = 'required';
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'Você já respondeu esse questionário!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data->id_classification  = $request->id_classification;
        $data->id_matricula = Auth::user()->id;
        if(!empty($request->nao_sabe)) {
            $data->nao_sabe = $request->nao_sabe;
        }   
        else {
            $data->nao_sabe = 0;
        }
        $data->save();
        $data->questions()->sync($request->value_id);
        
        $email = new \App\Mail\agradecimento(); 
        $email->subject = 'Pesquisa de Satisfação AURA';
        $user = $request->user();
        \Illuminate\Support\Facades\Mail::to($user)->send($email);

        Alert::success('Sucesso', 'Obrigado por nos avaliar!');
        return redirect()->route('home');
    }  
    public function cursoatividadeStore(Request $request)
    {
        $data = new Answer();

        $rules = [];
        $rules['id_classification'] = 'required';
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'Você já respondeu esse questionário!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data->id_classification  = $request->id_classification;
        $data->id_matricula = Auth::user()->id;
        $data->save();
        $data->questions()->sync($request->value_id);

        $email = new \App\Mail\agradecimento();
        $email->subject = 'Pesquisa de Satisfação AURA';
        $user = $request->user();
        \Illuminate\Support\Facades\Mail::to($user)->send($email);
        
        Alert::success('Sucesso', 'Obrigado por nos avaliar!');
        return redirect()->route('home');
    } 
    public function intercambioStore(Request $request)
    {
        $data = new Answer();

        $rules = [];
        $rules['id_classification'] = 'required';
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'Você já respondeu esse questionário!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data->id_classification  = $request->id_classification;

        $data->id_matricula = Auth::user()->id;
        $data->save();
        $data->questions()->sync($request->value_id);

        $email = new \App\Mail\agradecimento();
        $email->subject = 'Pesquisa de Satisfação AURA';
        $user = $request->user();
        \Illuminate\Support\Facades\Mail::to($user)->send($email);

        Alert::success('Sucesso', 'Obrigado por nos avaliar!');
        return redirect()->route('home');
    }  
    public function estagioStore(Request $request)
    {
        $data = new Answer();

        $rules = [];
        $rules['id_classification'] = 'required';

        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'Você já respondeu esse questionário!');
            return redirect()->back()->withErrors($validator)->withInput();
        }         
        $data->id_classification  = $request->id_classification;
        $data->id_matricula = Auth::user()->id;
        $data->save();
        $data->questions()->sync($request->value_id);

        $email = new \App\Mail\agradecimento();
        $email->subject = 'Pesquisa de Satisfação AURA';
        $user = $request->user();
        \Illuminate\Support\Facades\Mail::to($user)->send($email);

        Alert::success('Sucesso', 'Obrigado por nos avaliar!');
        return redirect()->route('home');
    }  
    public function infraStore(Request $request)
    {
        $data = new Answer();


        $request->validate([
            'id_classification' => 'required'
        ]);

        $data->id_classification  = $request->id_classification;
        $data->id_matricula = Auth::user()->id;
        $data->save();
        $data->questions()->sync($request->value_id);

        $email = new \App\Mail\agradecimento();
        $email->subject = 'Pesquisa de Satisfação AURA';
        $user = $request->user();
        \Illuminate\Support\Facades\Mail::to($user)->send($email);

        Alert::success('Sucesso', 'Obrigado por nos avaliar!');
        return redirect()->route('home');
    }  

    
}
