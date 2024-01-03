@extends('Front.master')
@section('contents')
<!-- Gallery -->
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!--<h2>Photo Gallery</h2>-->
        </div>
        @foreach ($Products as $product_image)
        <div class="row portfolio-container" >

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="data:image/jpeg;base64,{{ base64_encode($product_image->product_image) }}"alt="Image" height="250" weidth="150">
              <div class="portfolio-info">
                <h4></h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="data:image/jpeg;base64,{{ base64_encode($product_image->product_image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="" height="50" weidth="50"><i class="bx bx-plus"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>
<!-- Gallery -->
@endsection