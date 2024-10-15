@extends('layouts.master')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Thông tin vật phẩm</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <a href="/shops/add" class="nav navbar-right panel_toolbox">
                        <li>
                            <button href="/shops/add" role="" class="btn btn-success">Thêm Mới</button>
                        </li>
                    </a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID vật phẩm</th>
                                            <th>Tên vật phẩm</th>
                                            <th>Giá tiền (xu)</th>
                                            <th>Xếp chồng</th>
                                            <th>Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($shops as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1}}</td>
                                            <td><a href="/shops/{{$item->id}}/edit">{{$item->itemid}}</a></td>
                                            <td>{{$item->name }}</td>
                                            <td>{{$item->price }}
                                            <td>{{$item->stack }}
                                            </td>
                                            <th>{!! $item->status == "active" ? "<span class='btn btn-sm btn-success'>Đang bán</span>" : "<span class='btn btn-sm btn-danger'>Ngừng bán</span>" !!}</th>
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
    </div>
</div>
@endsection