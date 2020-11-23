<div class="col-12 col-md-6 col-lg-3 mb-4">
    <div class="card border-0 shadow">
      <img src="{{$image}}" class="card-img-top" alt="">
      <div class="card-body text-center">
        @if (isset($title, $name, $surname, $services))
        <h5 class="card-title mb-0">
          {{$title}} {{$name}} {{$surname}}
        </h5>
        <div class="card-text text-black-50">
          {{$services}}
        </div>
        @elseif (isset($name))
        <h5 class="card-title mb-0">
          {{$name}}
        </h5>
        @endif
      </div>
    </div>
  </div>