@extends('layouts.app')

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

<style>
    a.btn:hover {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
    }
    a.btn {
        -webkit-transform: scale(0.8);
        -moz-transform: scale(0.8);
        -o-transform: scale(0.8);
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
    }
</style>
@section('content')
<div class="container">
            <div class="card text-center">
                <div class="card-header">
                    <h2>
                        Livros
                    </h2>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                
                                <th scope="col">Título</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Doador</th>
                                <th scope="col">Data</th>
                                <th scope="col">
                                    <div class="row">
                                        <div class="col-4">
                                            <form action="/add" method="get">
                                                <button class="btn btn-light glyphicon a-btn-slide-text glyphicon-plus">
                                                    Add
                                                </button>
        
                                            </form>
                                        </div>
                                        <div class="col">
                                            <form action="/home" method="get">
                                                <button class="btn btn-light glyphicon a-btn-slide-text glyphicon-home">
                                                    Inicio
                                                </button>
        
                                            </form>
                                        </div>

                                    </div>
                                    
                                   
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                            <tr>
                                
                                <td>
                                    {{ $book->title }}
                                </td>
                                <td>
                                    {{ $book->author }}
                                </td>
                                <td>
                                    {{ $book->donor }}
                                </td>
                                <td>
                                    {{ date('d/m/Y', strtotime($book->created_at)) }}
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{ route('books.edit', ['book' => $book->id]) }}" method="get">
                                                <button class="btn btn-success glyphicon a-btn-slide-text glyphicon-edit">
                                                    Edit
                                                </button>
                                            
                                            </form>
                                        </div>
    
                                        <div class="col">
                                            <form action="{{ route('delete', ['id' => $book->id]) }}" method="post">
                                                <button class="btn btn-danger glyphicon a-btn-slide-text glyphicon-trash  ">
                                                    Delete
                                                </button>
                                                {!! method_field('delete') !!}
                                                {!! csrf_field() !!}
                                            </form>
                                        </div>
                                        <div class="col">
                                            <form action="{{ route('reserve', [$book]) }}" method="get">
                                                <button class="btn btn-primary glyphicon a-btn-slide-text glyphicon-book">
                                                   Locar
                                                </button>
            
                                            </form>
                                        </div>
                                    </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




@endsection
