<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-4 mb-5">
                    <h2 class="section-title-underline mb-5">
                        <span>Our Teachers</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                @foreach ($faculties as $faculty)
                @if ($faculty->role == 2)
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="{{ asset('storage/' .$faculty->image) }}" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>{{ $faculty->name }}</h2>
                            <span class="position mb-3 d-block">{{ $faculty->designation }}</span>
                            <p>{{ $faculty->role }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach ($faculties as $faculty)
                @if ($faculty->role == 1)
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="{{ asset('storage/' .$faculty->image) }}" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>{{ $faculty->name }}</h2>
                            <span class="position mb-3 d-block">{{ $faculty->designation }}</span>
                            <p>{{ $faculty->role }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach ($faculties as $faculty)
                @if ($faculty->role == 3)
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="{{ asset('storage/' .$faculty->image) }}" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>{{ $faculty->name }}</h2>
                            <span class="position mb-3 d-block">{{ $faculty->designation }}</span>
                            <p>{{ $faculty->role }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <center>
                <div class="row">
                    @foreach ($faculties as $faculty)
                    @if ($faculty->role == 4)
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                        <div class="feature-1 border person text-center">
                            <img src="{{ asset('storage/' .$faculty->image) }}" alt="Image" class="img-fluid">
                            <div class="feature-1-content">
                                <h2>{{ $faculty->name }}</h2>
                                <span class="position mb-3 d-block">{{ $faculty->designation }}</span>
                                <p>{{ $faculty->role }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </center>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Jonas Tabble</h2>
                            <span class="position mb-3 d-block">Math Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

                    <div class="feature-1 border person text-center">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Craig Daniel</h2>
                            <span class="position mb-3 d-block">Math Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Taylor Simpson</h2>
                            <span class="position mb-3 d-block">Math Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Jonas Tabble</h2>
                            <span class="position mb-3 d-block">Math Teacher</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
