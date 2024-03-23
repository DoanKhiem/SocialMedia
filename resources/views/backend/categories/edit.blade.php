@extends('backend.layouts.master')
@section('head')
    !-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backend/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <!-- End plugin css for this page -->

@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Edit Category </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('banner.index')}}">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit category</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-body">
                            {{--                        <h4 class="card-title">Basic form elements</h4>--}}
                            {{--                        <p class="card-description"> Basic form elements </p>--}}
                            <form class="forms-sample" action="{{route('category.update', $category->id)}}" method="POST">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" value="{{$category->title}}" name="title" class="form-control"
                                           id="exampleInputName1" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Summary</label>
                                    <textarea name="summary" class="form-control" id="exampleTextarea1"
                                              rows="4">{{$category->summary}}</textarea>
                                    <!-- markup -->
                                    {{--                                <textarea id="summernote-editor" name="description">{!! old('description') !!}</textarea>--}}
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input value="{{$category->is_parent}}" class="checkbox" id="is_parent" name="is_parent" type="checkbox" {{$category->is_parent == 1 ? 'checked' : ''}}> Is parent
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group {{$category->is_parent == 1 ? 'd-none' : ''}}" id="parent_cat_div">
                                    <label for="exampleSelectGender">Parent Category</label>
                                    <select class="form-control" id="exampleSelectGender" name="parent_id">
                                        <option value="" >-- Parent Category --</option>
                                        @foreach($parent_cats as $pcats)
                                            <option value="{{$pcats->id}}" {{$pcats->id == $category->parent_id ? 'selected' : ''}}>{{$pcats->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleSelectGender">Status</label>--}}
{{--                                    <select class="form-control" id="exampleSelectGender" name="status">--}}
{{--                                        <option value="active" {{old('status') == 'active' ? 'selected' : ''}}>Active--}}
{{--                                        </option>--}}
{{--                                        <option value="inactive" {{old('status') == 'inactive' ? 'selected' : ''}}>--}}
{{--                                            Inactive--}}
{{--                                        </option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <label>File upload</label>
                                    <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                   </span>
                                        <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$category->photo}}">
                                    </div>
                                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                    {{--                                <input type="file" name="img[]" class="file-upload-default">--}}
                                    {{--                                <div class="input-group col-xs-12">--}}
                                    {{--                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">--}}
                                    {{--                                    <span class="input-group-append">--}}
                                    {{--                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>--}}
                                    {{--                                      </span>--}}
                                    {{--                                </div>--}}
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>

@endsection

@section('footer')
    <!-- Plugin js for this page -->
    <script src="{{asset('backend/vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('backend/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <!-- End plugin js for this page -->

    <!-- Custom js for this page -->
    <script src="{{asset('backend/js/file-upload.js')}}"></script>
    <script src="{{asset('backend/js/typeahead.js')}}"></script>
    <script src="{{asset('backend/js/select2.js')}}"></script>
    <!-- End custom js for this page -->


    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
    <script>
        $('#is_parent').change(function (e) {
            e.preventDefault();
            var is_checked = $('#is_parent').prop('checked');
            if(is_checked) {
                $('#parent_cat_div').addClass('d-none');
                $('#parent_cat_div').val('');
            } else {
                $('#parent_cat_div').removeClass('d-none');
            }
        });
    </script>
@endsection
