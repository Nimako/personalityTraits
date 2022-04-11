<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Personality Test</title>
    <style>
        /* .form-check-input {opacity: 0;} */
        </style>
</head>
<body>

     @include('layouts.menu')

    <div class="container">
        @yield('content')
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>

<script>
$(function(){

    GetPage(Pageurl="");

    checkPreviousAnswer();

});

function checkPreviousAnswer(){
    setTimeout(function() {
        if($("#previousAnswer").val() !=""){

            $("#submitBtn").removeAttr("disabled");

         }
    }, 599)
}
function GetPage(Pageurl=""){

    //var nextPageUrl = $("#nextPageUrl").val();

    if(Pageurl==""){
       Pageurl = "{{ route('test') }}";
    }else{
        Pageurl = Pageurl;
    }

    $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: Pageurl,
    success: function (data) {

            $("#content").html(data);
     
        },
        error: function() { 
            console.log(data);
        }
    });

    checkPreviousAnswer();
}


function SaveAnswer(e){
    e.preventDefault();

    var form = $('#testForm').get(0);

    $.ajax({
            url: "{{url('save-answer')}}",
            type: 'POST',
            data: new FormData(form),
            processData: false,
            contentType: false,
            beforeSend: function () {
                console.log("beforeSend");

            },
            complete: function () {
                console.log("complete");
            },
            success: function (response) {
              
                if(response !=""){
                   GetPage(response);
                }else{
                    window.location="{{url('test/result')}}";
                }
            },
            error: function (xhr) {
                console.log("error "+ xhr);
            }
        });
    
}

function SelectAnswer(id){

    $(".answerList").removeClass("bg-danger").removeClass("text-white").removeClass("px-1");
    $(".answerList").addClass("text-dark");

    $("#answerList"+id).addClass("bg-danger px-1 text-white");

    $("#submitBtn").removeAttr("disabled");
}
    

</script>
