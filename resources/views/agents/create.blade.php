<!doctype html>
<html lang="en">
<head>
    <title>Thêm đại lý</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card mt-2">
        <h5 class="card-header">Thêm đại lý</h5>
        <div class="card-body">
            <form method="post" action="{{ route('agent.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên đại lý</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                           class="form-control  @error('name') is-invalid @enderror">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Điện thoại</label>
                    <input type="text" name="phone" value="{{ old('phone') }}"
                           class="form-control  @error('phone') is-invalid @enderror">
                    @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}"
                           class="form-control  @error('email') is-invalid @enderror">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" value="{{ old('address') }}"
                           class="form-control  @error('address') is-invalid @enderror">
                    @error('address')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Tên người quản lý</label>
                    <input type="text" name="manager" value="{{ old('manager') }}"
                           class="form-control  @error('manager') is-invalid @enderror">
                    @error('manager')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <select name="stt" id="">
                        <option value="1">Hoạt động</option>
                        <option value="2">Ngừng hoạt động</option>
                    </select>
                    @error('stt')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                <a href="{{route('agent.index')}}" class="btn btn-danger">Thoát</a>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
