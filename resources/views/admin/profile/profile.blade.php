@extends('admin.layouts.layout')

@section('content')
    <!-- Main Content -->

    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, Ujang!</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="">
                            <div class="card-header">
                                <h4>Profile Information</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('profile.update') }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ old('name', $user->name) }}" required="">
                                            @if ($errors->has('name'))
                                                <code>{{ $errors->first('name') }}</code>
                                            @endif
                                        </div>


                                        <div class="form-group col-md-6 col-12">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ old('email', $user->email) }}" required="">
                                            @if ($errors->has('email'))
                                                <code>{{ $errors->first('email') }}</code>
                                            @endif
                                        </div>

                                    </div>


                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Save Changes</button>
                                    </div>

                                </form>




                            </div>


                        </form>


                    </div>

                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="">
                            <div class="card-header">
                                <h4>Profile Information</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('profile.update') }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ old('name', $user->name) }}" required="">
                                            @if ($errors->has('name'))
                                                <code>{{ $errors->first('name') }}</code>
                                            @endif
                                        </div>


                                       

                                    </div>


                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Save Changes</button>
                                    </div>

                                </form>




                            </div>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
