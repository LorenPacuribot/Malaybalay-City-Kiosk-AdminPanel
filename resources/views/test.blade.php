@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Room Exchange</h1>
    @foreach($rooms as $room)
    <div class="room-container">
        <h2>Room Number: {{ $room->location_id }}</h2>
        <p>Office Name: {{ $room->office->name }}</p>
        <div class="btn-group">
            <button class="btn btn-primary change-btn" data-room="{{ $room->location_id }}">Change</button>
            <button class="btn btn-success update-btn" data-room="{{ $room->location_id }}">Update</button>
        </div>
    </div>
    @endforeach
</div>

<!-- Modal for change office -->
<div class="modal fade" id="changeOfficeModal" tabindex="-1" aria-labelledby="changeOfficeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeOfficeModalLabel">Change Office</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="changeOfficeForm">
                    <div class="mb-3">
                        <label for="officeSelect" class="form-label">Select Office:</label>
                        <select class="form-select" id="officeSelect" name="office_id">
                            @foreach($offices as $office)
                            <option value="{{ $office->id }}">{{ $office->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary save-change-btn">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for update office -->
<div class="modal fade" id="updateOfficeModal" tabindex="-1" aria-labelledby="updateOfficeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateOfficeModalLabel">Update Office</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to update the office?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary confirm-update-btn">Update</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Change Office Button
        $(".change-btn").click(function() {
            var roomId = $(this).data("room");
            $("#changeOfficeModal").modal("show");
            // Store the room id in a hidden input field inside the modal form
            $("#changeOfficeForm").append('<input type="hidden" name="location_id" value="' + roomId + '">');
        });

        // Save Change Button
        $(".save-change-btn").click(function() {
            // Perform AJAX request to update the office for the room
            var locationId = $("input[name=location_id]").val();
            var newOfficeId = $("#officeSelect").val();
            $.ajax({
                type: "POST",
                url: "{{ route('office.update') }}",
                data: {
                    location_id: locationId,
                    office_id: newOfficeId,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    // Reload the page after successful update
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        // Update Button
        $(".update-btn").click(function() {
            $("#updateOfficeModal").modal("show");
        });

        // Confirm Update Button
        $(".confirm-update-btn").click(function() {
            // Perform AJAX request to update the office for the room
            var locationId = $(this).data("room");
            var newOfficeId = $("#officeSelect").val();
            $.ajax({
                type: "POST",
                url: "{{ route('office.update') }}",
                data: {
                    location_id: locationId,
                    office_id: newOfficeId,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    // Reload the page after successful update
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
@endsection
