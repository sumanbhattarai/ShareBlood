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


//logout
function logoutClick()
{
    var choice = confirm("Are you sure to logout ?");
    if(choice === true)
    {
        window.location.href='modules/logout.php' ;
    }
}

// whenever page is scrolled  it involed scrollFunction.
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("goto-top").style.display = "block";
  } else {
    document.getElementById("goto-top").style.display = "none";
  }
}

//onclicking to goto top button it invokes this function
function gotoTop()
{
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}