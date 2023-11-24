function purchase() {
    var p_c = document.querySelectorAll('.p_c');
    var ids = [];
    var values = [];

    for (var i = 0; i < p_c.length; i++){
        var pc = document.getElementById(p_c[i].id);
        console.log("id : ", p_c[i].id);
        console.log("idval : ", pc.id.replace(/\D/g,''));
        console.log("val : ", pc.value);

        ids.push(p_c[i].id.replace(/\D/g,''));
        values.push(pc.value);
    }

    var data = {
        array1: ids,
        array2: values,
    }

    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'product_order.php', true);
    // POST 요청 설정
     xhr.setRequestHeader('Content-Type', 'application/json');

    // 서버 응답 처리
    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                console.log('Server Response:', xhr.responseText);
            } else {
                console.error('Error:', xhr.status);
            }
        }
    };

    // 데이터 전송
    xhr.send(JSON.stringify(data));
}


