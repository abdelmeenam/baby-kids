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
                                            <h4>Create New Slider</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    @if($errors->any())
                                        @foreach($errors->all() as $error)
                                            <li style="color: red">{{$error}}</li>
                                        @endforeach
                                    @endif
                                    <form method="post" action="{{route('admin.slider.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Image</span>
                                            </div>
                                            <input type="file" class="form-control" name="image" aria-label="With textarea">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <a href="{{route('admin.slider.all')}}" class="btn btn-primary">View All Sliders</a>

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
