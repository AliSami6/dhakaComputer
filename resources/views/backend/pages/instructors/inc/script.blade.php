<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // save instructor 
    $(".addInsBtn").click(function(e) {
        e.preventDefault();
        // Get the form element by its ID or class
        var form = $('#InstructorFormId')[0];
        var formData = new FormData(form);
        $.ajax({
            url: "{{ route('instructor.save') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);
                if ($.isEmptyObject(response.error)) {
                    flashMessage(response.status, response.message)
                    form.reset();
                    location.reload();
                    $("#instructor-add").modal('hide');
                } else {
                    printErrorMsg(response.error);
                }
            }
        });
    });
    function printErrorMsg(msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display', 'block');
        $.each(msg, function(key, value) {
            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
        });
    }
     // Edit Instructor
    $(document).on('click', '.EditInstructor', function(e) {
        e.preventDefault();
        let InsId = $(this).data('id');
        console.log('InsId:', InsId);
        $.ajax({
            url: '/admin/instructor/edit',
            method: 'GET',
            data: {
                id: InsId
            },
            success: function(response) {
                console.log(response);
                let EditInstructors = response.EditInstructors;
                $('#instructor_id').val(EditInstructors.id);
                $('#e_first_name').val(EditInstructors.first_name);
                $('#e_last_name').val(EditInstructors.last_name);
                $('#e_email').val(EditInstructors.email);
                $('#e_phone').val(EditInstructors.phone);
                $('#e_address_one').val(EditInstructors.address_one);
                $('#e_address_two').val(EditInstructors.address_two);
                $('#e_state').val(EditInstructors.state);
                $('#e_country').val(EditInstructors.country);
                $('#e_nationality').val(EditInstructors.nationality);
                $('#e_job_title').val(EditInstructors.job_title);
                $('#e_skill_level').val(EditInstructors.skill_level);
                $('#e_language').val(EditInstructors.language);
                $('#e_dob').val(EditInstructors.dob);
                $('#e_join_date').val(EditInstructors.join_date);
                $('#e_about').val(EditInstructors.about);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    // Update Instructor
    $('#EditInstructorFormID').submit(function(event) {
        event.preventDefault();
        const data = new FormData(this);
        $.ajax({
            url: '/admin/instructor/update',
            method: 'POST',
            data: data,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.status === 'success') {
                    // Show success message or redirect to another page
                    console.log('Instructor updated successfully');
                    flashMessage(response.status, response.message)
                    $('#EditInstructorFormID')[0].reset();
                    $('#modalEdit').modal('hide');
                    location.reload();
                } else {
                    // Show error message
                    printErrorMsg(response.error);
                }
            },
            error: function(xhr, status, error) {
                console.error('XHR request failed:', xhr.responseText);
            }
        });
    })

    // Delete Instructor

    document.querySelectorAll('.delete_instructor').forEach(function(element) {
        element.addEventListener('click', function(event) {
            event.preventDefault();
            var form = this.closest('form');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>

