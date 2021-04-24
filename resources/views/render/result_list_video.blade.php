@if(count($listVideo) > 0)
    <div class="col-md-12">
        <div class="panel panel-white">
            <div class="panel-heading clearfix">
                <h4 class="panel-title">Responsive table</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{ trans('title.quality') }}</th>
                            <th>{{ trans('title.qualityLabel') }}</th>
                            <th>{{ trans('title.type') }}</th>
                            <th>{{ trans('title.review') }}</th>
                            <th>{{ trans('title.url') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($listVideo as $item)
                            @php
                                $typeLast = explode(';', explode('/', $item->mimeType)[1])[0];
                                $typeFirst = explode('/', $item->mimeType)[0];
                            @endphp
                            <tr>
                                <td style="vertical-align: middle;">{{ $item->quality }}</td>
                                <td style="vertical-align: middle;">{{ $item->qualityLabel }}</td>
                                <td style="vertical-align: middle;">{{ $typeFirst }}</td>
                                <td style="vertical-align: middle;">
                                    <video src="{{ $item->url }}" width="256px" controls>
                                    </video>
                                </td>
                                <td style="vertical-align: middle;">
                                    <button class="btn btn-primary">
                                        <a style="color: white;" href="{{ route('download.video', ['url' => $item->url]) }}"
                                           download="{{ rand(9999, 999999999).'video_download'.$typeLast }}">{{ trans('title.download') }}</a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="alert alert-danger">
        {{ trans('label.error_url_video_youtube') }}
    </div>
@endif
