@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex">
                        <h1 class="m-0">{{$tag->title}}</h1>
                        <a href="{{route('admin.tag.edit', $tag->id)}}"><i class="text-success m-lg-2 nav-icon fas fa-edit"></i></a>
                        <form action="{{route('admin.tag.delete', $tag->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="m-lg-n1 text-danger nav-icon fas fa-trash" role="button"></i>
                            </button>

                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <div class="mt-3 row">
                    <div class="col-6">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$tag->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{$tag->title}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>



@endsection
