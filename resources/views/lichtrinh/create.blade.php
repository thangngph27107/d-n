@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">


        <div class="card-body" style="display: flex; justify-content: center; align-items: center; margin-top: 20px; gap: 20px;">

        <div>
            <div class="row">
                <div class="col-md-6">
                    <img style="width: 450px; height: 450px;" src="https://document-export.canva.com/P9EbM/DAF3uMP9EbM/3/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20240124%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20240124T025642Z&X-Amz-Expires=29588&X-Amz-Signature=01a0abb538839fe53501673280bbad26680a047498fd1e8d427ebee22de97dcb&X-Amz-SignedHeaders=host&response-expires=Wed%2C%2024%20Jan%202024%2011%3A09%3A50%20GMT" alt="">
                </div>
                <div style="text-align: center; border: 1px solid; height: 20px;">
                    <a style="text-decoration: none;" href="{{route('lichtrinh.index')}}" class="btn btn-primary float-end">Danh sách tùy chỉnh trang chủ</a>
                </div>
            </div>
        </div>
        @foreach ($nhomnhac as $nl)
            <form action="{{route('lichtrinh.store')}}" enctype="multipart/form-data" method="POST" style="border: 1px solid;">
               <h1 style="text-align: center;">Thêm thân tượng mới {{$nl->tennn}}</h1>
            @endforeach
                @csrf

                <div style="display: flex; gap: 20px;">

                    <div>
                                <div class="form-group" style="width: 300px; margin-left: 20px;">
                                    <strong>Nhóm</strong><br>
                                    @foreach ($nhomnhac as $nl)
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="nhomnhac_id" class="form-control" value="{{$nl->id}}">
                                    @endforeach
                                </div>

                                <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                <strong>Tên lịch trình</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="tenlt" class="form-control" placeholder="Nhập tên sản phẩm">
                                </div>

                                <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                <strong>Ngày công diễn</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="date" name="thoigian" class="form-control">
                                </div>
                                
                                <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                <strong>Địa điểm công diễn</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="text" name="diadiem" class="form-control" placeholder="Nhập tên sản phẩm">
                                </div>

                                <div class="form-group" style="width: 300px; margin-left: 20px; margin-top: 20px;">
                                <strong>Số lượng vé</strong><br>
                                    <input style="width: 200px; height: 30px; border-top: none; border-left: none; border-right: none;" type="number" name="slve" class="form-control" placeholder="Nhập tên sản phẩm">
                                </div>

                    </div>

                    <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img style="width: 300px; height: 200px;" src="https://phongreviews.com/wp-content/uploads/2022/11/avatar-facebook-mac-dinh-15.jpg" id="img" height="500">
                                    </div>
                                    <input type="file" name="anhbn" accept="image/*" class="form-control-file" class="@error ('image') is-invalid @enderror" id="input">
                                </div>

                                <div class="form-group" style="margin-top: 25px;">
                                <label for="photo">Bài hát biểu diễn</label>
                                @foreach($baihat as $kc)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="{{$kc->tenbh}}" name="cktrinhdien[]">
                                    <label class="form-check-label">{{$kc->tenbh}}</label>
                                </div>
                                @endforeach
                </div>
                    </div>
                </div>


                <button type="submit" style="width: 100%; margin-top: 20px; height: 30px;">Thêm thần tượng mới</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('upload_file/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('upload_file/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('upload_file/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script>
   let img = document.getElementById('img');
   let input = document.getElementById('input');

   input.onchange = (e) => {
    if(input.files[0])
    img.src = URL.createObjectURL(input.files[0]);
   };
</script>

@endsection