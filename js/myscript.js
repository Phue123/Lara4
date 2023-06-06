console.log("In my script")
const othernation=document.getElementById('othernation')
const mm=document.getElementById('mm')
const other=document.getElementById('other')
const mariage=document.getElementById('mariage')
const single=document.getElementById('single')
const name_mm=document.getElementById('name_mm')
const name_eng=document.getElementById('name_eng')
const male=document.getElementById('male')
const female=document.getElementById('female')
const othergender=document.getElementById('othergender')


mm.onclick=checkNation;
othernation.onclick=checkNation;

other.onclick=checkMarital;
mariage.onclick=checkMarital;
single.onclick=checkMarital;

othergender.onclick=checkGender;
male.onclick=checkGender;
female.onclick=checkGender;

name_mm.onblur=checkName;
name_mm.onfocus=checkName;
name_eng.onblur=checkEngName;
name_eng.onfocus=focusEngName;

function checkName(event)
{
    if(this.classList.contains('focused'))
    {
        if(this.value=='')
        {
            document.getElementById('name_error').innerHTML="Please enter your name in mm"
        }
        this.classList.remove('focused')
        this.classList.add('blurred')
    }
    else{
        document.getElementById('name_error').innerHTML=""
        this.classList.remove('blurred')
        this.classList.add('focused')
    }

}

// function checkName(){
//     if(this.value==''){
//     document.getElementById('name_error').innerHTML="Please your enter name mm"
//     }
// }
// function focusName(){
//     document.getElementById('name_error').innerHTML=""
// }


function checkEngName(){
    if(this.value=='')
    {
    document.getElementById('eng_name_error').innerHTML="Please your enter name eng"
    }
}
function focusEngName(){
    document.getElementById('eng_name_error').innerHTML=""
}

function checkNation(){
    console.log(this.value)
    const other_nation=document.getElementById('other_nation')
    if(this.value=='other')
    {
        other_nation.classList.remove('d-none')
        other_nation.classList.add('d-block')
    }else{
        other_nation.classList.remove('d-block')
        other_nation.classList.add('d-none')
    }
}

function checkMarital()
{
    console.log(this.value)
    const other_other=document.getElementById('other_marital');
    if(this.value=="other")
    {
        other_other.classList.remove('d-none')
        other_other.classList.add('d-block')
    }else
    {
        other_other.classList.remove('d-block')
        other_other.classList.add('d-none')
    }
}

function checkGender()
{
    console.log(this.value)
    const other_gender=document.getElementById('other_gender');
    if(this.value=="other")
    {
        other_gender.classList.remove('d-none')
        other_gender.classList.add('d-block')
    }else
    {
        other_gender.classList.remove('d-block')
        other_gender.classList.add('d-none')
    }
}

// console.log(other)
// var marital_status="";
// other.addEventListener('click',function(){
//     marital_status=other.value
//     console.log("marital status :"+marital_status)
//     const text_other=document.getElementById('other_marital');
//     text_other.classList.remove('d-none')
//     text_other.classList.add('d-block')
// })

// mariage.onclick=function(){
//     const text_other=document.getElementById('other_marital');
//     if(text_other.classList.contains('d-block')){
//         text_other.classList.remove('d-block')
//         text_other.classList.add('d-none')
//     }
// }

// single.onclick=function(){
//     const text_other=document.getElementById('other_marital');
//     if(text_other.classList.contains('d-block')){
//         text_other.classList.remove('d-block')
//         text_other.classList.add('d-none')
//     }
// }

