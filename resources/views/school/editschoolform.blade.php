@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit School</div>
            
               



                <div class="card-body">
                    <form method="POST" action="/schools/{{$school->id}}">
                        @csrf
                        @method('patch')




                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">School Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $school->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        
                        <div class="form-group row">
                            <label for="slug" class="col-md-4 col-form-label text-md-right">Slug-URL</label>

                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ $school->slug}}" required autocomplete="slug" autofocus>

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
                                <input id="email_suffix"  class="form-control @error('email_suffix') is-invalid @enderror" name="email_suffix" value="{{$school->email_suffix}}" >

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
                                <input id="username_prefix" class="form-control @error('username_prefix') is-invalid @enderror" name="address" value="{{ $school->username_prefix }}">

                                @error('username_prefix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="teacher_password_root" class="col-md-4 col-form-label text-md-right">Teacher Password Root</label>

                            <div class="col-md-6">
                                <input id="teacher_password_root" class="form-control @error('teacher_password_root') is-invalid @enderror" name="address" value="{{ $school->teacher_password_root}}">

                                @error('teacher_password_root')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password_root" class="col-md-4 col-form-label text-md-right">Student Password Root</label>

                            <div class="col-md-6">
                                <input id="password_root" class="form-control @error('password_root') is-invalid @enderror" name="address" value="{{ $school->password_root}}">

                                @error('password_root')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                                             
                       
                        


                      

       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Update School
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
