@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div>
                        <h3>School</h3>


                        </div>
                        <div class=" d-flex justify-content-around mt-3">
                        <a href="/schools/create"><button class="btn btn-outline-primary">Provision School</button></a>
                        <a href="/schools"><button class="btn btn-outline-primary">View Schools</button></a>
                        </div>


                        <div class="mt-5">

                        <div class="container">
                        
                        <hr/>
	                        <h3>Downloading Data</h3>

                                <div class="form-group">
                                <form action="{{ url('export') }}" method="POST" name="importform" enctype="multipart/form-data">
		                            @csrf
    



                                         <!-----for selecting schoool-->
                                 <div class="form-group row">
                                        <label for="school_id" class="col-md-2 col-form-label text-md-right">School</label>
                                            <div class="col-md-8">
                                                <select id="school_id" name="school_id" class="form-control @error('school_id') is-invalid @enderror">
                                                    <option value="">Select --</option>
                                                @if(count($schools))
                                                    @foreach($schools as $school)
                                                    <option value="{{$school->id}}">{{$school->name}}</option>
                                                    @endforeach
                                                @endif
                          
                                    
                            </select>

                                @error('school_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>     
                        <!----end of select school-->



			                        <button type="submit" class="btn btn-outline-success"> Export File </button>
                                </form>
		                        </div> 
<hr/>
<h3>Uploading Data</h3>

	                            <form action="{{ url('import') }}" method="POST" name="importform" enctype="multipart/form-data">
		                            @csrf
		                        
                                <div class="form-group">
			                        <label for="file">File:</label>
			                            <input id="file" type="file" name="file" class="form-control">
		                        </div>

                                <!-----for selecting schoool-->
                                 <div class="form-group row">
                                        <label for="school_id" class="col-md-2 col-form-label text-md-right">School</label>
                                            <div class="col-md-8">
                                                <select id="school_id" name="school_id" class="form-control @error('school_id') is-invalid @enderror">
                                                    <option value="">Select --</option>
                                                @if(count($schools))
                                                    @foreach($schools as $school)
                                                    <option value="{{$school->id}}">{{$school->name}}</option>
                                                    @endforeach
                                                @endif
                          
                                    
                            </select>

                                @error('school_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>     
                        <!----end of select school-->

                                

		                        <button class="btn btn-success">Import File</button>
	                            </form>
                            </div>
                        </div>



<!---download and view pdf--->
                        <hr/>
                        <h3>Download PDF</h3>
                        
                    <div class=" mt-5">
                            <div class="">
                                <div class="">

                            <form action="/pdf" method="GET" >
                            @csrf
                                       <!-----for selecting schoool-->
                                 <div class="form-group row">
                                        <label for="school_id" class="col-md-2 col-form-label text-md-right">School</label>
                                            <div class="col-md-8">
                                                <select id="school_id" name="school_id" class="form-control @error('school_id') is-invalid @enderror">
                                                    <option value="">Select --</option>
                                                @if(count($schools))
                                                    @foreach($schools as $school)
                                                    <option value="{{$school->id}}">{{$school->name}}</option>
                                                    @endforeach
                                                @endif
                          
                                    
                            </select>

                                @error('school_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>     
                        <!----end of select school-->

                                    <div class="">
                                        <button  type="submit"class="btn btn-outline-danger">View PDF</button>
                                    </div>

                        </form>

                                </div>
                            </div>
                    </div>
<!---end download and view pdf--->


                </div>
            </div>
        </div>
    </div>
</div>




@endsection
