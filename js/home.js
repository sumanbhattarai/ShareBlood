
function logoutClick()
{
    var choice = confirm("Are you sure to logout ?");
    if(choice === true)
    {
        window.location.href='logout.php' ;
    }
}