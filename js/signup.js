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


// document.getElementById("name").onfocus = function(){
//     document.getElementById("name").style.border = "1px solid #2898E9 " ;
// }

// document.getElementById("name").onblur = function(){
//     document.getElementById("name").style.border = "1px solid #707070 " ;
// }


// document.getElementById("name").onfocus = function(){
//     document.getElementById("name").style.border = "1px solid #2898E9 " ;
// }

// document.getElementById("email").onblur = function(){
//     document.getElementById("email").style.border = "1px solid #707070 " ;
// }


// document.getElementById("email").onfocus = function(){
//     document.getElementById("email").style.border = "1px solid #2898E9 " ;
// }



// document.getElementById("telephone").onfocus = function(){
//     document.getElementById("telephone").style.border = "1px solid #2898E9 " ;
// }
// document.getElementById("telephone").onblur = function(){
//     document.getElementById("telephone").style.border = "1px solid #707070 " ;
// }




// document.getElementById("password").onfocus = function(){
//     document.getElementById("password").style.border = "1px solid #2898E9 " ;
// }

// document.getElementById("password").onblur = function(){
//     document.getElementById("password").style.border = "1px solid #707070 " ;
// }

// document.getElementById("location").onfocus = function(){
//     document.getElementById("location").style.border = "1px solid #2898E9 " ;
// }

// document.getElementById("location").onblur = function(){
//     document.getElementById("location").style.border = "1px solid #707070 " ;
// }


// function validate()
// {
//     const hospitalName = document.getElementById('name').value ;
//     const email = document.getElementById('email').value ;
//     const password = document.getElementById('password').value ;
//     const location = document.getElementById('location').value ;
//     const telephone = document.getElementById('telephone').value ;
//     if(hospitalName=="" || email == "" || password == "" || location == "" || telephone =="")
//     {
//         if(hospitalName=="")
//         {
//             document.getElementById('name').style.borderColor = "#C7001A" ;
//         }
//         if(email=="")
//         {
//             document.getElementById('email').style.borderColor = "#C7001A" ;
//         }
//         if(password=="")
//         {
//             document.getElementById('password').style.borderColor = "#C7001A" ;
//         }
//         if(location=="")
//         {
//             document.getElementById('location').style.borderColor = "#C7001A" ;
//         }
//         if(telephone=="")
//         {    
//             document.getElementById('telephone').style.borderColor = "#C7001A" ;
//         }
//         return false ;

//     }

//     if(document.getElementById('checkagree').checked === false )
//     {
//         document.getElementById('erroragree').innerHTML = "*Please , agree our terms." ;
//         return false;
//     }
   

// }