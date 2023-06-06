$(document).ready(function(){
    console.log('#addbtn');
    var i=0;
    $('#addbtn').click(function(event){
        event.preventDefault();

        // let row="<div class='row'>";
        // row+="<div class='col-md-2'>";
        // row+="<label class='form-label'>Degree Name</label>";
        // row+="<input type='text' name='degree[]' class='form-control'>";
        // row+="</div>";
        // row+="<div class='col-md-2'>";
        // row+="<label class='form-label'>University Name</label>";
        // row+="<input type='text' name='university[]' class='form-control'>";
        // row+="</div>";
        // row+="<div class='col-md-2'>";
        // row+="<label class='form-label'>Start Date</label>";
        // row+="<input type='date' name='start[]' class='form-control'>";
        // row+="</div>";
        // row+="<div class='col-md-2'>";
        // row+="<label class='form-label'>End Date</label>";
        // row+="<input type='date' name='end[]' class='form-control'>";
        // row+="</div>";
        // row+="<div class='col-md-2'>";
        // row+="<button class='btn btn-danger removebtn'>Remove Btn</button>";
        // row+="</div>";
        // row+="</div>";

        // $('#education').append(row);

        formValidation();
    })

    var formValidation = () =>{
        let degree=$('#degree'+i).val();
        let university=$('#university'+i).val();
        let start=$('#start'+i).val();
        let end=$('#end'+i).val();

        if(degree=='' || university=='' || start=='' || end==''){
            $(".degreeerror").html('Enter your degree');
            $(".unierror").html('Enter your university');
            $(".starterror").html('Enter your start date');
            $(".enderror").html('Enter your end date');
        }else{
            $(".degreeerror").remove();
            $(".unierror").remove();
            $(".starterror").remove();
            $(".enderror").remove();
            let row="<div class='row'>";
        row+="<div class='col-md-2'>";
        row+="<label class='form-label'>Degree Name</label>";
        row+="<input type='text' name='degree[]' id='degree' class='form-control'>\<span class='degreeerror text-danger'></span>";
        row+="</div>";
        row+="<div class='col-md-2'>";
        row+="<label class='form-label'>University Name</label>";
        row+="<input type='text' name='university[]' id='university' class='form-control'>\<span class='unierror text-danger'></span>";
        row+="</div>";
        row+="<div class='col-md-2'>";
        row+="<label class='form-label'>Start Date</label>";
        row+="<input type='date' name='start[]' id='start' class='form-control'>\<span class='starterror text-danger'></span>";
        row+="</div>";
        row+="<div class='col-md-2'>";
        row+="<label class='form-label'>End Date</label>";
        row+="<input type='date' name='end[]' id='end' class='form-control'>\<span class='enderror text-danger'></span>";
        row+="</div>";
        row+="<div class='col-md-2'>";
        row+="<button class='btn btn-danger removebtn'>Remove Btn</button>";
        row+="</div>";
        row+="</div>";

        $('#education').append(row);
        i++;
        }
    }

    $(document).on('click','.removebtn',function(event){
        event.preventDefault();
        console.log("button is remove");
        $(this).parent().parent().remove();
    })

    // $("#submit").click(function(event){
    //     event.preventDefault();
        
    //     let name=$("#name").val();
    //     let email=$("#email").val();
    //     let dob=$("#dob").val();
    //     let phno=$("#phno").val();
    //     if(name=='' && email=='' && dob=='' && phno=='')
    //     {
    //         $('.nameerror').html("Please enter your name");
    //         $('.emailerror').html("Please enter your email");
    //         $('.doberror').html('Please enter your date of birth');
    //         $('.phnoerror').html('Please enter your phone number');
    //         $(".degreeerror").html('Enter your degree');
    //         $(".unierror").html('Enter your university');
    //         $(".starterror").html('Enter your start date');
    //         $(".enderror").html('Enter your end date');
    //     }
    //     else{
    //         window.location.href="assignment8.php";
    //     }
    // })
})