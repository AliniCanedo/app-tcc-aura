<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Questions com classificação disciplinas
        $newQuestion = Question::create([
            'description' => 'As disciplinas cursadas contribuíram para sua formação integral, como cidadão e profissional ',
            'id_modelo' => 1,
            'id_classification' => 1
           ]);
           $newQuestion = Question::create([
               'description' => 'Os conteúdos abordados nas disciplinas do curso favoreceram sua atuação em estágios ou em atividades de iniciação profissional. ',
               'id_modelo' => 1,
               'id_classification' => 1
              ]);
           $newQuestion = Question::create([
               'description' => 'Os planos de ensino apresentados pelos professores contribuíram para o desenvolvimento das atividades acadêmicas e para seus estudos.',
               'id_modelo' => 1,
               'id_classification' => 1
           ]);
           $newQuestion = Question::create([
               'description' => 'As referências bibliográficas indicadas pelos professores nos planos de ensino contribuíram para seus estudos e aprendizagens.',
               'id_modelo' => 1,
               'id_classification' => 1
           ]);
           $newQuestion = Question::create([
               'description' => 'As avaliações da aprendizagem realizadas durante o curso foram compatíveis com os conteúdos ou temas trabalhados pelos professores.',
               'id_modelo' => 1,
               'id_classification' => 1
           ]);
           $newQuestion = Question::create([
               'description' => 'A biblioteca dispôs das referências bibliográficas que os estudantes necessitaram. ',
               'id_modelo' => 1,
               'id_classification' => 1
           ]);
           $newQuestion = Question::create([
               'description' => 'A instituição contou com biblioteca virtual ou conferiu acesso a obras disponíveis em acervos virtuais.',
               'id_modelo' => 1,
               'id_classification' => 1
           ]);
   
           // Metodologia de Ensino (Aura)
   
           $newQuestion = Question::create([
               'description' => 'As metodologias de ensino utilizadas no curso desafiaram você a aprofundar conhecimentos e desenvolver competências reflexivas e críticas. ',
               'id_modelo' => 1,
               'id_classification' => 2
           ]);
   
           // Acadêmico  - Curso ADS
           $newQuestion = Question::create([
               'description' => 'O curso propiciou experiências de aprendizagem inovadoras',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso contribuiu para o desenvolvimento da sua consciência ética para o exercício profissional',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'No curso você teve oportunidade de aprender a trabalhar em equipe. ',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso promoveu o desenvolvimento da sua capacidade de pensar criticamente, analisar e refletir sobre soluções para problemas da sociedade.',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso contribuiu para você ampliar sua capacidade de comunicação nas formas oral e escrita.',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso contribuiu para o desenvolvimento da sua capacidade de aprender e atualizar-se permanentemente.',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso exigiu de você organização e dedicação frequente aos estudos.',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso ofereceu condições para os estudantes participarem de eventos internos e/ou externos à instituição.',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso favoreceu a articulação do conhecimento teórico com atividades práticas.',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso propiciou acesso a conhecimentos atualizados e/ou contemporâneos em sua área de formação.',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso disponibilizou monitores ou tutores para auxiliar os estudantes.',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
           $newQuestion = Question::create([
               'description' => 'Os estudantes participaram de avaliações periódicas do curso (disciplinas, atuação dos professores, infraestrutura).',
               'id_modelo' => 1,
               'id_classification' => 3
           ]);
   
           // Acadêmico  - Professores
   
           $newQuestion = Question::create([
               'description' => 'As relações professor-aluno ao longo do curso estimularam você a estudar e aprender.',
               'id_modelo' => 1,
               'id_classification' => 4
           ]);
           $newQuestion = Question::create([
               'description' => 'Os professores apresentaram disponibilidade para atender os estudantes fora do horário das aulas.',
               'id_modelo' => 1,
               'id_classification' => 4
           ]);
           $newQuestion = Question::create([
               'description' => 'Os professores demonstraram domínio dos conteúdos abordados nas disciplinas.',
               'id_modelo' => 1,
               'id_classification' => 4
           ]);
           $newQuestion = Question::create([
               'description' => 'Os professores utilizaram tecnologias da informação e comunicação (TICs) como estratégia de ensino (projetor multimídia, laboratório de informática, ambiente virtual de aprendizagem).',
               'id_modelo' => 1,
               'id_classification' => 4
           ]);
   
           // Acadêmico  - Coordenação do Curso
   
           $newQuestion = Question::create([
               'description' => 'A coordenação do curso esteve disponível para orientação acadêmica dos estudantes. ',
               'id_modelo' => 2,
               'id_classification' => 5
           ]);
   
           // Cursos e Atividades de Extensão
   
           $newQuestion = Question::create([
               'description' => 'Foram oferecidas oportunidades para os estudantes superarem dificuldades relacionadas ao processo de formação.',
               'id_modelo' => 2,
               'id_classification' => 6
           ]);
           $newQuestion = Question::create([
               'description' => 'Foram oferecidas oportunidades para os estudantes participarem de programas, projetos ou atividades de extensão universitária.',
               'id_modelo' => 2,
               'id_classification' => 6
           ]);
           $newQuestion = Question::create([
               'description' => 'Foram oferecidas oportunidades para os estudantes participarem de projetos de iniciação científica e de atividades que estimularam a investigação acadêmica.',
               'id_modelo' => 2,
               'id_classification' => 6
           ]);
           $newQuestion = Question::create([
               'description' => 'A instituição ofereceu oportunidades para os estudantes atuarem como representantes em órgãos colegiados.',
               'id_modelo' => 2,
               'id_classification' => 6
           ]);
           $newQuestion = Question::create([
               'description' => 'As atividades práticas foram suficientes para relacionar os conteúdos do curso com a prática, contribuindo para sua formação profissional.',
               'id_modelo' => 2,
               'id_classification' => 6
           ]);
           $newQuestion = Question::create([
               'description' => 'A instituição promoveu atividades de cultura, de lazer e de interação social.',
               'id_modelo' => 2,
               'id_classification' => 6
           ]);
           $newQuestion = Question::create([
               'description' => 'As atividades acadêmicas desenvolvidas dentro e fora da sala de aula possibilitaram reflexão, convivência e respeito à diversidade.',
               'id_modelo' => 2,
               'id_classification' => 6
           ]);
   
           //  Acadêmico  - Intercâmbio
   
           $newQuestion = Question::create([
               'description' => 'Foram oferecidas oportunidades para os estudantes realizarem intercâmbios e/ou estágios no país.',
               'id_modelo' => 2,
               'id_classification' => 7
           ]);
           $newQuestion = Question::create([
               'description' => 'Foram oferecidas oportunidades para os estudantes realizarem intercâmbios e/ou estágios fora do país.',
               'id_modelo' => 2,
               'id_classification' => 7
           ]);
   
           // Acadêmico  - Estágio, TCC e Projeto  Integrador
   
           $newQuestion = Question::create([
               'description' => 'O estágio supervisionado proporcionou experiências diversificadas para a sua formação.',
               'id_modelo' => 2,
               'id_classification' => 8
           ]);
   
           $newQuestion = Question::create([
               'description' => 'As atividades realizadas durante seu trabalho de conclusão de curso contribuíram para qualificar sua formação profissional.',
               'id_modelo' => 2,
               'id_classification' => 8
           ]);
   
           // Acadêmico  - Infraestrutura
   
           $newQuestion = Question::create([
               'description' => 'A instituição dispôs de quantidade suficiente de funcionários para o apoio administrativo e acadêmico.',
               'id_modelo' => 2,
               'id_classification' => 9
           ]);
           $newQuestion = Question::create([
               'description' => 'As condições de infraestrutura das salas de aula foram adequadas.',
               'id_modelo' => 2,
               'id_classification' => 9
           ]);
           $newQuestion = Question::create([
               'description' => 'Os equipamentos e materiais disponíveis para as aulas práticas foram adequados para a quantidade de estudantes.',
               'id_modelo' => 2,
               'id_classification' => 9
           ]);
           $newQuestion = Question::create([
               'description' => ' Os ambientes e equipamentos destinados às aulas práticas foram adequados ao curso.',
               'id_modelo' => 2,
               'id_classification' => 9
           ]);
           $newQuestion = Question::create([
               'description' => 'A instituição dispôs de refeitório, cantina e banheiros em condições adequadas que atenderam as necessidades dos seus usuários.',
               'id_modelo' => 2,
               'id_classification' => 9
           ]);
    }
}
