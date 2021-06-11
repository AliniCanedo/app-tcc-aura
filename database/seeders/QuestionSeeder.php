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
            'id_classification' => 1,
            'tooltip' => 'Projeto Integrador. Agregou muito valor na carreira profissional e agregou valor nas competências e habilidades da área de TI.'
           ]);
           $newQuestion = Question::create([
               'description' => 'Os conteúdos abordados nas disciplinas do curso favoreceram sua atuação em estágios ou em atividades de iniciação profissional. ',
               'id_modelo' => 1,
               'id_classification' => 1,
               'tooltip' => 'Grade AURA, com disciplinas 100% alinhadas ao mercado de trabalho. COOrdBOT ofereceu a opção de empregos e unificou o acesso as dicas da Estácio Curitiba relacionadas a estágios e empregos.'
              ]);
           $newQuestion = Question::create([
               'description' => 'Os planos de ensino apresentados pelos professores contribuíram para o desenvolvimento das atividades acadêmicas e para seus estudos.',
               'id_modelo' => 1,
               'id_classification' => 1,
               'tooltip' => 'Os planos de ensino podem ser solicitados aos professores. No primeiro dia os planos são apresentados para sincronizar as expectativas do semestre letivo.'
           ]);
           $newQuestion = Question::create([
               'description' => 'As referências bibliográficas indicadas pelos professores nos planos de ensino contribuíram para seus estudos e aprendizagens.',
               'id_modelo' => 1,
               'id_classification' => 1,
               'tooltip' => 'A bibliografia esta disponível nos formatos físicos e digitais. '
           ]);
           $newQuestion = Question::create([
               'description' => 'As avaliações da aprendizagem realizadas durante o curso foram compatíveis com os conteúdos ou temas trabalhados pelos professores.',
               'id_modelo' => 1,
               'id_classification' => 1,
               'tooltip' => 'As avaliações seguem os conteúdos dos planos de aulas e conteúdo aplicados em sala de aula.  '
           ]);
           $newQuestion = Question::create([
               'description' => 'A biblioteca dispôs das referências bibliográficas que os estudantes necessitaram. ',
               'id_modelo' => 1,
               'id_classification' => 1,
               'tooltip' => 'Nossos livros nos formatos físicos e digitais estão alinhados ao mercado de trabalho e disponíveis nos planos de aula. Nos planos de aula é apresentado as páginas que precisarão ser analisadas para a aula ministrada. '
           ]);
           $newQuestion = Question::create([
               'description' => 'A instituição contou com biblioteca virtual ou conferiu acesso a obras disponíveis em acervos virtuais.',
               'id_modelo' => 1,
               'id_classification' => 1,
               'tooltip' => 'Todas as disciplinas possuem bibliográfias digitais. Disponíveis nos planos de aula '
           ]);
   
           // Metodologia de Ensino (Aura)
   
           $newQuestion = Question::create([
               'description' => 'As metodologias de ensino utilizadas no curso desafiaram você a aprofundar conhecimentos e desenvolver competências reflexivas e críticas. ',
               'id_modelo' => 1,
               'id_classification' => 2,
               'tooltip' => 'Os desafios foram obtidos com o Projeto Integrador e sua implantação em ambiente de Nuvem com linguagens de programação e tecnologias de mercado. '
           ]);
   
           // Acadêmico  - Curso ADS
           $newQuestion = Question::create([
               'description' => 'O curso propiciou experiências de aprendizagem inovadoras',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'Uso das dicas do Chatbot, projeto integrador e sua integração no ambiente de nuvem.  Uso do kahoot e Slice para tornar as aulas dinâmicas. 

               compartilhado em nossas aulas presencias ao vivo através do Teams. O Projeto Integrador nos permitiu levar a inovação em cada aula presencial. '
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso contribuiu para o desenvolvimento da sua consciência ética para o exercício profissional',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'Os tópicos de consciência ética estão disponíveis em nossas palestra distribuídas ao longo dos semestres. Cada palestra agrega horas complementares. '
           ]);
           $newQuestion = Question::create([
               'description' => 'No curso você teve oportunidade de aprender a trabalhar em equipe. ',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'Através do Projeto Integrador tivemos a integração das equipes e a realização de um projeto prático aplicando as tecnologias utilizadas pelo mercado de trabalho.'
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso promoveu o desenvolvimento da sua capacidade de pensar criticamente, analisar e refletir sobre soluções para problemas da sociedade.',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'O modelo de ensino AURA, o desenvolvimento do Projeto Integrador e a aplicação das tecnologias na prática permitem a análise crítica e a sua aplicação em projeto para a sociedade.  '
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso contribuiu para você ampliar sua capacidade de comunicação nas formas oral e escrita.',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'Através das apresentações de trabalhos a turma e a preparação do relatório do projeto integrador. '
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso contribuiu para o desenvolvimento da sua capacidade de aprender e atualizar-se permanentemente.',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'Estratégias utilizadas para o conhecimento sustentável temos: Avaliando Aprendizado, Segunda Chance, Lista de exercícios práticos aulas aos sábados e o Projeto Integrador aplicado em cada um dos semestres com conteúdo inédito.  '
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso exigiu de você organização e dedicação frequente aos estudos.',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' =>'Neste ponto percebi grande evolução de todos. todos de parabéns pela organização e condução dos projetos integradores. '
           ]);  
           $newQuestion = Question::create([
               'description' => 'O curso ofereceu condições para os estudantes participarem de eventos internos e/ou externos à instituição.',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'A Faculdade promove semestralmente a Semana de Pesquisa e palestras em diferentes áreas do conhecimento.'
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso favoreceu a articulação do conhecimento teórico com atividades práticas.',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'Promovido a integração das disciplinas de cada semestre para um único trabalho prático concentrado no Projeto Integrador. 

               '
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso propiciou acesso a conhecimentos atualizados e/ou contemporâneos em sua área de formação.',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'Promovido o programa do Padrinho Veterano. Uma segunda ação foi a disponibilidade de alunos para a atuação em aulas de reforço nos dias das aulas EAD.  '
           ]);
           $newQuestion = Question::create([
               'description' => 'O curso disponibilizou monitores ou tutores para auxiliar os estudantes.',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'Acredito que todos já receberam um SMS, email ou Whatsapp do Medallia? Neste vocês podem avaliar todos os itens em tempo real. Muito legal pois já conseguimos atuar em seguida. Neste semestre tivemos todos os programas do semestre disponibilizados em nosso laboratório. '
           ]);
           $newQuestion = Question::create([
               'description' => 'Os estudantes participaram de avaliações periódicas do curso (disciplinas, atuação dos professores, infraestrutura).',
               'id_modelo' => 1,
               'id_classification' => 3,
               'tooltip' => 'Como estratégia temos a realização de reuniões mensais com os professores para avaliaro andamento das aulas e problemas pontuais. Com os alunos realizamos reuniões com os representantes de turma para avaliarmos dificuldades ao longo do semestre. '
           ]);
   
           // Acadêmico  - Professores
   
           $newQuestion = Question::create([
               'description' => 'As relações professor-aluno ao longo do curso estimularam você a estudar e aprender.',
               'id_modelo' => 1,
               'id_classification' => 4,
               'tooltip' => 'Nossa estratégia foi levar para dentro das disciplinas um único trabalho prático com o Projeto Integrador onde permitiu o professor realizar as orientações durante as aulas. '
           ]);
           $newQuestion = Question::create([
               'description' => 'Os professores apresentaram disponibilidade para atender os estudantes fora do horário das aulas.',
               'id_modelo' => 1,
               'id_classification' => 4,
               'tooltip' => 'A Estácio tem como prática manter professores mestres e doutores com vasta experiência no mercado de trabalho. '
           ]);
           $newQuestion = Question::create([
               'description' => 'Os professores demonstraram domínio dos conteúdos abordados nas disciplinas.',
               'id_modelo' => 1,
               'id_classification' => 4,
               'tooltip' => 'A faculdade Estácio disponibilizou o Microsoft Teams para as aulas ao vivo com o recurso de gravação das aulas, permitindo aos alunos acesso as aulas em até 30 dias. 

               Como estratégia para o acesso aos softwares dos laboratórios foi dispo0nbilizada a plataforma do VDI (Infraestrutura de Desktop Virtual).  O VDI oferece acesso aos softwares dos laboratórios locais na nuvem com alta disponbilidade.    '
           ]);
           $newQuestion = Question::create([
               'description' => 'Os professores utilizaram tecnologias da informação e comunicação (TICs) como estratégia de ensino (projetor multimídia, laboratório de informática, ambiente virtual de aprendizagem).',
               'id_modelo' => 1,
               'id_classification' => 4,
               'tooltip' => 'Como estratégia da coordenação do curso tivemos o lançamento do COOrdBOT (ROBO Coordenador) para que não ficassem sem retorno ou com dúvidas.'
           ]);
   
           // Acadêmico  - Coordenação do Curso
   
           $newQuestion = Question::create([
               'description' => 'A coordenação do curso esteve disponível para orientação acadêmica dos estudantes. ',
               'id_modelo' => 2,
               'id_classification' => 5,
               'tooltip' => 'Como estratégia a Faculdade Estácio disponibiliza aos alunos diversos programas de ensino aprendizagem para agregar conhecimento aos alunos. Como programas temos: Avaliando Aprendizado, Segunda Chance e Prepara. Como resultado dos programas temos a condição de realizar o acompanhamento sobre como esta a qualidade das aulas do semestre.  '
           ]);
   
           // Cursos e Atividades de Extensão
   
           $newQuestion = Question::create([
               'description' => 'Foram oferecidas oportunidades para os estudantes superarem dificuldades relacionadas ao processo de formação.',
               'id_modelo' => 2,
               'id_classification' => 6,
               'tooltip' => 'No segundo semestre de 2020 esteve aberto a participação de nossa semana de pesquisa. Tivemos 4 trabalhos apresentados. '
           ]);
           $newQuestion = Question::create([
               'description' => 'Foram oferecidas oportunidades para os estudantes participarem de programas, projetos ou atividades de extensão universitária.',
               'id_modelo' => 2,
               'id_classification' => 6,
               'tooltip' => 'A faculdade Estácio possui programas de iniciação científica onde os alunos podem realizar sua inscrição. Como exemplo temos a Semana de Pesquisa onde todos os alunos do curso realizam sua inscrição e após a validação do projeto realizam a sua apresentação.  A Semana de Pesquisa oferece horas de Atividades Acadêmicas Complementares (AACs). '
           ]);
           $newQuestion = Question::create([
               'description' => 'Foram oferecidas oportunidades para os estudantes participarem de projetos de iniciação científica e de atividades que estimularam a investigação acadêmica.',
               'id_modelo' => 2,
               'id_classification' => 6,
               'tooltip' => 'A faculdade Estácio lançou neste semestre o Programa Padrinho Veterano. Em paralelo temos semestralmente o papel dos alunos monitores que orientam nas aulas de laboratório ou ainda realizam aulas de fixação.  '
           ]);
           $newQuestion = Question::create([
               'description' => 'A instituição ofereceu oportunidades para os estudantes atuarem como representantes em órgãos colegiados.',
               'id_modelo' => 2,
               'id_classification' => 6,
               'tooltip' => 'A relação da prática com a teoria é obtida com a Inter-disciplinaridade das disciplinas de cada semestre integradas ao Projeto Integrador. '
           ]);
           $newQuestion = Question::create([
               'description' => 'As atividades práticas foram suficientes para relacionar os conteúdos do curso com a prática, contribuindo para sua formação profissional.',
               'id_modelo' => 2,
               'id_classification' => 6,
               'tooltip' => ' As ações Culturais e Integração Social  ocorrem todos os semestres através de palestras onde todos os alunos podem participar com o registro de horas de Atividades Acadêmicas Complementares. '
           ]);
           $newQuestion = Question::create([
               'description' => 'A instituição promoveu atividades de cultura, de lazer e de interação social.',
               'id_modelo' => 2,
               'id_classification' => 6,
               'tooltip' => 'A Faculdade Estácio aborda as questões de diversidade  com palestras distribuídas ao longo do semestre que oferecem horas de Atividades Acadêmicas Complementares (AACs). '
           ]); 
           $newQuestion = Question::create([
               'description' => 'As atividades acadêmicas desenvolvidas dentro e fora da sala de aula possibilitaram reflexão, convivência e respeito à diversidade.',
               'id_modelo' => 2,
               'id_classification' => 6,
               'tooltip' => 'A Faculdade Estácio possui  um programa de Internacionalização onde os aluno podem registrar projetos que tenham relação com instituições internacionais. '
           ]);
   
           //  Acadêmico  - Intercâmbio
   
           $newQuestion = Question::create([
               'description' => 'Foram oferecidas oportunidades para os estudantes realizarem intercâmbios e/ou estágios no país.',
               'id_modelo' => 2,
               'id_classification' => 7,
               'tooltip' => 'A Faculdade Estácio possui  um programa de Internacionalização onde os aluno podem registrar projetos que tenham relação com instituições internacionais. '
           ]);
           $newQuestion = Question::create([
               'description' => 'Foram oferecidas oportunidades para os estudantes realizarem intercâmbios e/ou estágios fora do país.',
               'id_modelo' => 2,
               'id_classification' => 7,
               'tooltip' => 'A estratégia da Faculdade Estácio é oferecer um amplo atendimento através do NAC com centenas de vagas e orientação para criar curriculums e participar de entrevistas. A coordenação de ADS disponibiliza ainda o COOrdBOT com centenas de oportunidades em todas as áreas de trabalho. '
           ]);
   
           // Acadêmico  - Estágio, TCC e Projeto  Integrador
   
           $newQuestion = Question::create([
               'description' => 'O estágio supervisionado proporcionou experiências diversificadas para a sua formação.',
               'id_modelo' => 2,
               'id_classification' => 8,
               'tooltip' => ' Os cursos de Tecnologias não possuem o Trabalho de Conclusão de Curso. No curso de ADS passamos a utilizar o Projeto Integrador que'
           ]);
   
           $newQuestion = Question::create([
               'description' => 'As atividades realizadas durante seu trabalho de conclusão de curso contribuíram para qualificar sua formação profissional.',
               'id_modelo' => 2,
               'id_classification' => 8,
               'tooltip' => 'A Faculdade Estácio Curitiba ampliou sua capacidade de atendimento pessoal e disponibilizou canais via Whatsapp. A Coordenação do curso de ADS disponibilizou ainda um canal via ChatBOT na plataforma Telegram.'
           ]);
   
           // Acadêmico  - Infraestrutura
   
           $newQuestion = Question::create([
               'description' => 'A instituição dispôs de quantidade suficiente de funcionários para o apoio administrativo e acadêmico.',
               'id_modelo' => 2,
               'id_classification' => 9,
               'tooltip' => 'A faculdade Estácio Suritiba disponibilizou rede wifi de forma ampla na Unidade, equipou as salas sem janelas com ar-condicionado, disponibilizou alcool em gel e toda a segurança para o período da pandemia.  '
           ]);
           $newQuestion = Question::create([
               'description' => 'As condições de infraestrutura das salas de aula foram adequadas.',
               'id_modelo' => 2,
               'id_classification' => 9,
               'tooltip' => 'Nossa estratégia foi ampliar as tecnologias disponíveis nos laboratórios com o VDI, onde todos os recursos  passaram a ficar disponíveis na nuvem, evitando que os alunos necessitem de computadores com alto poder de processamento para realizar as atividades práticas. '
           ]);
           $newQuestion = Question::create([
               'description' => 'Os equipamentos e materiais disponíveis para as aulas práticas foram adequados para a quantidade de estudantes.',
               'id_modelo' => 2,
               'id_classification' => 9,
               'tooltip' => 'Nossa estratégia foi ampliar as tecnologias disponíveis nos laboratórios com o VDI, onde todos os recursos  passaram a ficar disponíveis na nuvem, evitando que os alunos necessitem de computadores com alto poder de processamento para realizar as atividades práticas.'
           ]);
           $newQuestion = Question::create([
               'description' => ' Os ambientes e equipamentos destinados às aulas práticas foram adequados ao curso.',
               'id_modelo' => 2,
               'id_classification' => 9,
               'tooltip' => ' A Faculdade Estácio Curitiba investiu em uma nova Cantina, ampliou os banheiros com limpeza constante. '
           ]);
           $newQuestion = Question::create([
               'description' => 'A instituição dispôs de refeitório, cantina e banheiros em condições adequadas que atenderam as necessidades dos seus usuários.',
               'id_modelo' => 2,
               'id_classification' => 9,
               'tooltip' => 'A Faculdade Estácio Curitiba investiu em uma nova Cantina, ampliou os banheiros com limpeza constante. '
           ]);
    }
}
