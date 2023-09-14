@extends('backend.layout')
@section('title','Dashbord')
@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Courses List</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Course</a></li>
                            <li class="breadcrumb-item active" aria-current="page">course-list</li>
                        </ol>
                    </nav>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <div class="d-md-flex">
                            <div>
                                <h4 class="card-title">All Courses List</h4>
                                <h5 class="card-subtitle">Overview of all courses</h5>
                            </div>
                        </div>
                        <!-- title -->
                    </div>
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">#ID</th>
                                    <th class="border-top-0">State</th>
                                    <th class="border-top-0">Board</th>
                                    <th class="border-top-0">Medium</th>
                                    <th class="border-top-0">Standard</th>
                                    <th class="border-top-0">Subject</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Actication key</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $item)
                                <tr>
                                    @if (isset($item->standard_id))
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->standard->medium->board->state->name}}</td>
                                    <td>{{$item->standard->medium->board->name}}</td>
                                    <td>{{$item->standard->medium->name}}</td>
                                    <td>{{$item->standard->name}}</td>
                                    <td>--</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a href="{{url('admin/course/activation', ['course'=>$item->id])}}" class="">{{$item->count}}</a>
                                    </td>
                                    <td>
                                        @if ($item->status == 1)
                                           <span class="text-success">Active</span> 
                                        @else
                                            <span class="text-danger">Disable</span> 
                                        @endif
                                    </td>
                                    @endif
                                    @if(isset($item->subject_id))
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->subject->standard->medium->board->state->name}}</td>
                                    <td>{{$item->subject->standard->medium->board->name}}</td>
                                    <td>{{$item->subject->standard->medium->name}}</td>
                                    <td>{{$item->subject->standard->name}}</td>
                                    <td>{{$item->subject->name}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a href="{{url('admin/course/activation', ['course'=>$item->id])}}" class="">{{$item->count}}</a>
                                    </td>
                                    <td>
                                        @if ($item->status == 1)
                                           <span class="text-success">Active</span> 
                                        @else
                                            <span class="text-danger">Disable</span> 
                                        @endif
                                    </td>
                                    @endif
                                    <td>
                                        <a href="{{route('courses.edit', ['course'=>$item->id])}}"><button class="btn btn-sm btn-info"><span class="mdi mdi-pen"></span> Edit</button></a>
                                        <form action="{{ route('courses.destroy', ['course' => $item->id]) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger text-white"><span class="mdi mdi-delete-empty"></span> Delete</button>
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
@endsection