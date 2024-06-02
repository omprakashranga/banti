<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="./submit.php"   method="POST" enctype="multipart/form-data">
        <div class="container">
            <h1>From Fild </h1>

            <div class="mb-3">
                <label for="name" class="form-label">Enter Your Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Enter Your Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Enter Your Phone</label>
                <input type="number" name="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Enter Your password</label>
                <input type="number" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="image"lass="form-label">Uploading your image</label>
                <input class="form-control" type="file" name="formFile" id="image">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // const from = document.querySelector('#from');
        // from.addEventListener('sumbit',(e)=>{
        //     e.preventDefault(); 
        // fetch('./submit.php'{
        //     method: 'post',
        //     data:{name:'omprakash'};
        // });
        //     });
    </script>
</body>

</html>