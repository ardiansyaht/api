<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <!-- Font dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- SweetAlert2 untuk notifikasi yang cantik -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

</head>

<body>

    <div class="register-card">
        <h2>Create Account</h2>

        <form id="registerForm" method="POST" action="{{ route('register') }}" novalidate>
            @csrf
            <div class="input-group">
                <input type="text" id="nama" name="nama" required placeholder=" ">
                <label for="nama">Full Name</label>
            </div>
            <div class="input-group">
                <input type="email" id="email" name="email" required placeholder=" ">
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required placeholder=" ">
                <label for="password">Password</label>
            </div>
            <div class="input-group">
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder=" ">
                <label for="password_confirmation">Confirm Password</label>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>

        <p class="bottom-text">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#registerForm').on('submit', function(e) {
                e.preventDefault(); // Menghentikan submit form

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Jika sukses, tampilkan notifikasi SweetAlert
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            timer: 2000, // Notifikasi hilang setelah 2 detik
                            showConfirmButton: false
                        }).then(() => {
                            // Setelah notifikasi, arahkan ke halaman login
                            window.location.href = response.redirect_to;
                        });
                    },
                    error: function(xhr) {
                        // Jika gagal, tampilkan error validasi dengan SweetAlert
                        var errors = xhr.responseJSON.errors;
                        var errorMessages = '';
                        $.each(errors, function(key, value) {
                            // Ubah \n menjadi <br> untuk tampilan list di HTML
                            errorMessages += value[0] + '<br>';
                        });

                        Swal.fire({
                            title: 'Oops...',
                            // Gunakan html property untuk merender tag <br>
                            html: errorMessages,
                            icon: 'error'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>