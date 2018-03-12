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
        <li><a href='{{ route('git.index') }}'>Home</a></li>
        <li class="active"><a href="execute">Execute</a></li>
        <li><a href="view">View</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <h1>GitHub Most Starred PHP Repositories</h1>      
    <p>Below are the fields that were created inside the new table. Click the button below to see a table of the most starred GitHub's PHP repositories.
     The next page may have a delay in loading the repositories due to the application verifying all repository data is up-to-date.
    </p>
    <a href= "view" class="btn btn-success">View the most starred repositories</a>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
  
<div class="container-fluid bg-3">    
  <div class="row">
    <div class="col-md-8 col-md-push-2">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S.No</th>
                <th>RepoId</th>
                <th>Name</th>
                <th>URL</th>
                <th>CreatedDate</th>
                <th>LastPushDate</th>
                <th>Description</th>
                <th>No.of Stars</th>
                <th>ViewDetails</th>
            </tr>
        </thead>
    </table>
    </div>
  </div>
</div>

