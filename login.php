<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login Sytem PHP</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form 
            class="p-5 rounded shadow" 
            action="auth.php"
            method="post"
            style="width:30rem">
            <h1 class="text-center pb-5 display-4">
                Login
            </h1>
            <div class="mb-3">
                <label 
                    for="exampleInputEmail1" 
                    class="form-label">
                    Email address
                </label>
                <input  
                    type="email"
                    name="email" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp"
                >
            </div>
            <div class="mb-3">
                <label 
                    for="exampleInputPassword1" 
                    class="form-label">
                    Password
                </label>
                <input 
                    type="password" 
                    name="password"
                    class="form-control" 
                    id="exampleInputPassword1"
                >
            </div>
            <div class="mb-3 form-check">
                <input 
                    type="checkbox" 
                    class="form-check-input" 
                    id="exampleCheck1"
                >
                <label 
                    class="form-check-label" 
                    for="exampleCheck1">
                    Check me out
                </label>
            </div>
            <button 
                type="submit" 
                class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
</body>
</html>