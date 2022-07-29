@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center" style="width: 100%;">
    <p class="label">Snapbyte  >  My Recordings</p>
        <div class="flex">
            <p style="min-width: 150px;">My Recordings 0</p>
            <div class="right" style="width: 100%;">
                <button class="btn white"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> By Date</button>
                <button class="btn white"><i class="fa fa-filter" aria-hidden="true"></i> Add Filter</button>
                <button class="btn primary"><i class="fa fa-video-camera" aria-hidden="true"></i> New Request</button>
                <button class="btn danger start"><i class="fa fa-camera-retro" aria-hidden="true"></i> Start Recording</button>
            </div>
        </div>
        <div class="recordsection justify-content-center">
            <img src="{{ asset('images/folder.png') }}" />
            <h2>Say hello to the world!</h2>
            <p class="description">Record your first video/audio and share it with your team, friends, followers and customers.</p>
            <div>
                <button class="btn danger start"><i class="fa fa-camera-retro" aria-hidden="true"></i> Start Recording</button>
                <button class="btn primary"><i class="fa fa-video-camera" aria-hidden="true"></i> New Request</button>
            </div>
        </div>
        <section class="flex">
            <img class="preview" src="{{ asset('images/preview.png') }}"  /> 
            <div style="margin: 50px;">
                <p class="heading">Want more control & better quality recording?</p>
                <button class="btn primary">Download the desktop recorder</button>
            </div>
        </section>
    </div>
</div>
@endsection