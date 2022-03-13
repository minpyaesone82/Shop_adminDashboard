            
                    <div class="col-12 col-lg-9">
                        <div class="">
                            <div class="row">
                                <div class="col-12 col-md-4 col-xl-4">
                                    <div class="card mb-3 status-card order " onclick="location.href='<?php echo $url; ?>/postList.php';">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <div class="order-right">
                                                        <i class="feather-heart"></i>
                                                    <p class="mt-3 mb-1 text-nowrap font-weight-bolder">Total Post</p>
                                                    <p class=" h6 font-weight-bolder">
                                                        <span class="counter-up"><?php echo countTotal('post') ?></span>
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
                                <div class="col-12 col-md-4 col-xl-4">
                                    <div class="card mb-3 status-card post "onclick="location.href='<?php echo $url; ?>/category-create.php';">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <div class="post-right">
                                                        <i class="feather-layers"></i>
                                                    <p class="mt-3 mb-1 text-nowrap font-weight-bolder"> Categories</p>
                                                    <p class=" h6 font-weight-bolder">
                                                        <span class="counter-up"><?php echo countTotal('categories') ?></span>
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
                                
                                <div class="col-12 col-md-4 col-xl-4 ">
                                    <div class="card mb-3 status-card viewer" onclick="location.href='user-manger.php'" >
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <div class="viewer-right">
                                                        <i class="feather-box"></i>
                                                    <p class="mt-3 mb-1 text-nowrap font-weight-bolder">Total users</p>
                                                    <p class=" h6 font-weight-bolder">
                                                        <span class="counter-up"><?php echo countTotal('users'); ?></span>
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
                            <div class="row mt-2">


                                <!-- //chart-js -->
                                <div class="col-12">
                                    <div class="card overflow-hidden shadow mb-3 chat-js ">
                                        <div class="card-body chat-js">
                                            <div class=" chat-js d-flex justify-content-between align-items-center">
                                                <h5 class="chat-js font-weight-bold"> Vistors</h5>
                                                <div class="">
                                                    <img src="<?php echo $url; ?>/assets/img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                                                    <img src="<?php echo $url; ?>/assets/img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                                                    <img src="<?php echo $url; ?>/assets/img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                                                    <img src="<?php echo $url; ?>/assets/img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                                                    <img src="<?php echo $url; ?>/assets/img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                                                </div>

                                            </div>
                                            <canvas id="ov" height="141"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="col-12 col-lg-3">
                        <div class="row">

                            <!-- Recent Update -->
                            <div class="col-12 col-md-6 col-lg-12 mb-3 recent-update    ">
                                <p class="font-weight-bolder">Recent Posts</p>
                                    <div class="card  shadow-sm">
                                        <div class="card-body">
                                            
                                         
                                             <?php foreach(dashboardPosts($limit=3) as $p) {
                                                 $time = date("J M Y h:m:s",strtotime($p['created_at']));
                                                        ?>
                                                    <div class="d-flex justify-content-around">
                                                        <img src="<?php echo $url;?>/assets/img/user/avatar4.jpg " alt="" class="rounded-circle" style="height:40px;margin-right: 10px; width:40px;">
                                                        <div class="">
                                                            <h5  style="font-size:13px;font-weight:bold;"><?php echo user($p['user_id'])['name']; ?> <span style="font-weight:400;">is added new post in few ago.</span></h5> 
                                                            <small style="font-size:10px;margin-bottom:10px;" class=" font-weight-bold">  <?php echo $time ;?></small>
                                                        </div>
                                                    </div>
                                                    <br>
                                             
                                            <?php } ?>
                                            
                                           <button class=" btn btn-outline-info btn-sm">
                                            <a style="color:var(--color-dark);" class="" href="<?php echo $url ; ?>/postList.php">See all post . . </a>
                                           </button>
                                            
                                              
                                        </div>
                                    </div>
                                
                                
                            </div>
                             <!-- order and place chatjs -->
                            <div class="col-12 col-md-6 col-lg-12 order-place">
                                <div class=" card h-100 shadow">
                                    <div class="card-body ">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6 class="">Category & Post</h6>
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

                    <!-- table-list -->
                    <div class="col-12 one ">
                        <div class="card shadow-sm mt-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="feather-align-center"></i>
                                    <h5 class="font-weight-bold"> Post List
                                    </h5>
                                    <a href="<?php echo $url; ?>/post-add.php" class="btn btn-outline-info">
                                        <i class="feather-plus-circle "></i>
                                    </a>
                                </div>
                                <hr>
                                <table id="list" class="table  table-striped table-hover table-bordered table-responsive-md table-responsive-lg"  style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>category</th>
                                            <?php if($_SESSION['users']['role']==0){ ?>
                                                <th>user</th>
                                            <?php } ?>
                                            <th>Control</th>
                                            <th>Created_at</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach(posts() as $c){ 
                                            $time = date("J M Y",strtotime($c['created_at']));
                                            ?>
                                            <tr>
                                                <td class="text-nowrap"><?php echo $c['id'] ?></td>
                                                <td class="text-nowrap"><?php echo short($c['title'],10) ?></td>
                                                <td class="text-nowrap"><?php echo short(strip_tags(html_entity_decode($c['description'])),20) ?></td>
                                                <td class="text-nowrap"><?php echo category($c['category_id'])['title'] ?></td>
                                                <?php if($_SESSION['users']['role']==0){ ?>
                                                    <td><?php echo user($c['user_id'])['name'] ?></td>
                                                <?php } ?>
                                                <td class="text-nowrap">
                                                    <a class="btn btn-sm btn-outline-danger" href="post-del.php?id=<?php echo $c['id'] ?>"><i class="feather-trash-2"></i></a>
                                                    <a class="btn btn-sm btn-outline-warning" href="post-update.php?id=<?php echo $c['id'] ?>"><i class="feather-edit"></i></a>
                                                    <a class="btn btn-sm btn-outline-success" href="post-detail.php?id=<?php echo $c['id'] ?>"><i class="feather-alert-circle"></i></a>
                                                </td>
                                                <td><?php echo $time ; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>                                     
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>     
         </div>  
