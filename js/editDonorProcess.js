
//getting submit by ID
const submit = document.getElementById("update-btn");

//Declaring initial function for removing active class from submit button
function initial()
{
    submit.classList.remove('active');
}

//invoking initial function
initial();


// whenever changes is done by donor , this function is invoked.
function submitBtn()
{
    submit.disabled = false ; // disable unclickable property
    submit.classList.add("active"); // add active class
}



const shareBlood = document.getElementById('shareblood') ;

// Adding mouseover event

shareBlood.addEventListener('mouseover' , function(){
    // console.log("Mouse is over");
    shareBlood.style.cursor = 'pointer';
});

shareBlood.addEventListener('mouseout' , function(){
    // console.log("Mouse is out");
});

shareBlood.addEventListener('click' , function(){
    window.location.href='index.php' ;
});

