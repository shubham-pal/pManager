@extends('layouts.app')

@section('content')

<div class="col-md-9 col-lg-9 pull-left">
    <div class="row"  style="background: white; margin: 10px;">
        <div class="col-md-12 col-lg-12 col-sm-12"> 
            <h1>Create New Project</h1>
            <form action="{{ route('projects.store') }}" method="post">
                {{ csrf_field() }}
                <!-- <input type="hidden" name="_method" value="put"> -->
                <div class="form-group">
                    <label for="project-name">Name<span class="required">*</span></label>
                    <input type="text" placeholder="Enter Name" name="name" id="project-name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="project-description">Description</label>
                    <textarea placeholder="Enter Description" name="description" id="project-description" rows="5" class="form-control"></textarea>
                </div>
                <input type="hidden" name="company_id" value="{{ $company_id }}">
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
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
            <li><a href="/projects">All Projects</a></li>
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