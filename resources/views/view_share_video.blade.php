@extends('layouts.master')


@section('main')
    <div class="row" style="padding: 10px;">
        <div class="col-md-12">
            @php
                $users = [];
                $users[] = '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="http://via.placeholder.com/36x36" alt="" class="img-circle"><br> Kim Long </a>';
                $users[] = '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="http://via.placeholder.com/36x36" alt="" class="img-circle"><br> Kim Long </a>';
                $users[] = '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="http://via.placeholder.com/36x36" alt="" class="img-circle"><br> Kim Long </a>';
                $users[] = '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="http://via.placeholder.com/36x36" alt="" class="img-circle"><br> Kim Long </a>';
                $users[] = '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="http://via.placeholder.com/36x36" alt="" class="img-circle"><br> Kim Long </a>';
                $users[] = '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="http://via.placeholder.com/36x36" alt="" class="img-circle"><br> Kim Long </a>';
            @endphp
            <div class="row" style="display: flex;">
                @foreach($users as $user)
                    <div class="text-center" style="padding: 0px 10px;">
                        {!! $user !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row" style="display: flex;">
        <div class="col-md-9" style=" border: 1px solid grey;">
            <iFrame src="https://bloganchoi.com/ung-dung-xem-video-truc-tuyen/#gsc.tab=0" width="100%" style="height: 80vh; border: none;" allowfullscreen></iFrame>
        </div>
        <div class="col-md-3" style=" border: 1px solid grey;">
            1244
        </div>
    </div>
@endsection
