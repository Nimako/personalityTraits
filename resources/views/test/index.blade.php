@extends('layouts.app')

@section('content')

<section class="row">
    <div class="col-md-8 offset-md-2 mt-5">
    <div class="card bg-secondary bg-opacity-10">
        <div class="card-body">
          <h5 class="card-title text-center text-secondary mb-5">Are you an introvert or an extrovert?</h5>

          <form id="testForm" name="form"  method="POST" onsubmit="return SaveAnswer(event)">
          @csrf

            <div id="content"></div>

          </form>

           
        </div>
      </div>
    </div>
</section>

@endsection