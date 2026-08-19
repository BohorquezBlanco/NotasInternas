@extends('layouts.base')

@section('contenido')

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">Notas Internas</h2>

            <p class="text-muted mb-0">
                Registro de notas de la organización
            </p>
        </div>

        <a href="/notas/nueva" class="btn btn-primary">
            + Nueva nota
        </a>

    </div>


    <!-- Contador -->

    <div class="alert alert-primary shadow-sm">
        <strong>{{ count($notas) }}</strong>
        nota(s) registrada(s)
    </div>


    @if (count($notas) > 0)

        <div class="row">

            @foreach ($notas as $nota)

                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="card shadow-sm h-100">

                        <div class="card-body">

                            <h5 class="card-title fw-bold">
                                {{ $nota->titulo }}
                            </h5>

                            <p class="card-text text-muted">
                                Nota interna registrada en el sistema.
                            </p>

                            <span class="badge bg-primary">
                                Prioridad: {{ $nota->prioridad }}
                            </span>

                        </div>

                        <div class="card-footer bg-white text-muted">
                            <small>
                                Registrado: {{ $nota->created_at }}
                            </small>
                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="text-center py-5">

            <div class="display-4">
                📝
            </div>

            <h4 class="mt-3">
                No hay notas registradas
            </h4>

            <p class="text-muted">
                Comienza registrando tu primera nota interna.
            </p>

            <a href="/notas/nueva" class="btn btn-primary">
                Registrar primera nota
            </a>

        </div>

    @endif

@endsection