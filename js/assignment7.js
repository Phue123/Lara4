$(document).ready(function(){

    console.log($('#addbtn'));
   
    $('#addbtn').click(function(event){
        event.preventDefault();
       
        let row="<div class='row'>";
        row+="<div class='col-md-3'>";
        row+="<label class='form-label'>Description</label>";
        row+="<input type='text' name='description[]' class='form-control'>";
        row+="</div>";
        row+="<div class='col-md-3'>";
        row+="<label class='form-label'>Quantity</label>";
        row+="<input type='number' name='quantity[]' class='form-control'>";
        row+="</div>";
        row+="<div class='col-md-3'>";
        row+="<label class='form-label'>Price</label>";
        row+="<input type='number' name='price[]' class='form-control'>";
        row+="</div>";
        row+="<div class='col-md-2 my-4'>";
        row+="<button class='btn btn-danger removebtn'>Remove Btn</button>";
        row+="</div>";
        row+="</div>";
        $('#invoice').append(row);

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