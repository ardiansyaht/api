<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard LMS</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="logo">Adhivasindo</div>
            <nav>
                <ul>
                    <li><a href="#" class="active"><i class="fa-solid fa-border-all"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa-solid fa-book-open"></i> Modul</a></li>
                    <li><a href="#"><i class="fa-solid fa-user-group"></i> Peserta</a></li>
                    <li><a href="#"><i class="fa-solid fa-comments"></i> Group Chat</a></li>
                    <li><a href="#"><i class="fa-solid fa-chalkboard-user"></i> Pemateri</a></li>
                </ul>
            </nav>
            <div class="profile-section">
                <h3>PROFILE</h3>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
                    <li><a href="#"><i class="fa-solid fa-calendar-days"></i> Kalender</a></li>

                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i> Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="main-content">
            <header class="main-header">
                <div class="header-left">
                    <h2>LEARNING MANAGEMENT SYSTEM</h2>
                </div>
                <div class="header-right">
                    <div class="search-bar">
                        <i class="fa-solid fa-search"></i>
                        <input type="text" placeholder="Search class...">
                    </div>
                    <div class="header-icons">
                        <a href="#" class="icon-button"><i class="fa-solid fa-bell"></i></a>
                        <a href="#" class="icon-button"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
            </header>
            <section class="hero-card">
                <div class="hero-card-content">
                    <span class="hero-card-category">PEMROGRAMAN</span>
                    <h2>Pemrograman Frontend Modern dengan React dan Angular</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="details">
                        <span><i class="fa-solid fa-user"></i> Pemateri By Josep</span>
                        <span><i class="fa-solid fa-calendar-alt"></i> 14-06-2025</span>
                    </div>
                </div>

                <a href="#" class="btn-mulai">Mulai Learning</a>
            </section>

            <section class="modul-kompetensi">
                <h3 class="section-title">MODUL KOMPETENSI</h3>
                <div class="kompetensi-grid">
                    <article class="kompetensi-card">
                        <div class="card-header bg-pemrograman">PEMROGRAMAN</div>
                        <h4>Materi Kompetensi</h4>
                        <ul>
                            <li>Pemrograman Frontend Modern</li>
                            <li>Pengembangan API Berstandar Industri</li>
                            <li>Meningkatkan Clean Code dan Desain Pattern</li>
                        </ul>
                    </article>
                    <article class="kompetensi-card">
                        <div class="card-header bg-creative">CREATIVE MARKETING</div>
                        <h4>Materi Kompetensi</h4>
                        <ul>
                            <li>Storytelling dalam Pemasaran Mengubah Data</li>
                            <li>Pemasaran Viral: Bagaimana Menciptakan Konten</li>
                            <li>Memaksimalkan User-Generated Content</li>
                        </ul>
                    </article>
                    <article class="kompetensi-card">
                        <div class="card-header bg-sdm">MANAGEMENT SDM</div>
                        <h4>Materi Kompetensi</h4>
                        <ul>
                            <li>Storytelling dalam Pemasaran Mengubah Data</li>
                            <li>Pemasaran Viral: Bagaimana Menciptakan Konten</li>
                            <li>Memaksimalkan User-Generated Content</li>
                        </ul>
                    </article>
                </div>
            </section>

            <section class="nilai-peserta">
                <h3 class="section-title">NILAI PESERTA</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Modul</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Parja faiza</td>
                            <td>PEMROGRAMAN</td>
                            <td>L1</td>
                            <td><strong>1,234 Point</strong></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Juliana</td>
                            <td>CREATIVE MARKETING</td>
                            <td>L2</td>
                            <td><strong>1,198 Point</strong></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ahmad</td>
                            <td>PEMROGRAMAN</td>
                            <td>L1</td>
                            <td><strong>1,150 Point</strong></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>

        <aside class="right-sidebar">
            <header class="profile-header">
                <div class="profile-main-area">
                    <div class="avatar-container">
                        <label for="profile_photo_input" style="cursor: pointer;">
                            <img id="profileImagePreview" src="https://i.pravatar.cc/150?u={{ $user->email }}" alt="User Avatar">
                        </label>
                        <input type="file" id="profile_photo_input" name="profile_photo" accept="image/*" style="display: none;">
                        <a href="#" class="settings-icon"><i class="fa-solid fa-cog"></i></a>
                    </div>
                </div>
                <div class="welcome-text-block">
                    <h1>SELAMAT DATANG, {{ $user->nama }}</h1>
                    <p>Di LMS By Adhivasindo</p>
                </div>
            </header>
            <section class="calendar">
                <div class="calendar-header">
                    <button class="calendar-nav" id="prev-week-btn"><i class="fa-solid fa-chevron-left"></i></button>
                    <span id="calendar-month-year"></span>
                    <button class="calendar-nav" id="next-week-btn"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
                <div class="calendar-grid" id="calendar-body">
                </div>
            </section>

            <section class="jadwal">
                <h3 class="section-title">JADWAL PEMATERI</h3>
                <div class="jadwal-list">
                    <div class="jadwal-item">
                        <div class="time-block bg-blue">09:30 - 11:00</div>
                        <div class="info">
                            <h5>Storytelling dalam Pemasaran</h5>
                            <p>With mr.jam</p>
                        </div>
                    </div>
                    <div class="jadwal-item">
                        <div class="time-block bg-red">12:00 - 14:00</div>
                        <div class="info">
                            <h5>Pemrograman Frontend Modern</h5>
                            <p>With mr.firman</p>
                        </div>
                    </div>
                    <div class="jadwal-item">
                        <div class="time-block bg-yellow">14:30 - 15:30</div>
                        <div class="info">
                            <h5>Pengembangan API</h5>
                            <p>With mr.parja</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ilustrasi">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=2070" alt="Working on Laptop">
            </section>
        </aside>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const monthYearElement = document.getElementById('calendar-month-year');
            const calendarBody = document.getElementById('calendar-body');
            const prevWeekBtn = document.getElementById('prev-week-btn');
            const nextWeekBtn = document.getElementById('next-week-btn');

            let today = new Date(); // Kita mulai dari hari ini

            function renderWeek() {
                // Mengosongkan isi kalender
                calendarBody.innerHTML = '';

                // Menampilkan rentang tanggal atau bulan saat ini
                monthYearElement.textContent = new Intl.DateTimeFormat('id-ID', {
                    month: 'long',
                    year: 'numeric'
                }).format(today);

                // Menambahkan nama-nama hari
                const days = ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'];
                days.forEach(day => {
                    calendarBody.innerHTML += `<div class="day-name">${day}</div>`;
                });

                // Menghitung hari pertama dalam minggu ini (Minggu)
                let firstDayOfWeek = new Date(today);
                firstDayOfWeek.setDate(today.getDate() - today.getDay());

                // Menambahkan 7 kotak tanggal untuk minggu ini
                for (let i = 0; i < 7; i++) {
                    let day = new Date(firstDayOfWeek);
                    day.setDate(firstDayOfWeek.getDate() + i);

                    let classList = 'date-box';
                    // Tandai hari ini
                    if (day.toDateString() === new Date().toDateString()) {
                        classList += ' active';
                    }

                    calendarBody.innerHTML += `<div class="${classList}"><span class="date-num">${day.getDate()}</span></div>`;
                }
            }

            prevWeekBtn.addEventListener('click', () => {
                today.setDate(today.getDate() - 7); // Mundur 7 hari
                renderWeek();
            });

            nextWeekBtn.addEventListener('click', () => {
                today.setDate(today.getDate() + 7); // Maju 7 hari
                renderWeek();
            });

            renderWeek(); // Render minggu ini saat halaman dimuat
        });
    </script>
</body>

</html>