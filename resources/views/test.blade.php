<div class="container-fluid">
    <div class="card text-center ">
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
                                    <form action="add" method="get">
                                        <button class="btn btn-light">
                                            <i class="fas fa-plus"> Add</i>
                                        </button>

                                    </form>
                                </div>
                                <div class="col">
                                    <form action="/home" method="get">
                                        <button class="btn btn-light">
                                            <i class="fas fa-home"> Início</i>
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
                            {{ $book->created_at->formatLocalized(' %d / %m / %Y')}}
                        </td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <form action="{{ route('books.edit', $book->id) }}" method="get">
                                        <button class="btn btn-success">
                                            <i class="fas fa-edit"> Editar</i>
                                        </button>

                                    </form>
                                </div>

                                <div class="col">
                                    <form action="{{ route('delete',  $book->id) }}" method="post">
                                        <button class="btn btn-danger">
                                            <i class="fas fa-trash"> Deletar</i>
                                        </button>
                                        {!! method_field('delete') !!}
                                        {!! csrf_field() !!}
                                    </form>
                                </div>
                                <div class="col">
                                    <form action="{{ route('reserve', $book->id) }}" method="get">
                                        <button class="btn btn-primary">
                                            <i class="fas fa-book"> Locar</i>
                                        </button>

                                    </form>
                                </div>
                            </div>


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