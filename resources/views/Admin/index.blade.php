@include('Admin.assets.navbar')


<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="">Statistics</h6>
                            </div>

                            <div class="w-chart ">
                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title"> Teachers</p>
                                        <p class="w-stats">{{$teachers}}</p>
                                    </div>
                                </div>

                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title">Courses</p>
                                        <p class="w-stats">{{$courses}}</p>
                                    </div>
                                </div>

                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title">Activities</p>
                                        <p class="w-stats">{{$activities }}</p>
                                    </div>
                                </div>
                            </div>

                    </div>
            </div>
        </div>
    </div>
</div>


@include('Admin.assets.footer')
