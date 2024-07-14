   <!-- .card-inner -->
   <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
    <div class="card-inner-group" data-simplebar>
        <div class="card-inner">
            <div class="user-card">
                <div class="user-avatar bg-primary">
                    <span>AB</span>
                </div>
                <div class="user-info">
                    <span class="lead-text">{{ $editStudents->firstName }} {{ $editStudents->lastName }}</span>
                    <span class="sub-text">{{ $editStudents->email }}</span>
                </div>
            </div><!-- .user-card -->
        </div><!-- .card-inner -->
        {{-- <div class="card-inner">
            <div class="user-account-info py-0">
                <h6 class="overline-title-alt">Total Bill</h6>
                <div class=" h5 text-primary"> Paid <span>19</span> <small class="currency currency-btc">USD</small></div>
                <div class="text-danger">Due <span>10 <span class="currency currency-btc">USD</span></span></div>
            </div>
        </div><!-- .card-inner --> --}}
        <div class="card-inner p-0">
            <ul class="link-list-menu">
                <li>
                    <a class="active" href="{{ route('students.details',$editStudents->id) }}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a>
                </li>
                <li>
                    <a href="{{ route('students.course',$editStudents->id) }}"><em class="icon ni ni-book-fill"></em><span>Courses</span></a>
                </li>
              
            </ul>
        </div><!-- .card-inner -->
      
    </div><!-- .card-inner-group -->
</div>
<!-- .card-aside -->