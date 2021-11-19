@extends('layouts.app')
@section('content')
<div class="container mt-4 mb-4 marg p-3 d-flex justify-content-center">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://i.imgur.com/wvxPVss9S.png" height="100" width="100" /></button> <span class="name mt-3 text-uppercase">{{auth()->user()->name}}</span> <span class="idd">{{auth()->user()->role}}</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1">{{auth()->user()->phonenumber}}</span> <span><i class="fa fa-copy"></i></span> </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">1069 <span class="follow">Followers</span></span> </div>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div>
            <div class="text mt-3"> <span><span class="text-uppercase">{{auth()->user()->name}} </span> is a {{auth()->user()->role}} Who works very hard alltime.<br><br>  </span> </div>
            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
            <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div>
        </div>
    </div>
</div>
@endsection