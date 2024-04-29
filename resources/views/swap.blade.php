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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Button trigger modal -->


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
                            <span class="office-id" data-location-id="{{ $office->location_id }}" data-office-id="{{ $office->office_id }}">{{ $office->office_id }}</span>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Change Office</button>
                            <div class="dropdown-content">
                                @foreach($offices as $other_office)
                                    @if($other_office->id != $office->id)
                                        <a data-location-id="{{ $office->location_id }}" data-office-id="{{ $other_office->id }}">{{ $other_office->id }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="update-button" data-toggle="modal" data-target="#exampleModal">Update</button>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hey!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Are you sure you want to re-assign the  office to a different room?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
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
                            <span class="office-id" data-location-id="{{ $office->location_id }}" data-office-id="{{ $office->office_id }}">{{ $office->office_id }}</span>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Change Office</button>
                            <div class="dropdown-content">
                                @foreach($offices as $other_office)
                                    @if($other_office->id != $office->id)
                                        <a data-location-id="{{ $office->location_id }}" data-office-id="{{ $other_office->id }}">{{ $other_office->id }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="update-button" data-toggle="modal" data-target="#exampleModal">Update</button>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdownButtonsF1 = document.querySelectorAll('.text-f1 .dropdown .dropbtn');
            var dropdownButtonsF2 = document.querySelectorAll('.text-f2 .dropdown .dropbtn');

            function updateButtons(buttonsToUpdate, newOfficeId) {
                buttonsToUpdate.forEach(function(button) {
                    var dropdownContent = button.nextElementSibling; // Get the dropdown content associated with this button
                    var officeIdElement = dropdownContent.closest('.content').querySelector('.office-id');

                    // Update the displayed office ID for the clicked button
                    officeIdElement.textContent = newOfficeId;
                    officeIdElement.setAttribute('data-office-id', newOfficeId);
                });
            }

            function syncButtons(buttonsToUpdate, newOfficeId) {
                updateButtons(buttonsToUpdate, newOfficeId);
            }

            dropdownButtonsF1.forEach(function(button) {
                button.addEventListener('click', function() {
                    var dropdownContent = this.nextElementSibling; // Get the dropdown content associated with this button
                    var locationId = dropdownContent.getAttribute('data-location-id');
                    var dropdownOptions = dropdownContent.querySelectorAll('a');

                    dropdownOptions.forEach(function(option) {
                        option.addEventListener('click', function(event) {
                            event.preventDefault();
                            var newOfficeId = this.getAttribute('data-office-id');

                            // Update buttons in text-f1 and text-f2 sections
                            syncButtons(dropdownButtonsF1, newOfficeId);
                            syncButtons(dropdownButtonsF2, newOfficeId);
                        });
                    });
                });
            });

            dropdownButtonsF2.forEach(function(button) {
                button.addEventListener('click', function() {
                    var dropdownContent = this.nextElementSibling; // Get the dropdown content associated with this button
                    var locationId = dropdownContent.getAttribute('data-location-id');
                    var dropdownOptions = dropdownContent.querySelectorAll('a');

                    dropdownOptions.forEach(function(option) {
                        option.addEventListener('click', function(event) {
                            event.preventDefault();
                            var newOfficeId = this.getAttribute('data-office-id');

                            // Update buttons in text-f1 and text-f2 sections
                            syncButtons(dropdownButtonsF1, newOfficeId);
                            syncButtons(dropdownButtonsF2, newOfficeId);
                        });
                    });
                });
            });
        });
    </script>
<script>
    // Event listener for "Save changes" button in modal
    $(document).ready(function() {
        $('.save-changes-btn').click(function() {
            var locationId = $(this).data('location-id');
            var newOfficeId = $(this).data('new-office-id');

            // AJAX request to save office location
            $.ajax({
                url: '/office/save-location',
                type: 'POST',
                data: {
                    location_id: locationId,
                    office_id: newOfficeId
                },
                success: function(response) {
                    console.log(response.message);
                    // You can perform additional actions here if needed
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // You can perform additional error handling here if needed
                }
            });
        });
    });
</script>








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
