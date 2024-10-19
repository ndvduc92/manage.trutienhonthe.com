@extends('layouts.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Gửi tín sứ</h3>
            </div>
        </div>

        <div class="clearfix"></div>
        @include('items.widget')
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br>
                        <form action="" method="POST" class="form-horizontal form-label-left">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <p class="alert alert-danger">{{ Session::get('error') }} Sử dụng cách gửi thông thường <a
                                        style="red" href="/mail/add">tại đây</a></p>
                            @endif
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">ID vật phẩm<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="number" name="itemid" class="form-control" required>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Số lượng<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="number" value="1" name="quantity" class="form-control" required>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Hình Thức<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="type" id="" class="form-control">
                                        <option value="all">Toàn bộ người chơi</option>
                                        <option value="online">Chỉ người chơi đang online</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Mô tả
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="description" class="form-control">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="/mail" class="btn btn-danger" type="button">Huỷ</a>
                                    <button type="submit" class="btn btn-success">Gửi</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('script')
    <script>
        $(document).ready(function() {
            $("#userid").change(function() {
                const userid = $('option:selected', this).attr('userid')
                window.location.href = `/mail/add?userid=${userid}`
            })
            $("#reset").click(function() {
                window.location.href = `/mail/add`
            })
        })
    </script>
@endsection
@endsection
