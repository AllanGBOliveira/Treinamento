@extends('layouts.app')


<script src="https://kit.fontawesome.com/443fc2c11b.js" crossorigin="anonymous"></script>

@section('content')

<div class="container">


    <div class="card border-dark mb-3">

        <div class="card-body">
            <div class="row">
                <div class="col-auto">
                    <form action="add" method="get">
                        <button class="btn btn-light">
                            <i class="fas fa-plus"> Add</i>
                        </button>

                    </form>
                </div>
                <div class="col-auto">
                    <form action="/home" method="get">
                        <button class="btn btn-light">
                            <i class="fas fa-home"> Início</i>
                        </button>

                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Doador</th>
                            <th scope="col">Data</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>
                            <th scope="col">Locar</th>
                        </tr>
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
                                {{ $book->created_at->formatLocalized(' %d / %m / %Y')}}
                            </td>
                            <td>
                                <form action="{{ route('books.edit', $book->id) }}" method="get">
                                    <button class="btn btn-success">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                </form>
                            </td>
                            <td>


                                <form action="{{ route('delete',  $book->id) }}" method="post">
                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    {!! method_field('delete') !!}
                                    {!! csrf_field() !!}
                                </form>
                            </td>
                            <td>

                                <form action="{{ route('reserve', $book->id) }}" method="get">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-book"></i>
                                    </button>

                                </form>
                            </td>





                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="fa fas">
                    {{$books->links()}}
                </div>
            </div>


        </div>

    </div>
</div>




@endsection