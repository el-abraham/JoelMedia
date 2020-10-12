<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <!-- Navbar -->
  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="#">Product</a>
          <a class="nav-link" href="#">Services</a>
          <a class="nav-link" href="#">About</a>
          <a class="nav-link" href="#">Study Case</a>
        </div>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </div>
    </div>
  </nav> --}}
  <header>
    <a href="">IMAGE</a>
    <nav>
      <ul class="nav__links">
        <li><a href="">Product</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Study Case</a></li>
      </ul>
    </nav>
    <a href="" class="cta"><button>Login</button></a>
  </header>
  <!-- akhir Navbar -->
  

  @yield('content')


  <!--
     <div class="footer">
       <div class="container">
         <div class="wrap-footer">
           <div class="navigasi f-logo">
            <div class="footer-logo">
              <h4>Logo  </h4>
            </div>
            <div class="footer-address">
              <p>Jl. Wisma Lidah Kulon D No.28, Lidah Kulon, Kec. Lakarsantri, Kota SBY, Jawa Timur 60213</p>
            </div>
            <div class="footer-subs">
              <form class="form-inline">
                <div class="form-group ">
                  <input type="email" class="form-control form-control-sm mr-2" id="email" placeholder="Masukan Email">
                </div>
                <button type="submit" class="btn btn-outline-light btn-sm">Subscribe </button>
              </form>
            </div>
           </div>
           <div class="navigasi f-ctn">
             <div class="nav-itm"><a href="">Contact</a></div>
             <div class="nav-itm"><a href="">Contact</a></div>
             <div class="nav-itm"><a href="">Contact</a></div>
             <div class="nav-itm"><a href="">Term of Service</a></div>
             <div class="nav-itm"><a href="">Privacy Police</a></div>
           </div>
           <div class="navigasi f-ctn">
             <div class="nav-itm"><a href="">Contact</a></div>
             <div class="nav-itm"><a href="">Contact</a></div>
             <div class="nav-itm"><a href="">Contact</a></div>
             <div class="nav-itm"><a href="">Term of Service</a></div>
             <div class="nav-itm"><a href="">Privacy Police</a></div>
           </div>
           <div class="navigasi f-ctn">
             <div class="nav-itm"><a href=""><span class="badge ">14</span>Facebook</a></div>
             <div class="nav-itm"><a href="">Instagram</a></div>
             <div class="nav-itm"><a href="">Linkedin</a></div>
             <div class="nav-itm"><a href="">Google+</a></div>
             <div class="nav-itm"><a href="">Twitter</a></div>
           </div>
         </div>
       </div>
     </div>
    -->

     <div class="footer">
       <div class="container wrap-footer">
          <div class="navigasi f-logo">
            <div class="footer-logo">
              <h4>Logo  </h4>
            </div>
            <div class="footer-address">
              <p>Jl. Wisma Lidah Kulon D No.28, Lidah Kulon, Kec. Lakarsantri, Kota SBY, Jawa Timur 60213</p>
            </div>
            <div class="footer-subs">
              <form class="form-inline">
                <div class="form-group ">
                  <input type="email" class="form-control form-control-sm mr-2" id="email" placeholder="Masukan Email">
                </div>
                <button type="submit" class="btn btn-outline-light btn-sm">Subscribe </button>
              </form>
            </div>
          </div>
          <div class="navigasi f-ctn">
            <div class="nav-itm"><a href="">Contact</a></div>
            <div class="nav-itm"><a href="">Contact</a></div>
            <div class="nav-itm"><a href="">Contact</a></div>
            <div class="nav-itm"><a href="">Term of Service</a></div>
            <div class="nav-itm"><a href=""><p>Privacy Police</p></a></div>
          </div>
          <div class="navigasi f-ctn">
            <div class="nav-itm"><a href="">Contact</a></div>
            <div class="nav-itm"><a href="">Contact</a></div>
            <div class="nav-itm"><a href="">Contact</a></div>
            <div class="nav-itm"><a href="">Term of Service</a></div>
            <div class="nav-itm"><a href=""><p>Privacy Police</p></a></div>
          </div>
          <div class="navigasi f-ctn">
            <div class="nav-itm"><a href="">Contact</a></div>
            <div class="nav-itm"><a href="">Contact</a></div>
            <div class="nav-itm"><a href="">Contact</a></div>
            <div class="nav-itm"><a href="">Term of Service</a></div>
            <div class="nav-itm"><a href=""><p>Privacy Police</p></a></div>
          </div>
        </div>
     </div>
</body>

<script src="{{ asset('js/script.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>