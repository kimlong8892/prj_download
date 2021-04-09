@extends('layouts.master')

@section('head')
    <title>{{ trans('home.title') }}</title>
    <script>
        $(document).ready(function (){
            $('#btn-get-video').click(function (e){
                $.ajax({
                    url: @json(route('ajax.get_list_format_video')),
                    data: {
                        url: $('#form-get-video input[name="url"]').val()
                    },
                    success: function(data) {
                        $('#result-list-video').html(data);
                    }
                });
                e.preventDefault();
                return false;
            });
        });
    </script>
@endsection


@section('main')
    <div style="text-align: center;">
        <div action="{{ route('home.post') }}" id="form-get-video">
            <input type="text" name="url" placeholder="{{ trans('title.input_link') }}"><br>
            <button id="btn-get-video">{{ trans('title.submit') }}</button>
        </div>
        <div id="result-list-video">

        </div>
    </div>
@endsection
