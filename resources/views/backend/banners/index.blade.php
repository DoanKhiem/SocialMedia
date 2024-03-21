@extends('backend.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Banner </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Total Banner: {{$banners->count()}}</a></li>
{{--                        <li class="breadcrumb-item active" aria-current="page">Basic tables</li>--}}
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    @include('backend.layouts.notification')
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Banner Table</h4>
{{--                            <p class="card-description"> Add class <code>.table-striped</code>--}}
{{--                            </p>--}}
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> STT </th>
                                        <th> Title </th>
                                        <th> Description </th>
                                        <th> Photo </th>
                                        <th> Condition </th>
                                        <th> Status </th>
                                        <th> Actions </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($banners as $banner)
                                        <tr>
                                            <td> {{ $loop->index + 1 }} </td>

                                            <td> {{$banner->title}} </td>
                                            <td> {{$banner->description}} </td>
                                            <td>
                                                <img class="h-auto" style="width: 100px; border-radius: unset" src="{{$banner->photo}}" alt="image" />
                                            </td>
                                            <td>
                                                @if($banner->condition == 'banner')
                                                    <label class="badge badge-success">{{$banner->condition}} </label>
                                                @else
                                                    <label class="badge badge-primary">{{$banner->condition}} </label>
                                                @endif
                                            </td>
                                            <td>
                                                <input type="checkbox" name="toggle" value="{{$banner->id}}" {{$banner->status == 'active' ? 'checked' : ''}} data-toggle="toggle" data-on="active" data-off="inactive">
                                            </td>
                                            <td>
                                                <a href="{{route('banner.edit', $banner->id)}}">
                                                    <button type="button" class="btn btn-inverse-warning btn-icon">
                                                        <i class="mdi mdi-table-edit"></i>
                                                    </button>
                                                </a>
                                                <form action="{{route('banner.destroy', $banner->id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="deleteBtn btn btn-inverse-danger btn-icon">
                                                        <i class="mdi mdi-delete-forever"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
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

    <script>
        $('input[name=toggle]').change(function(){
            var mode = $(this).prop('checked');
            var id = $(this).val();
            $.ajax({
                url: "{{route('banner.status')}}",
                type: "POST",
                data: {
                    _token: '{{csrf_token()}}',
                    mode: mode,
                    id: id
                },
                success: function (data) {
                    if (data.status) {
                        alert(data.msg);
                    } else {
                        alert('Please try again');
                    }
                }
            });
        });
    </script>
    <script>
        $('.deleteBtn').on('click', function (e) {
            e.preventDefault();
            var form = $(this).closest('form');
            // var dataID = $(this).data('id');
            // var link = $(this).attr('href');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    // Swal.fire({
                    //     title: "Deleted!",
                    //     text: "Your file has been deleted.",
                    //     icon: "success"
                    // });
                }
            });
        });
    </script>

@endsection


