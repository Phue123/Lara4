console.log("script")
console.log('hi');
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

