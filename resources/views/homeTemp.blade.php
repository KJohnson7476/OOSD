@extends('layouts.app')

@section('content')
<div class="container">


    {{Auth::user()->name}}
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <title>Laravel</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="row">
        <div class="col-md-8 col-md-offset-1">

            <div id="app">
                <div class="container">
                @include('partials.nav')
                <!-- Main component for a primary marketing message or call to action -->
                    <div class="jumbotron">
                        <router-view></router-view>
                    </div>
                </div>
                <!-- /container -->
            </div>

            <script src="./././js/app.js"></script>

        </div>
    </div>
</div>
@endsection
