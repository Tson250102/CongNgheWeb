@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Thêm tác phẩm mới</h2>
    <form method="POST" action="{{ route('artworks.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="artist_name">Tên nghệ sĩ:</label>
            <input type="text" name="artist_name" id="artist_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Mô tả:</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="art_type">Loại nghệ thuật:</label>
            <select name="art_type" id="art_type" class="form-control" required>
                <option value="hội họa">Hội họa</option>
                <option value="âm nhạc">Âm nhạc</option>
                <option value="văn học">Văn học</option>
            </select>
        </div>

        <div class="form-group">
            <label for="media_link">Đường dẫn phương tiện:</label>
            <input type="text" name="media_link" id="media_link" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="cover_image">Hình ảnh bìa:</label>
            <input type="file" name="cover_image" id="cover_image" class="form-control-file" required>
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>
@endsection
