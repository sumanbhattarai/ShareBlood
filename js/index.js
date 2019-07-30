

const shareBlood = document.getElementById('shareblood') ;

shareBlood.addEventListener('mouseover' , function(){
    shareBlood.style.cursor = 'pointer' ;
    //console.log('mouse over');
});

shareBlood.addEventListener('mouseout' , function(){
    //console.log("Mouse Out");
});
shareBlood.addEventListener('click' , function(){
    window.location.href = 'index.php' ;
    //console.log('Clicked');
});
