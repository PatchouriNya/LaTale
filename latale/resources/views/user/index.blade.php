<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户列表</title>
</head>
<body>
{{ $data['age'] }}
{{ $data['name'] }}
{{--{{ $html }}--}}
<div id="app">
    @{{ name }}
    {{ date('Y-m-d') }}
    {{ route('www') }}
    @if($data['age'] > 20)
        <h1>qwq</h1>
        @elseif($data['age'] == 20)
            <h1>牛批</h1>
    @else
        <h1>啊</h1>
    @endif
</div>
{!! $html !!}

<script src="/js/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data:{
            name:'yoyoyo'
        }
    });
</script>
</body>
</html>
