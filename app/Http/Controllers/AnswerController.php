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

    public function disciplinastore(Request $request)
    {
        $data = new Answer();

        $rules = [];
        $rules['value_id'] = 'required';
  
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'É necessário escolher uma opção!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = Question::with('classifications')->get();

        foreach($id  as $id) {
            $data->id_classification = $id;
        }
           
        if($id = 1) {
            $data->id_classification  = 1;
        }     
        $data->id_matricula = Auth::user()->id;
        if(!empty($request->nao_sabe)) {
            $data->nao_sabe = $request->nao_sabe;
            $data->nao_aplica = $request->nao_aplica;
        }   
        else {
            $data->nao_sabe = 0;
            $data->nao_aplica = 0;
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
        $rules['value_id'] = 'required';
  
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'É necessário escolher uma opção!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $id = Question::with('classifications')->get();

        foreach($id  as $id) {
            $data->id_classification = $id;
        }
           
        if($id = 2) {
            $data->id_classification  = 2;
        }
 
        $data->id_matricula = Auth::user()->id;        
        if(!empty($request->nao_sabe)) {
            $data->nao_sabe = $request->nao_sabe;
            $data->nao_aplica = $request->nao_aplica;
        }   
        else {
            $data->nao_sabe = 0;
            $data->nao_aplica = 0;
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
        $rules['value_id'] = 'required';
  
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'É necessário escolher uma opção!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

         $id = Question::with('classifications')->get();
        
         foreach($id  as $id) {
             $data->id_classification = $id;
         }     
        if($id = 3) {
            $data->id_classification  = 3;
        }
        $data->id_matricula = Auth::user()->id;     
        if(!empty($request->nao_sabe)) {
            $data->nao_sabe = $request->nao_sabe;
            $data->nao_aplica = $request->nao_aplica;
        }   
        else {
            $data->nao_sabe = 0;
            $data->nao_aplica = 0;
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
        $rules['value_id'] = 'required';
  
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'É necessário escolher uma opção!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
 
        $id = Question::with('classifications')->get();
        

          foreach($id  as $id) {
              $data->id_classification = $id;
          }
             
        if($id = 4) {
            $data->id_classification  = 4;
        }

        $data->id_matricula = Auth::user()->id;        
        if(!empty($request->nao_sabe)) {
            $data->nao_sabe = $request->nao_sabe;
            $data->nao_aplica = $request->nao_aplica;
        }   
        else {
            $data->nao_sabe = 0;
            $data->nao_aplica = 0;
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
    public function coordenacaoStore(Request $request)
    {
        $data = new Answer();

        $rules = [];
        $rules['value_id'] = 'required';
  
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'É necessário escolher uma opção!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
 
        $id = Question::with('classifications')->get();
        

        foreach($id  as $id) {
            $data->id_classification = $id;
        }
             
        if($id = 5) {
            $data->id_classification  = 5;
        }

        $data->id_matricula = Auth::user()->id;
        if(!empty($request->nao_sabe)) {
            $data->nao_sabe = $request->nao_sabe;
            $data->nao_aplica = $request->nao_aplica;
        }   
        else {
            $data->nao_sabe = 0;
            $data->nao_aplica = 0;
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
        $rules['value_id'] = 'required';
  
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'É necessário escolher uma opção!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
   
        $id = Question::with('classifications')->get();

        foreach($id  as $id) {
            $data->id_classification = $id;
        }
        if($id = 6) {
            $data->id_classification  = 6;
        }
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
        $rules['value_id'] = 'required';
  
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'É necessário escolher uma opção!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
     
        $id = Question::with('classifications')->get();
        
        foreach($id  as $id) {
            $data->id_classification = $id;
        }     
        if($id = 7) {
            $data->id_classification  = 7;
        }
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
        $rules['value_id'] = 'required';
   
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'É necessário escolher uma opção!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
  
        $id = Question::with('classifications')->get();

        foreach($id  as $id) {
            $data->id_classification = $id;
        }
              
        if($id = 8) {
            $data->id_classification  = 8;
        }

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

        $rules = [];
        $rules['value_id'] = 'required';
  
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            Alert::warning('Atenção', 'É necessário escolher uma opção!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
      
        $id = Question::with('classifications')->get();
        
         foreach($id  as $id) {
             $data->id_classification = $id;
         }     
        if($id = 9) {
            $data->id_classification  = 9;
        }
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
