<!DOCTYPE html>
<!doctype html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
    		<meta name="author" content="Sai Nagamalla">
        <title>@yield('title')</title>
        {{ Html::style('vendor/bootstrap/css/bootstrap.min.css') }}
    </head>
    <body>
      <div class="content">
        <div class="container">
          @section('header')
          <header>
            <div class="row">
              <div class="col-xs-6 col-md-4"></div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <h1 class="title">
                  My Dictionary
                </h1>
              </div>
            </div>
          </header>
          @show
          @section('navbar')
          <div class="page-header col-sm-12">
            <nav>

            </nav>
          </div>
          @show
          @yield('content')
        </div>
      </div>
    </body>
</html>
