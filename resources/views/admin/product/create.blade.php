@extends('layouts.admin_layout')

@section('title', 'Добавить товар')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить товар</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if(session('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <!-- form start -->
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Введите название товара" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" class="form-control" name="slug" id="exampleInputEmail1" placeholder="Введите название slug" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <input type="text" class="form-control" name="description" id="exampleInputEmail1" placeholder="Введите описание" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="feature_image">Feature Image</label>
                            <input class="form-control" type="text" id="feature_image" name="image" value="" readonly>
                            <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Выбор категории</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                <option value="{{$category['id']}}" >{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

