@extends('layouts.app')

@section('content')

<div class="col-md-9 col-lg-9 pull-left">
    <div class="row"  style="background: white; margin: 10px;"> 
        <div class="col-md-12 col-lg-12 col-sm-12">
            <h1>Edit Company</h1>
            <form action="{{ route('companies.update', [$company->id]) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="company-name">Name<span class="required">*</span></label>
                    <input type="text" placeholder="Enter Name" name="name" id="company-name" value="{{ $company->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="company-description">Description</label>
                    <textarea placeholder="Enter Description" name="description" id="company-description" rows="5" class="form-control">{{ $company->description }}</textarea>
                </div>
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
            <li><a href="/companies/{{ $company->id }}">View Company</a></li>
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

@endsection