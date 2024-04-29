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

    </style>
</head>
<body>
    <img src="{{ asset('images/city.png') }}" alt="Logo" class="logo">
    <img src="{{ asset('images/system name.png') }}" alt="Logo" class="watermark">


    <div>
        <div class="text-f1">
            <p>CLICK THE ROOM YOU WANT TO CHANGE OFFICES</p>
            @foreach($offices->groupBy('location_id') as $locationId => $officesByLocation)
                <div id="content-1{{ $locationId }}" class="hidden content">
                    @foreach($officesByLocation as $office)
                        <div style="white-space: nowrap;">
                            <p style="display: inline;">Room Number:</p>
                            <h4 style="display: inline;">{{ $office->location_id }}</h4>
                        </div>
                        <div style="white-space: nowrap;">
                            <p style="display: inline;">Office Name:</p>
                            <h4 style="display: inline;">{{ $office->office_id }}</h4>
                        </div>


                        <div class="dropdown">
                            <button class="dropbtn">Change Office</button>
                            <div class="dropdown-content">
                                @foreach($offices as $other_office)
                                    @if($other_office->id != $office->id)
                                        <a  data-location-id="{{ $office->location_id }}" data-office-id="{{ $other_office->id }}">{{ $other_office->id }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

            </div>
        </div>
        <div class="text-f2">
            <p>CLICK THE ROOM YOU WANT TO CHANGE OFFICES</p>
            @foreach($offices->groupBy('location_id') as $locationId => $officesByLocation)
                <div id="content-2{{ $locationId }}" class="hidden content">
                    @foreach($officesByLocation as $office)
                        <div style="white-space: nowrap;">
                            <p style="display: inline;">Room Number:</p>
                            <h4 style="display: inline;">{{ $office->location_id }}</h4>
                        </div>
                        <div style="white-space: nowrap;">
                            <p style="display: inline;">Office Name:</p>
                            <h4 style="display: inline;">{{ App\Models\Office::find($office->office_id)->name }}</h4>
                        </div>


                        <div class="dropdown">
                            <button class="dropbtn">Change Office</button>
                            <div class="dropdown-content">
                                @foreach($offices as $other_office)
                                    @if($other_office->id != $office->id)
                                        <a data-location-id="{{ $office->location_id }}" data-office-id="{{ $other_office->id }}">{{ App\Models\Office::find($other_office->id )->name }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

            </div>

        </div>





    <div class="small">
        <div class="center">
            <div class="floor-1">

                <a><img class="hallway" src="{{ asset('assets/vectors/floor1/hallway.svg') }}" /></a>
                <a><img class="room-1 toggleContent" data-location-id="1" src="{{ asset('assets/vectors/floor1/Room1.svg') }}" /></a>
                <a><img class="room-2 toggleContent" data-location-id="2" src="{{ asset('assets/vectors/floor1/Room2.svg') }}" /></a>
                <a><img class="stairs-1" src="{{ asset('assets/vectors/floor1/Stairs1.svg') }}" /></a>
                <a><img class="stairs-2" src="{{ asset('assets/vectors/floor1/Stairs2.svg') }}" /></a>
                <a><img class="room-3 toggleContent" data-location-id="3" src="{{ asset('assets/vectors/floor1/Room3.svg') }}" /></a>
                <a><img class="room-4 toggleContent" data-location-id="4" src="{{ asset('assets/vectors/floor1/Room4.svg') }}" /></a>
                <a><img class="room-5 toggleContent" data-location-id="5"src="{{ asset('assets/vectors/floor1/Room5.svg') }}" /></a>
                <a><img class="room-6 toggleContent" data-location-id="6"src="{{ asset('assets/vectors/floor1/Room6.svg') }}" /></a>
                <a><img class="stairs-3" src="{{ asset('assets/vectors/floor1/Stairs3.svg') }}" /></a>
                <a><img class="stairs-4" src="{{ asset('assets/vectors/floor1/Stairs4.svg') }}" /></a>
                <a><img class="room-7 toggleContent" data-location-id="7" src="{{ asset('assets/vectors/floor1/Room7.svg') }}" /></a>
                <a><img class="room-8 toggleContent" data-location-id="8"src="{{ asset('assets/vectors/floor1/Room8.svg') }}" /></a>
            </div>
        </div>
        <div class="center2">
            <div class="floor-2">
                <a><img class="hallway2" src="{{ asset('assets/vectors/floor1/2hallway.svg') }}" /></a>
                <a><img class="room-9 toggleContent" data-location-id="9" src="{{ asset('assets/vectors/floor1/Room9.svg') }}" /></a>
                <a><img class="room-10 toggleContent" data-location-id="11" src="{{ asset('assets/vectors/floor1/Room10.svg') }}" /></a>
                <a><img class="stairs-5" src="{{ asset('assets/vectors/floor1/Stairs5.svg') }}" /></a>
                <a><img class="stairs-6" src="{{ asset('assets/vectors/floor1/Stairs6.svg') }}" /></a>
                <a><img class="room-11 toggleContent" data-location-id="11" src="{{ asset('assets/vectors/floor1/Room11.svg') }}" /></a>
                <a><img class="room-12 toggleContent" data-location-id="12" src="{{ asset('assets/vectors/floor1/Room12.svg') }}" /></a>
                <a><img class="room-13 toggleContent" data-location-id="13" src="{{ asset('assets/vectors/floor1/Room13.svg') }}" /></a>
                <a><img class="room-14 toggleContent" data-location-id="14" src="{{ asset('assets/vectors/floor1/Room14-1.svg') }}" /></a>
                <a><img class="room-15 toggleContent" data-location-id="15" src="{{ asset('assets/vectors/floor1/Room15.svg') }}" /></a>
                <a><img class="room-16 toggleContent" data-location-id="16" src="{{ asset('assets/vectors/floor1/Room16.svg') }}" /></a>
                <a><img class="room-17 toggleContent" data-location-id="17" src="{{ asset('assets/vectors/floor1/Room17.svg') }}" /></a>
                <a><img class="room-18 toggleContent" data-location-id="18" src="{{ asset('assets/vectors/floor1/Room18.svg') }}" /></a>
                <a><img class="room-19 toggleContent" data-location-id="19" src="{{ asset('assets/vectors/floor1/Room19.svg') }}" /></a>
                <a><img class="room-20 toggleContent" data-location-id="20" src="{{ asset('assets/vectors/floor1/Room20.svg') }}" /></a>
            </div>
        </div>
    </div>

    <script>
        var toggleButtons = document.querySelectorAll('.toggleContent');

        toggleButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var locationId = this.getAttribute('data-location-id');
                var contentToShow1 = document.getElementById('content-1' + locationId);
                var contentToShow2 = document.getElementById('content-2' + locationId);

                // Check if content is already visible
                var isVisible1 = !contentToShow1.classList.contains('hidden');
                var isVisible2 = !contentToShow2.classList.contains('hidden');

                // Hide all content elements
                var allContent = document.querySelectorAll('.content');
                allContent.forEach(function(content) {
                    content.classList.add('hidden');
                });


                // Remove highlight from all buttons
                toggleButtons.forEach(function(btn) {
                    btn.classList.remove('highlighted');
                });

                // Highlight the clicked button
                this.classList.add('highlighted');

                // If content is not already visible, show it
                if (!isVisible1) {
                    contentToShow1.classList.remove('hidden');
                }
                if (!isVisible2) {
                    contentToShow2.classList.remove('hidden');
                }
            });
        });
    </script>


</body>

</html>
