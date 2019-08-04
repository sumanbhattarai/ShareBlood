
// Settting butto not active
document.getElementById("setting").style.pointerEvents = "none" ;

//logout
function logoutClick()
{
    var choice = confirm("Are you sure to logout ?");
    if(choice === true)
    {
        window.location.href='modules/logout.php' ;
    }
}

//edit icon hidden at intial
initial();
function initial()
{
    for(i=1 ; i<=7 ; i++)
    {
        document.getElementById('edit'+i).style.display = "none";
        
    }

}



//adding onmouseover event

//tr1
document.getElementById('tr'+1).addEventListener('mouseover' , function(){
    document.getElementById('edit'+1).style.display = "unset";
});

document.getElementById('tr'+1).addEventListener('mouseout' , initial);

//tr2
document.getElementById('tr'+2).addEventListener('mouseover' , function(){
    document.getElementById('edit'+2).style.display = "unset";
});

document.getElementById('tr'+2).addEventListener('mouseout' , initial);

//tr3
document.getElementById('tr'+3).addEventListener('mouseover' , function(){
    document.getElementById('edit'+3).style.display = "unset";
});

document.getElementById('tr'+3).addEventListener('mouseout' , initial);

//tr4
document.getElementById('tr'+4).addEventListener('mouseover' , function(){
    document.getElementById('edit'+4).style.display = "unset";
});

document.getElementById('tr'+4).addEventListener('mouseout' , initial);

//tr5
document.getElementById('tr'+5).addEventListener('mouseover' , function(){
    document.getElementById('edit'+5).style.display = "unset";
});

document.getElementById('tr'+5).addEventListener('mouseout' , initial);

//tr6
document.getElementById('tr'+6).addEventListener('mouseover' , function(){
    document.getElementById('edit'+6).style.display = "unset";
});

document.getElementById('tr'+6).addEventListener('mouseout' , initial);

//tr7
document.getElementById('tr'+7).addEventListener('mouseover' , function(){
    document.getElementById('edit'+7).style.display = "unset";
});

document.getElementById('tr'+7).addEventListener('mouseout' , initial);




// ShareBlood text in nav bar

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
