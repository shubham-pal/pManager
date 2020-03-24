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
        @foreach($company->projects as $project)
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
        <hr>
        <ol class="list-unstyled">
            <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
            <li>
                <a href="#" onclick="confirmDelete();">Delete</a>
                <form id="delete-form" action="{{ route('companies.destroy', [$company->id]) }}" method="post" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                </form>
            </li>
            <li><a href="/projects/create">Add Project</a></li>
            <li><a href="/companies">All Companies</a></li>
        </ol>
    </div>
    <!-- <div class="sidebar-module">
        <h4>Members</h4>
        <ol class="list-unstyled">
            <li><a href="#"></a></li>
        </ol>
    </div> -->
</div>

<script>
    function confirmDelete() {
        var result = confirm("Are you sure you wish to delete this company?");
        if (result) {
            event.preventDefault();
            document.getElementById('delete-form').submit();
        }
    }
</script>

@endsection