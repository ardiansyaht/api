<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>

    </style>
</head>

<body>

    <div class="login-card">
        <h2>Login</h2>

        <div id="error-messages" style="display: none;"></div>

        <form id="loginForm" method="POST" novalidate>
            @csrf
            <div class="input-group">
                <input type="email" id="email" name="email" required placeholder=" ">
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required placeholder=" ">
                <label for="password">Password</label>
            </div>
            <div class="options-group">
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember" value="1">
                    <label for="remember">Remember Me</label>
                </div>
                <!-- Anda bisa menambahkan link "Lupa Password?" di sini nanti -->
                {{-- <a href="#">Forgot Password?</a> --}}
            </div>
            <button type="submit" class="btn">Login</button>
        </form>

        <p class="bottom-text">
            Don't have an account? <a href="{{ route('register') }}">Register</a>
        </p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(e) {
                e.preventDefault();
                $('#error-messages').hide().html('');

                $.ajax({
                    url: "{{ route('login') }}",
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        // 2. Ganti alert() dengan SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Berhasil!',
                            text: 'Anda akan diarahkan ke dashboard.',
                            showConfirmButton: false, // Menghilangkan tombol OK
                            timer: 2000, // Notifikasi hilang setelah 2 detik
                            timerProgressBar: true,
                        }).then(() => {
                            // Arahkan ke dashboard SETELAH notifikasi selesai
                            window.location.href = "/dashboard";
                        });
                    },
                    error: function(xhr) {
                        // ... (kode error Anda sudah bagus, tidak perlu diubah)
                        var errorHtml = '<ul>';
                        if (xhr.status === 401) {
                            errorHtml += '<li>' + xhr.responseJSON.error + '</li>';
                        } else if (xhr.status === 400) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                errorHtml += '<li>' + value[0] + '</li>';
                            });
                        } else {
                            errorHtml += '<li>Terjadi kesalahan. Silakan coba lagi.</li>';
                        }
                        errorHtml += '</ul>';
                        $('#error-messages').html(errorHtml).show();
                    }
                });
            });
        });
    </script>
</body>

</html>