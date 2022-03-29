@extends('layouts.master')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <article id="termos-uso__wrapper" class="card p-4">
                    <h1 class="text-center font-weight-bold mb-0">QUEM SOMOS</h1>
                    <span class="my-5">
                        <div class="row">
                            <div class="col-md mb-4">
                                <img src="{{ asset('images/img-quem-somos.jpeg') }}" class="img-fluid" />
                            </div>

                            <div class="col-md-8">
                                <p>Líder de um grupo de pessoas inspiradoras, Professor Eduardo Caju, como é conhecido, é formado em Filosofia e Pós Graduando em Autoconhecimento. Atuante na área da espiritualidade, vem ajudando várias pessoas a encontrar a si mesmo e ter um propósito no mundo. Há 10 anos fundou a "Servus Christi", grupo ligado à Igreja Católica e de forte atuação na área social.
                                
                                <p>Em 2019 iniciou o "Projeto Eu Resgato" que desenvolve trabalhos com pessoas em vulnerabilidade social,  voltado para atendimento a famílias e pessoas em situação de rua. O projeto é responsável por duas Casas Abrigo que realizam centenas de atendimentos no mês.</p>

                                <p>Sempre com uma mente criativa e motivado pelo desenvolvimento pessoal de cada pessoa a sua volta, após celebrar parceria com a Anhanguera para oferecer cursos de graduação e pós-graduação de qualidade, professor Eduardo inicia o  nima Educacional Ltda, criando a marca NIMA 360 e o resultado permitiu a expansão da área de atuação com cursos de capacitação online e presencial, com o objetivo de inserir a empresa no mercado digital.
                                </p>
                            </div>

                            <div class="col-md-12 mt-4">
                                <p>
                                    <strong>MISSÃO</strong><br/>
                                    CRESCER JUNTOS, com o aluno que busca mudar de vida, com parceiros que queiram trabalhar com um ensino de qualidade, com plano de ensino humanizado, priorizando qualidade no aprendizado para cada um que passa por nós.
                                </p>

                                <p>
                                    <strong>VISÃO</strong><br/>
                                    Dar oportunidades para transformar histórias.
                                </p>

                                <p>
                                    <strong>VALORES</strong><br/>
                                    Humanização, respeito, crescimento, valorização, superação, transparência.
                                </p>
                            </div>
                        </div>
                    </span>
                </article>
            </div>
        </div>
    </div>
@endsection
