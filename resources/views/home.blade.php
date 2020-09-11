@extends('layouts.app')
<style>
 
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Biblioteca') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb dark">
                          <li class="breadcrumb-item active" aria-current="page"><a href="books">Visualisar Livros</a></li>
                          <li class="breadcrumb-item" ><a href="add">Adicionar Livros</a></li>

                        </ol>
                      </nav>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
