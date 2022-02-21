<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>world!</title>
</head>

<body>

    <div class="container ">
        <div class="row m-auto">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-head">
                        <h2>Add Student</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method=" POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text">
                            </div>
                            <div class="mb-3">
                                <label for="account"> account number</label>
                                <input type="number">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email">
                            </div>

                            <div class="mb-3">
                                <label for="file-ip-1">Upload Image</label>
                                <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                                <div class="preview">
                                    <img id="file-ip-1-preview" style="width:150px">
                                </div>
                            </div>
                            <button class="btn btn-primary"> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->



    <script>
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
    </script>
</body>

</html>
