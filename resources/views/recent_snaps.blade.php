@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center" style="width: 100%;">
        <p class="label">Snapbyte > My Recordings</p>
        <div class="flex">
            <p style="min-width: 150px;">My Recordings 25</p>
            <div class="right" style="width: 100%;">
                <button class="btn white"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> By Date</button>
                <button class="btn white"><i class="fa fa-filter" aria-hidden="true"></i> Add Filter</button>
                <button class="btn primary"><i class="fa fa-video-camera" aria-hidden="true"></i> New Request</button>
                <button class="btn danger"><i class="fa fa-camera-retro" aria-hidden="true"></i> Start Recording</button>
            </div>
        </div>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Recordings</th>
                        <th>Title</th>
                        <th>Views</th>
                        <th>Size</th>
                        <th>Last Modified</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="image-container"><img class="video-clip" src="{{ asset('images/profile_pic.png') }}" />
                                <div class="bottom-right">00:14</div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p class="title">Get it right the first time</p>
                                <p class="description">The video description is shown here if the user has added it.</p>
                            </div>
                        </td>
                        <td>324</td>
                        <td>923 KB</td>
                        <td>3 months ago</td>
                        <td> ... </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="image-container"><img class="video-clip" src="{{ asset('images/profile_pic.png') }}" />
                                <div class="bottom-right">00:14</div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p class="title">Get it right the first time</p>
                                <p class="description">The video description is shown here if the user has added it.</p>
                            </div>
                        </td>
                        <td>324</td>
                        <td>923 KB</td>
                        <td>3 months ago</td>
                        <td> ... </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="image-container"><img class="video-clip" src="{{ asset('images/profile_pic.png') }}" />
                                <div class="bottom-right">00:14</div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p class="title">Get it right the first time</p>
                                <p class="description">The video description is shown here if the user has added it.</p>
                            </div>
                        </td>
                        <td>324</td>
                        <td>923 KB</td>
                        <td>3 months ago</td>
                        <td> ... </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="image-container"><img class="video-clip" src="{{ asset('images/profile_pic.png') }}" />
                                <div class="bottom-right">00:14</div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p class="title">Get it right the first time</p>
                                <p class="description">The video description is shown here if the user has added it.</p>
                            </div>
                        </td>
                        <td>324</td>
                        <td>923 KB</td>
                        <td>3 months ago</td>
                        <td> ... </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="image-container"><img class="video-clip" src="{{ asset('images/profile_pic.png') }}" />
                                <div class="bottom-right">00:14</div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p class="title">Get it right the first time</p>
                                <p class="description">The video description is shown here if the user has added it.</p>
                            </div>
                        </td>
                        <td>324</td>
                        <td>923 KB</td>
                        <td>3 months ago</td>
                        <td> ... </td>
                    </tr>
                </tbody>

            </table>
        </section>
    </div>
</div>
@endsection