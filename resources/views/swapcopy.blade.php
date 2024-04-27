<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malaybalay City</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/floor1.css') }}">

    <style>
        body {
            background-image: url('{{ asset('images/brr.png') }}');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            background-attachment: fixed;
            overflow-x: hidden;
        }

        .hidden {
            display: none;
        }


    </style>
</head>
<body>
    <img src="{{ asset('images/city.png') }}" alt="Logo" class="logo">
    <img src="{{ asset('images/system name.png') }}" alt="Logo" class="watermark">

<div class="small">
    <div class="center">
        <div class="floor-1">
            <div class="text-f1">

                <p> CLICK THE ROOM YOU WANT TO CHANGE OFFICES</p>

                <button type="button" class="toggleContent" data-location-id="1">Show Room 1</button>
                <button type="button" class="toggleContent" data-location-id="2">Show Room 2</button>

                <button type="button" class=" room-1 toggleContent" data-location-id="1">
                    <img class="room-1" src="{{ asset('assets/vectors/floor1/Room1.svg') }}" />
                </button>
                <button type="button" class="room-2 toggleContent" data-location-id="2">
                    <img class="room-2" src="{{ asset('assets/vectors/floor1/Room2.svg') }}" />
                </button>
                <button type="button" class="room-3 toggleContent" data-location-id="3">
                    <img class="room-3" src="{{ asset('assets/vectors/floor1/Room3.svg') }}" />
                </button>
                <button type="button" class="room-4 toggleContent" data-location-id="4">
                    <img class="room-4" src="{{ asset('assets/vectors/floor1/Room4.svg') }}" />
                </button>
                <button type="button" class="room-5 toggleContent" data-location-id="5">
                    <img class="room-5" src="{{ asset('assets/vectors/floor1/Room5.svg') }}" />
                </button>
                <button type="button" class="room-6 toggleContent" data-location-id="6">
                    <img class="room-6" src="{{ asset('assets/vectors/floor1/Room6.svg') }}" />
                </button>
                <button type="button" class="room-7 toggleContent" data-location-id="7">
                    <img class="room-7" src="{{ asset('assets/vectors/floor1/Room7.svg') }}" />
                </button>
                <button type="button" class="room-8 toggleContent" data-location-id="8">
                    <img class="room-8" src="{{ asset('assets/vectors/floor1/Room8.svg') }}" />
                </button>


                @foreach($offices as $office)
                <div class="hidden content" id="content-{{ $office->location_id }}">

                    <h4>Room {{ $office->location_id }}</h4>
                    <h4>Office Name: {{ $office->name }}</h4>
                </div>
                @endforeach

                <script>
                    var toggleButtons = document.querySelectorAll('.toggleContent');

                    toggleButtons.forEach(function(button) {
                        button.addEventListener('click', function() {
                            var locationId = this.getAttribute('data-location-id');
                            var contentToShow = document.getElementById('content-' + locationId);

                            // Check if content is already visible
                            var isVisible = !contentToShow.classList.contains('hidden');

                            // Hide all content elements
                            var allContent = document.querySelectorAll('.content');
                            allContent.forEach(function(content) {
                                content.classList.add('hidden');
                            });

                            // If content is not already visible, show it
                            if (!isVisible) {
                                contentToShow.classList.remove('hidden');
                            }
                        });
                    });
                </script>

            </div>
            {{-- <img class="hallway" src="{{ asset('assets/vectors/floor1/hallway.svg') }}" />
            <img class="room-1" src="{{ asset('assets/vectors/floor1/Room1.svg') }}" />
            <img class="room-2" src="{{ asset('assets/vectors/floor1/Room2.svg') }}" />
            <img class="stairs-1" src="{{ asset('assets/vectors/floor1/Stairs1.svg') }}" />
            <img class="stairs-2" src="{{ asset('assets/vectors/floor1/Stairs2.svg') }}" />
            <img class="room-3" src="{{ asset('assets/vectors/floor1/Room3.svg') }}" />
            <img class="room-4" src="{{ asset('assets/vectors/floor1/Room4.svg') }}" />
            <img class="room-5" src="{{ asset('assets/vectors/floor1/Room5.svg') }}" />
            <img class="room-6" src="{{ asset('assets/vectors/floor1/Room6.svg') }}" />
            <img class="stairs-3" src="{{ asset('assets/vectors/floor1/Stairs3.svg') }}" />
            <img class="stairs-4" src="{{ asset('assets/vectors/floor1/Stairs4.svg') }}" />
            <img class="room-7" src="{{ asset('assets/vectors/floor1/Room7.svg') }}" />
            <img class="room-8" src="{{ asset('assets/vectors/floor1/Room8.svg') }}" /> --}}
        </div>
    </div>
    <div class="center2">
        <div class="floor-2">
            <img class="hallway2" src="{{ asset('assets/vectors/floor1/2hallway.svg') }}" />
            <img class="room-9" src="{{ asset('assets/vectors/floor1/Room9.svg') }}" />
            <img class="room-10" src="{{ asset('assets/vectors/floor1/Room10.svg') }}" />
            <img class="stairs-5" src="{{ asset('assets/vectors/floor1/Stairs5.svg') }}" />
            <img class="stairs-6" src="{{ asset('assets/vectors/floor1/Stairs6.svg') }}" />
            <img class="room-11" src="{{ asset('assets/vectors/floor1/Room11.svg') }}" />
            <img class="room-12" src="{{ asset('assets/vectors/floor1/Room12.svg') }}" />
            <img class="room-13" src="{{ asset('assets/vectors/floor1/Room13.svg') }}" />
            <img class="room-14" src="{{ asset('assets/vectors/floor1/Room14-1.svg') }}" />
            <img class="room-15" src="{{ asset('assets/vectors/floor1/Room15.svg') }}" />
            <img class="room-16" src="{{ asset('assets/vectors/floor1/Room16.svg') }}" />
            <img class="room-17" src="{{ asset('assets/vectors/floor1/Room17.svg') }}" />
            <img class="room-18" src="{{ asset('assets/vectors/floor1/Room18.svg') }}" />
            <img class="room-19" src="{{ asset('assets/vectors/floor1/Room19.svg') }}" />
            <img class="room-20" src="{{ asset('assets/vectors/floor1/Room20.svg') }}" />
        </div>
    </div>
</div>
</body>
</html>
