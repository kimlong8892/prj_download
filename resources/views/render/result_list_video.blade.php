<div>
    <table border="1px" cellspacing="0px" style="margin: 0 auto;" cellpadding="5px">
        <tr>
            <th>{{ trans('title.quality') }}</th>
            <th>{{ trans('title.qualityLabel') }}</th>
            <th>{{ trans('title.type') }}</th>
            <th>{{ trans('title.review') }}</th>
            <th>{{ trans('title.url') }}</th>
        </tr>
        @foreach($listVideo as $item)
            @php
                $typeLast = explode(';', explode('/', $item->mimeType)[1])[0];
                $typeFirst = explode('/', $item->mimeType)[0];
            @endphp
            <tr>
                <td>{{ $item->quality }}</td>
                <td>{{ $item->qualityLabel }}</td>
                <td>{{ $typeFirst }}</td>
                <td>
                    <video src="{{ $item->url }}" width="256px" controls>
                    </video>
                </td>
                <td>
                    <button>
                        <a href="{{ route('download.video', ['url' => $item->url]) }}"
                           download="{{ rand(9999, 999999999).'video_download'.$typeLast }}">{{ trans('title.download') }}</a>
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
