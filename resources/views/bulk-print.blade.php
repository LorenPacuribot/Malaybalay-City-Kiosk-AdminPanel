<!-- resources/views/bulk-print.blade.php -->

<h1>Bulk Print - Offices</h1>

<table>
    <thead>
        <tr>
            <th>Office Name</th>
            <th>Location</th>
            <!-- Add additional columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach($offices as $office)
            <tr>
                <td>{{ $office->name }}</td>
                <td>{{ $office->location->name }}</td>
                <!-- Render additional columns as needed -->
            </tr>
        @endforeach
    </tbody>
</table>
