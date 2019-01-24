function test1(){
    var text = getElementById("firstname");
    text.addEventListener('invalid', myfunction);
    function myfuntion()
    {
        if( text === '0'){
            document.getElementById("demo1").style.display ="none";
        }
    }
}
