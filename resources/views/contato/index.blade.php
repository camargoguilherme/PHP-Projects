@extends('layout.site')

@section('title', 'Contatos')

@section('content')
    <h3>Essa é a view Index</h3>
    <table border="1" ><!-- Abre tabela -->
        <thead><!-- Abre cabeçalho -->
            <tr><!-- Abre uma linha -->
                <th>Nome</th><!-- Colunas -->
                <th>Telefone</th><!-- Colunas -->
            </tr><!-- Fecha uma linha -->
        </thead><!-- Fecha cabeçalho -->
        <tbody><!-- Abre corpo da tabela -->
    @foreach($contatos as $contato)
            <tr>
                <td>{{ $contato->nome }}</td>
                <td>{{ $contato->tel }}</td>
            </tr>
    @endforeach
        </tbody><!-- Fecha corpo da tabela -->
    </table><!-- Fecha tabela -->

@endsection