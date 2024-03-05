<div>
    {{-- Do your work, then step back. --}}
    @foreach ($aboutUniversity as $about)
    <div class="section-bg style-1" style="background-image: url('{{ asset('front/images/about_1.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="section-title-underline style-2">
                        <span>{{ $about->title }}</span>
                    </h2>
                </div>
                <div class="col-lg-8">
                    <p class="lead">{!! $about->content !!}</p>
                    @if ($about->link != "")
                    <p><a target="blank" href="{{ $about->link }}">Read more</a></p>
                    @endif
                    <p><a target="blank" href="https://ajiet.edu.in/">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>