@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" >
                        <h2>
                            Produtos
                        </h2>

                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr> <!--TR SIGNIFICA UMA NOVA LINHA-->
                                <th scope="col">Nome</th>
                                <!--TH DEIXA EM NEGRITO, GERALMENTE USADO COMO LABEL DA COLUNA-->
                                <th scope="col">Marca</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Validade</th>
                            </tr>
                            </thead>
                            <tbody> <!--CORPO DA TABELA-->
                            @foreach($produtos as $item)
                                <tr>
                                    <td>
                                        {{ $item->nome }}
                                    </td>
                                    <td>
                                        {{ $item->marca }}
                                    </td>
                                    <td>
                                        {{ $item->quantidade }}
                                    </td>
                                    <td>
                                        {{ date('d/m/Y', strtotime($item->date)) }}
                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection