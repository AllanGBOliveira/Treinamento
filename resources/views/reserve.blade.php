@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-dark mb-3">
                <div class="card-header text-center text-white  bg-dark mb-3 ">Emprestimo</div>
                  
                    <div class="card-body text-dark">
                        <form method="post" action="{{route('take',$book,['id'=>$book->id])}}">
                            @csrf @method('put')

                            <ul class="list-group">
                                <li class="list-group-item">Título: {{$book->title}}</li>
                                <li class="list-group-item">Autor: {{$book->author}}</li>
                                <li class="list-group-item">Doador: {{$book->donor}}</li>
                                <li class="list-group-item">Data de Doação: {{$book->created_at->formatLocalized(' %d / %m / %Y')}}</li>
                                <li class="list-group-item">Funcionario Responsavel: {{$book->user_name}}</li>
                                <li class="list-group-item">Disponibilidade: @if ($book->avaliable) SIM @else NÃO @endif</li>

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
                                        @if($book->avaliable)
                                        <div class="col">
                                            <form action="{{route('take',$book,['id'=>$book->id])}}" method="put">
                                                <button class="btn btn-primary float-right">
                                                    Emprestar
                                                </button>
                                            </form>
                                        
                                            @else
                                            <div class="col">
                                                <form action="{{route('return',$book,['id'=>$book->id])}}" method="put">
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
