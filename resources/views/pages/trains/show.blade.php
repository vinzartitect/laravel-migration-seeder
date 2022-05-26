@extends('layouts.layout')

@section('content')


    <div>
        <div class="col card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $train -> Azienda }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train -> StazionePartenza }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train -> StazioneArrivo }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train -> GiornoPartenza }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train -> OrarioPartenza }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train -> OrarioArrivo }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train -> CodiceTreno }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train -> NumeroCarrozze }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train -> InOrario }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train -> Cancellato }}</h6>                
                <a href="#" class="card-link">Card link</a>
            </div>
        </div>
    </div>


@endsection