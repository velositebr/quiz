@extends('frontend.layout-form')

@section('title')
    @if(!empty($contacts)){{ $contacts->sitename }}@endif - Questionário AMS (Aging Male´s Symptoms Rating Scale)
@endsection

@section('content')

<div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/frontend/logo-hominem.png">
    <h2>Questionário AMS</h2>
    <p><small>(Aging Male´s Symptoms Rating Scale)</small></p>
    <p class="lead">Preencha o formulário abaixo para realizar seu teste de testosterona.</p>
</div>

<div class="row">

    <div class="col-md-12">
        <h4 class="mb-3">Dados pessoais</h4>
        <form class="needs-validation" novalidate method="post" action="result.php">
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="FNAME">Nome</label>
            <input type="text" class="form-control" id="FNAME" name="FNAME" placeholder="" value="" required>
            <div class="invalid-feedback">
                O nome é um campo obrigatório.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="LNAME">Sobrenome</label>
            <input type="text" class="form-control" id="LNAME" name="lasttName" placeholder="" value="" required>
            <div class="invalid-feedback">
                O sobrenome é um campo obrigatório.
            </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="EMAIL">E-mail</label>
            <input type="email" class="form-control" id="EMAIL" value="" name="EMAIL" placeholder="" required>
            <div class="invalid-feedback">
            Por favor, preencha seu e-mail corretamente.
            </div>
        </div>



        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="register" value="register" required>
            <label class="custom-control-label" for="register">Aceito me cadastrar para receber informativos da Hominem Clinic Bauru.</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Concluir o questionário</button>
        </form>
    </div>
</div>

@endsection
