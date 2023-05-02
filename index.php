<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header>
        <div class="jumbotron">
            <img class="profile-picture" src="img/glenn.jpg" alt="Glenn" />
            <h1>Glenn Steven Santoso</h1>
            <p>Mahasiswa Informatika tahun ke-3</p>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#bangkit">Bangkit 2023</a></li>
                <li><a href="#interests">Interests</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="content">
            <article class="card" id="about">
                <h2>About Me</h2>
                <p>
                    Nama lengkap saya adalah Glenn Steven Santoso. Saya adalah seseorang
                    yang lahir di Surabaya, namun saya tumbuh di Sidoarjo. Saya tidak
                    terlalu memiliki banyak cerita, namun perjalanan hidup saya bisa
                    dikatakan tidak membosankan. Tumbuh besar di Sidoarjo, tempat ini
                    merupakan rumah saya dan tidak ada tempat lain yang bisa
                    menggantikan nikmatnya rumah terlepas dari baik atau kurang baik
                    pengalaman yang ada. Mengenyam pendidikan di Sidoarjo hingga
                    akhirnya sekarang berkuliah di Universitas Kristen Petra, banyak
                    sekali yang terjadi dan membentuk saya seperti sekarang. Untuk
                    pengalaman hidup sepenuhnya, musik dan komputer mengalir di dalam
                    darah saya. Tiada hari tanpa kedua hal tersebut di hidup saya.
                </p>
            </article>
            <article class="card" id="bangkit">
                <h2>Bangkit 2023</h2>
                <p>
                    Program yang langsung dinaungi oleh Google, GoTo, dan Traveloka ini
                    berhasil mencuri pandangan saya dan membuat saya termotivasi untuk
                    mengikuti program ini. Tanpa pikir panjang, begitu saya melihat
                    pendaftaran dibuka, saya langsung bergegas untuk mendaftarkan diri
                    saya untuk mengikuti program ini. Selang beberapa waktu dan
                    mengikuti beberapa rangkaian proses seleksi, saya akhirnya diterima
                    sebagai salah satu peserta Bangkit 2023 dan sekarang saya sedang
                    menjalani keseharian saya sebagai partisipan Bangkit 2023. Sebelum
                    mengikuti Bangkit 2023 ini, saya sempat melihat - lihat tentang
                    Bangkit 2022 dan saya sangat tertarik untuk mengikuti, namun saat
                    itu saya harus menunggu untuk program Bangkit 2023. Bermula dari
                    keisengan mencari magang di Google, bertemulah saya dengan Bangkit
                    dan seketika saya langsung penasaran serta mencari tahu tentang
                    Bangkit dalam sekejap waktu.
                </p>
            </article>
            <article class="card" id="interests">
                <h2>Interests</h2>
                <div class="card-container">
                    <div class="card" id="music_bg" data-shown="false">
                        <p id="music" style="opacity: 1; color: white">Music</p>
                    </div>
                    <div class="card" id="music_content" style="text-align: justify;">
                        <p>
                            Musik adalah belahan hati saya. Sejak SD, saya telah
                            dikenalkan dengan musik dan sekali saya dikenalkan pada momen
                            itu, hingga sekarang saya tidak berhenti untuk mempelajari
                            musik. Musik merupakan sarana yang sangat baik untuk
                            mewujudkan kreativitas. Daya kreasi aransemen sebuah lagu
                            sungguh sangat terlihat perbedaannya satu dengan yang lain
                        </p>
                    </div>
                    <div class="card" id="gaming_bg" data-shown="false">
                        <p id="gaming" style="opacity: 1; color: white">Gaming</p>
                    </div>
                    <div class="card" id="gaming_content" style="text-align: justify;">
                        <p>
                            Gim adalah salah satu hembusan nafas saya. Gim sudah sangat
                            familiar untuk saya sejak saya masih kecil. Semua gim yang
                            legendaris pada masanya semua saya mainkan dan semua hal itu
                            masih berlanjut hingga sekarang saya menginjak kuliah. Jika
                            saya sedih maupun senang, game berada di situ siap untuk
                            menghibur saya
                        </p>
                    </div>
                    <div class="card" id="programming_bg" data-shown="false">
                        <p id="programming" style="opacity: 1; color: white">
                            Programming
                        </p>
                    </div>
                    <div class="card" id="programming_content" style="text-align: justify;">
                        <p>
                            Programming adalah subjek yang sedang saya pelajari hingga
                            sekarang sejak saya memasuki perkuliahan. Pada mulanya, subjek
                            ini terasa cukup sulit, namun setelah saya menemukan polanya
                            sedikit demi sedikit, di situ saya makin mantap dan yakin saat
                            menggeluti bidang programming ini
                        </p>
                    </div>
                </div>
            </article>
        </div>

        <aside>
            <article class="profile">
                <header>
                    <h2>Glenn Steven Santoso</h2>
                </header>
                <img src="img/glenn_2.jpg" alt="Glenn" id="photo_glenn" />
                <section>
                    <h4>Informasi pribadi</h4>
                    <table>
                        <tr>
                            <th>Kewarganegaraan</th>
                            <td>Indonesia</td>
                        </tr>
                        <tr>
                            <th>Tanggal lahir</th>
                            <td>5 Februari 2002</td>
                        </tr>
                        <tr>
                            <th>Tempat lahir</th>
                            <td>Surabaya</td>
                        </tr>
                        <tr>
                            <th>Makanan favorit</th>
                            <td>Soto ayam</td>
                        </tr>
                        <tr>
                            <th>Minuman favorit</th>
                            <td>Air mineral</td>
                        </tr>
                    </table>
                </section>
            </article>
        </aside>
    </main>

    <footer>
        <p>Glenn Steven Santoso &#169; 2023</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>