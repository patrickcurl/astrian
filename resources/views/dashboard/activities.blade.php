@extends('app')

@section('content')

    <div class="">
        <h1><i class="fa fa-home"></i>
            {{setting('name')}}
        </h1>
    </div>


    @include('dashboard.tabs')

    <div class="tab_content">

        @isset($activities)

            @each('partials.activity', $activities, 'activity')
            {{$activities->render()}}

        @endisset


    @endsection
