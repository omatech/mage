<ul class="file-manager overlayscroll" style="max-height: {{ $height }}px">
    @foreach($vault as $file)
    <li class="file-item" style="margin-bottom: 20px">
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
        <a href="{{route('mage.vault.get', $file->id)}}" target="_blank" class="file-details">
            <div class="media-block">
                <div class="media-left">
                    <img src="http://advancing.local/images/{{$file->icon()}}.svg" alt="{{$file->icon()}}">
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