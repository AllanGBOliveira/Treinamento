@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-dark mb-3">
                <div class="card-header text-center text-white  bg-dark mb-3 ">Emprestimo</div>
                  
                    <div class="card-body text-dark">
                        <form method="post" action="{{route('val',$books,['id'=>$books->id])}}">
                            @csrf @method('put')

                            <ul class="list-group">
                                <li class="list-group-item">Título: {{$books->title}}</li>
                                <li class="list-group-item">Autor: {{$books->author}}</li>
                                <li class="list-group-item">Doador: {{$books->donor}}</li>
                                <li class="list-group-item">Data de Doação: {{date('d/m/Y', strtotime($books->created_at))}}</li>
                                <li class="list-group-item">Funcionario Responsavel: {{$books->user_name}}</li>
                                <li class="list-group-item">Disponibilidade: @if ($books->avaliable) SIM @else NÃO @endif</li>

                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{ route('books.index') }}" method="get">
                                                @csrf @method('get')
                                                <button class="btn btn-dark float-left">
                                                    Voltar
                                                </button>
                                            </form>
                                        </div>
                                        @if($books->avaliable)
                                        <div class="col">
                                            <form action="{{route('val',$books,['id'=>$books->id])}}" method="put">
                                                <button class="btn btn-primary float-right">
                                                    Emprestar
                                                </button>
                                            </form>
                                        
                                            @else
                                            <div class="col">
                                                <form action="{{route('return',$books,['id'=>$books->id])}}" method="put">
                                                    <button class="btn btn-success float-right">
                                                        Devolver
                                                    </button>
                                                </form>
                                            </div>
                                            @endif
                                        
                                        
                                        </div>
                                        
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
