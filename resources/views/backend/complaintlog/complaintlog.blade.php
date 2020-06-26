
@extends('layout.base')
@section("custom_css")
	<link href="/backend/assets/css/materialize.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
@stop



    @section('content')

   <div class="container" style="font-family: 'Inter', sans-serif;">
        <table class="highlight">
        <thead>
          <tr>
              <th>S/N</th>
              <th style="width: 10%;">Name</th>
              <th>Email Address</th>
              <th>Message</th>
              <th>Status</th>
              <th style="width: 10%;">Date</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>Alan Jellybean</td>
            <td>alan@gmail.com</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <td>Closed</td>
            <td>2020-06-23 13:34:67</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Alvin Eclair</td>
            <td>eclair@gmail.com</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <td>Closed</td>
            <td>2020-05-23 23:17:67</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Alvin Eclair</td>
            <td>eclair@gmail.com</td>
            <!-- <td>Closed</td> -->
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <td>Closed</td>
            <td>2020-05-23 13:67:67</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Jonathan Lollipop</td>
            <td>jonathan@gmail.com</td>
            <!-- <td>Open</td> -->
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <td>Closed</td>
            <td>2020-05-23 13:67:67</td>
          </tr>
        </tbody>
      </table>
      </div>

       @endsection


    @section("javascript")
    <script type="text/javascript" src="/backend/assets/js/materialize.min.js"></script>


    @stop
