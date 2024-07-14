@extends('backend.layouts.master')
@section('title', 'Blog')
@section('styles')

@endsection
@section('admin-content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Blog</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="more-options">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                {{-- <a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal"
                                                    href="#student-add"><em class="icon ni ni-plus"></em></a> --}}
                                                <a class="btn btn-primary d-none d-md-inline-flex" 
                                                    href="{{ route('blog.create') }}"><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner-group">
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list nk-tb-ulist">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span class="sub-text">Blog Image</span></div>
                                            <div class="nk-tb-col tb-col-mb"><span
                                                    class="sub-text d-lg-flex d-none">Blog category</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Blog Title</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Blog Content</span></div>
                                         
                                        </div>
                                        @if($blog->isNotEmpty())
                                            @foreach($blog as $list)
                                                <div class="nk-tb-item mb-2">
                                                    <div class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="">
                                                                <span> <img class="w-50" src="{{asset('uploaded_files/blog/'.$list->blog_image)  }}" /></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="nk-tb-col tb-col-mb">
                                                            <span class="tb-lead d-lg-flex d-none">{{$list->blog_category}} </span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span>{{$list->blog_title}} </span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>{{$list->blog_content}}</span>
                                                    </div>
                                                  
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                          
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li>
                                                                                <a href="{{route('blog.edit',$list->id)}}">
                                                                                    <em class="icon ni ni-pen"></em>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>  
                                                                            <li>
                                                                                <a href="#" onclick="event.preventDefault(); confirmDelete('{{ $list->id }}');">
                                                                                    <em class="icon ni ni-trash delete_blog"></em>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                            <form id="delete-form-{{ $list->id }}"
                                                                                action="{{ route('blog.destroy',$list->id) }}"
                                                                                method="POST" style="display: none;">
                                                                                @method('DELETE')
                                                                                @csrf
                                                                            </form>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        <!-- .nk-tb-item -->
                                        @endif
                                    </div><!-- .nk-tb-list -->
                                </div>
                                <div class="card-inner">
                                    <div class="nk-block-between-md g-3">
                                        <div class="g">
                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                <li class="page-item"><a class="page-link" href="#"><em
                                                            class="icon ni ni-chevrons-left"></em></a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><span class="page-link"><em
                                                            class="icon ni ni-more-h"></em></span></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><em
                                                            class="icon ni ni-chevrons-right"></em></a></li>
                                            </ul><!-- .pagination -->
                                        </div>
                                        <div class="g">
                                            <div
                                                class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                <div>Page</div>
                                                <div>
                                                    <select class="form-select js-select2" data-search="on"
                                                        data-dropdown="xs center">
                                                        <option value="page-1">1</option>
                                                        <option value="page-2">2</option>
                                                        <option value="page-4">4</option>
                                                        <option value="page-5">5</option>
                                                        <option value="page-6">6</option>
                                                        <option value="page-7">7</option>
                                                        <option value="page-8">8</option>
                                                        <option value="page-9">9</option>
                                                        <option value="page-10">10</option>
                                                        <option value="page-11">11</option>
                                                        <option value="page-12">12</option>
                                                        <option value="page-13">13</option>
                                                        <option value="page-14">14</option>
                                                        <option value="page-15">15</option>
                                                        <option value="page-16">16</option>
                                                        <option value="page-17">17</option>
                                                        <option value="page-18">18</option>
                                                        <option value="page-19">19</option>
                                                        <option value="page-20">20</option>
                                                    </select>
                                                </div>
                                                <div>OF 102</div>
                                            </div>
                                        </div><!-- .pagination-goto -->
                                    </div><!-- .nk-block-between -->
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
    
@endsection
@section('script_js')
<script type="text/javascript">
    function confirmDelete(listId) {
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
          if (result.isConfirmed) {
              document.getElementById('delete-form-' + listId).submit();
          }
      })
  }
  </script>
@endsection
