@extends('layouts.public')

@section('content')

<section id="registrationintro">
      <div class="intro-container"></div>
  </section>
  
  <section id="registration">
      <div class="registration-box">
        <h2>Registrazione</h2>
        <form>
          <div class="user-box">
              <input type="text" name="nome" placeholder="Nome">
         
          </div>
          <div class="user-box">
            <input type="text" name="cognome" placeholder="Cognome">
            
          </div>
          <div class="user-box">
            <input type="text" name="user" placeholder="Username">
       
        </div>
        <div class="user-box">
            <input type="password" name="pass" placeholder="Password">
        </div>
        <div class="user-box">
            <input type="password" name="pass" placeholder="Conferma password">
        </div>
          <div class="center">   
              <button class="registrati">Registrati</button>
          </div>
          <div class="center">   
              <button type="button" class="annulla"><a href="./login.html">Annulla</a></button>
        </div>
        </form>
      </div>
  </section>
@endsection
