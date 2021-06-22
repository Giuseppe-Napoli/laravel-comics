@extends('layouts.main')

@section('content')

<main>
    
    <section class=" container">
    <div class="etichetta">
        <h2>Current series</h2>
    </div>
      @foreach ($comics as $comic)
          <div class="box">
              <div class="box-img">
                  <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
              </div>
              <h4>{{$comic['series']}}</h4>
          </div>
      @endforeach
      <button>load more</button>
    </section>
    
    @include('partials.banner')

@endsection