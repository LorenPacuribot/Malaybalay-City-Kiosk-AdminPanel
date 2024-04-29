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
