@extends('layouts.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Công cụ Game</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_content">
                    <div class="row">
                        <a class="animated flipInY col-lg-3 col-md-3 col-sm-6  " href="/tools?type=online">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-check-square-o"></i>
                                </div>
                                <div class="count">&nbsp</div>
    
                                <h3>Danh sách online</h3>
                            </div>
                        </a>
                        <a class="animated flipInY col-lg-3 col-md-3 col-sm-6 " href="/trades">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-exchange"></i>
                                </div>
                                <div class="count">&nbsp</div>
    
                                <h3>Check giao dịch Game</h3>
                            </div>
                        </a>
                        <a class="animated flipInY col-lg-3 col-md-3 col-sm-6  " href="/items">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-check-square-o"></i>
                                </div>
                                <div class="count">&nbsp</div>
    
                                <h3>Tra cứu item</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
