@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 offset-md-4 offset-lg-3">
    <div class="card text-white bg-primary mb-3">
        <div class="card-header">Companies</div>
        <div class="card-body bg-white">
            <ul class="list-group">
            @foreach($companies as $company)
                <a href="companies/{{ $company->id }}"><li class="list-group-item">{{ $company->name }}</li></a>
            @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection