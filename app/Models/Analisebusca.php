<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisebusca extends Model
{

 
  protected   $table = 'analises_buscas';

  protected $fillable = [
    'id',
    'dados'
  ];

   //metodo que retorna as buscas do site

   public static function getData() {

     $buscas = Analisebusca::all();
   /*    if($buscas->count()) {
        $buscas_dados = [];
        foreach($buscas as $chave => $valor) {
          $dados = json_encode($valor['dados'], true);
          foreach ($dados as $chave_busca => $valores) {
            $buscas_dados = [$chave_busca] = $valores;
          }
        }
        return $buscas_dados;
      } else {
        return null;
      } */
     return  $buscas;
   }
}
