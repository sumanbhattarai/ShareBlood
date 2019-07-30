
  
function intial()
{
    document.querySelector('.profile-picture').classList.remove('profile-picture-onhover');
    document.querySelector('.change-pp').style.display = "none" ;

}
intial();



document.querySelector('.profile-picture').addEventListener('mouseover' , function(){
    document.querySelector('.profile-picture').classList.add('profile-picture-onhover');
    document.querySelector('.change-pp').style.display = "unset" ;
   
});

document.querySelector('.profile-picture').addEventListener('mouseout' , intial);

function logoutClick()
{
    var choice = confirm("Are you sure to logout ?");
    if(choice === true)
    {
        window.location.href='logout.php' ;
    }
}



//Shareblood text in nav bar



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
