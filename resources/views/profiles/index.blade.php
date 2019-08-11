@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-4">
            <img class="rounded-circle img-fluid"
                src="https://4vector.com/i/free-vector-sl-ab-storstockholm-lokaltrafik_042021_sl-ab-storstockholm-lokaltrafik.png"
                alt="">
        </div>
        <div class="col-9 pt-4">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-2"><strong>153</strong> Posts</div>
                <div class="pr-2"><strong>23k</strong> Followers</div>
                <div class="pr-2"><strong>212</strong> Following</div>
            </div>
            <div class="pt-2 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="">{{$user->profile->url}}</a></div>
        </div>
        <div class="d-flex pt-4">
            <div class="row ">
                <div class="col"><img class="img-fluid w-100"
                        src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/jumanji-3-dwayne-johnson-1561986668.jpg?crop=0.417xw:1.00xh;0.325xw,0&resize=480:*">
                </div>
                <div class="col"><img class="img-fluid w-100"
                        src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/jumanji-3-dwayne-johnson-1561986668.jpg?crop=0.417xw:1.00xh;0.325xw,0&resize=480:*">
                </div>
                <div class="col"><img class="img-fluid w-100"
                        src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/jumanji-3-dwayne-johnson-1561986668.jpg?crop=0.417xw:1.00xh;0.325xw,0&resize=480:*">
                </div>
            </div>
        </div>

    </div>
</div>
@endsection