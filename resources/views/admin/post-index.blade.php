<div>
    <ul class="timeline">
        @foreach ($posts as $post)
        <li>
            <div class="timeline-time">
                <span class="date">{{ $post->created_at->format('jS F, o') }}</span>
                <span class="time">{{ $post->created_at->format('g:i A') }}</span>
            </div>

            <div class="timeline-icon">
                <a href="javascript:;">&nbsp;</a>
            </div>

            <div class="timeline-body">
                <div class="timeline-content">
                    <h4 class="template-title">
                        {{ $post->title }}
                    </h4>
                    </p>
                    <p class="m-t-20">
                        {{-- @foreach ($post->images as $image)
                            @if($loop->first)
                                <img src="{{ asset($image->filename) }}" alt="">
                            @endif
                        @endforeach --}}
                        <img src="{{ asset('storage/' . $post->image->filename) }}" alt="">
                    </p>
                </div>
            </div>
        </li>
        @endforeach

    </ul>
</div>
