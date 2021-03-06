<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <title>select2</title>
</head>
<body>
<div class="container">
    <form method="post" action="/articles">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">文章标题</label>
            <input type="text" class="form-control" name="title" placeholder="标题">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">文章内容</label>
            <textarea class="form-control" name="body" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">文章标签</label>
            <select class="form-control js-example-basic-multiple-limit" multiple="multiple" name='tags[]'>
                @foreach($tags as $k=>$tag)
                <option value='{{$k}}'>{{$tag}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>
</div>
</body>
<script>
    $(".js-example-basic-multiple-limit").select2({
    });
</script>
</html>