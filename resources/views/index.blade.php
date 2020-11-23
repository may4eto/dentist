<x-layout>

    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-md-end">
                <div class="col-12 col-md-6 text-center text-md-left">
                <h1 class="font-weight-light">Studio Dentistico <br> Dott. Simone Sapienza</h1>
                <h2 class="">Cura il tuo sorriso!</h2>
                <a class="btn btn-rounded btn-primary my-5 text-uppercase">Prenota visita</a>
                </div>
            </div>
        </div>
    </header>

    <x-homesection>
        <h2>I nostri servizi</h2>   
        <a href="{{route('servizi')}}" class="btn btn-rounded btn-primary mt-3 mb-5 text-uppercase">Scopri i nostri servizi</a>
    </x-homesection>

    <x-homesection>
        <h2 class="mb-5">Il nostro team</h2>  
        <div class="row">
            <div class="col-6 col-md-3 mb-4">
                <div class="card border-0 shadow">
                    <img src="/images/dentist1.jpg" class="card-img-top" alt="team member">
                    <div class="card-body text-center">
                    <h5 class="card-title mb-0">
                        Dott. Simone Sapienza
                    </h5>
                    <div class="card-text text-black-50">
                        Ortodonzia, Implantologia
                    </div>
                    </div>
                </div>
            </div>  
            <div class="col-6 col-md-3 mb-4">
                <div class="card border-0 shadow">
                    <img src="/images/dentist2.jpg" class="card-img-top" alt="team member">
                    <div class="card-body text-center">
                    <h5 class="card-title mb-0">
                        Dott. Angelo Maggialetti
                    </h5>
                    <div class="card-text text-black-50">
                        Implantologia
                    </div>
                    </div>
                </div>
            </div> 
            <div class="col-6 col-md-3 mb-4">
                <div class="card border-0 shadow">
                    <img src="/images/dentist3.jpg" class="card-img-top" alt="team member">
                    <div class="card-body text-center">
                    <h5 class="card-title mb-0">
                        Dott. Giovanni Paolillo
                    </h5>
                    <div class="card-text text-black-50 text-truncate">
                        Odontoiatria, Igiene e prevenzione
                    </div>
                    </div>
                </div>
            </div> 
            <div class="col-6 col-md-3 mb-4">
                <div class="card border-0 shadow">
                    <img src="/images/dentist4.jpg" class="card-img-top" alt="team member">
                    <div class="card-body text-center">
                    <h5 class="card-title mb-0">
                        Dr.ssa Beatrice Grimaldi
                    </h5>
                    <div class="card-text text-black-50">
                        Igiene e prevenzione
                    </div>
                    </div>
                </div>
            </div>  
        </div>
        <a href="{{route('team')}}" class="btn btn-rounded btn-primary mt-3 mb-5 text-uppercase">Scopri il nostro team</a>
    </x-homesection>

    <x-homesection>
        <h2>Dicono di noi</h2>   
    </x-homesection>

</x-layout>