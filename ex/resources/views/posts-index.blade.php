<!DOCTYPE html>
<html lang="en">

<head>
    <title>ALL orders</title>
</head>


<body>
    <h1></h1>
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
        <li>
            {{ $post->id }}:

            {{ $post->titel }}:
            {{$post->description }}

        </li>
        @endforeach
    </ul>

</body>

</html>