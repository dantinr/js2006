// input 失去焦点事件 获取input值
document.getElementById("username").addEventListener('blur',function(){
    var username = this.value

    // 发送ajax请求，查询 当前用户名是否可用
    // 1 实例化 xhr
    var xhr = new XMLHttpRequest()
    // 2 监听 readyState
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200)
        {
            var json_str = xhr.responseText
            console.log(json_str)
            //判断错误码
            var json_obj = JSON.parse(json_str)
            if(json_obj.errno>0)
            {
                alert(json_obj.msg)
            }
        }
    }
    // 3 open
    xhr.open("GET","check.php?name="+username);

    // 4 send
    xhr.send()

})
