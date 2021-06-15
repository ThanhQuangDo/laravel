@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thêm danh mục truyện') }}</div>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('danhmuc.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputtdm">Tên danh mục</label>
                            <input type="text" value="{{old('tendanhmuc')}}" onkeyup="ChangeToSlug();" name="tendanhmuc" class="form-control" id="slug" aria-describedby="emailHelp" placeholder="Tên danh mục">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputsdm">Slug danh mục</label>
                            <input type="text" value="{{old('tendanhmuc')}}" name="slug_danhmuc" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug danh mục">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputmtdm">Mô tả danh mục</label>
                            <input type="text" value="{{old('motadanhmuc')}}" name="motadanhmuc" class="form-control" id="exampleInputmtdm" aria-describedby="emailHelp" placeholder="Mô tả danh mục">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputkh">Kích hoạt/Ẩn</label>
                            <select id="exampleInputkh" name="kichhoat" class="custom-select">
                                <option value="0">Kích hoạt danh mục</option>
                                <option value="1">Ẩn danh mục</option>
                            </select>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection