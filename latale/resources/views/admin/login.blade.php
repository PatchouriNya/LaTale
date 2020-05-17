<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <title>登录</title>
    <style>
        *{
            list-style: none;
        }
        a{
            text-decoration: none;
            color: blue;
        }
        html,body{
            height: 100%;
        }
        body{
            margin: 0;
            padding: 0;
        }
        #app{
            height: 100%;
        }
        .login-wrap{
            background-color: #324152;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-wrap .login-form{
            background-color: white;
            width: 500px;
            padding: 30px;
            border-radius: 5px;
        }
        .login-wrap .login-form .login-btn{
            width: 100%;
        }
    </style>

</head>
<body>
<div id="app">
    <div class="login-wrap">
        <el-form ref="form"  label-width="80px" class="login-form">
            @csrf
            <h2>用户登录</h2>
            <el-form-item :model="LoginData" label="用户名">
                <el-input type="text" v-model="LoginData.username"></el-input>
            </el-form-item>

            <el-form-item label="密码">
                <el-input type="password" v-model="LoginData.password"></el-input>
            </el-form-item>

            <el-form-item>
                <el-button class="login-btn" type="primary" @click="login">登录</el-button>
            </el-form-item>

            <el-form-item>
                <el-button class="login-btn" type="danger">注册</el-button>
            </el-form-item>
        </el-form>
    </div>
</div>
</body>
<script src="/js/vue.js"></script>
<script src="/js/axios.js"></script>
<script src="/js/jquery.js"></script>
<script src="/js/layer/layer.js"></script>
<script src="https://unpkg.com/element-ui/lib/index.js"></script>

<script>
    const app = new Vue({
        el:'#app',
        data:{
            LoginData:{}
        },
        methods:{
            login(){
                axios.post('{{ route('confirm') }}',this.LoginData).then(data=>{
                    if(data.data.code == 200){
                        layer.msg(data.data.msg,{icon:1,time:3000});
                        return window.location.href = '{{ route('index') }}';
                    }else{
                        return layer.msg(data.data.msg,{icon:2,time:3000});
                    }
                });
            }
        }

    });
</script>
</html>
