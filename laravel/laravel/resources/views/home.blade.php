@extends('layouts.public')

@section('content')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div class="intro-container wow fadeIn">
          <h1 >Benvenuto su Events4You</h1>
          <h4>PRENOTA E COMPRA BIGLIETTI PER I TUOI EVENTI PREFERITI!</h4>
        <section id="search">
          <form method="GET" action="{{ route('catalog') }}">
            <input type="text" placeholder="cosa vuoi cercare?" id="descrizione">
            <input type="text" placeholder="luogo">
            <input type="text" placeholder="società">
            <input type="month"> 
            <button type="submit">CERCA</button>
          </form>
        </section>
      </div>
    </div>
  </section>

  <main id="main">
    <section id="gallery" class="wow fadeIn">
      <h2>Nuove Uscite</h2>
      <div class="owl-carousel gallery-carousel">
          <div class="gallery-element">
            <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="./img/venue-gallery/1.jpg">
              <p class="description">EVENTO 1<br>GG/MM/AAAA<br>ANCONA</p>
            </a>
          </div>

          <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/venue-gallery/2.jpg" alt="">
              <p class="description">EVENTO 2<br>GG/MM/AAAA<br>ANCONA</p>
            </a>
          </div>

          <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/venue-gallery/3.jpg" alt="">
              <p class="description">EVENTO 3<br>GG/MM/AAAA<br>ANCONA</p>
            </a>
          </div>

          <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/venue-gallery/4.jpg" alt="">
              <p class="description">EVENTO 4<br>GG/MM/AAAA<br>ANCONA</p>
            </a>
          </div>

          <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/venue-gallery/5.jpg" alt="">
              <p class="description">EVENTO 5<br>GG/MM/AAAA<br>ANCONA</p>
            </a>
          </div>

          <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/venue-gallery/6.jpg" alt="">
              <p class="description">EVENTO 6<br>GG/MM/AAAA<br>ANCONA</p>
            </a>
          </div>

          <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/venue-gallery/7.jpg" alt="">
              <p class="description">EVENTO 7<br>GG/MM/AAAA<br>ANCONA</p>
            </a>
          </div>

          <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/venue-gallery/8.jpg" alt="">
              <p class="description">EVENTO 8<br>GG/MM/AAAA<br>ANCONA</p>
            </a>
          </div>
        </div>
      </div>

      <h2>Top Seller</h2>
      <div class="owl-carousel gallery-carousel">
        <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt="">
             <p class="description">EVENTO 1<br>GG/MM/AAAA<br>ANCONA</p>
           </a>
         </div>
        
         <div class="gallery-element">
         <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt="">
          <p class="description">EVENTO 2<br>GG/MM/AAAA<br>ANCONA</p>
         </a>
        </div>
       
        <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt="">
            <p class="description">EVENTO 3<br>GG/MM/AAAA<br>ANCONA</p>
          </a>
        </div>
    
        <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt="">
            <p class="description">EVENTO 4<br>GG/MM/AAAA<br>ANCONA</p>
          </a>
        </div>
            
         <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt="">
            <p class="description">EVENTO 5<br>GG/MM/AAAA<br>ANCONA</p>
          </a>
        </div>

        <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt="">
            <p class="description">EVENTO 6<br>GG/MM/AAAA<br>ANCONA</p>
          </a>
        </div>

        <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt="">
            <p class="description">EVENTO 7<br>GG/MM/AAAA<br>ANCONA</p>
          </a>
        </div>

        <div class="gallery-element">
          <a href="./catalogo.html?" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt="">
            <p class="description">EVENTO 8<br>GG/MM/AAAA<br>ANCONA</p>
          </a>
        </div>

      </div>
    </section>
  


    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeIn">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                  </div>
                </li>
      
              </ul>
          </div>
        </div>

      </div>

    </section>
  </main>
@endsection