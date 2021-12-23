



    <div class="container">



<!-- Outer Row -->

<div class="row justify-content-center">



    <div class="col-lg-7">



        <div class="card o-hidden border-0 shadow-lg my-5">

            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->

                <div class="row">

                    

                    <div class="col-lg">

                        <div class="p-5">

                            <div class="text-center">

                                <img src="<?= base_url('assets/img/raja.png');?>" class="img-fluid" alt="Responsive image" height="62%"></br></h1>
                                <!--<h1 class="h4 text-gray-900 mb-4"><img src="<?= base_url('assets/img/raja.png');?>" alt="RAJA" height="62"></br></h1>-->

                                <h1 class="h4 text-gray-900 mb-4"><b>LEVEL UP</b></br>work smart to provide the best service</br></h1>


                            </div>

                            <br>

                            <?= $this->session->flashdata('message');?>



                            <form class="user" method="post" action="<?= base_url('auth'); ?>">

                                <div class="form-group">

                                    <input type="text" class="form-control"

                                        id="username" name="username"

                                        placeholder="Username" value="<?= set_value('username'); ?>">

                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>

                                <div class="form-group">

                                    <input type="password" class="form-control"

                                        id="password" name="password" placeholder="Password">

                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                
                                <br>

                                <button style="background-color:red;" type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt fa-fw"></i>

                                    Login

                                </button>

                                

                                

                            </form>

                            <!-- <hr> -->

                            <!-- <div class="text-center">

                                <a class="small" href="forgot-password.html">Forgot Password?</a>

                            </div>

                            <div class="text-center">

                                <a class="small" href="register.html">Create an Account!</a>

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </div>



</div>



</div>



