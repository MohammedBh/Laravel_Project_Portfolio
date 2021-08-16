<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>{{ $portfolio[0]->titrePortfolio }}</h2>
            <p>{{ $portfolio[0]->p }}</p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">{{ $portfolio[0]->li1 }}</li>
                    <li data-filter=".filter-app">{{ $portfolio[0]->li2 }}</li>
                    <li data-filter=".filter-card">{{ $portfolio[0]->li3 }}</li>
                    <li data-filter=".filter-web">{{ $portfolio[0]->li4 }}</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

            @foreach ($portfolioDyn as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('img/portfolio/'.$item->img_portfolio)) }}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{ asset('img/portfolio/'.$item->img_portfolio) }}" data-gall="portfolioGallery"
                                class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Portfolio Section -->
