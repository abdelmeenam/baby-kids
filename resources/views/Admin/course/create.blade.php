@include('Admin.assets.navbar')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="container">

        <div class="container">

            <div class="row layout-top-spacing">



                <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Create New Activity</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <li style="color: red">{{$error}}</li>
                                @endforeach
                            @endif
                            <form method="post" action="{{route('admin.course.store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="input-group mb-4">
                                    <input type="text" class="form-control"  name="name" placeholder="Course name" aria-label="Course name">
                                </div>

                                <div class="input-group mb-4">
                                    <input type="number" class="form-control"  name="price" placeholder="Price" aria-label="Price">
                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" class="form-control"  name="description" placeholder="description" aria-label="description">
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Image</span>
                                    </div>
                                    <input type="file" class="form-control" name="image" aria-label="With textarea">
                                </div>

                                <button type="submit" class="btn btn-primary">Add Course</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->
@include('Admin.assets.footer')
