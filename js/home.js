
  
function intial()
{
    document.querySelector('.profile-picture').classList.remove('profile-picture-onhover');
    document.querySelector('.change-pp').style.display = "none" ;

}
intial();



function logoutClick()
{
    var choice = confirm("Are you sure to logout ?");
    if(choice === true)
    {
        window.location.href='logout.php' ;
    }
}

document.querySelector('.profile-picture').addEventListener('mouseover' , function(){
    document.querySelector('.profile-picture').classList.add('profile-picture-onhover');
    document.querySelector('.change-pp').style.display = "unset" ;
   
});

document.querySelector('.profile-picture').addEventListener('mouseout' , intial);