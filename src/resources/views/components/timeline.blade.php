<div class="card card-timeline @if(!$timeline->count()) collapsed-card @endif">
    <div class="card-header">
        <h3 class="card-title">{{ $title ?? __('mage.timeline.title') }}</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa @if($timeline->count()) fa-minus @else fa-plus @endif"></i></button>
        </div>
    </div>
    <div class="card-body" style="@if($timeline->count()) display: block @else display: none @endif">
        <div class="timeline overlayscroll" style="max-height: {{$height ?? 400}}px">
            @php $dates = []; @endphp
            @foreach($timeline as $entry)
                @if(!in_array($entry->dateTime('d/m/Y'), $dates))
                    <div class="timeline-header">
                        <div class="timeline-header-title bg-primary">{{$entry->dateTime('d/m/Y')}}</div>
                    </div>
                @endif
                @php $dates[] = $entry->dateTime('d/m/Y'); @endphp
                <div class="timeline-entry">
                    <div class="timeline-stat">
                        <div class="timeline-icon"></div>
                        <div class="timeline-time">{{$entry->dateTime('H:i')}}</div>
                    </div>
                    <div class="timeline-label">
                        <span>{{ __($entry->status->key) }}</span>
                        {{--<span>{!! __($entry->related_model_key, [
                            'url' => route($entry->related_model_route, json_decode($entry->related_model_route_params, true))
                        ]) !!}</span>--}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
