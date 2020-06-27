@extends('layout.base')
@section("custom_css")
	<link href="/backend/assets/css/materialize.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
@stop



    @section('content')

    <div class="container">
        <div class="row">
          <div class="col l5 s12" style="margin-top: 100px; font-family: 'Inter', sans-serif;">
            <br>
            <div>
              <h5><b>Store:</b></h5>
              <p>Shopright</p>
            </div>
            <div>
              <br>
            </div>
            <div>
              <h5><b>WhatsApp:</b></h5>
              <p>08012345678</p>
            </div>
            <div>
              <br>
            </div>
            <div>
              <p><b>Working Hours: 9 AM - 11 PM</b></p>
              <!-- <p>08012345678</p> -->
            </div>

          </div>
          <div class="col l7 s12" style="font-family: 'Inter', sans-serif;">
            <br><br>
              <h4><b>Log your Complain</b></h4><br>
              <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input id="full_name" type="text" class="validate">
                <label for="full_name">Full Name</label>
              </div><br>
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div><br>
              <div class="input-field">
                <i class="material-icons prefix">edit</i>
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Message</label>
              </div><br>
              <div>
                <a class="waves-effect waves-light btn right"><i class="material-icons left">send</i>SUBMIT</a>
              </div>
          </div>
    </div>
      </div>

       @endsection


    @section("javascript")
    <script type="text/javascript" src="/backend/assets/js/materialize.min.js"></script>


    @stop
