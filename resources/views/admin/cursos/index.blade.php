@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Descricao</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                    {{ asset('js/script.js') }}
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->id  }}</td>
                            <td>{{ $registro->titulo }}</td>
                            <td>{{ $registro->descricao }}</td>
                            <td><img height="60" src="{{ asset($registro->imagem)  }}" alt="{{ $registro->titulo }}"></td>
                            <td>{{ $registro->publicado }}</td>
                            <td>
                                <a class="waves-effect waves-light btn deep-orange"  data-target="#editModal" data-toggle="modal" href="{{ route('admin.cursos.editar', $registro->id) }}">Editar</a>
                                <a class="waves-effect waves-light btn red view" onclick="$(modal1).modal('open')">Deletar</a>
                                <!-- Modal Structure -->
                                <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <h4>{{ $registro->titulo.' - '.$registro->descricao }}</h4>
                                        <p>Deseja excluir?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="modal-action modal-close waves-effect waves-green btn grey" onclick=href="{{route('admin.cursos')}}">
                                            <span>Cancelar</span>
                                        </button>
                                        <button class="modal-action modal-close waves-effect waves-green btn red" onclick=href="{{route('admin.cursos.deletar', $registro->id)}}">
                                            <span>Deletar</span>
                                        </button>

                                    </div>
                                </div>
                                <script>
                                    $('.modal').modal({
                                            dismissible: false, // Modal can be dismissed by clicking outside of the modal
                                            opacity: .5, // Opacity of modal background
                                            inDuration: 300, // Transition in duration
                                            outDuration: 200, // Transition out duration
                                            startingTop: '4%', // Starting top style attribute
                                            endingTop: '10%', // Ending top style attribute
                                        }
                                    );
                                </script>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="waves-effect waves-light btn blue" href="{{ route('admin.cursos.adicionar')}}">Adicionar</a>
        </div>
    </div>


@endsection

