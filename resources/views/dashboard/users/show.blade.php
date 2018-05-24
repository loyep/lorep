@extends('dashboard.layouts.admin')

@section('title', '查看用户')

@section('content')

    <header class="header">
        <div class="header-bar">
            <h4>查看 Users</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">查看 Users</li>
            </ol>
        </div>
    </header>


    <div class="main-content">
        <div class="row">
            <div class="col-lg-8">
                <form class="card">
                    <h4 class="card-title"><strong>Stacked</strong></h4>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password">
                        </div>
                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </footer>
                </form>
            </div>

            <div class="col-lg-4">
                <form class="card">
                    <h4 class="card-title"><strong>Without label</strong></h4>

                    <div class="card-body">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Password">
                        </div>
                    </div>

                    <footer class="card-footer flexbox flex-justified">
                        <div class="custom-control custom-checkbox mb-0 d-none d-md-flex">
                            <input type="checkbox" class="custom-control-input">
                            <label class="custom-control-label">I agree to <a class="text-primary" href="#">terms and
                                    conditions</a>.</label>
                        </div>

                        <div class="text-right">
                            <button class="btn btn-secondary" type="reset">Cancel</button>
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Left icon
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-lg-6">
                <form class="card">
                    <h4 class="card-title"><strong>Left icon</strong></h4>

                    <div class="card-body">

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text w-40px"><i class="fa fa-facebook"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Facebook">
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text w-40px"><i class="fa fa-google-plus"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Google plus">
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text w-40px"><i class="fa fa-twitter"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Twitter">
                        </div>

                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Right icon
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-lg-6">
                <form class="card">
                    <h4 class="card-title"><strong>Right icon</strong></h4>

                    <div class="card-body">

                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Facebook">
                            <div class="input-group-append">
                                <span class="input-group-text w-40px"><i class="fa fa-facebook"></i></span>
                            </div>
                        </div>

                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Google plus">
                            <div class="input-group-append">
                                <span class="input-group-text w-40px"><i class="fa fa-google-plus"></i></span>
                            </div>
                        </div>

                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Twitter">
                            <div class="input-group-append">
                                <span class="input-group-text w-40px"><i class="fa fa-twitter"></i></span>
                            </div>
                        </div>

                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Horizontal form
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-lg-6">
                <form class="card">
                    <h4 class="card-title"><strong>Horizontal</strong></h4>

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Name</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="password">
                            </div>
                        </div>
                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                        <button class="btn btn-primary" type="submit">Register</button>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Divided
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-lg-6">
                <form class="card">
                    <h4 class="card-title"><strong>Divided</strong></h4>

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-sm-right">Username</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text">
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-sm-right">Password</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="password">
                            </div>
                        </div>
                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Two sections - 1
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-lg-6">
                <form class="card">
                    <h4 class="card-title">Two sections</h4>

                    <div class="card-body">
                        <h6 class="text-uppercase">Personal details</h6>
                        <hr class="hr-sm mb-2">

                        <div class="form-group">
                            <label>First name</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Last name</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text">
                        </div>


                        <h6 class="text-uppercase mt-3">Account information</h6>
                        <hr class="hr-sm mb-2">

                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password">
                        </div>

                        <div class="form-group">
                            <label>Confirm password</label>
                            <input class="form-control" type="password">
                        </div>
                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Two sections - 2
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-lg-6">
                <form class="card">
                    <h4 class="card-title"><strong>Personal details</strong></h4>

                    <div class="card-body">
                        <div class="form-group">
                            <label>First name</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Last name</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>

                    <h4 class="card-title"><strong>Account information</strong></h4>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password">
                        </div>

                        <div class="form-group">
                            <label>Confirm password</label>
                            <input class="form-control" type="password">
                        </div>
                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Two columns
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-12">
                <form class="card">
                    <h4 class="card-title"><strong>Two columns</strong></h4>

                    <div class="card-body row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label>Last name</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password">
                            </div>

                            <div class="form-group">
                                <label>Confirm password</label>
                                <input class="form-control" type="password">
                            </div>
                        </div>
                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Form row
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-12">
                <form class="card">
                    <h4 class="card-title"><strong>Form row</strong></h4>

                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress" class="col-form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>

                        <div class="form-group">
                            <label for="inputAddress2" class="col-form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                   placeholder="Apartment, studio, or floor">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity" class="col-form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" class="col-form-label">State</label>
                                <select id="inputState" class="form-control">
                                    <option>California</option>
                                    <option>New Mexico</option>
                                    <option>New York</option>
                                    <option>Texas</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip" class="col-form-label">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox mr-3">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label">I agree to terms and conditions.</label>
                            </div>
                        </div>

                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Attached
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-lg-6">
                <form class="card form-type-combine">
                    <h4 class="card-title"><strong>Attached</strong></h4>

                    <div class="card-body">

                        <div class="form-groups-attached">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>First name</label>
                                    <input class="form-control" type="text">
                                </div>

                                <div class="form-group col-6">
                                    <label>Last name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email address</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password">
                                </div>

                                <div class="form-group col-6">
                                    <label>Confirm password</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>

                        </div>
                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                        <button class="btn btn-primary" type="submit">Register</button>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Attached sections
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-lg-6">
                <form class="card form-type-combine">
                    <h4 class="card-title"><strong>Attached sections</strong></h4>

                    <div class="card-body">

                        <h6 class="text-light fw-300">Credit card info</h6>
                        <div class="form-groups-attached">
                            <div class="form-group">
                                <label>Card number</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Expire date</label>
                                    <input class="form-control" type="text" placeholder="MM / YY">
                                </div>

                                <div class="form-group col-6">
                                    <label>CVC</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                        </div>

                        <br>
                        <h6 class="text-light fw-300">Billing address</h6>
                        <div class="form-groups-attached">

                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label>Address line 2</label>
                                <input class="form-control" type="text">
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Zip</label>
                                    <input class="form-control" type="password">
                                </div>

                                <div class="form-group col-6">
                                    <label>City</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>

                        </div>


                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </footer>
                </form>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Inline form
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-12">
                <div class="card">
                    <h4 class="card-title"><strong>Inline form</strong></h4>

                    <div class="card-body">

                        <form class="form-inline">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3"
                                       placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword3"
                                       placeholder="Password">
                            </div>

                            <div class="custom-control custom-checkbox mr-3">
                                <input type="checkbox" class="custom-control-input" checked="">
                                <label class="custom-control-label">Remember me</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>

                    </div>
                </div>
            </div>


            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Only view
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <div class="col-12">
                <form class="card">
                    <h4 class="card-title"><strong>Only view</strong></h4>

                    <div class="card-body row">

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">First name</label>
                                <div class="col-sm-8">
                                    <p class="form-control-plaintext">Hossein</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Last name</label>
                                <div class="col-sm-8">
                                    <p class="form-control-plaintext">Shams</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8">
                                    <p class="form-control-plaintext">Male</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <p class="form-control-plaintext">TheTheme</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Facebook</label>
                                <div class="col-sm-8">
                                    <p class="form-control-plaintext">thethemeio</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Twitter</label>
                                <div class="col-sm-8">
                                    <p class="form-control-plaintext">thethemeio</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary">Back</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </footer>
                </form>
            </div>


        </div>
    </div><!--/.main-content -->


@endsection