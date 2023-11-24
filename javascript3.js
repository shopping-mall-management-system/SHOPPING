function purchase() {
    var p_c = document.querySelectorAll('.p_c');
    var pc = document.getElementById(p_c[i].id);

    for (var i = 0; i < p_c.length; i++){
        console.log("id : ", p_c[i].id);
        console.log("idval : ", pc.id.replace(/\D/g,''));
        console.log("val : ", pc.value);
    }
    
}


