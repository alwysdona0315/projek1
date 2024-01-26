<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>FORMULIR PENDAFTARAN</title>

    <!-- CSS untuk animasi lucu -->
    <style>
        .funny-animation {
            animation: bounce 1s infinite alternate;
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-10px);
            }
        }

        /* Kustomisasi ukuran formulir */
        .custom-form {
            max-width: 600px; /* Ganti nilai ini sesuai kebutuhan */
            margin: auto;
        }
    </style>
</head>

<body style="background-color: #39cbf0;">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow custom-form funny-animation">
                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="mb-0">Form Mahasiswa</h3>
                    </div>

                    <div class="card-body" style="background-color: #4aa9b9; border-radius: 8px;">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>