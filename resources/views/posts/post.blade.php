<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Data Post</title>
</head>
<body>
    
    
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Post
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_deleted'))
                            <div class="alert alert-success" role="success">
                                    {{Session::get('post_deleted')}}
                            </div>
                            @endif

                            <table class = "table">
                                <thead>
                                    <tr>
                                        <th>Post Title</th>
                                        <th>Post Body</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    @foreach($posts as $post)
                                    </tr>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->body}}</td>
                                        <td>
                                            <a href="/posts/{{$post->id}}" class = "btn btn-success ">View</a>
                                            <a href="/edit-post/{{$post->id}}" class = "btn btn-info ">Edit</a>
                                            <a href="/delete-post/{{$post->id}}" class = "btn btn-danger">Delete</a>
                                        </td>
                                    </tr> 
                                    @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>