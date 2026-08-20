@extends('layouts.base')

@section('contenido')

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-6">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">

                    <h4 class="mb-0">
                        📝 Registrar Nota Interna
                    </h4>

                </div>


                <div class="card-body">

                    <p class="text-muted">
                        Complete los siguientes datos para registrar
                        una nueva nota interna.
                    </p>


                    <!-- Errores -->

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <strong>
                                Se encontraron los siguientes errores:
                            </strong>

                            <ul class="mb-0 mt-2">

                                @foreach ($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <!-- Formulario -->

                    <form action="/notas/nueva" method="POST">

                        @csrf

                        <!-- Código / Número -->

                        <div class="mb-3">

                            <label
                                for="codigo"
                                class="form-label fw-bold"
                            >
                                Nota Interna N.º
                            </label>

                            <input
                                type="text"
                                id="codigo"
                                name="codigo"
                                class="form-control"
                                placeholder="Ej. NI-2026-001"
                                value="{{ old('codigo') }}"
                            >

                        </div>


                        <!-- Stock examen -->
                        <div class="mb-4">
                            <label
                                for="stock"
                                class="form-label fw-bold"
                            >
                                Stock disponible
                            </label>

                            <input
                                type="number"
                                id="stock"
                                name="stock"
                                class="form-control"
                                placeholder="Ej. 10"
                                value="{{ old('stock', 0) }}"
                                min="0"
                            >

                            <div class="form-text">
                                Indique la cantidad disponible.
                            </div>
                        </div>


                        <!-- Referencia -->

                        <div class="mb-3">

                            <label
                                for="referencia"
                                class="form-label fw-bold"
                            >
                                Ref.
                            </label>

                            <input
                                type="text"
                                id="referencia"
                                name="referencia"
                                class="form-control"
                                placeholder="Ej. Solicitud de estudiante"
                                value="{{ old('referencia') }}"
                            >

                        </div>


                        <!-- Caso -->

                        <div class="mb-3">

                            <label
                                for="caso"
                                class="form-label fw-bold"
                            >
                                Caso
                            </label>

                            <select
                                id="caso"
                                name="caso"
                                class="form-select"
                            >

                                <option value="">
                                    Seleccione un caso
                                </option>

                                <option
                                    value="Revalidación"
                                    {{ old('caso') == 'Revalidación' ? 'selected' : '' }}
                                >
                                    Revalidación
                                </option>

                                <option
                                    value="Rezagado"
                                    {{ old('caso') == 'Rezagado' ? 'selected' : '' }}
                                >
                                    Rezagado
                                </option>

                                <option
                                    value="Módulo aprobado"
                                    {{ old('caso') == 'Módulo aprobado' ? 'selected' : '' }}
                                >
                                    Módulo aprobado
                                </option>

                            </select>

                        </div>


                        <!-- Título -->

                        <div class="mb-3">

                            <label
                                for="titulo"
                                class="form-label fw-bold"
                            >
                                Título de la nota
                            </label>

                            <input
                                type="text"
                                id="titulo"
                                name="titulo"
                                class="form-control"
                                placeholder="Ej. Reunión administrativa"
                                value="{{ old('titulo') }}"
                            >

                        </div>


                        <!-- Prioridad -->

                        <div class="mb-4">

                            <label
                                for="prioridad"
                                class="form-label fw-bold"
                            >
                                Prioridad
                            </label>

                            <input
                                type="number"
                                id="prioridad"
                                name="prioridad"
                                class="form-control"
                                placeholder="Ej. 1"
                                value="{{ old('prioridad') }}"
                            >

                            <div class="form-text">
                                Introduzca un número entero.
                            </div>

                        </div>


                        <!-- Botones -->

                        <div class="d-flex justify-content-between">

                            <a
                                href="/notas"
                                class="btn btn-secondary"
                            >
                                ← Volver
                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Guardar nota
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection