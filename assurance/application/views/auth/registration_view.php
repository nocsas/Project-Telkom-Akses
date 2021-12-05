

    <div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>

                    <?= $this->session->flashdata('message');?>


                    <form class="user" method="post" action="<?= base_url('registration'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                 
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Username" value="<?= set_value('username'); ?>">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control"
                                    id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control"
                                    id="password2" name="password2" placeholder="Repeat Password">
                            </div>
                        </div>
                        
                        <!-- <select class="form-control">
                            <option>Default select</option>
                        </select> -->

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="area">Area</label>
                        </div>
                            <select class="custom-select" id="area" name="area">
                                <option selected></option>
                                <option value="ALL">ALL</option>
                                <option value="BTL">BTL</option>
                                <option value="WTS">WTS</option>
                                <option value="WNS">WNS</option>
                                <option value="PGR">PGR</option>
                                <option value="KGD">KGD</option>
                                <option value="KBU">KBU</option>
                                <option value="KEN">KEN</option>
                                <option value="BBS">BBS</option>
                                <option value="SMN">SMN</option>
                                <option value="GOD">GOD</option>
                                <option value="PKM">PKM</option>
                                <option value="KLS">KLS</option>
                            </select>
                            <?= form_error('area', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="sektor">Sektor</label>
                        </div>
                            <select class="custom-select" id="sektor" name="sektor">
                                <option selected></option>
                                <option value="ALL">ALL</option>
                                <option value="BTL">BTL</option>
                                <option value="PGR">PGR</option>
                                <option value="KGD">KGD</option>
                                <option value="KBU">KBU</option>
                                <option value="KEN">KEN</option>
                                <option value="SMN">SMN</option>
                                <option value="PKM">PKM</option>
                            </select>
                            <?= form_error('sektor', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="role">Akses</label>
                        </div>
                            <select class="custom-select" id="role_id" name="role_id">
                                <option selected></option>
                                <option value="0">Administrator</option>
                                <option value="1">Site Manager</option>
                                <option value="2">Team Leader</option>
                                <option value="3">Helpdesk</option>
                                <option value="4">SM/TL HD</option>
                                <option value="5">View</option>
                            </select>
                            <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        
                    
                        <button type="submit" class="btn btn-primary btn-block">
                            Register
                        </button>
                        
                    </form>
                    <hr>
                    <!-- <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div> -->
                    <div class="text-center">
                        <a class="small" href="<?= base_url()?>user"><< Manajemen User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

