@extends('layouts.layout')

@section('content')

<div class="row row-cols-3 g-3">
    @forelse ( $trains as $key => $train )
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
                <a href="{{  route('train', [ 'id' => $train->id ]) }}" class="card-link">Card link</a>
            </div>
        </div>
    </div>
    @empty
        <h2>non ci sono treni oggi!</h2>        
    @endforelse
</div>

@endsection