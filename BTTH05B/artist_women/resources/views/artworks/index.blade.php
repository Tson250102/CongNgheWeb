@extends('layouts.app')

@section('title', 'Trang Chủ')

@section('content')
    <section class="py-5 text-center">
        <div class="container">
            <h1 class="display-4">Chào mừng đến với Trang Chủ</h1>
            <p class="lead">Danh sách các tác phẩm nghệ thuật độc đáo</p>
        </div>
    </section>

    <div class="container">
        <h2 class="text-center mb-4">Danh sách các tác phẩm</h2>
        <div class="row">
            @foreach ($artworks as $artwork)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 bg-white">
                        <img src="{{ $artwork->cover_image }}" class="card-img-top" alt="{{ $artwork->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $artwork->title }}</h5>
                            <p class="card-text">{{ $artwork->description }}</p>
                            <p class="card-text"><strong>Loại nghệ thuật:</strong> {{ $artwork->art_type }}</p>
                            <p class="card-text"><strong>Tên nghệ sĩ:</strong> {{ $artwork->artist_name }}</p>
                            <p class="card-text"><strong>Đường dẫn phương tiện:</strong> <a href="{{ $artwork->media_link }}" target="_blank">{{ $artwork->media_link }}</a></p>
    
                            <!-- Nút Sửa -->
                            <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-secondary">Sửa</a>
    
                            <!-- Nút Xóa -->
                            <form action="{{ route('artworks.destroy', $artwork->id) }}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
        <!-- Nút Thêm -->
        <div class="text-center mt-4">
            <a href="{{ route('artworks.create') }}" class="btn btn-primary">Thêm</a>
        </div>
    </div>
    
@endsection
