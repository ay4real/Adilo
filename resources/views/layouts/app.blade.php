<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Adilo</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/helvetica-neue-9" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar relative flex">
        <img class="logo column" src="{{ asset('images/logo.png') }}" />

        <div class="flex menu">
            <a href="{{ url('/home') }}" class="item">Projects</a>
            <div class="dropdown item">
                <span>Tools & App <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                <div class="dropdown-content">
                    <p>Snapbyte Recorder</p>
                    <p>AudioBounce</p>
                    <p class="last">Sugar Voice</p>
                </div>
            </div>
            <a href="{{ url('/home') }}" class="item">Channels</a>
            <a href="{{ url('/home') }}" class="item">Contacts</a>
            <a href="{{ url('/home') }}" class="item">Analytics</a>
            <a href="{{ url('/home') }}" class="item">Settings</a>
        </div>

        
        <div class="flex items-center">
            <a href="{{ url('/home') }}" class="item">Help</a>

        <div class="vl"></div>
            <div>
            <img class="profile_pic column" src="{{ asset('images/profile_pic.png') }}" />
        </div>

        <div class="px-4">
            <p class="username">Ayomide Ogbede</p>
            <p class="profile_text">ayomideogbede@yahoo.com</h1>
        </div>
        </div>
        

        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">

        </div>


    </nav>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 py-4 sm:pt-0">
        <aside>
            <div class="ml-4 item selected"><a href="https://laravel.com/docs" class=""><i class="fa fa-camera-retro p-4"></i>My Recordings</a></div>
            <div class="ml-4 item"><a href="https://laravel.com/docs" class=""><i class="fa fa-share-alt  p-4" aria-hidden="true"></i>Requested</a></div>
        </aside>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <main class="py-4">
                @yield('content')
            </main>

        </div>
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p class="title">New Recording</p>

                <p>Save the recording in</p>

                <div class="input-group">
                    <select>
                        <option value="0">Select a project</option>
                    </select>
                </div>

                <div class="flex input-group" style="align-items: center;">
                    <p>Record screen</p>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="flex input-group" style="align-items: center;">
                    <p>Record camera</p>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="flex input-group" style="align-items: center;">
                    <p>Record mic</p>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>

                <div class="record_btn">
                    <a href="/record" class="btn primary">Start recording</a>
                </div>
            </div>

        </div>


    </div>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        $('.start').click(function() {
            modal.style.display = "block";
        })
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>