
@extends('admin.layout.main-layout')

@section('custom-script')
    
    <script src="{{asset('backend')}}/js/dropzone/dropzone.js"></script>
    <script src="{{asset('backend')}}/js/dropzone/dropzone-script.js"></script>
@endsection

@section('content')


<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Slider List
                            <small>List of Home Sliders</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Sliders</li>
                        <li class="breadcrumb-item active">Slider List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <form class="form-inline search-form search-box">
                    <div class="form-group">
                        <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                            class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                    </div>
                </form>

                <a href="{{route('slider.create')}}" class="btn btn-primary mt-md-0 mt-2">Add New Slide</a>
            </div>
            <div class="card-body vendor-table">
                <table class="display" id="basic-1">
                    <thead>
                        <tr>
                            <th>Image/Video</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       


                        @foreach($slides as $slide)
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list banner-section">
                                        <img src="{{ asset('web/media/sm') }}/{{$slide->image}}" height="100" alt=""
                                            class="img-thimb blur-up lazyloaded">
                                    </div>
                                </td>
                                <td>{{$slide->title}}</td>
                                <td>{{$slide->description}}</td>
                                <td>{{$slide->type}}</td>
                                <td>
                                    @if($slide->status === 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-primary">Deactive</span>
                                    @endif

                                </td>
                                <td>{{$slide->created_at}}</td>
                                <td>
                                    
                                    {{-- <a href="{{ route('slider.edit', $slide->id) }}"
                                    class="btn btn-secondary btn-sm editBtn" onclick=""><i class="fa fa-edit text-white"></i></a> --}}

                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" 
                                    class="btn btn-solid btn-sm deleteBtn" onclick="deleteBtn('{{ route('slider.destroy', $slide->id) }}')"><i class="fa fa-trash text-white"></i></button>
                                
                                </td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>

                @include('admin.widget.delete-modal', 
                    [
                        'message' =>'Are You Sure You Want To Delete this Slider?'
                    ])



            </div>
        </div>
    </div>
</div>



    <!-- added to cart notification -->
    <div class="added-notification">
        <img src="../assets/images/fashion/pro/1.jpg" class="img-fluid" alt="">
        <h3>added to cart</h3>
    </div>


@endsection