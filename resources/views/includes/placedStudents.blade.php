<div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center text-center">
        <div class="col-lg-6 mb-5">
          <h2 class="section-title-underline mb-3">
            <span>Popular Courses</span>
          </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
            <div class="owl-slide-3 owl-carousel">
              @if ($placedStudents->isNotEmpty())
                  @foreach ($placedStudents as $placedStudent)
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="{{ asset('storage/' .$placedStudent->image)}}" alt="Image" class="img-fluid"></a>
                      <div class="price">{{ $placedStudent->package }}</div>
                      <div class="category"><h3>{{ $placedStudent->company }}</h3></div>  
                    </figure>
                    <div class="course-1-content">
                      <h2>{{ $placedStudent->name }} <br> <span class="p-5">{{ $placedStudent->usn }}</span></h2>
                      <p>{{ $placedStudent->branch }}</p>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                    </div>
                  </div>  
                  @endforeach
              @endif
            </div>
        </div>
      </div>        
    </div>
  </div>