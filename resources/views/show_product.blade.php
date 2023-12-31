<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product | Electronics Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('dash/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ url('dash/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include("dash_inc/sidebar");
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include("dash_inc/header");
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Show Catagory</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Catagory</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Description</th>
                                <th>Product Rating</th>
                                <th>Product Offer Price</th>
                                <th>Stock</th>
                                <th>Product Image</th>
                                <th>Add</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $d)
                            <tr>
                                <td>{{$d->name}}</td>
                                <td>{{$d->p_name}}</td>
                                <td>{{$d->p_price}}</td>
                                <td>{{$d->p_description}}</td>
                                <td>{{$d->p_rating}}</td>
                                <td>{{$d->p_offer_price}}</td>
                                @if($d->product_quantity > $d->low_stock_threshold)
                                <td><span style="color:green!important;font-weight: bold;">{{$d->stock_status}}</span>({{$d->product_quantity}})</td>
                                @endif
                                @if($d->product_quantity <= $d->low_stock_threshold)
                                <td><span style="color:red!important;font-weight: bold;">You Reached the threshold limit</span>({{$d->product_quantity}})</td>
                                @endif
                                <td><img src="{{url('product_images')}}/{{$d->p_image}}" style="width:100px;"></td>
                                <td><a class="btn" style="background:#fd7e14; color:#fff;" href="/add_product"><i class="fa-solid fa-plus"></i></a></td>
                                <td><a class="btn btn-success" href="{{url('/productedit')}}/{{$d->p_id}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                <td><a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{url('/productdel')}}/{{$d->p_id}}"><i class="fa-regular fa-trash-can"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <!--span>Copyright &copy; Your Website 2020</span-->
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('dash/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('dash/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('dash/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('dash/js/sb-admin-2.min.js') }}"></script>

</body>

</html>