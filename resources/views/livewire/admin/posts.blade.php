<div>
    <ul class="timeline">
        @foreach ($post as $posts)
        <li>
            <div class="timeline-time">
                <span class="date">10 January 2014</span>
                <span class="time">20:43</span>
            </div>
            <!-- end timeline-time -->
            <!-- begin timeline-icon -->
            <div class="timeline-icon">
                <a href="javascript:;">&nbsp;</a>
            </div>
            <!-- end timeline-icon -->
                <!-- begin timeline-body -->
                <div class="timeline-body">
                    <div class="timeline-header">
                        <span class="userimage"><img src="../assets/img/user/user-7.jpg" alt=""></span>
                        <span class="pull-right text-muted"></span>
                    </div>
                    <div class="timeline-content">
                        <h4 class="template-title">
                            {{-- <i class="fa fa-map-marker-alt text-danger fa-fw"></i> --}}
                            {{ $posts ->title }}
                        </h4>
                        <p>{{ $posts ->body }}
                        </p>
                        <p class="m-t-20">
                            <img src="../assets/img/gallery/gallery-4.jpg" alt="">
                        </p>
                    </div>
                </div>
                <!-- end timeline-body -->
        </li>
        @endforeach

    </ul>
</div>
