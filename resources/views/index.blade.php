@extends('layouts.app')

@section('content')

<section class="row">
    <div class="col-md-6 offset-md-3 mt-5">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center text-secondary mb-5">Welcom to Team Way Personality Test</h5>
          
          <hr>
          <p class="card-text small">
            This test is a deep-dive into the personality traits of an individual. 
            The questions in this test are set-up to understand how a certain individual behaves,
            the decision making process and their temperament.
          </p>
          <hr>

          <div class=" d-flex justify-content-center">
          <a class="btn btn-success btn-lg"  href="{{url("test")}}">Start test</a>
          </div>


        </div>
      </div>
    </div>
</section>

@endsection