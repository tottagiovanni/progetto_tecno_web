@extends('layouts.public')

@section('content')
<section id="loginintro">
      <div class="intro-container"></div>
  </section>
  
  <section id="login">
      <div class="login-box">
        <h2>Login</h2>
        <form>
          <div class="user-box">
              <input type="text" name="user" placeholder="Username">
         
          </div>
          <div class="user-box">
            <input type="password" name="pass" placeholder="Password">
            
          </div>
          <div class="center">   
              <button>Accedi</button>
          </div>
        </form>
        <div class="center">  
            <a href="{{ route('register') }}">Non sei ancora registrato? <b>Registrati!</b></a>
        </div>
      </div>
  </section>
@endsection
