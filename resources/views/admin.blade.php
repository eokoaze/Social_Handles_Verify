<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="assets/home/fav.png" type="image/gif" sizes="16x16">
    <title>Upbit Verification Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Verification Center" name="description" />
    <meta content="Verification, Bithumb" name="keywords" />
    <meta content="Bithumb" name="author" />
    <meta name="robots" content="noindex">

     <meta property="og:locale" content="en_US" />
  <meta property="og:site_name" content="Bithumb" />
  <meta property="og:title" content="Official Verification Center" />
  <meta property="og:url" content="index.html" />
  <meta property="og:type" content="website" />
  <meta property="og:description"content="Official Verification Center" />
  <meta property="og:image" content="assets/home/fav.png" />
  <meta property="og:image:url" content="assets/home/fav.png" />
  <meta property="og:image:secure_url" content="assets/home/fav.png" />

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- CSS Files
            ================================================== -->
            <link href="assets/home/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"> -->
            <link href="assets/home/css/jpreloader.css" rel="stylesheet" type="text/css">
            <link href="assets/home/css/animate.css" rel="stylesheet" type="text/css" />
            <link href="assets/home/css/owl.carousel.css" rel="stylesheet" type="text/css" />
            <link href="assets/home/css/owl.theme.css" rel="stylesheet" type="text/css" />
            <link href="assets/home/css/owl.transitions.css" rel="stylesheet" type="text/css" />
            <link href="assets/home/css/magnific-popup.css" rel="stylesheet" type="text/css" />
            <link href="assets/home/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
            <link href="assets/home/css/style.css" rel="stylesheet" type="text/css" />

            <!-- color scheme -->
            <link id="colors" href="assets/home/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
            <link href="assets/home/css/coloring.css" rel="stylesheet" type="text/css" />

            <!-- CSS Files for current page only
            ================================================== -->
            <link href="assets/home/css/let-it-snow.css" rel="stylesheet" type="text/css" />
            <style>
              .dropdown-item img {
                /*width: 20px;*/
                margin-right: 10px;
              }
            </style>
        </head>

        <body>
            <div id="wrapper">
                <div class="transition"></div>

                <!-- header begin -->
                <header class="transparent">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between">
                                    <div class="align-self-center header-col-left">
                                        <!-- logo begin -->
                                        <div id="logo">
                                            <a href="index.html">
                                                <img src="assets/home/logo2.png" alt="">
                                            </a>
                                        </div>
                                        <!-- logo close -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section id="section-main" class="vertical-center text-light let-it-snow" data-bgimage="url(/assets/home/images/1.jpg) top">                        
                    
    <div class="container" style="font-family: Lucida Console, Courier New, monospace;">
        <div class="row wow fadeIn" data-wow-delay=".3s">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2><i>UPBIT VERIFICATION ADMIN</i></h2>
                <h3><i>Add/View Links and Handles</i></h3>
            </div>
    <div class="col-lg-4 text-center" style="color: #000000; background-color: #FFF; border-radius: 5px; margin: 10px; padding: 30px;">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong style="font-family: Lucida Console, Courier New, monospace; color: #000000">{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
        </div>
    @endif

    <form class="row g-2" action="/verify/add" method="POST" autocomplete="off">
        @csrf
        <div>
            <select name="platform" class="form-select" required>
            <option selected>Select</option>
            <option value="website">Website</option>
            <option value="telegram">Telegram</option>
            <option value="email">Email</option>
            <option value="twitter">Twitter</option>
            <option value="discord">Discord</option>
            <option value="linkedin">Linkedin</option>
            </select>
        </div>

        <div>
            <input type="text" name="handle" required placeholder="Enter link/handle to add" class="form-control">
        </div>
        <div class="spacer-10"></div>
        <div>
            <button type="submit" class="form-control btn btn-primary btn-md" style="background-color: #000080;">Add</button>
        </div>
    </form>
</div>

<div class="col-lg-7 text-center" style="color: #000000; background-color: #FFF; border-radius: 5px; margin: 10px; padding: 30px;">

<div class="table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col"> S/N </th>
        <th scope="col"> platform </th>
        <th scope="col"> Link/Handle</th>
        <th scope="col"> Date Added </th>
        </tr>
    </thead>
    <tbody>
        <!-- @php($i = 1) -->
        @foreach($handles as $handle)
        <tr>
            <td>{{ $handles->firstItem()+$loop->index }}</td>
            <td>{{ $handle->type }}</td>
            <td>{{ $handle->handle }}</td>
            <td>{{ Carbon\Carbon::parse($handle->created_at)->diffForHumans() }}</td>
        </tr>
        @endforeach                                                                    
    </tbody>
    </table>
        {{ $handles->onEachSide(5)->links() }}
</div>


</div>
</div>
</section>

</div>
<!-- content close -->
</div>



        <!-- Javascript Files
            ================================================== -->
            <script src="assets/home/js/jquery.min.js"></script>
            <script src="assets/home/js/jpreLoader.min.js"></script>
              <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->
            <script src="assets/home/js/bootstrap.min.js"></script>
            <script src="assets/home/js/wow.min.js"></script>
            <script src="assets/home/js/jquery.isotope.min.js"></script>
            <script src="assets/home/js/easing.js"></script>
            <script src="assets/home/js/owl.carousel.js"></script>
            <script src="assets/home/js/validation.js"></script>
            <script src="assets/home/js/jquery.magnific-popup.min.js"></script>
            <script src="assets/home/js/enquire.min.js"></script>
            <script src="assets/home/js/jquery.stellar.min.js"></script>
            <script src="assets/home/js/jquery.plugin.js"></script>
            <script src="assets/home/js/jquery.countdown.js"></script>
            <script src="assets/home/js/typed.js"></script>
            <script src="assets/home/js/typed-custom.js"></script>
            <script src="assets/home/js/designesia.js"></script>

        </body>
</html>
