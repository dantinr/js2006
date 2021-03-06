var f = document.forms[0]       //获取html文档中的第一个 表单

f.addEventListener('submit',function(event){         //给表单绑定 提交事件
    event.preventDefault();                     //阻止提交行为

    //获取当前表单中要提交的input
    var inputs = f.getElementsByTagName("input")

    var send_str = ""
    for(var i=0;i<inputs.length;i++)
    {
        //过滤没有name的input
        if(inputs[i].getAttribute("name") == null)
        {
            continue
        }
        var k = inputs[i].getAttribute("name")      //获取 name属性
        var v = inputs[i].value                         // 获取 input中值
        send_str += k + "=" + v + "&"
    }

    console.log(send_str)
    //去掉最后一个 &
    new_str = send_str.substring(0,send_str.length-1)      // 12345&
    console.log(new_str)


    // 1
    var xhr = new XMLHttpRequest();

    // 2
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200)
        {
            var json_str = xhr.responseText
            console.log(json_str)
            var obj = JSON.parse(json_str)
            if(obj.errno==0)
            {
                window.location.href = "my.html"
            }else{
                alert("用户名密码错误")
            }
        }
    }

    // 3 open
    xhr.open('POST','login.php')

    // 4 send
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded')
    xhr.send(new_str)
})
