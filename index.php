<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <nav>
        <div class="nav-name">
            <p>Hizkia Polii</p>
        </div>
        <ul class="nav-points">
            <li class="points"><a href="#Home">Home</a></li>
            <li class="points"><a href="#Gallery">Gallery</a></li>
            <li class="points"><a href="#Blog">Blog</a></li>
            <li class="points"><a href="#Contact">Contact</a></li>
        </ul>
        <select
            class="button"
            id="modeSelector"
            onchange="changeBackground(this.value)"
        >
            <option value="dark">Dark mode</option>
            <option value="light">Light mode</option>
        </select>
        <select class="button" onchange="changeLanguage(this.value)">
            <option value="idn">Indonesia</option>
            <option value="en">English</option>
        </select>
    </nav>

    <header class="container">
        <div class="pengenalan" id="Home">
            <span class="blur"></span>
            <span class="blur"></span>
            <h4 id="pengenalan">Pengenalan</h4>
            <h1 id="nama">Halo, saya Hizkia Polii</h1>
            <p id="deskripsi1">
                seorang mahasiswa yang tengah menempuh pendidikan di Universitas Sam
                Ratulangi, tepatnya di Fakultas Teknik, Jurusan Elektro dengan program
                studi Informatika. Saya bersemangat dalam menggali pengetahuan dan
                keterampilan di bidang teknologi informasi serta berharap dapat
                memberikan kontribusi yang berarti dalam perkembangan dunia teknologi
                di masa depan.
            </p>
            <br />
            <p id="deskripsi2">
                Ini adalah personal homepage pertama saya, dan saya masih belajar cara
                membuat personal homepage yang menarik dan terstruktur. Saya sedang
                menggali pengetahuan tentang desain web dan mencoba berbagai teknik
                untuk membuat halaman ini lebih menarik bagi pengunjung. Dalam proses
                pembelajaran ini, saya juga berusaha untuk menjaga agar halaman
                tersebut terstruktur dengan baik, sehingga informasi yang saya bagikan
                dapat tersampaikan dengan jelas dan mudah dipahami.
            </p>
        </div>
        <div class="foto">
            <img src="Picture/Profil.jpg" alt="Foto diri" />
        </div>
    </header>

    <section class="galeri">
        <h2 class="header" id="Gallery">Galeri</h2>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 7</div>
                <img src="Picture/Myself.jpg" style="width: 100%" />
                <div class="text">MySelf</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 7</div>
                <img src="Picture/Kocheng.jpg" style="width: 100%" />
                <div class="text">My pet</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 7</div>
                <img src="Picture/Kocheng2.jpg" style="width: 100%" />
                <div class="text">My pet too</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 7</div>
                <img src="Picture/huhuhu.jpg" style="width: 100%" />
                <div class="text">Best football club</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 7</div>
                <img src="Picture/Hujan.jpg" style="width: 100%" />
                <div class="text">Rain</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 7</div>
                <img src="Picture/Senja.jpg" style="width: 100%" />
                <div class="text">Sunset</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 7</div>
                <img src="Picture/Pohon.jpg" style="width: 100%" />
                <div class="text">Woods</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <br />

        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
        </div>
    </section>

    <section class="container">
        <h2 class="header" id="Blog">Blog</h2>
        <span class="blur"></span>
        <span class="blur"></span>
        <div class="blog1">
            <div class="gambar">
                <div class="artikel">
                    <h4 id="artikel1">
                        Liga Spanyol: Barcelona Tak Akan Iri jika Kylian Mbappe Gabung
                        Real Madrid
                    </h4>
                    <img src="Picture/Mbappe.jpg" />
                    <p>
                        <a
                            href="https://www.bola.com/spanyol/read/5557074/liga-spanyol-barcelona-tak-akan-iri-jika-kylian-mbappe-gabung-real-madrid"
                            id="link"
                        >Baca selengkapnya disini</a>
                    </p>
                </div>
            </div>
            <div class="gambar">
                <div class="artikel">
                    <h4 id="artikel2">
                        Sopulut, Olahan dari Alam yang Jadi Kuliner Khas Sulawesi Utara
                    </h4>
                    <img src="Picture/Sopulut.jpg" />
                    <p>
                        <a
                            href="https://www.liputan6.com/regional/read/5209135/sopulut-olahan-dari-alam-yang-jadi-kuliner-khas-sulawesi-utara"
                            id="link2"
                        >Baca selengkapnya disini</a>
                    </p>
                </div>
            </div>
            <div class="gambar">
                <div class="artikel">
                    <h4 id="artikel3">
                        GTA 6 Akhirnya Muncul di Situs Rockstar Games, Siap Rilis 2025
                    </h4>
                    <img src="Picture/GTA.jpg" />
                    <p>
                        <a
                            href="https://www.liputan6.com/tekno/read/5549266/gta-6-akhirnya-muncul-di-situs-rockstar-games-siap-rilis-2025"
                            id="link3"
                        >Baca selengkapnya disini</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="blog2">
            <div class="gambar">
                <div class="artikel">
                    <h4 id="artikel4">
                        Fakta-fakta Apple Vision Pro, Simak Kecanggihannya
                    </h4>
                    <img src="Picture/Apple.jpg" />
                    <p>
                        <a
                            href="https://www.cnnindonesia.com/teknologi/20240205191559-185-1058994/fakta-fakta-apple-vision-pro-simak-kecanggihannya"
                            id="link4"
                        >Baca selengkapnya disini</a>
                    </p>
                </div>
            </div>
            <div class="gambar">
                <div class="artikel">
                    <h4 id="artikel5">
                        Apa itu Cryptocurrency dan bagaimana cara kerjanya?
                    </h4>
                    <img src="Picture/crypto.jpg" />
                    <p>
                        <a
                            href="https://www.kaspersky.com/resource-center/definitions/what-is-cryptocurrency"
                            id="link5"
                        >Baca selengkapnya disini</a>
                    </p>
                </div>
            </div>
            <div class="gambar">
                <div class="artikel">
                    <h4 id="artikel6">Esports Resmi jadi Olahraga Prestasi</h4>
                    <img src="Picture/esport.jpg" />
                    <p>
                        <a
                            href="https://indonesiabaik.id/infografis/esports-resmi-jadi-olahraga-prestasi"
                            id="link6"
                        >Baca selengkapnya disini</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Review -->
    <section class="container" id="Review">
        <h2 class="header">Review</h2>
        <form id="reviewForm" action="submit_review.php" method="post">
            <label for="name">Name:</label><br />
            <input type="text" id="name" name="name" required /><br />
            <label for="email">Email:</label><br />
            <input type="email" id="email" name="email" required /><br />
            <label for="review">Review:</label><br />
            <textarea id="review" name="review" rows="4" required></textarea><br />
            <input type="submit" value="Submit" />
        </form>
        <div id="reviewList">
            <h3>Previous Reviews:</h3>
            <?php
            // Membaca dan menampilkan review dari file
            if (file_exists('reviews.txt')) {
                $reviews = file('reviews.txt', FILE_IGNORE_NEW_LINES);
                foreach ($reviews as $review) {
                    echo '<p>' . htmlspecialchars($review) . '</p><hr />';
                }
            }
            ?>
        </div>
    </section>

    <footer class="container" id="Contact">
        <div class="kolom">
            <div class="nama">
                <h3>Hizkia Polii</h3>
            </div>
        </div>
        <div class="kolom">
            <h4 id="kontak">Kontak saya</h4>
            <p>+62895336109477</p>
        </div>
        <div class="kolom">
            <h4>Email</h4>
            <p>@hizkiapolii026@student.unsrat.ac.id</p>
        </div>
        <div class="kolom">
            <h4 id="sosmed">Media sosial</h4>
            <span class="blur"></span>
            <span class="blur"></span>
            <a href="https://www.facebook.com/hizkia.polii.1"
                ><img src="Picture/facebook-circle-fill.png" />@Hizkia N Polii</a
            ><br />
            <a href="https://www.instagram.com/hizkiapolii__/"
                ><img src="Picture/instagram-fill.png" />@hizkiapolii__</a
            ><br />
            <a href="https://twitter.com/hizkiapolii__"
                ><img src="Picture/twitter-x-line.png" />@hizkiapolii__</a
            ><br />
            <a href="https://github.com/HizkiaPolii"
                ><img src="Picture/github-fill.png" />@HizkiaPolii</a
            ><br />
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
