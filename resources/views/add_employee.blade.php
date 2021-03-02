@extends('layouts.app')

@section('content')

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Add the new employee</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Inventory</a></li>
                            <li class="active">sample</li>
                        </ol>
                    </div>
                </div>

                <!-- Start Widget -->
                <div class="row">
                    <!-- Basic example -->
                    <div class="col-md-2"></div>
                    <div class="col-md-7">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Basic example</h3></div>
                            <div class="panel-body">
                                <form action="{{ url('/insert-post') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Your Name" >
                            </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone no." >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter Your address" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Experience</label>
                                        <input type="text" class="form-control" name="experience" placeholder="Experience" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NID</label>
                                        <input type="text" class="form-control" name="nid_no" placeholder="nid" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Salary</label>
                                        <input type="text" class="form-control" name="salary" placeholder="Salary" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vacation</label>
                                        <input type="text" class="form-control" name="vacation" placeholder="Vacation">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">City</label>
                                        <input type="text" class="form-control" name="city" placeholder="City">
                                    </div>
                                    <div class="form-group">
                                        <img id="image" src="#"/>
                                        <label for="exampleInputEmail1">Photo</label>
                                        <input type="file" name="Photo" accept="image/*" class="upload"  onchange="readURL(this);">
                                    </div>
                                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                </form>
                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col-->
                </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
        }
        }
    </script>
@endsection
