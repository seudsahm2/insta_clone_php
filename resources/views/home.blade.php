@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="img/freeCodeCampLogo.jpg" class="rounded-circle" style="height: 150px">
        </div>
    
        <div class="col-9 pt-5">
            <div>
                <h1>freecodecamp</h1>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>153 </strong>posts</div>
                <div class="pe-5"><strong>23k </strong>followers</div>
                <div class="pe-5"><strong>212 </strong>following</div>
             </div>
             <div class="pt-4 fw-bold">freeCodeCamp.org</div>
             <div class="">we're a global community of millions of people learning to code together. We're an open source, denor-supported, 501(c)(03) nonprofit</div>
             <div><a href="#">www.freecodecamp.org</a></div>
         
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="img/insta_post1.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="img/insta_post2.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="img/insta_post3.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
