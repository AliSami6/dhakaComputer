<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between g-3">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Students / <strong class="text-primary small">{{$editStudents->firstName.' '.$editStudents->lastName}}</strong></h3>
        </div>
        <div class="nk-block-head-content">
            <a href="{{ route('students.all') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
            <a href="{{ route('students.all') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div>
</div>