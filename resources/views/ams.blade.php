@extends('frontend.layout-form')

@section('title')
    @if(!empty($contacts)){{ $contacts->sitename }}@endif - Questionário AMS (Aging Male´s Symptoms Rating Scale)
@endsection

@section('content')

<div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/frontend/layout/logo-hominem.png">
    <h2>Questionário AMS</h2>
    <p><small>(Aging Male´s Symptoms Rating Scale)</small></p>
    <p class="lead">Preencha o formulário abaixo para realizar seu teste de testosterona.</p>
</div>

<div class="row">

    <div class="col-md-12">
        <h4 class="mb-3">Dados pessoais</h4>
        <form class="needs-validation" novalidate method="post" action="/result-ams">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
            <div class="invalid-feedback">
                O nome é um campo obrigatório.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="lastname">Sobrenome</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="" required>
            <div class="invalid-feedback">
                O sobrenome é um campo obrigatório.
            </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" value="" name="email" placeholder="" required>
            <div class="invalid-feedback">
            Por favor, preencha seu e-mail corretamente.
            </div>
        </div>

        <p class="lead mt-5">Quais dos seguintes sintomas se aplicam neste momento ao seu caso pessoal?Por favor assinale o quadrado apropriado para cada sintoma. Para os sintomas que não se aplicam ao seu caso, por favor assinale o quadrado “nenhum”.</p>
        <p class="lead mb-0">
            <small>SINTOMA E INTENSIDADE:</small>
        </p>
        <p class="lead mb-4">
            <small>Nenhum (1) Leve (2) Moderado (3) Grave (4) Muitíssimo grave (5)</small>
        </p>
        <h5>
        1. Declínio da sua sensação de bem estar geral (estado geral de saúde, sensação subjetiva)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q1a" name="q1" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q1a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q1b" name="q1" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q1b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q1c" name="q1" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q1c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q1d" name="q1" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q1d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q1e" name="q1" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q1e">5</label>
            </div>

        </div>
        <h5>
        2. Dores nas articulações e dores musculares, dor na base das costas, dor nas articulações, dor num membro, dores nas costas em geral)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q2a" name="q2" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q2a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q2b" name="q2" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q2b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q2c" name="q2" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q2c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q2d" name="q2" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q2d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q2e" name="q2" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q2e">5</label>
            </div>

        </div>
        <h5>
        3. Sudorese excessiva (episódios inesperados súbitos de sudorese, independente de esforço físico)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q3a" name="q3" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q3a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q3b" name="q3" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q3b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q3c" name="q3" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q3c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q3d" name="q3" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q3d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q3e" name="q3" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q3e">5</label>
            </div>

        </div>
        <h5>
        4. Problemas de sono (dificuldades em adormecer, dificuldades em dormir toda a noite, acordar cedo e sentir-se cansado, sono agitado, insônia)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q4a" name="q4" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q4a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q4b" name="q4" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q4b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q4c" name="q4" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q4c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q4d" name="q4" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q4d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q4e" name="q4" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q4e">5</label>
            </div>

        </div>
        <h5>
        5. Aumento da necessidade de dormir (sentir-se frequentemente cansado)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q5a" name="q5" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q5a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q5b" name="q5" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q5b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q5c" name="q5" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q5c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q5d" name="q5" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q5d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q5e" name="q5" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q5e">5</label>
            </div>

        </div>
        <h5>
        6. Irritabilidade (sentir-se agressivo, facilmente perturbado com pequenas coisas, com humor instável)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q6a" name="q6" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q6a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q6b" name="q6" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q6b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q6c" name="q6" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q6c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q6d" name="q6" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q6d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q6e" name="q6" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q6e">5</label>
            </div>

        </div>
        <h5>
        7. Nervosismo (tensão, agitação, sentir- se desassossegado)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q7a" name="q7" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q7a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q7b" name="q7" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q7b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q7c" name="q7" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q7c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q7d" name="q7" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q7d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q7e" name="q7" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q7e">5</label>
            </div>

        </div>
        <h5>
        8. Ansiedade (sentimento de pânico)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q8a" name="q8" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q8a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q8b" name="q8" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q8b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q8c" name="q8" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q8c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q8d" name="q8" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q8d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q8e" name="q8" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q8e">5</label>
            </div>

        </div>
        <h5>
        9.Exaustão física / Falta de vitalidade (diminuição geral de performance, atividade reduzida, falta de interesse em atividades de lazer, sensação de produzir menos, de se esforçar para fazer atividades)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q9a" name="q9" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q9a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q9b" name="q9" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q9b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q9c" name="q9" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q9c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q9d" name="q9" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q9d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q9e" name="q9" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q9e">5</label>
            </div>

        </div>
        <h5>
        10. Diminuição da força muscular (sensação de fraqueza)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q10a" name="q10" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q10a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q10b" name="q10" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q10b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q10c" name="q10" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q10c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q10d" name="q10" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q10d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q10e" name="q10" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q10e">5</label>
            </div>

        </div>
        <h5>
        11. Estado de espírito depressivo (sentir-se em baixa, com falta de energia, alterações de humor, sensação de que nada vale a pena)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q11a" name="q11" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q11a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q11b" name="q11" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q11b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q11c" name="q11" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q11c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q11d" name="q11" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q11d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q11e" name="q11" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q11e">5</label>
            </div>

        </div>
        <h5>
        12. Sensação de que já passou o seu ponto máximo
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q12a" name="q12" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q12a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q12b" name="q12" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q12b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q12c" name="q12" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q12c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q12d" name="q12" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q12d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q12e" name="q12" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q12e">5</label>
            </div>

        </div>
        <h5>
        13. Sentir-se esgotado / sentir que chegou ao ponto mais baixo
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q13a" name="q13" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q13a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q13b" name="q13" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q13b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q13c" name="q13" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q13c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q13d" name="q13" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q13d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q13e" name="q13" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q13e">5</label>
            </div>

        </div>
        <h5>
        14. Diminuição do crescimento da barba
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q14a" name="q14" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q14a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q14b" name="q14" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q14b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q14c" name="q14" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q14c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q14d" name="q14" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q14d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q14e" name="q14" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q14e">5</label>
            </div>

        </div>
        <h5>
        15. Diminuição da capacidade / frequência do desempenho sexual
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q15a" name="q15" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q15a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q15b" name="q15" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q15b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q15c" name="q15" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q15c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q15d" name="q15" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q15d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q15e" name="q15" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q15e">5</label>
            </div>

        </div>
        <h5>
        16. Diminuição do número de ereções matinais
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q16a" name="q16" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q16a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q16b" name="q16" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q16b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q16c" name="q16" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q16c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q16d" name="q16" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q16d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q16e" name="q16" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q16e">5</label>
            </div>

        </div>
        <h5>
        17.Diminuição do desejo sexual / da libido (ausência de prazer no sexo, ausência de desejo de relações sexuais)
        </h5>
        <div class="d-block my-3">
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q17a" name="q17" value="1" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q17a">1</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q17b" name="q17" value="2" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q17b">2</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q17c" name="q17" value="3" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q17c">3</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q17d" name="q17" value="4" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q17d">4</label>
            </div>
            <div class="d-inline-block custom-control custom-radio mr-2">
            <input id="q17e" name="q17" value="5" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="q17e">5</label>
            </div>

        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="register" name="register" value="register" required>
            <label class="custom-control-label" for="register">Aceito cadastrar meus dados na Hominem Clinic Bauru.</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Concluir o questionário</button>
        </form>
    </div>
</div>

@endsection
