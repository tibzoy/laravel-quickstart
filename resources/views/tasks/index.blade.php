@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        @include('tasks.form')
    </div>

    @if (count($tasks) > 0)

        @include('tasks.list')

    @endif
@endsection
