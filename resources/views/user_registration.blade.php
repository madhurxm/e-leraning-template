<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{--
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid">
            <div class="container m-5">
                <div class="row-cols-1 justify-content-center align-items-center g-2">
                    <div class="col border border-2 border-primary p-4">
                        <form action="">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="" id=""
                                    aria-describedby="helpId" placeholder="">
                                
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="" id=""
                                    aria-describedby="helpId" placeholder="">
                                
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="pass" class="form-control" name="" id=""
                                    aria-describedby="helpId" placeholder="">
                              
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Choose Plan type</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id=""
                                        value="option1">
                                    <label class="form-check-label" for="">Gold</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id=""
                                        value="option2">
                                    <label class="form-check-label" for="">Silver</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id=""
                                        value="option2">
                                    <label class="form-check-label" for="">Bronze</label>
                                </div>
                            </div>
                            <div class="mb-3"></div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
