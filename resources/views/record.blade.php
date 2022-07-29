@extends('layouts.record')

@section('content')
<div class="container">
    <div style="margin: 50px;">
    <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: red;"></i>  Live Preview</p>
    <div class="screen">
    </div>
    <div class="record_btn">
    <button class="btn primary" onclick="startWebcam()">Start recording</button>
    </div>
    </div>
</div>
@endsection