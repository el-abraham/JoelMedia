@extends('layout/main')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Lorem ipsum dolor sit amet, consetetur sadipscing</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
    <a href="" class="btn btn-danger tombol">DAFTAR  SEKARANG</a>
  </div>
</div>
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="col-lg">
          <div class="gambar">
            <img src="{{ asset('img/image/sec1.jpg') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>
        <div class="col-lg">
          <div class="sec">
            <p class="judul">Lorem ipsum dolor sit amet, consetetur sadipscing</p>
            <p class="subs">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing</p>
            <a href="" class="tombol btn btn-danger">LIHAT LEBIH</a>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="serve">
        <h4 class="mb-5">we provide awesome services</h4>
        <div class="serve-item">
          <div class="row wrap-row">
            <div class="col-lg">
              <div class="img-list">
                <img src="{{ asset('img/svg/edition.svg') }}" alt="" width="100px">
              </div>
              <div class="subs-list">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                  eirmod </p>
              </div>
            </div>
            
            <div class="col-lg">
              <div class="img-list">
                <img src="{{ asset('img/svg/edition.svg') }}" alt="" width="100px">
              </div>
              <div class="subs-list">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                  eirmod </p>
              </div>
            </div>
            <div class="col-lg">
              <div class="img-list">
                <img src="{{ asset('img/svg/edition.svg') }}" alt="" width="100px">
              </div>
              <div class="subs-list">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                  eirmod </p>
              </div>
            </div>
          </div>
          <div class="row wrap-row">
            <div class="col-lg">
              <div class="img-list">
                <img src="{{ asset('img/svg/edition.svg') }}" alt="" width="100px">
              </div>
              <div class="subs-list">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                  eirmod </p>
              </div>
            </div>
            
            <div class="col-lg">
              <div class="img-list">
                <img src="{{ asset('img/svg/edition.svg') }}" alt="" width="100px">
              </div>
              <div class="subs-list">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                  eirmod </p>
              </div>
            </div>
            <div class="col-lg">
              <div class="img-list">
                <img src="{{ asset('img/svg/edition.svg') }}" alt="" width="100px">
              </div>
              <div class="subs-list">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                  eirmod </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="our-client">
        <h4 class="mb-5">Our Clients</h4>
        <div class="client-item">
          <div class="marquee">
            <ul class="marquee-content">
              <li><img class="client-img" src="{{ asset('img/image/cl1.jpg') }}" alt=""></li>
              <li><img class="client-img" src="{{ asset('img/image/cl2.jpg') }}" alt=""></li>
              <li><img class="client-img" src="{{ asset('img/image/cl3.png') }}" alt=""></li>
              <li><img class="client-img" src="{{ asset('img/image/cl4.png') }}" alt=""></li>
              <li><img class="client-img" src="{{ asset('img/image/cl5.jpg') }}" alt=""></li>
              
            </ul>
          </div>
        </div>

        
      </div>

      
      
    </div>
  </div>
  <div class="cta-sec">
    <div class="cta-wrap">
      <h4 class="display-5">Lorem ipsum dolor sit amet, consetetur sadipscing</h4>
      <p class="cta-subs">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
      <a href="" class="btn btn-danger tombol btn-cta">DAFTAR SEKARANG</a>
    </div>
  </div>

  <div class="container">
    <div class="case-sec">
      <h4 class="mb-5" style="text-align: center">Study Case</h4>
      <div class="row">
        <div class="col-lg">
          <div class="card">
            <img src="{{ asset('img/image/card1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-danger btn-sm">Read more.</a>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="card">
            <img src="{{ asset('img/image/card1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-danger btn-sm">Read more.</a>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="card">
            <img src="{{ asset('img/image/card1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-danger btn-sm">Read more.</a>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="card">
            <img src="{{ asset('img/image/card1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-danger btn-sm">Read more.</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="testi-sec">
      <h4 class="mb-5" style="text-align: center">Testimonial</h4>
      <div class="testi-wrap">
        <div class="testi-box">
          <span class="quotes">
            <img src="{{ asset('img/svg/quotes.svg') }}" alt="">
          </span>
          <p class="testi-subs">Lorem ipsum dolor sit amet, 
            consetetur sadipscing elitr, 
            sed diam nonumy. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dignissimos aspernatur quaerat eaque voluptas minima id facilis aut omnis facere magni error esse enim, dolores, qui accusamus.</p>
        </div>
      </div>
      <div class="testi-profile">
        <p class="profile-name">Mark Levi</p>
        <p class="profile-company">PT. Lorem Indonesia</p>
      </div>
    </div>
  </div>
@endsection