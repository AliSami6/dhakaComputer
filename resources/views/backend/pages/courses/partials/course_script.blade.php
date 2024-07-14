<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        const CourseImageInput = document.getElementById('course_thumbnail');
        const CourseImagePreview = document.querySelector('.course-image-preview');
        function previewSelectedImage(input, preview) {
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    preview.src = e.target.result;
                }
            }
        }
        if (CourseImageInput) {
            CourseImageInput.addEventListener('change', function() {
                    previewSelectedImage(CourseImageInput, CourseImagePreview);
            });
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        let i = 1;
        $('.add_field_button').click(function() {
            i++;
            let newRow = '<div class="row mb-3">' +
                '<label for="course-faq" class="col-sm-2 col-form-label form-label"></label>' +
                '<div class="col-sm-8">' +
                '<div class="form-group">' +
                '<input type="text" class="form-control" id="course-faq" name="faq_question[]" placeholder="Faq">' +
                '</div>' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button type="button" class="btn btn-sm btn-danger remove_row"><em class="icon ni ni-minus"></em></button>' +
                '</div>' +
                '</div>' +
                '<div class="row mb-3">' +
                '<label for="inputPassword3" class="col-sm-2 col-form-label"></label>' +
                '<div class="col-sm-8">' +
                '<div class="form-group">' +
                '<textarea class="form-control form-control-sm py-2 mb-2" name="faq_answer[]" placeholder="Answer"></textarea>' +
                '</div>' +
                '</div>' +
                '<div class="col-sm-2"></div>' +
                '</div>';
            $('.course_faq_expand').append(newRow);
        });

        $(document).on('click', '.remove_row', function() {
            $(this).closest('.row').next('.row').remove(); // Remove the answer row
            $(this).closest('.row').remove(); // Remove the question row
        });
    });
    let counter = 1;
    $('.add_rq__field_button').click(function() {
        counter++;
        let RnewRow = '<div class="row mb-3">' +
            '<label for="requirments" class="col-sm-2 col-form-label form-label"></label>' +
            '<div class="col-sm-8">' +
            '<div class="form-group">' +
            '<input type="text" class="form-control" id="requirments" name="requirement[]" placeholder="Provide Requirements">' +
            '</div>' +
            '</div>' +
            '<div class="col-sm-2">' +
            '<button type="button" class="btn btn-sm btn-danger remove_rq_row"><em class="icon ni ni-minus" ></em></button>' +
            '</div>' +
            '</div>';
        $('.course_requirments_expand').append(RnewRow);
    });

    $(document).on('click', '.remove_rq_row', function() {
        $(this).closest('.row').remove(); // Remove the entire row containing the Requirments field
    });
    let outcomed = 1;
    $('.add_out_field_button').click(function() {
        outcomed++;
        var OutnewRow = '<div class="row mb-3 course_outcomes">' +
            '<label for="outcomes" class="col-sm-2 col-form-label form-label"></label>' +
            '<div class="col-sm-8">' +
            '<div class="form-group">' +
            '<input type="text" class="form-control" id="outcomes' + counter +
            '" name="outcome[]" placeholder="Provide Outcomes">' +
            '</div>' +
            '</div>' +
            '<div class="col-sm-2">' +
            '<button type="button" class="btn btn-sm btn-danger remove_out_field_button"><em class="icon ni ni-minus"></em></button>' +
            '</div>' +
            '</div>';
        $('.course_outcomes_expands').append(OutnewRow);
    });

    $(document).on('click', '.remove_out_field_button', function() {
        $(this).closest('.row').remove(); // Remove the entire row containing the Outco

    });

    let objectived = 1;
    $('.add_objectives_field_button').click(function() {
        outcomed++;
        var OutnewRow = '<div class="row mb-3 course_objectives">' +
            '<label for="outcomes" class="col-sm-2 col-form-label form-label"></label>' +
            '<div class="col-sm-8">' +
            '<div class="form-group">' +
            '<input type="text" class="form-control" id="objectives' + counter +
            '" name="objectives[]" placeholder="Provide Objectives">' +
            '</div>' +
            '</div>' +
            '<div class="col-sm-2">' +
            '<button type="button" class="btn btn-sm btn-danger remove_objectives_field_button"><em class="icon ni ni-minus"></em></button>' +
            '</div>' +
            '</div>';
        $('.course_objectives_expands').append(OutnewRow);
    });

    $(document).on('click', '.remove_objectives_field_button', function() {
        $(this).closest('.row').remove(); // Remove the entire row containing the Outco
    });
    let eligible =1;
    $('.add_eligible_field_button').click(function(){
        eligible++;
        var Eligible = '<div class="row mb-3 course_eligible">' +
            '<label for="outcomes" class="col-sm-2 col-form-label form-label"></label>' +
            '<div class="col-sm-8">' +
            '<div class="form-group">' +
            '<input type="text" class="form-control" id="course_eligible' + counter +
            '" name="course_eligible[]" placeholder="Provide Eligibility">' +
            '</div>' +
            '</div>' +
            '<div class="col-sm-2">' +
            '<button type="button" class="btn btn-sm btn-danger remove_eligible_field_button"><em class="icon ni ni-minus"></em></button>' +
            '</div>' +
            '</div>';
        $('.course_eligible_expands').append(Eligible);
    });
    
    $(document).on('click', '.remove_eligible_field_button', function() {
        $(this).closest('.row').remove(); // Remove the entire row containing the Outco
    });
</script>