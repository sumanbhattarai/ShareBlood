
  
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


// popupbox of blood request close button

const closeBtn = document.getElementById('close-btn') ;
closeBtn.addEventListener('mouseover' , function(){
    closeBtn.style.cursor = 'pointer' ;
});

function popup()
{
    document.querySelector('.box-blood-request').style.display = 'flex' ;
    
    //get the selected blood group
    document.getElementById('blood-group').value  = document.getElementById('blood-group-for-posting').value ;
    return false ;

}

closeBtn.addEventListener('click' , function(){
    document.querySelector('.box-blood-request').style.display = 'none' ;
});

// post status on submit
function postStatus()
{
    document.querySelector('.box-blood-request').style.display = 'none' ;
    document.querySelector('.success-box').style.display="flex" ;
    return false ;
}

document.getElementById('success-ok').addEventListener('click' , function(){
    document.querySelector('.success-box').style.display="none" ;
    
});



// On clicking camera icon

document.getElementById('camera-icon').addEventListener('click' , function(){
   // trigger the file upload button
    document.getElementById('upload-image').click();
});

document.getElementById('upload-image').addEventListener('change' , function(){
    // trigger the image submit  button.
    document.getElementById('submit-image').click();
});


