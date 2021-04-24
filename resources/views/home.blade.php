@extends('layouts.master')

@section('head')
    <title>{{ trans('home.title') }}</title>
    <script src="{{ asset('js/download_video_youtube.js') }}" defer></script>
@endsection


@section('main')
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


