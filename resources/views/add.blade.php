@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-dark mb-3">
                <div class="card-header text-white  bg-dark mb-3 text-center">{{ __('Produto') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{route('books.store')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required oninvalid="this.setCustomValidity('Nome obrigatório')"oninput="setCustomValidity('')">
                                </div>


                            </div>

                            <div class="form-group row">
                                <label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Autor') }}</label>
                                <div class="col-md-6">
                                    <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}"required oninvalid="this.setCustomValidity('Autor obrigatório')"oninput="setCustomValidity('')" pattern="^[A-Za-z]*$">
                                </div>


                            </div>

                            <div class="form-group row">
                                <label for="quantidade" class="col-md-4 col-form-label text-md-right">{{ __('Doador') }}</label>
                                <div class="col-md-6">
                                    <input id="donor" type="text" class="form-control @error('donor') is-invalid @enderror" name="donor" value="{{ old('donor') }}"required oninvalid="this.setCustomValidity('Doador obrigatório')"oninput="setCustomValidity('')" pattern="^[A-Za-z]*$">
                                </div>
                               
                            </div>
            
                            <a href="/books" class="btn btn-dark float-left" role="button" >Voltar</a>
                            <button type="submit" class="btn btn-primary float-right" class="col-md-4 col-form-label text-md-right">{{ __('Validar') }}</button>



                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection