<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Notas Internas</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    <!-- Barra de navegaciónS -->
    <nav class="navbar navbar-dark bg-primary shadow">
        <div class="container">

            <a class="navbar-brand fw-bold" href="/notas">
                📝 Notas Internass
            </a>

            <div>
                <a href="/notas" class="btn btn-light me-2">
                    Ver notaas
                </a>

                <a href="/notas/nueva" class="btn btn-outline-light">
                    Nuevaa  nota
                </a>
            </div>

        </div>
    </nav>


    <!-- Contenido de cada página -->
    <main class="container py-5">

        @yield('contenido')

    </main>


    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>