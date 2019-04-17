<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title ?? __('mage.documents.title') }}</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa @if($vault->count()) fa-minus @else fa-plus @endif"></i></button>
        </div>
    </div>
    <div class="card-body" style="@if($vault->count()) display: block @else display: none @endif">
        <ul class="file-manager overlayscroll" style="max-height: {{ $height ?? 400 }}px">
            @foreach($vault as $file)
            <li class="file-item">
                @if($options)
                <div class="file-control">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label file-label" for="customCheck1"></label>
                    </div>
                </div>
                <div class="file-settings">
                    <a href="#">
                        <i data-feather="more-vertical"></i>
                    </a>
                </div>
                @endif
                <a href="{{ route($route, $file->id) }}" target="_blank" class="file-details">
                    <div class="media-block">
                        <div class="media-left">
                        <img src="{{ url("vendor/mage/images/file-icons/".$file->icon().".svg") }}" alt="{{ $file->icon() }}">
                        </div>
                        <div class="media-body">
                            <p class="file-name" style="">{{$file->filename}}</p>
                            <small>
                                {{$file->dateTime('d/m/Y - H:s')}} | {{$file->size()}}
                                @if(!is_null($file->data) && count($file->data))
                                    @foreach($file->data as $attribute => $value)
                                        | {{ __($attribute) }}: {{ __($value) }}
                                    @endforeach
                                @endif
                            </small>
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>    
</div>
