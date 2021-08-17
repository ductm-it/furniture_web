@extends('layouts.master_frontend')
@section('content')
     <!-- Start Login Register Area -->
     <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(images/bg/5.jpg) no-repeat scroll center center / cover ;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="login__register__menu" role="tablist">
                        {{-- <li role="presentation" class="login active"><a href="#login" role="tab" data-toggle="tab">Login</a></li> --}}
                        <li role="presentation" class="register active"><a href="#register" role="tab" data-toggle="tab">Register</a></li>
                    </ul>
                </div>
            </div>
            <!-- Start Login Register Content -->
            @if ( Session::has('success') )
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        @if ( Session::has('error') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="htc__login__register__wrap">
                        <div id="register" role="tabpanel" class="single__tabs__panel tab-pane fade  in active">
                            <form class="register" method="post" action="/account/register">
                                @csrf
                                 <div class="form-group">
                                    <label for="name">Name<span class="required">(*)</span></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Brian Tran">
                                    @if ($errors->first('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email<span class="required">(*)</span></label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="BrianTran@gmail.com">
                                    @if ($errors->first('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                  </div>
                                  <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="EnterPassword">
                                    @if ($errors->first('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                  </div>
                                  <div class="htc__login__btn">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>

                            </form>

                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
            <!-- End Login Register Content -->
        </div>
    </div>
    <!-- End Login Register Area -->
@stop
