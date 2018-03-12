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
        <li><a href='{{ route('git.execute') }}'>Execute</a></li>
        <li class="active"><a href='{{ route('git.view') }}'>View</a></li>
      </ul>
    </div>
  </div>
</nav>


  <!-- Styles -->
  <style>
      html, body {
          height: 100%;
      }

      body {
          margin: 0;
          padding: 0;
          width: 100%;
          display: table;
          font-family: 'Lato';
      }
      .full-height {
          height: 100vh;
      }

      .flex-center {
          align-items: center;
          display: flex;
          justify-content: center;
      }

      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
      }

      .content {
          text-align: center;
      }

      .title {
          font-size: 84px;
      }

      .links > a {
          color: #636b6f;
          padding: 0 25px;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }

      .m-b-md {
          margin-bottom: 30px;
      }
      h1 {
          text-align: center;
          font-weight: 100;
      }
  </style>
  </head>
  <body>
    <div class="container">
      <h1>Top GitHub PHP Repositories</h1>
    </div>
      <div class="panel-body">
        <table class="table table-striped task-table">
          <thead>
              <th>S.No</th>
              <th>RepoId</th>
              <th>Name</th>
              <th>URL</th>
              <th>CreatedDate</th>
              <th>LastPushDate</th>
              <th>Description</th>
              <th>No.ofStars</th>
              <th>ViewDetails</th>
          </thead>
          <tbody>
              @foreach ($repositories as $repo)
                <tr title="{{ $repo->description }}">
                  <td>
                    {{ $repo->id }}
                  </td>
                  <td>
                    {{ $repo->repository_id }}
                  </td>
                  <td class="table-text">
                      <div>{{ $repo->name }}</div>
                  </td>
                  <td>
                    <a target = blank href="{{ $repo->url }}"><i class="fa fa-external-link">URL</i></a>
                  </td>
                  <td>
                    {{ $repo->created_date->format('Y-m-d h:m') }}
                  </td>
                  <td>
                    {{ $repo->last_pushed->format('Y-m-d h:m') }}
                  </td>
                  <td>
                    {{ str_limit($repo->description, $limit = 45, $end = '...') }}
                  </td>
                  <td>
                    {{ $repo->stars }}
                  </td>
                  <td>
                  <a target= blank href="{{ $repo->url }}"><i class="fa fa-external-link">ViewMore</i></a>
                </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>

    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>