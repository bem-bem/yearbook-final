@extends('pages.layout.app')

@section('contents')
<div class="row ">

  <div class="col-12">
  <div class="card shadow">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#0099ff" fill-opacity="0.4" d="M0,128L34.3,128C68.6,128,137,128,206,112C274.3,96,343,64,411,53.3C480,43,549,53,617,74.7C685.7,96,754,128,823,144C891.4,160,960,160,1029,181.3C1097.1,203,1166,245,1234,256C1302.9,267,1371,245,1406,234.7L1440,224L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
   <div class="card-body">
          
          {{-- nested row --}}
          <div class="row">

            <div class="col-md-6">
                  <h5 class="display-5">{{ $classphoto->name }}</h5>
                  <article class="px-3">
                    <p>{{ $classphoto->birthday }}</p>
                    <p>{{ $classphoto->yearlevel }}</p>
                    <p>{{ $classphoto->course_strand }}</p>
                    <p>{{ $classphoto->section_block }}</p>
                    <p>{{ $classphoto->schoolyear }}</p>
                  </article>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item shadow mb-3">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Goal
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">{{ $classphoto->goal }}</div>
                        </div>
                      </div>
                      <div class="accordion-item shadow mb-3">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Motto
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">{{ $classphoto->motto }}</div>
                        </div>
                      </div>

                      @if (!empty($classphoto->awards))
                      <div class="accordion-item shadow mb-3">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Awards
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">{{ $classphoto->awards }}</div>
                        </div>
                      </div>
                      @endif
                    </div>
            </div>
        
            <div class="col-md-6 text-center">
              @img(['src' => $classphoto->image]) @endimg
            </div>
        
          </div>
          {{-- nested row --}}

        </div>
      </div>
  </div>

</div>

@endsection