const othernation=document.getElementById('othernation')
const mm=document.getElementById('mm')
const other=document.getElementById('other')
const mariage=document.getElementById('mariage')
const single=document.getElementById('single')
const male=document.getElementById('male')
const female=document.getElementById('female')
const othergender=document.getElementById('othergender')


mm.onclick=checkNation;
othernation.onclick=checkNation;

other.onclick=checkMarital;
mariage.onclick=checkMarital;
single.onclick=checkMarital;

male.onclick=checkGender;
female.onclick=checkGender;
othergender.onclick=checkGender;


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
    const other_marital=document.getElementById('other_marital');
    if(this.value=="other")
    {
        other_marital.classList.remove('d-none')
        other_marital.classList.add('d-block')
    }else
    {
        other_marital.classList.remove('d-block')
        other_marital.classList.add('d-none')
    }
}

function checkGender()
{
    console.log(this.value)
    const text_gender=document.getElementById('other_gender');
    if(this.value=="other")
    {
        text_gender.classList.remove('d-none')
        text_gender.classList.add('d-block')
    }else
    {
        text_gender.classList.remove('d-block')
        text_gender.classList.add('d-none')
    }
}


console.log("hi")
var register = document.getElementById('register');
var submit2=document.getElementById('submit2')
var submit3=document.getElementById('submit3')
var submit4=document.getElementById('submit4')
var previous2=document.getElementById('previous2')
var previous3=document.getElementById('previous3')
var previous4=document.getElementById('previous4')
var row1=document.getElementById('row1');
var row2=document.getElementById('row2');
var row3=document.getElementById('row3');
var row4=document.getElementById('row4');
var progress1=document.getElementById('progress1')
var progress2=document.getElementById('progress2')
var progress3=document.getElementById('progress3')
//console.log(btn);
register.onclick = function(e){
    e.preventDefault();
    //console.log('hello');
    row1.style.display="none";
    row2.style.display="block";
    row3.style.display="none";
    row4.style.display="none";
    progress1.classList.add('active');
    progress.classList.remove('active');
}

submit2.onclick = function(e){
    e.preventDefault();
    //console.log('hello');
    row1.style.display="none";
    row2.style.display="none";
    row3.style.display="block";
    row4.style.display="none";
    progress2.classList.add('active');
    progress1.classList.remove('active');
}
previous2.onclick = function(e){
    e.preventDefault();
    //console.log('hello');
    row1.style.display="block";
    row2.style.display="none";
    row3.style.display="none";
    row4.style.display="none";
    progress.classList.add('active');
    progress1.classList.remove('active');
}

submit3.onclick = function(e){
    e.preventDefault();
    //console.log('hello');
    row1.style.display="none";
    row2.style.display="none";
    row3.style.display="none";
    row4.style.display="block";
    progress3.classList.add('active');
    progress2.classList.remove('active');
}

previous3.onclick = function(e){
    e.preventDefault();
    //console.log('hello');
    row1.style.display="none";
    row2.style.display="block";
    row3.style.display="none";
    row4.style.display="none";
    progress1.classList.add('active');
    progress2.classList.remove('active');
}

previous4.onclick = function(e){
    e.preventDefault();
    //console.log('hello');
    row1.style.display="none";
    row2.style.display="none";
    row3.style.display="block";
    row4.style.display="none";
    progress2.classList.add('active');
    progress3.classList.remove('active');
}
var counter=1;
function add_more_field(){
    counter+=1;
    html='<div class="row" id="add'+counter+'">\
    <label for="" class="form-label">Personal Info</label>\
    <div class="col-md-4">\
        <label for="" class="form-label">Name</label>\
        <input type="text" name="addname'+counter+'" class="form-control">\
    </div>\
    <div class="col-md-4">\
        <label for="" class="form-label">Email</label>\
        <input type="text" name="addemail'+counter+'" class="form-control">\
    </div>\
</div>'
var addform=document.getElementById('addform');
addform.innerHTML+=html
}