var image =  document.getElementById("image");

if(image){
    var i = 2 ;
    setInterval(function(){
    
        image.src = "images/"+i+".jpg";
        i++;
        if( i > 3 )
            i = 1;
    },3000);
}

var items = document.getElementsByClassName('delete-product');
for( var item of items){
    item.addEventListener("click",(e)=>{
        if(confirm("هل تريد الحذف بالتأكيد")){
            e.target.parentNode.submit();
        }
    });
}
