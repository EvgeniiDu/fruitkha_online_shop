@extends('layouts.admin_layout')

@section('title', 'Редактирование товара')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование товара: {{$product['title']}}</h1>
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
                <form action="{{ route('product.update', $product['id']) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" value="{{$product['title']}}" class="form-control" name="title" id="exampleInputEmail1" placeholder="Введите название продукта" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" value="{{$product['slug']}}" class="form-control" name="slug" id="exampleInputEmail1" placeholder="Введите slug" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <input type="textarea" value="{{$product['description']}}" class="form-control" name="description" id="exampleInputEmail1" placeholder="Введите описание товара" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="feature_image">Фото товара</label>
                            <input class="form-control" type="text" id="feature_image" name="image" value="{{$product['image']}}" readonly>
                            <a href="" class="popup_selector" data-inputid="feature_image">Выбрать фото</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Категория</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    @if($category->id == $product->category_id)
                                        <option value="{{$category['id']}}" selected>{{$category->title}}</option>
                                        @continue
                                    @endif
                                        <option value="{{$category['id']}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input type="text" value="{{$product['price']}}" class="form-control" name="price" id="exampleInputEmail1" placeholder="Введите цену" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Обновить</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


