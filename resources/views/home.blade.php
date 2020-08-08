@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://bit.ly/31vrpQ5" alt="" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"><strong>freeCodeCamp.org</strong></div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://bit.ly/3kskvDN" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://bit.ly/3gEnPK0" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://bit.ly/3gFAigz" alt="">
        </div>
    </div>
</div>
@endsection
