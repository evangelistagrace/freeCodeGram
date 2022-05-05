@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5" style="text-align: right" >
            <!-- <img src="https://imgur.com/PKAfdgj" alt=""> -->
            <img class="rounded-circle" src="{{ URL::to('/') }}/img/freecodecamp.jpg" style="width:100px;" />
        </div>
        <div class="col-9 p-5">
            <div>
                <h1>freecodecamp</h1>
                <div class="d-flex">
                    <div class="pe-3"><strong>153</strong> posts</div>
                    <div class="pe-3"><strong>23k</strong> followers</div>
                    <div class="pe-3"><strong>212</strong> following</div>
                </div>
            </div>
            <div class="pt-3">
                <strong>freeCodeCamp.org</strong>
                <p class="mb-0">
                We're a global community of millions of people learning to code together.
LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/
                </p>
                <p>
                    <strong><a href="www.freecodecamp.org">www.freecodecamp.org</a></strong>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img class="w-100" src="{{ URL::to('/') }}/img/img-1.jpg">
        </div>
        <div class="col-4">
            <img class="w-100" src="{{ URL::to('/') }}/img/img-2.jpg">
        </div>
        <div class="col-4">
            <img class="w-100" src="{{ URL::to('/') }}/img/img-3.jpg">
        </div>
    </div>
</div>
@endsection
