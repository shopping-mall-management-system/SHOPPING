function purchase() {
    var p_c = document.querySelectorAll('.p_c');

    for (var i = 0; i < p_c.length; i++){
        console.log("id : ", p_c[i].id);
        console.log("val : ", p_c[i].nodeValue);
    }
    
}


