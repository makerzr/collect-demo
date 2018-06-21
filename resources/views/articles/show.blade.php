<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章详情</title>
</head>
<body>
<h2>{{$article->title}}</h2>
<hr>
<p>{{$article->body}}</p>
<ul>
    @foreach($article->tags as $t)
    <li>{{$t->name}}</li>
    @endforeach
</ul>
</body>
</html>