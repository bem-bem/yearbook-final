@extends('pages.layout.app')

@section('contents')
<div class="row ">

  <div class="col-12">
  <div class="card shadow">
       @cssWave() @endcssWave
   <div class="card-body">
          
          {{-- nested row --}}
          <div class="row">

            <div class="col-md-6">
              @img(['src' => $student->image]) @endimg
            </div>

            <div class="col-md-6 text-end">
                  <h5 class="display-5">{{ $student->name }}</h5>
                  <article class="px-3">
                    <p>{{ $student->birthday }}</p>
                    <p>{{ $student->yearlevel }}</p>
                    <p>{{ $student->course_strand }}</p>
                    <p>{{ $student->section_block }}</p>
                    <p>{{ $student->schoolyear }}</p>
                  </article>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item shadow mb-3">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Goal
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">{{ $student->goal }}</div>
                        </div>
                      </div>
                      <div class="accordion-item shadow mb-3">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Motto
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">{{ $student->motto }}</div>
                        </div>
                      </div>

                      @if (!empty($student->awards))
                      <div class="accordion-item shadow mb-3">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Awards
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">{{ $student->awards }}</div>
                        </div>
                      </div>
                      @endif
                    </div>
            </div>
        
          </div>
          {{-- nested row --}}

        </div>
      </div>
  </div>

</div>

@endsection