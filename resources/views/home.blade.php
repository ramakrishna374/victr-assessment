@extends('mainLayout')

@section('container')

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href='{{ route('git.index') }}'>Home</a></li>
        <li><a href='{{ route('git.execute') }}'>Execute</a></li>
        <li><a href='{{ route('git.view') }}'>View</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <h1>GitHub Most Starred PHP Repositories</h1>      
    <p>This web application will use the GitHub API to retrieve the most starred public PHP projects and store each repository's basic details into a MySQL database for future retrieval.
</p>

    </div>
    <div class="col-md-2"></div>
  </div>
</div>
  
<div class="container-fluid bg-3">    
  <div class="row">
    <div class="col-md-8 col-md-push-2">
      <div class="row row-eq-height">
    <div class="col-sm-4 boxhome">
      <h2>First step!</h2>
      <p>Read the README.md file in this repository and follow the steps to configure the application to execute correctly.</p>
    </div>
    <div class="col-sm-4 boxhome"> 
      <h2>Requirements:</h2>
      <ul>
        <li>Apache or NGINX web server</li>
        <li>PHP 7.0 or newer</li>
        <li>MySQL 14.14 or newer</li>
        <li>Laravel 5.6/li>
        <li>Composer</li>
      </ul>
    </div>
  </div>
  <div class="row row-eq-height">
    <div class="col-sm-4 boxhome">
      <h2>Technologies Used:</h2>
      <ul>
        <li>PHP</li>
        <li>MySQL</li>
        <li>Composer</li>
        <li>Laravel</li>
      </ul>
    </div>
    <div class="col-sm-4 boxhome">
      <h2>MySQL</h2>
      <p>As explained in the README.md, you will need to create a MySQL user/pass and a database that the newly created user has privileges to.</p>
    </div>
  </div>
    </div>
  </div>
</div><br>
