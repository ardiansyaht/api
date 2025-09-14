// Contoh validasi form (misalnya, memeriksa apakah password dan konfirmasi password sama)
document.addEventListener("DOMContentLoaded", function () {
    const formRegister = document.querySelector("form");
    formRegister.addEventListener("submit", function (e) {
        const password = document.getElementById("password").value;
        const passwordConfirmation = document.getElementById(
            "password_confirmation"
        ).value;

        if (password !== passwordConfirmation) {
            e.preventDefault();
            alert("Password dan Konfirmasi Password tidak cocok!");
        }
    });
});
