@extends('layouts.base')

@section('contenido')

    <!-- Encabezado -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                Notas Internas
            </h2>

            <p class="text-muted mb-0">
                Registro de notas de la organización
            </p>
        </div>

        <a
            href="{{ url('/notas/nueva') }}"
            class="btn btn-primary"
        >
            + Nueva nota
        </a>

    </div>


    <!-- Contador -->

    <div class="alert alert-primary shadow-sm">

        <strong>
            {{ count($notas) }}
        </strong>

        nota(s) registrada(s)

    </div>


    @if (count($notas) > 0)

        <div class="row">

            @foreach ($notas as $nota)

                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="card shadow-sm h-100">

                        <!-- Encabezado de tarjeta -->

                        <div class="card-header bg-primary text-white">

                            <div class="d-flex justify-content-between align-items-center">

                                <span class="fw-bold">
                                    Nota Interna
                                </span>

                                <span>
                                    {{ $nota->codigo }}
                                </span>

                            </div>

                        </div>


                        <div class="card-body">

                            <!-- Referencia -->

                            <p class="mb-2">

                                <strong>
                                    Ref.:
                                </strong>

                                {{ $nota->referencia }}

                            </p>


                            <!-- Caso -->

                            <p class="mb-2">

                                <strong>
                                    Caso:
                                </strong>

                                <span class="badge bg-info text-dark">
                                    {{ $nota->caso }}
                                </span>

                            </p>


                            <hr>


                            <!-- Título -->

                            <h5 class="card-title fw-bold">

                                {{ $nota->titulo }}

                            </h5>


                            <p class="card-text text-muted">

                                Nota interna registrada en el sistema.

                            </p>


                            <!-- Prioridad -->

                            <span class="badge bg-primary">

                                Prioridad:
                                {{ $nota->prioridad }}

                            </span>
                            <!-- Stock -->

                            <span class="badge bg-success ms-2">

                                Stock:
                                {{ $nota->stock }}

                            </span>

                        </div>


                        <!-- Pie -->

                        <div class="card-footer bg-white">

                            <small class="text-muted">

                                Registrado:

                                {{ $nota->created_at->format('d/m/Y H:i') }}

                            </small>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>


    @else

        <!-- Sin registros -->

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

            <a
                href="{{ url('/notas/nueva') }}"
                class="btn btn-primary"
            >
                Registrar primera nota
            </a>

        </div>

    @endif

@endsection