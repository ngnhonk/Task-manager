@extends('layouts.app')

<!-- Link components -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Link CSS -->
<link rel="stylesheet" type="text/css" href="{{ url('/css/layouts/reset.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('/css/layouts/base.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('/css/tasks/index.css') }}" />

@section('content')
<div class="container-md">
    @foreach ($starredTasks as $task)
    <h5>{{ $task->title }}</h5>
    <p>{{ $task->content }}</p>
    <p>{{$task->starred?"Is Favourite":"IDC"}}</p>
    @endforeach
</div>
@endsection