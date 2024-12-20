                
                <?php

                $get_products = "SELECT SUM(count) FROM user";

                $run_products = mysqli_query($conn,$get_products);

                $row_products=mysqli_fetch_array($run_products);

                $countusers = $row_products['SUM(count)'];

                $get_products = "SELECT SUM(count) FROM userdata";

                $run_products = mysqli_query($conn,$get_products);

                $row_products=mysqli_fetch_array($run_products);

                $countuserdata = $row_products['SUM(count)'];

                ?>
                <div class="col-xl-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Total Users</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter"><?=$countusers?></h5>
                                <span class="font-12">Registered users</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Total Reports</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter"><?=$countuserdata?></h5>
                                <span class="font-12">Users reports... <a href="reports">More</a></span>
                            </div>
                        </div>
                    </div>
                  