@extends('layouts.app')

@section('content')

<section class="row">
    <div class="col-md-7 offset-md-2 mt-5">
    <div class="card bg-secondary bg-opacity-10">
        <div class="card-body p-5">

          <h5 class="card-title text-center text-dark mb-5"><i>Your Result</i></h5>

           <p class="h1 text-center">
            You are more of a public introvert and private extrovert
           </p>

           <p class="mt-5" style="text-align: justify">
               Within your circle of family and friends, you are completely at ease and it’s often you who takes 
               the lead to organise outings, dinners, vacations, etc. However, as soon as you are in a public
                or professional setting you become rather inhibited. You don’t feel in tune with what you would
                 qualify as agitation, rivalry or vainglory and this can sometimes appear to others as a kind 
                 of hidden criticism or a lack of ambition. In fact, your pragmatic temperament helps you 
                 successfully manage problems as and when they arise. You aren’t the kind to calculate your 
                 every move and plan every inch of your life, and you find the sphere of family and friends
                  to be much more gratifying to the professional sphere. You are more expressive in emotional, 
                  sensorial and human terms and at home your organisation skills and capacity to oil the family 
                  wheels work well and many of your family and friends appreciate your qualities and skills.
           </p>

           <p style="text-align: justify" calss="mb-4">
            At first glance, people find it hard to understand how you could be so comfortable organising your 
            private life and then seem to lose the better part of your self-confidence when you’re in public. 
            Maybe it’s a question of rhythm? If you feel comfortable in your domestic rhythm it’s perhaps because 
            it works more on a short-term basis (day, week or more rarely a month). On the contrary, the rhythm of 
            professional life seems less concrete and more distant as the professional agenda works more to quarterly
             or annual plans, that you have no control over. Is this the source of your lessened motivation? You can’t
              control all the cards so you have to adapt and, in fact, that doesn’t interest you at all? If this difference
               between work and home life doesn’t bother you, then carry on. However, if you feel frustrated by this
                imbalance, it could be useful to look into the deeper reasons (either on your own or with someone else)
                 that keep you less focused on professional ambition. For instance, such reasons could be: a lack 
                 of thanks and recognition, a fear of not being up to the mark… It’s up to you to find out.
           </p>


           <div class=" d-flex justify-content-center mt-5">
          
            <a href="{{url('test')}}"   class="btn btn-secondary btn-lg me-5"> Retake test</a>

          </div>



        

           
        </div>
      </div>
    </div>
</section>

@endsection