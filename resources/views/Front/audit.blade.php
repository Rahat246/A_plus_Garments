@extends('Front.master')
@section('contents')
<!-- Gallery -->
 <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!--<h2>Photo Gallery</h2>-->
        </div>
        @foreach ($audits as $image)
        <div class="row portfolio-container" >

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="data:image/jpeg;base64,{{ base64_encode($image->image) }}" alt="Image" height="50" width="50">
              <div class="portfolio-info">
                <h4></h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="data:image/jpeg;base64,{{ base64_encode($image->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="" height="50" width="50"><i class="bx bx-plus"></i></a>
                  
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