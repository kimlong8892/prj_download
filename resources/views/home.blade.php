@extends('layouts.master')

@section('head')
    <title>{{ trans('home.title') }}</title>
    <script>
        $(document).ready(function () {
            $('#form-get-video input[name="url"]').keyup(function (event){
                if (event.keyCode == 13) {
                    $('#btn-get-video').click();
                }
            });

            $('#btn-get-video').click(function (e) {
                $("div.spanner").addClass("show");
                $("div.overlay").addClass("show");
                $.ajax({
                    url: @json(route('ajax.get_list_format_video')),
                    data: {
                        url: $('#form-get-video input[name="url"]').val()
                    },
                    success: function (data) {
                        $('#result-list-video').html(data);
                        $("div.spanner").removeClass("show");
                        $("div.overlay").removeClass("show");
                    }
                });
                e.preventDefault();
                return false;
            });
        });
    </script>
@endsection


@section('main')
    {{--    <div class="row">--}}
    {{--        <div class="col-md-12">--}}
    {{--            <div id="form-get-video"--}}
    {{--                 class="d-flex">--}}
    {{--                <input type="text" name="url" class="form-control w-75" placeholder="{{ trans('title.input_link') }}"><br>--}}
    {{--                <button id="btn-get-video" class="btn btn-primary w-25">{{ trans('title.submit') }}</button>--}}
    {{--            </div>--}}
    {{--        </div>--}}
{{--            <div id="result-list-video" class="col-md-12">--}}
{{--            </div>--}}
    {{--    </div>--}}
    <div style="padding: 15px;" id="form-get-video">
        <div style="margin-bottom:15px;" class="input-group">
            <input value="https://www.youtube.com/watch?v=WCTxjnzEu4k&ab_channel=Bomman" type="text" name="url" class="form-control" placeholder="{{ trans('title.input_link') }}">
            <span class="input-group-btn">
                <button id="btn-get-video" class="btn btn-success" type="button">{{ trans('title.submit') }}</button>
            </span>
        </div>
        <div id="result-list-video" class="col-md-12">
        </div>
    </div>
@endsection


