function deleteinCart(selected){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            console.log('Process', xhr.responseText);
            if(xhr.responseText === 'error'){
                alert("이미 삭제된 상품입니다.");
            }else if(xhr.responseText === 'success'){
                alert("상품을 장바구니에서 제거하였습니다.");
                location.reload();
            }
        }
    };
    xhr.open('POST', 'delete_cart.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('selected=' + encodeURIComponent(selected));
}
