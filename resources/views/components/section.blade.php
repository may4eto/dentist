<div class="container">
    <div class="row no-gutters my-5">
        <div class="col-12 col-md-6">
            <img src={{$image}} alt="" class="img-fluid shadow">
        </div>
        <div class="col-12 col-md-6 pl-0 pl-md-4">
            @if (isset($name, $title, $surname, $services, $description))
            <h2 class="mt-4 mt-md-0">{{$title}} {{$name}} {{$surname}}</h2>
            <p>{{$description}}</p>
            <p>
                <span class="border border-primary text-primary rounded px-2 py-1 mr-3">{{$services}}</span>
            </p>
            @elseif (isset($name, $description, $dentists))
            <h2 class="mt-4 mt-md-0">{{$name}}</h2>
            <p>{{$description}}</p>
            <p>
                <span class="border border-primary text-primary rounded px-2 py-1 mr-3">{{$dentists}}</span>
            </p>
            @endif
            <a href="{{route('contatti')}}" class="btn text-white bg-primary mt-4">Prenota visita</a>
        </div>
    </div>
</div>
