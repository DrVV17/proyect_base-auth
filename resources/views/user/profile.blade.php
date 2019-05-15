@extends('layouts.app')


@section('stylesheets')
    <style type="text/css">
        .profile-image{
            width: 150px;
            background-color: rgba(0,0,0,0.3);
        }
    </style>
@endsection


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="row justify-content-center ">
                <div class="col-sm-2 mr-4">
                    {{-- Profile Image --}}
                    <img src="/imgs/user/default.png" alt="Profile image", class ="profile-image rounded-circle p-1">
                </div>
                <div class="col-sm-9">
                    {{-- Profile Header --}}
                    <h3>
                        {{ Auth::user()->fullName}}
                        <small class="text-muted">&commat;{{Auth::user()->user_name}}</small>
                    </h3>
                    <hr>
                    {{-- Content --}}
                    Most Recent Activity
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
