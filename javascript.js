function addToCart(name){

    var selected = name;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            console.log('Process', xhr.responseText);
            if(xhr.responseText === 'error'){
                alert("이미 담겨있습니다.");
            }else if(xhr.responseText === 'success'){
                alert("상품을 장바구니에 담았습니다.");
            }
           
        }
    };
    xhr.open('POST', 'add_cart.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('selected=' + encodeURIComponent(selected));
}

    function showAlert() {
        console.log('이미 장바구니에 담겼습니다.');
    }
