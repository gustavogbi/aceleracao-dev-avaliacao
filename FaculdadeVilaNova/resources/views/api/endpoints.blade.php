@extends('layouts.single')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Endpoints</strong></h1> <hr>
                <br><br>
Listagem de professores<br>
Listagem de alunos por curso<br>
Listagem aulas por curso<br>
Cursos disponíveis<br>
Cursos indisponiveis<br>
Filtragem de resultados por campos nas consultas principais<br>
Aulas do aluno + valor da mensalidade com desconto<br>
                    </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Diagrama de caso de uso</strong></h1> <hr>
                <br><br>
                <img src="https://github.com/gustavogbi/aceleracao-dev-avaliacao/raw/main/FaculdadeVilaNova/diagrama_casos_de_uso.jpeg">
                    </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Autenticação</strong></h1> <hr>
                <br><br>
                Basic auth
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong>Endpoint listagem de professores</strong></h1> <hr>
                <br><br>
                GET Listar Professores
api/professores
                <div class="card-body">
                RESPONSE
                <div class="bg-secondary text-dark">
                <div class="highlight highlight-source-json position-relative overflow-auto"><pre>{
    <span class="pl-ent">"data"</span>: [
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"nome"</span>: <span class="pl-s"><span class="pl-pds">"</span>Guy Will<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"matricula"</span>: <span class="pl-s"><span class="pl-pds">"</span>597<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datanascimento"</span>: <span class="pl-s"><span class="pl-pds">"</span>1988-03-19<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idade"</span>: <span class="pl-s"><span class="pl-pds">"</span>23<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"responsavelFinanceiro"</span>: <span class="pl-s"><span class="pl-pds">"</span>Bernadine Senger Jr.<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"cpf"</span>: <span class="pl-s"><span class="pl-pds">"</span>69995875899<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcursos"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idplano"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">4</span>,
            <span class="pl-ent">"nome"</span>: <span class="pl-s"><span class="pl-pds">"</span>Vanessa Gorczany<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"matricula"</span>: <span class="pl-s"><span class="pl-pds">"</span>564<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datanascimento"</span>: <span class="pl-s"><span class="pl-pds">"</span>1975-12-05<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idade"</span>: <span class="pl-s"><span class="pl-pds">"</span>87<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"responsavelFinanceiro"</span>: <span class="pl-s"><span class="pl-pds">"</span>Abner Kiehn<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"cpf"</span>: <span class="pl-s"><span class="pl-pds">"</span>56669501009<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcursos"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idplano"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">6</span>,
            <span class="pl-ent">"nome"</span>: <span class="pl-s"><span class="pl-pds">"</span>Hassan Roob<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"matricula"</span>: <span class="pl-s"><span class="pl-pds">"</span>40<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datanascimento"</span>: <span class="pl-s"><span class="pl-pds">"</span>1978-03-22<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idade"</span>: <span class="pl-s"><span class="pl-pds">"</span>35<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"responsavelFinanceiro"</span>: <span class="pl-s"><span class="pl-pds">"</span>Demarco Bergstrom MD<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"cpf"</span>: <span class="pl-s"><span class="pl-pds">"</span>45726563584<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcursos"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idplano"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-ent">"id"</span>: <span class="pl-c1">8</span>,
            <span class="pl-ent">"nome"</span>: <span class="pl-s"><span class="pl-pds">"</span>Dr. Norwood Quigley III<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"matricula"</span>: <span class="pl-s"><span class="pl-pds">"</span>887<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"datanascimento"</span>: <span class="pl-s"><span class="pl-pds">"</span>1976-07-29<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idade"</span>: <span class="pl-s"><span class="pl-pds">"</span>93<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"responsavelFinanceiro"</span>: <span class="pl-s"><span class="pl-pds">"</span>Howell Wilkinson<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"cpf"</span>: <span class="pl-s"><span class="pl-pds">"</span>34348051060<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"idcursos"</span>: <span class="pl-c1">1</span>,
            <span class="pl-ent">"idplano"</span>: <span class="pl-c1">2</span>,
            <span class="pl-ent">"created_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>,
            <span class="pl-ent">"updated_at"</span>: <span class="pl-s"><span class="pl-pds">"</span>2021-12-31T05:16:04.000000Z<span class="pl-pds">"</span></span>
        }
    ],
    <span class="pl-ent">"informação importante"</span>: <span class="pl-s"><span class="pl-pds">"</span>Essa API não está em produção, é apenas de homologação e testes<span class="pl-pds">"</span></span>
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nome&quot;: &quot;Guy Will&quot;,
            &quot;matricula&quot;: &quot;597&quot;,
            &quot;datanascimento&quot;: &quot;1988-03-19&quot;,
            &quot;idade&quot;: &quot;23&quot;,
            &quot;responsavelFinanceiro&quot;: &quot;Bernadine Senger Jr.&quot;,
            &quot;cpf&quot;: &quot;69995875899&quot;,
            &quot;idcursos&quot;: 1,
            &quot;idplano&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;nome&quot;: &quot;Vanessa Gorczany&quot;,
            &quot;matricula&quot;: &quot;564&quot;,
            &quot;datanascimento&quot;: &quot;1975-12-05&quot;,
            &quot;idade&quot;: &quot;87&quot;,
            &quot;responsavelFinanceiro&quot;: &quot;Abner Kiehn&quot;,
            &quot;cpf&quot;: &quot;56669501009&quot;,
            &quot;idcursos&quot;: 1,
            &quot;idplano&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;nome&quot;: &quot;Hassan Roob&quot;,
            &quot;matricula&quot;: &quot;40&quot;,
            &quot;datanascimento&quot;: &quot;1978-03-22&quot;,
            &quot;idade&quot;: &quot;35&quot;,
            &quot;responsavelFinanceiro&quot;: &quot;Demarco Bergstrom MD&quot;,
            &quot;cpf&quot;: &quot;45726563584&quot;,
            &quot;idcursos&quot;: 1,
            &quot;idplano&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;nome&quot;: &quot;Dr. Norwood Quigley III&quot;,
            &quot;matricula&quot;: &quot;887&quot;,
            &quot;datanascimento&quot;: &quot;1976-07-29&quot;,
            &quot;idade&quot;: &quot;93&quot;,
            &quot;responsavelFinanceiro&quot;: &quot;Howell Wilkinson&quot;,
            &quot;cpf&quot;: &quot;34348051060&quot;,
            &quot;idcursos&quot;: 1,
            &quot;idplano&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-31T05:16:04.000000Z&quot;
        }
    ],
    &quot;informação importante&quot;: &quot;Essa API não está em produção, é apenas de homologação e testes&quot;
}" tabindex="0" role="button">
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-copy js-clipboard-copy-icon m-2">
    <path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
</svg>
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">

    @include('layouts.alerts')
    <div class="row ">
        <div class="col-md-12">
            
        </div>
    </div>
    @endsection