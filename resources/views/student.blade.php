<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Student-API</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


</head>

<body>

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"
                        class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>Student-api</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>

        <section class="py-5 text-center container">
            <div class="col-lg-6 mx-auto">
                <h3>Form Input</h3>
                <form class="form-control inline-flex">
                    <div class="form-group row">
                        <div class="col">
                            <label>First name</label>
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="form-group mt-2">
                            <label>Gender</label>
                            <select class="form-control">
                                <option disabled selected> -Select gender- </option>
                                <option>Male</option>
                                <option>Famale</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label>Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Telephone">
                    </div>
                    <div class="form-group mt-2">
                        <label>Country</label>
                        <input type="text" class="form-control" id="country" placeholder="Country">
                    </div>
                    <div class="form-group mt-2">
                        <label>Class</label>
                        <input type="text" class="form-control" id="class" placeholder="Class">
                    </div>
                    <div class="form-group mt-2">
                        <label>Image</label>
                        <input type="file" class="form-control" id="class" placeholder="Class">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($student as $stu)
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                                </svg>

                                <div class="card-body">

                                    <div class="list-group mb-3">
                                        <a href="#" class="list-group-item list-group-item-dark">
                                            Data Student
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">Name
                                            : {{ $stu['first_name'] }} {{ $stu['last_name'] }}</a>
                                        <a href="#" class="list-group-item list-group-item-action">Gender :
                                            {{ $stu['gender'] }}</a>
                                        <a href="#" class="list-group-item list-group-item-action">Class :
                                            {{ $stu['class'] }}</a>
                                    </div>


                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Detail</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Delete</button>
                                        </div>
                                        <small
                                            class="text-muted">{{ $stu['created_at']->format('d-M-Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for
                yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
                    href="../getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>


    <script src="{{ asset('assets') }}/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
