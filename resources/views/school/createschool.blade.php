@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create School</div>

             



                <div class="card-body">
                    <form method="POST" action="/schools">
                        @csrf




                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">School Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        
                        <div class="form-group row">
                            <label for="slug" class="col-md-4 col-form-label text-md-right">URL or Slug</label>

                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required autocomplete="slug" autofocus>

                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email_suffix" class="col-md-4 col-form-label text-md-right">Email Suffix</label>

                            <div class="col-md-6">
                                <input id="email_suffix" type="text" class="form-control @error('email_suffix') is-invalid @enderror" name="email_suffix" value="{{ old('email_suffix') }}" required autocomplete="email_suffix" autofocus>

                                @error('email_suffix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="username_prefix" class="col-md-4 col-form-label text-md-right">Username Prefix</label>

                            <div class="col-md-6">
                                <input id="username_prefix" type="text" class="form-control @error('username_prefix') is-invalid @enderror" name="username_prefix" value="{{ old('username_prefix') }}" required autofocus>

                                @error('username_prefix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                       

                        

                        <div class="form-group row">
                            <label for="password_root" class="col-md-4 col-form-label text-md-right">Student Password Root</label>

                            <div class="col-md-6">
                                <input id="password_root" type="text" class="form-control @error('password_root') is-invalid @enderror" name="password_root" value="{{ old('password_root') }}" required autofocus>

                                @error('password_root')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="teacher_password_root" class="col-md-4 col-form-label text-md-right">Teacher Password Root</label>

                            <div class="col-md-6">
                                <input id="teacher_password_root" type="text" class="form-control @error('password_root') is-invalid @enderror" name="teacher_password_root" value="{{ old('teacher_password_root') }}" required autofocus>

                                @error('teacher_password_root')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         

              








                        <div class="form-group row">
                            <label for="school_id" class="col-md-4 col-form-label text-md-right">School_id</label>

                            <div class="col-md-6">
                                <input id="school_id" class="form-control @error('school_id') is-invalid @enderror" name="school_id" value="{{ old('school_id') }}">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
                       
                       

                       
       


                                           
                        








      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="this.disabled=true; this.innerHTML='Sending, please wait...';this.form.submit();">
                                    Create School
                                </button>
                            </div>
                        </div>
                    </form>

                    


                </div>
            </div>
        </div>
    </div>
</div>











@endsection
