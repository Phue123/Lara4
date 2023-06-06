$(document).ready(function(){

    console.log($('#addbtn'));
   
    $('#addbtn').click(function(event){
        event.preventDefault();
       
        let row="<div class='row'>";
        row+="<div class='col-md-2'>";
        row+="<label class='form-label'>Degree Name</label>";
        row+="<input type='text' name='degree[]' class='form-control'>";
        row+="</div>";
        row+="<div class='col-md-2'>";
        row+="<label class='form-label'>University Name</label>";
        row+="<input type='text' name='university[]' class='form-control'>";
        row+="</div>";
        row+="<div class='col-md-2'>";
        row+="<label class='form-label'>Start Date</label>";
        row+="<input type='date' name='start[]' class='form-control'>";
        row+="</div>";
        row+="<div class='col-md-2'>";
        row+="<label class='form-label'>End Date</label>";
        row+="<input type='date' name='end[]' class='form-control'>";
        row+="</div>";
        row+="<div class='col-md-2'>";
        row+="<button class='btn btn-danger removebtn'>Remove Btn</button>";
        row+="</div>";
        row+="</div>";
        $('#education').append(row);

        // $('.removebtn').click(function(event){
        //     event.preventDefault();
        //     $(this).parent().parent().remove();
        // })  
    })

    $(document).on('click','.removebtn',function(event){
        event.preventDefault();
        console.log("button is remove");
        $(this).parent().parent().remove();
    })

})