<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @auth
  <h2>Congrats you are logged in!</h2>
  <form action="/logout" method="POST">
    @csrf
    <button>Log Out</button>
  </form>

  <br>

  <h2>Create new blog post</h2>
  <form action="/create_post" method="POST">
    @csrf
    <input name="title" type="text" placeholder="title">
    <textarea name="body" placeholder="body content..."> </textarea>
    <button>Create Post</button>
  </form>

  <h2>All Posts</h2>
  @foreach($posts as $post)
  <div>
    <h4>{{$post['title']}}</h4>
    <p>{{$post['body']}}</p>
  </div>
  @endforeach



  @else
  {{-- REGISTER --}}
  <div>
    <form action="/register" method="POST" >
      @csrf
      <input name="name" type="text" placeholder="name">
      <input name="email" type="text" placeholder="email">
      <input name="password" type="text" placeholder="password">
     <button>Register</button>
    </form>
  </div>

  {{-- LOGIN --}}
  <div>
    <form action="/login" method="POST" >
      @csrf
      <input name="login_name" type="text" placeholder="name">
      <input name="login_password" type="text" placeholder="password">
     <button>Login</button>
    </form>
  </div>

  @endauth

 
</body>
</html>