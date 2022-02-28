            
                    <div class="col-12 col-lg-9">
                        <div class="">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-6     col-xl-4">
                                    <div class="card mb-3 status-card order " onclick="">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <div class="order-right">
                                                        <i class="feather-heart"></i>
                                                    <p class="mt-3 mb-1 text-nowrap font-weight-bolder">Today Order</p>
                                                    <p class=" h6 font-weight-bolder">
                                                        <span class="counter-up">123</span>
                                                    </p>
                                                    <small>Last 24 Hours</small>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="progress-circle progress-53"><span>53</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-6 col-xl-4">
                                    <div class="card mb-3 status-card post " onclick="">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <div class="post-right">
                                                        <i class="feather-layers"></i>
                                                    <p class="mt-3 mb-1 text-nowrap font-weight-bolder">Total post</p>
                                                    <p class=" h6 font-weight-bolder">
                                                        <span class="counter-up">123</span>
                                                    </p>
                                                    <small>Last 24 Hours</small>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="progress-circle progress-83"><span>83</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-6 col-xl-4 ">
                                    <div class="card mb-3 status-card viewer " onclick="">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <div class="viewer-right">
                                                        <i class="feather-box"></i>
                                                    <p class="mt-3 mb-1 text-nowrap font-weight-bolder">Today viewer</p>
                                                    <p class=" h6 font-weight-bolder">
                                                        <span class="counter-up">123</span>
                                                    </p>
                                                    <small>Last 24 Hours</small>
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="progress-circle progress-77"><span>77</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <!-- table list -->
                                <div class="col-12  one">
                                    <div class="card shadow mb-4 table-card">
                                        <div class="card-header bg-transparent p-3">
                                            <h4 class="card-title mb-0 ">Expenses Vs Budget Table</h4>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="grid-margin">
                                                <div class="">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table card-table  table-vcenter text-nowrap align-items-center table-hover">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Category</th>
                                                                    <th>Expenses</th>
                                                                    <th>Budget</th>
                                                                    <th>Variance</th>
            
                                                                </tr>
                                                            </thead>
                                                            <tbody class="border-top-0 ">
            
                                                                <tr>
                                                                    <td class="text-sm font-weight-600">Association Fee</td>
                                                                    <td>0</td>
                                                                    <td>1,000</td>
                                                                    <td>1,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-sm font-weight-600">Personal Meals</td>
                                                                    <td>2,850</td>
                                                                    <td>5,000</td>
                                                                    <td>2,150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-sm font-weight-600">Transportation</td>
                                                                    <td>25,000</td>
                                                                    <td>55,000</td>
                                                                    <td>30,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-sm font-weight-600">Vehicle Rental</td>
                                                                    <td>30,000</td>
                                                                    <td>45,000</td>
                                                                    <td>15,000</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- //chart-js -->
                                <div class="col-12">
                                    <div class="card overflow-hidden shadow mb-3 chat-js ">
                                        <div class="card-body chat-js">
                                            <div class=" chat-js d-flex justify-content-between align-items-center">
                                                <h5 class="chat-js">Order and Viewer</h5>
                                                <div class="">
                                                    <img src="<?php echo $url; ?>/assets/img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                                                    <img src="<?php echo $url; ?>/assets/img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                                                    <img src="<?php echo $url; ?>/assets/img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                                                    <img src="<?php echo $url; ?>/assets/img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                                                    <img src="<?php echo $url; ?>/assets/img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                                                </div>

                                            </div>
                                            <canvas id="ov" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="col-12 col-lg-3 vh-100">
                        <div class="row">

                            <!-- Recent Update -->
                            <div class="col-12 col-md-6 col-lg-12 mb-4 recent-update    ">
                                <p class="font-weight-bolder">Recent Updates</p>
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-around">
                                            <img src="<?php echo $url; ?>/assets/img/user/avatar4.jpg" class="rounded-circle" alt="" style="height:40px;margin-right: 10px;">
                                            <div>
                                                <h5 class="font-weight-bold" style="font-size:13px">Min Pyae <span class="" style="font-size: 13px;" >received his order of 2 Dj air</span></h5>
                                                <small style="font-size:10px;margin-bottom:10px;" class=" font-weight-bold">  4 Minutes Ago</small>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-around">
                                            <img src="<?php echo $url; ?>/assets/img/user/avatar4.jpg" class="rounded-circle" alt="" style="height:40px;margin-right: 10px;">
                                            <div>
                                                <h5 class="font-weight-bold" style="font-size:13px">Min Pyae <span class="" style="font-size: 13px;" >received his order of 2 Dj air</span></h5>
                                                <small style="font-size:10px;margin-bottom:10px;" class=" font-weight-bold">  4 Minutes Ago</small>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-around">
                                            <img src="<?php echo $url; ?>/assets/img/user/avatar4.jpg" class="rounded-circle" alt="" style="height:40px;margin-right: 10px;">
                                            <div>
                                                <h5 class="font-weight-bold" style="font-size:13px">Min Pyae <span class="" style="font-size: 13px;" >received his order of 2 Dj air</span></h5>
                                                <small style="font-size:10px;margin-bottom:10px;" class=" font-weight-bold">  4 Minutes Ago</small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                             <!-- order and place chatjs -->
                            <div class="col-12 col-md-6 col-lg-12 order-place">
                                <div class=" card h-100 shadow">
                                    <div class="card-body ">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6 class="">Order and Place</h6>
                                            <div class="">
                                                <i class="feather-pie-chart text-primary h5"></i>
                                            </div>
                                        </div>
                                        <canvas id="op" height="250"></canvas>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>  
            </div>     
         </div>   
    