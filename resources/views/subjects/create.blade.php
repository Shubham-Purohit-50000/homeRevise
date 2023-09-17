@extends('backend.layout')
@section('title','Dashbord')
@section('content')

<style>
    .left-border{
        border-left: 3px solid;
    }
    .info_card h3{
        font-size: 1.2rem;
    }
</style>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Create Subject</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Subject</a></li>
                            <li class="breadcrumb-item active" aria-current="page">create-subject</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-7">
                <div class="text-end upgrade-btn">
                    <a href="{{url('admin/standards')}}" class="btn btn-danger text-white">Subjects List</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <div class="row">
            <!-- column -->
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
        
                    </div>
                    <div class="px-4 pb-4">
                        <h3 class="mb-3">Subject Form</h3>
                        <form action="{{url('admin/subjects')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="standard">Select Standard</label>
                                <select name="standard_id" id="standard" class="form-control">
                                    @foreach ($standards as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach 
                                </select>
                                @error('standard_id')
                                    <span class="text-danger">Please select Medium</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Subect Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn btn-success text-white">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection