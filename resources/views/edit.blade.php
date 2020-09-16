@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-dark mb-3">
                <div class="card-header text-center text-white  bg-dark mb-3">{{ __('Livro') }}</div>

                <div class="card-body text-dark">
                    <form method="post" action="{{route('books.update',$book,['book'=>$book->id])}}">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$book->title }}">
                            </div>


                        </div>

                        <div class="form-group row">
                            <label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Autor') }}</label>
                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{$book->author}}" >
                            </div>


                        </div>

                        <div class="form-group row">
                            <label for="quantidade" class="col-md-4 col-form-label text-md-right">{{ __('Doador') }}</label>
                            <div class="col-md-6">
                                <input id="donor" type="text" class="form-control @error('donor') is-invalid @enderror" name="donor" value="{{$book->donor}}" >
                            </div>

                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif


                        <a href="/books" class="btn btn-dark float-left" role="button">Voltar</a>
                        <button type="submit" class="btn btn-primary float-right" class="col-md-4 col-form-label text-md-right">{{ __('Editar') }}</button>










                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
</div>

@endsection