@extends('/template-dasar/templateUtama')


@section('konten')
    <main>


        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images\slide\foto_home.jpg"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>be a Kind Heart</h1>

                                        <p>"Tetaplah berbuat baik, karena kita tidak tau kebaikan mana yang membawa kita jannah-Nya"</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images\slide\1.png"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>****</h1>

                                        <p>You can support us to grow more</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images\slide\2.png"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Humanity</h1>

                                        <p>Kebaikan dengan sesama</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Our Partners</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="https://www.theglobalfund.org/" class="d-block">
                                <img src="images/icons/logo_GLOBALFUND.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>Global Fund</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="https://tbckomunitas.id/" class="d-block">
                                <img src="images/icons/logo_STPI.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>TBC Komunitas</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="" class="d-block">
                                <img src="images/icons/logo_msikota.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>Mentari Sehat Indonesia Kota Semarang</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="https://tbindonesia.or.id/seputar-toss-tbc/" class="d-block">
                                <img src="images/icons/logo_TOSSTB.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>TOSS TBC</strong></p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="images\foto_profil2.png"
                            class="custom-text-box-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">Tentang Kami</h2>
                            <h5 class="mb-3">SSR MSi Kota Semarang</h5>
                            <p class="mb-0">Visi: Menjadi pusat kesehatan terpercaya yang memberikan layanan berkualitas dan komprehensif bagi masyarakat Kota Semarang. </p>
                            <p> Misi: </p>
                            <p>- Memberikan pelayanan medis terbaik dengan dukungan teknologi modern.</p>
                            <p>- Mengutamakan kenyamanan pasien melalui lingkungan yang nyaman dan ramah.</p>
                            <p>- Mendorong kesadaran akan pentingnya gaya hidup sehat dalam masyarakat.</p>
                            <p>- Membangun hubungan saling percaya antara pasien, keluarga, dan tim medis.</p>
                            <p>- Berkontribusi dalam meningkatkan kualitas kesehatan masyarakat Kota Semarang.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Our Mission</h5>

                                    <p>Pelayanan Utama dari Kami :</p>

                                    <ul class="custom-list mt-2">
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Pemeriksaan Medis Rutin
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Konsultasi dengan Tim Medis Profesional
                                        </li>
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Fasilitas Diagnostik Terkini
                                        </li>
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Pengobatan dan Terapi
                                        </li>
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Pendidikan Kesehatan dan Promosi Gaya Hidup Sehat
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="209"
                                                data-speed="100"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">Kasus TBC Di Kota Semarang</span>
                                    </div>

                                    <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="120"
                                                data-speed="100"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="about-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="images/bu_soliha.png"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Solehati, S.E.</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">Kepala Staff Program SSR MSI Kota Semarang</p>

                            <p>Seorang Kepala Staff Program di Mentari Sehat Indonesia Kota Semarang meliputi perencanaan, koordinasi, pengelolaan anggaran, pemantauan program, dan komunikasi dengan pihak eksternal untuk program kesehatan yang berkualitas dan berkelanjutan.</p>

                            <p></p>

                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="cta-section section-padding section-bg">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-12 ms-auto">
                        <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
                    </div>

                    <div class="col-lg-5 col-12">
                        <a href="#" class="me-4">Make a donation</a>

                        <a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Our Causes</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/group-african-kids-paying-attention-class.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Children Education</h5>

                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Raised:</strong>
                                            $18,500
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Goal:</strong>
                                            $32,000
                                        </p>
                                    </div>
                                </div>

                                <a href="donate.html" class="custom-btn btn">Donate now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/poor-child-landfill-looks-forward-with-hope.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Poverty Development</h5>

                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus
                                        tempor</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Raised:</strong>
                                            $27,600
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Goal:</strong>
                                            $60,000
                                        </p>
                                    </div>
                                </div>

                                <a href="donate.html" class="custom-btn btn">Donate now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="images/causes/african-woman-pouring-water-recipient-outdoors.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Supply drinking water</h5>

                                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                    </p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-100" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Raised:</strong>
                                            $84,600
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Goal:</strong>
                                            $100,000
                                        </p>
                                    </div>
                                </div>

                                <a href="donate.html" class="custom-btn btn">Donate now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="volunteer-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-4">Volunteer</h2>

                        <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                            <h3 class="mb-4">Become a volunteer today</h3>

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="volunteer-name" id="volunteer-name" class="form-control"
                                        placeholder="Jack Doe" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="volunteer-email" id="volunteer-email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com"
                                        required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="volunteer-subject" id="volunteer-subject"
                                        class="form-control" placeholder="Subject" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="input-group input-group-file">
                                        <input type="file" class="form-control" id="inputGroupFile02">

                                        <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                        <i class="bi-cloud-arrow-up ms-auto"></i>
                                    </div>
                                </div>
                            </div>

                            <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message"
                                placeholder="Comment (Optional)"></textarea>

                            <button type="submit" class="form-control">Submit</button>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12">
                        <img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg"
                            class="volunteer-image img-fluid" alt="">

                        <div class="custom-block-body text-center">
                            <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                            <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm
                                tokito Professional charity theme based</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="news-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mb-5">
                        <h2>Latest News</h2>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="images/news/medium-shot-volunteers-with-clothing-donations.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>

                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        Lifestyle,
                                    </a>

                                    <a href="#" class="category-block-link">
                                        Clothing Donation
                                    </a>
                                </div>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 12, 2036
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            32 Comments
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to
                                            urban area</a></h4>
                                </div>

                                <div class="news-block-body">
                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito
                                        Professional charity theme based on Bootstrap</p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block mt-3">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="images/news/medium-shot-people-collecting-foodstuff.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>

                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        Food,
                                    </a>

                                    <a href="#" class="category-block-link">
                                        Donation,
                                    </a>

                                    <a href="#" class="category-block-link">
                                        Caring
                                    </a>
                                </div>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 20, 2036
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            35 Comments
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link">Food donation area</a>
                                    </h4>
                                </div>

                                <div class="news-block-body">
                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus
                                        elementum, tempor risus vel, condimentum orci</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto">
                        <form class="custom-form search-form" action="#" method="post" role="form">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>

                        <h5 class="mt-5 mb-3">Recent news</h5>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="images/news/africa-humanitarian-aid-doctor.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Food donation area</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 16, 2036
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="images/news/close-up-happy-people-working-together.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Volunteering Clean</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 24, 2036
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="category-block d-flex flex-column">
                            <h5 class="mb-3">Categories</h5>

                            <a href="#" class="category-block-link">
                                Drinking water
                                <span class="badge">20</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Food Donation
                                <span class="badge">30</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Children Education
                                <span class="badge">10</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Poverty Development
                                <span class="badge">15</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Clothing Donation
                                <span class="badge">20</span>
                            </a>
                        </div>

                        <div class="tags-block">
                            <h5 class="mb-3">Tags</h5>

                            <a href="#" class="tags-block-link">
                                Donation
                            </a>

                            <a href="#" class="tags-block-link">
                                Clothing
                            </a>

                            <a href="#" class="tags-block-link">
                                Food
                            </a>

                            <a href="#" class="tags-block-link">
                                Children
                            </a>

                            <a href="#" class="tags-block-link">
                                Education
                            </a>

                            <a href="#" class="tags-block-link">
                                Poverty
                            </a>

                            <a href="#" class="tags-block-link">
                                Clean Water
                            </a>
                        </div>

                        <form class="custom-form subscribe-form" action="#" method="post" role="form">
                            <h5 class="mb-4">Newsletter Form</h5>

                            <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="Email Address" required>

                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control">Subscribe</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <section class="testimonial-section section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="mb-lg-3">*****</h2>

                        <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Segeralah Shalat agar hatimu tenang, Istighfarlah agar kecewamu hilang. Dan Berdoalah agar bahagiamu segera datang</h4>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Tawakkal, dan langkahkanlah dengan penuh keyakinan. Allah tidak akan menguji hamba-Nya melampaui batas kemampuan yang Dia berikan.</h4>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Ingatlah, setiap cobaan yang datang adalah peluang untuk mendekatkan diri kepada Allah. Dia adalah tempat bersandar yang tak pernah mengkhianati.</h4>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Keikhlasan adalah kunci utama dalam segala amal. Jangan biarkan niatmu tercemar oleh pujian atau penghargaan manusia, karena hanya Allah-lah yang sejatinya mengenal hatimu.</h4>
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                    <!--<img src="#"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar"> -->
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                        <!--<img src="#"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">-->
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                      <!--  <img src="#"
                                           class="img-fluid rounded-circle avatar-image" alt="avatar"> -->
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                       <!-- <img src="#"
                                           class="img-fluid rounded-circle avatar-image" alt="avatar"> -->
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

<!--  Mulai Section -->

        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">

                            <div class="contact-info">
                                <h5 class="mb-3">Contact Infomation</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    Jl. Kp. Pentul I No.6, Tinjomoyo, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50262
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>

                                    <a href="http://wa.me/+62858794753733">
                                        0858-7947-5373
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto: ssrmsikotasemarang@gmail.com">
                                        ssrmsikotasemarang@gmail.com
                                    </a>
                                </p>

                                <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>Contact form</h2>

                            <p class="mb-4">
                                <h3>Kirim email konsultasi ke kami: <h3> </p>
                            <p><a href="https://ayosehat.kemkes.go.id/topik-penyakit/infeksi-pernapasan--tb/tuberkulosis#:~:text=Tuberkulosis%2C%20sering%20disingkat%20TB%20atau,kelenjar%20getah%20bening%2C%20dan%20jantung."> Atau klik disini untuk informasi lengkap tentang TBC</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="first-name" id="first-name" class="form-control"
                                        placeholder="Nama Depan" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="last-name" id="last-name" class="form-control"
                                        placeholder="Nama Belakang" required>
                                </div>
                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                placeholder="email Anda" required>

                            <textarea name="message" rows="5" class="form-control" id="message"
                                placeholder="Tulis keluhan Anda disini"></textarea>

                            <button type="submit" class="form-control">Kirim</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

@endsection
