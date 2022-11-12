$(document).ready(function(){
    console.log("okay");
    $(window).scroll(function(){
        if(this.scrollY > 120){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        });
});
