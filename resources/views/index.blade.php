@extends('frontend.layout-form')

@section('title')
    @if(!empty($contacts)){{ $contacts->sitename }}@endif
@endsection

@section('content')

<div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/frontend/layout/logo-hominem.png">
    <h2>Testes Hominem Clinic Bauru</h2>
    <p class="lead">Escolha o teste que deseja realizar.</p>
</div>

<main role="main">

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="">
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/ams" type="button" class="btn btn-sm btn-outline-secondary">Faça agora</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="">
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="disfuncao-eretil" type="button" class="btn btn-sm btn-outline-secondary">Faça agora</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </main>

@endsection
