<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('advancing.owner.show.annotations')</h3>
        <div class="card-tools">
            <button class="btn btn-sm btn-success new-annotation" data-model-route="{{route('advancing.agency.annotation', $agency->id)}}" style="margin-right: 15px">Nueva </button>
            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa @if($agency->annotations->count()) fa-minus @else fa-plus @endif"></i></button>
        </div>
    </div>

    <div class="card-body" style="@if($agency->annotations->count()) display: block @else display: none @endif">
        <div class="panel-body annotation-body media-block overlayscroll scrollDown" style="height: 150px; max-height: {{ $height }}px">
            @php $dates = []; @endphp
            @php $userType = null; @endphp

            @foreach($annotations as $annotation)
                @if(!in_array($annotation->dateTime('d/m/Y'), $dates))
                    @if($userType != null) </div></div> @php $userType = null @endphp @endif
                <div class="annotation-meta-day">
                    <span class="badge">{{ $annotation->dateTime('d/m/Y') }}</span>
                </div>
                @endif
                @php $dates[] = $annotation->dateTime('d/m/Y'); @endphp

                @if($annotation->user_id == auth()->guard('mage')->user()->id && $userType != 'me')
                    @if($userType != null) </div></div> @endif
                <div class="annotation-me">
                    <div class="media-left">
                        <img src="http://advancing.local/images/avatar.jpg" class="img-circle img-sm" alt="Profile Picture">
                    </div>
                    @php $userType = 'me' @endphp
                    <div class="media-body">
                        @elseif($annotation->user_id != auth()->guard('mage')->user()->id && $userType != 'user')
                            @if($userType != null) </div></div> @endif
                <div class="annotation-user">
                    <div class="media-left">
                        <img src="http://advancing.local/images/avatar.jpg" class="img-circle img-sm" alt="Profile Picture">
                    </div>
                    @php $userType = 'user' @endphp
                    <div class="media-body">
                @endif
                <div>
                    <p>{{$annotation->annotation }}<small>{{$annotation->dateTime('H:i')}} - <i>{{$annotation->user->email ?? ''}}</i></small></p>
                </div>
            @endforeach
        </div>
        @if($userType != null) </div></div>@endif
    </div>
    <div class="card-footer" style="background: #ffffff;outline: 0;border-top: 1px solid #f1f1f1;">
        <div class="input-group">
            <input type="text" placeholder="Type your message" class="form-control form-control-trans" style="border: 0;border-radius: 0;">
            <span class="input-group-btn">
                <button class="btn btn-icon add-tooltip" data-original-title="Send" type="button">
                    <i data-feather="send" class="demo-pli-paper-plane icon-lg"></i>
                </button>
             </span>
        </div>
    </div>
</div>