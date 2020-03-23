@extends('layouts.app')

@section('content')

<div class="col-md-9 col-lg-9 pull-left">
    <div class="jumbotron">
        <div class="container">
        <h1 class="display-3">{{ $company->name }}</h1>
        <p>{{ $company->description }}</p>
        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
        </div>
    </div>

    <div class="row" style="background: white; margin: 10px;">
        @foreach($comapny->projects as $project)
        <div class="col-md-4">
            <h2>{{ $project->name }}</h2>
            <p>{{ $project->description }}</p>
            <p><a class="btn btn-secondary" href="/projects/{{ $project->id }}" role="button">View Project details &raquo;</a></p>
        </div>
        @endforeach
    </div>
</div>

<div class="col-md-3 col-lg-3 pull-right">
    <!-- <div class="sidebar-module sidebar-module-inset">
        <h4></h4>
        <p></p>
    </div> -->
    <div class="sidebar-module">
        <h4>Actions</h4>
        <ol class="list-unstyled">
            <li><a href="#">Edit</a></li>
            <li><a href="#">Delete</a></li>
            <li><a href="#">Add new member</a></li>
        </ol>
    </div>
    <!-- <div class="sidebar-module">
        <h4>Members</h4>
        <ol class="list-unstyled">
            <li><a href="#"></a></li>
        </ol>
    </div> -->
</div>

@endsection