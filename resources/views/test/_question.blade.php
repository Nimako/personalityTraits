   
    <input type="hidden" id="previousPageUrl" name="previousPageUrl" value="{{$previousPageUrl}}">
    <input type="hidden" id="nextPageUrl" name="nextPageUrl" value="{{$nextPageUrl}}">
    <input type="hidden" id="previousAnswer" value="{{@$previous_answer->answer_id}}">

    <section id="wrapper">
          <p class="small">Question {{$currentPage}} / {{$totalPage}}</p>
          @foreach ($questions as $item )

          <input type="hidden" id="question_id" name="question_id" value="{{$item->id}}">

          <p class="h5 mb-2">{{$item->question}}</p>

          <i class="small mt-5">All questions are required</i>
          
          <ul class="list-group my-4">
            @foreach ($answers as $key => $ans)

              <?php $isChecked = (!empty($previous_answer->answer_id)&&($previous_answer->answer_id==$ans->id))?"checked='checked'":null; ?>
              <?php $isCheckedCss = (!empty($previous_answer->answer_id)&&($previous_answer->answer_id==$ans->id))?"bg-danger px-1 text-white":null; ?>

              <li class="list-group-item mb-2">
                <label for="{{$ans->id}}"><span class="answerList {{$isCheckedCss}}" id="answerList{{$ans->id}}">{{$alphabet[$key]}}</span>
                <input class="form-check-input me-1" type="radio" name="answer" id="{{$ans->id}}" {{$isChecked}} onclick="SelectAnswer({{$ans->id}})" required=""  value="{{$ans->id}}" >
                {{$ans->answer}}
               </label>
              </li>

            @endforeach
          </ul>

          @endforeach

          <div class=" d-flex justify-content-justify">
          
            @if($currentPage != 1)

            <button type="button"  class="btn btn-secondary  btn-lg me-5" onclick="GetPage('{{$previousPageUrl}}')" style="width:50%">< Previous</button>

            @endif

           <button type="submit" id="submitBtn" {{($isChecked != null)?null:'disabled=""'}} class="btn btn-lg {{ ($currentPage != $totalPage)?'btn-secondary':'btn-danger' }}"   style="width:{{($currentPage == 1)?'100%':'50%'}}"> 
              {{ ($currentPage != $totalPage)?'Next question >':'Finish test' }} 
           </button>

          </div>
</section>