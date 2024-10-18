@extends('layouts.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tra cứu vật phẩm</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br>
                        <form action="" method="POST" class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Vật phẩm</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="select2_single_custom form-control" name="type">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.select2_single_custom').select2({
            data: [],
            minimumInputLength: 3,
            allowClear: true,
            templateResult: format,
            templateSelection: format,
            escapeMarkup: function(m) {
                return m;
            },
            ajax: {
                url: '/items/search',
                data: function(params) {
                    var query = {
                        key: params.term
                    }
                    return query;
                },
                processResults: function(data, params) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.name,
                                id: item.itemid,
                                data: item.image
                            };
                        })
                    };
                }
            }
        });

        function format(state) {
            if (!state.id) return state.text;
            return '<img src="' + state?.data + '" title="Click for the larger version." />' + state.text;
        }
    </script>
@endsection
