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

    {{--<div class="row pull-right">--}}
        {{--<router-link to="/create" tag="li">--}}
            {{--<a class="btn btn-primary">New Task</a>--}}
        {{--</router-link>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div v-if="loading">loading...</div>--}}
            {{--<div class="panel panel-default" v-for = "task in tasks">--}}
                {{--<div @click="deleteIt(task.id)" class="btn pull-right"><i class="fa fa-times"></i></div>--}}
                {{--<div @click="editTask(task.id)" class="btn pull-right"><i class="fa fa-pencil"></i></div>--}}

                {{--<form @submit.prevent="updateIt(task.id)">--}}
                    {{--<div class="panel-heading">--}}
                        {{--<span v-show="!showForm(task.id)"> {{ task.name }} </span>--}}
                        {{--<input style="width: 200px" v-show="showForm(task.id)" type="text" class="form-control" v-model="taskEditData.name"/>--}}
                    {{--</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--<span v-show="!showForm(task.id)"> {{ task.body }} </span>--}}
                        {{--<input v-show="showForm(task.id)" type="text" class="form-control" v-model="taskEditData.body"/>--}}

                        {{--Assigned by {{ task.user.name }}--}}

                    {{--</div>--}}

                    {{--<button class="btn btn-primary" type="submit" v-show="showForm(task.id)">Ok</button>--}}
                    {{--<button class="btn btn-default" @click.prevent="editForm=false" v-show="showForm(task.id)">Cancel</button>--}}
                {{--</form>--}}

            {{--</div>--}}
        {{--</div>--}}


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>




            <div id="app">

                <div class="container">

                @include('partials.nav')

                <!-- Main component for a primary marketing message or call to action -->
                    <div class="jumbotron">
                        <router-view></router-view>
                    </div>

                </div> <!-- /container -->
            </div>

            <script src="./././js/app.js"></script>
        </div>
    </div>
</div>
@endsection
