<script type="text/javascript">
    var rowCounter = 1;

    function addInput() {
        rowCounter++;
        var newInput = '<div class="d-flex gx-3 mb-3 mt-3">' +
            '<div class="g w-100">' +
            '<div class="form-control-wrap">' +
            '<input type="text" class="form-control"  name="subcategory_name[]"   placeholder="Sub Category Name">' +
            '</div>' +
            '</div>' +
            '<div class="g">' +
            '<button class="btn btn-icon btn-outline-light delete-button" onclick="removeInput(this)">' +
            '<em class="icon ni ni-cross"></em>' +
            '</button>' +
            '</div>' +
            '</div>';
        $('.Subcategory').append(newInput);
    }

    function removeInput(button) {
        $(button).closest('.d-flex').remove();
    }

    function editInput() {
        count++;
        var newInput = '<div class="d-flex gx-3 mb-3 mt-3">' +
            '<div class="g w-100">' +
            '<div class="form-control-wrap">' +
            '<input type="text" class="form-control"  name="subcategory_name[]"   placeholder="Sub Category Name">' +
            '</div>' +
            '</div>' +
            '<div class="g">' +
            '<button class="btn btn-icon btn-outline-light delete-button" onclick="removeEditInput(this)">' +
            '<em class="icon ni ni-cross"></em>' +
            '</button>' +
            '</div>' +
            '</div>';
        $('.editSubcategory').append(newInput);
    }
    var count = 1;

    function removeEditInput(button) {
        $(button).closest('.d-flex').remove();
    }
    // Delete SubCategory
    document.addEventListener('DOMContentLoaded', function() {
        // Function to bind delete event to dynamically added delete buttons
        function bindDeleteButtons() {
            const deleteButtons = document.querySelectorAll('.delete_subcategory');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const subcategoryId = this.getAttribute('data-subcategory-id');

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
                            fetch(`/admin/delete-subcategory/${subcategoryId}`, {
                                    method: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': document.querySelector(
                                                'meta[name="csrf-token"]')
                                            .getAttribute('content')
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.status === 'success') {
                                        Swal.fire(
                                            'Deleted!',
                                            'The subcategory has been deleted.',
                                            'success'
                                        );
                                        this.closest('.d-flex')
                                            .remove(); // Remove the subcategory element
                                        flashMessage(data.status, data
                                            .message); // Flash success message
                                        location.reload();
                                    } else {
                                        Swal.fire(
                                            'Error!',
                                            'There was an issue deleting the subcategory.',
                                            'error'
                                        );
                                        flashMessage(data.status, data
                                            .message); // Flash error message
                                    }
                                })
                                .catch(error => {
                                    Swal.fire(
                                        'Error!',
                                        'There was an issue deleting the subcategory.',
                                        'error'
                                    );
                                });
                        }
                    });
                });
            });
        }

        // Function to handle category edit
        document.querySelectorAll('.EditCategory').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                const catId = this.getAttribute('data-id');

                fetch(`/admin/category-courses/edit?id=${catId}`, {
                        method: 'GET'
                    })
                    .then(response => response.json())
                    .then(data => {
                        const categories = data.categories;
                        document.getElementById('category_id').value = categories.id;
                        document.getElementById('e_category_name').value = categories
                            .category_name;
                        document.getElementById('e_description').value = categories
                            .description;
                        // Clear previous subcategories and append new ones
                        const subCatContainer = document.getElementById('FormSubCat');
                        subCatContainer.innerHTML = data.htmlMarkup;
                        bindDeleteButtons(); // Re-bind delete event to new buttons
                    })
                    .catch(error => console.error('Error:', error));
            });
        });

        // Bind delete event to initial delete buttons
        bindDeleteButtons();
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $('#editCategoryFormId').submit(function(event) {
            event.preventDefault(); // Prevent default form submission
            const data = new FormData(this); // Create FormData object from form
            $.ajax({
                url: '/admin/category-courses/update', // Update route URL
                method: 'POST',
                data: data, // Form data
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status === 'success') {
                        console.log('Category updated successfully');
                        flashMessage(response.status, response
                        .message); // Show success message

                        // Reset form and hide modal only if the form element is found
                        const formElement = $("#editCategoryFormId")[0];
                        if (formElement) {
                            formElement.reset();
                        } else {
                            console.error('Form element not found');
                        }

                        $('#modalEdit').modal('hide'); // Hide modal
                        location.reload(); // Reload the page
                    } else {
                        printErrorMsg(response.message); // Show error message
                    }
                },
                error: function(xhr, status, error) {
                    console.error('XHR request failed:', xhr.responseText); // Log error
                }
            });
        });

        // You need to add the 'addInput' function here if it's not already defined.
        $(".saveBtn").click(function(e) {
            e.preventDefault();
            // Get the form element by its ID or class
            var form = $('#categoryFormID')[0];
            var formData = new FormData(form);
            $.ajax({
                url: "{{ route('category.save') }}",
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

    });


    // Delete Category

    document.querySelectorAll('.delete_category').forEach(function(element) {
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

