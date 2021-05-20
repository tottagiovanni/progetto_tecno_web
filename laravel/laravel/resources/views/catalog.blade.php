@extends('layouts.public')

@section('title', 'Catalogo Eventi')

@section('content')
    <section id="catalogue">
        <div class="search intro-container">
          <section id="search">
            <form method="GET" action="./catalogo.html">
              <input type="text" placeholder="cosa vuoi cercare?" name="descrizione">
              <input type="text" placeholder="luogo">
              <input type="text" placeholder="societ&agrave;">
              <input type="month"> 
              <button type="button" class="last_minute" id="last" onclick="changeColor('last'); return false">LAST MINUTE</button>
              <br><br>
              <button type="submit" class="search_button">CERCA</button>
            </form>
          </section>
        </div>
    </section>

    <section id="list">
      <div class="horizontal-class">
        <div class="card">

          <div class="row">
            <div class="innerLeft">
              <img class="preview" src="img/gallery/4.jpg"> 
            </div>      

            <div class="innerRight horizontal-card-footer">
              <span class="card-text">05/05/2005 - Ancona</span>

              <button data-toggle="collapse" class="collapsed arrow" href="#prova"><img src="./img/arrow.png"></button>

              <h4 class="card-title">Evento 1</h4>
              <span class="price">1000&euro;</span>            
              <span class="card-text">In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. </span>

              <div class="collapse" id="prova">
                <span class="card-text">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed lacinia odio quis dolor ultrices laoreet. Phasellus et congue dolor, et volutpat ante. Ut et malesuada arcu, hendrerit auctor nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>

                <div class="google-maps">
                  <iframe class="gmaps-frame" width="250" height="150" src="https://maps.google.com/maps?width=200&amp;height=300&amp;hl=en&amp;q=ancona+palaindoor&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed"></iframe>
                </div>

                <span class="card-text"> 
                  <span class="card-text">Ancona - Palaindoor</span>
                  <span class="card-text">Biglietti disponibili: <span class="price">150</span></span>
                  <span class="card-text">
                    Gi&agrave; <span style="color: red;">56</span> persone parteciperanno.
                    <button type="button" class="participation" id="part" onclick="changeColor('part'); return false">Partecipo anche io!</button>
                  </span>
                  <button onclick="alert('comprato')" class="buy">COMPRA</button>
                </span>
              </div>
            </div> 
          </div>

          <hr color="white" margin-left="50px" margin-right="50px">


          <div class="row">
            <div class="innerLeft">
              <img class="preview" src="img/gallery/3.jpg"> 
            </div>      

            <div class="innerRight horizontal-card-footer">
              <span class="card-text">05/05/2005 - Ancona</span>

              <button data-toggle="collapse" class="collapsed arrow" href="#prova2"><img src="./img/arrow.png"></button>

              <h4 class="card-title">Evento 2</h4>
              <span class="price">1000&euro;</span>            
              <span class="card-text">In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. </span>

              <div class="collapse" id="prova2">
                <span class="card-text">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed lacinia odio quis dolor ultrices laoreet. Phasellus et congue dolor, et volutpat ante. Ut et malesuada arcu, hendrerit auctor nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>

                <div class="google-maps">
                  <iframe class="gmaps-frame" width="200" height="150" src="https://maps.google.com/maps?width=200&amp;height=300&amp;hl=en&amp;q=ancona+palaindoor&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed"></iframe>
                </div>

                <span class="card-text"> 
                  <span class="card-text">Ancona - Palaindoor</span>
                  <span class="card-text">Biglietti disponibili: <span class="price">150</span></span>
                  <span class="card-text">
                    Gi&agrave; <span style="color: red;">56</span> persone parteciperanno.
                    <button type="button" class="participation" id="part2" onclick="changeColor('part2'); return false">Partecipo anche io!</button>
                  </span>
                  <button onclick="alert('comprato')" class="buy">COMPRA</button>
                </span>
              </div>
            </div> 
          </div>

          <hr color="white" margin-left="50px" margin-right="50px">


          <div class="row">
            <div class="innerLeft">
              <img class="preview" src="img/gallery/5.jpg"> 
            </div>      

            <div class="innerRight horizontal-card-footer">
              <span class="card-text">05/05/2005 - Ancona</span>

              <button data-toggle="collapse" class="collapsed arrow" href="#prova3"><img src="./img/arrow.png"></button>

              <h4 class="card-title">Evento 3</h4>
              <span class="price canc">1000&euro;</span>       
              <span class="price sale">850&euro;</span>
              <span class="card-text">In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. </span>

              <div class="collapse" id="prova3">
                <span class="card-text">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed lacinia odio quis dolor ultrices laoreet. Phasellus et congue dolor, et volutpat ante. Ut et malesuada arcu, hendrerit auctor nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>

                <div class="google-maps">
                  <iframe class="gmaps-frame" width="200" height="150" src="https://maps.google.com/maps?width=200&amp;height=300&amp;hl=en&amp;q=ancona+palaindoor&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed"></iframe>
                </div>

                <span class="card-text"> 
                  <span class="card-text">Ancona - Palaindoor</span>
                  <span class="card-text">Biglietti disponibili: <span class="price">150</span></span>
                  <span class="card-text">
                    Gi&agrave; <span style="color: red;">56</span> persone parteciperanno.
                    <button type="button" class="participation" id="part3" onclick="changeColor('part3'); return false">Partecipo anche io!</button>
                  </span>
                  <button onclick="alert('comprato')" class="buy">COMPRA</button>
                </span>
              </div>
            </div> 
          </div>

        </div>
      </div>
    </section>
@endsection
