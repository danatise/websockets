@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div>  All Schools</div>
                    <div class="d-flex justify-content-end"><a href="schools/create"><button class="btn btn-primary btn-md"> <span class="" aria-hidden="true"><i class="fas fa-plus-circle"></i></span> Create School</button></a></div>
                
                </div>






<!--Beginning of user list-->
<div class="table-responsive">

<table id="table_school" class="table table-hover table-bordered ">

<tr>
<td colspan="7">
<div>
        <form class="d-flex" action="schools/search" method="get" >
        @csrf
        <input  class="form-control" type="text" name="name"  placeholder="Search by name"/> 
        <input  class="form-control" type="text"  name="status"  placeholder="Search by status"/> 
        <input  class="form-control btn-success" type="submit" value="Search"/> 

       </form>
    </div>
</td>
</tr>






        <tr>
                <th>School Id</th>
                <th>School Name</th>
                <th class="text-center">Slug</th>
                
                
                <th class="text-center">Email Suffix</th>
                <th class="text-center">Username Prefix</th>
                <th class="text-center">School _id</th>
                <th class="text-center">Password Root</th>
                
                
        </tr>
        @if(count($schools))
    @foreach($schools as $school)

        <tr>
                <td><a href="/subadmin/schools/{{$school->id}}">{{$school->id}}</a></td>
                <td><a href="/subadmin/schools/{{$school->id}}">{{$school->name}}</a></td>
                <td class="text-center"><a href="">{{$school->slug}}</a></td>
                <td class="text-center"><a href="">{{$school->email_suffix}}</a></td>
                <td class="text-center"><a href="">{{$school->username_prefix}}</a></td>
                <td class="text-center"><a href="">{{$school->school_id}}</a></td>
                <td class="text-center"><a href="">{{$school->password_root}}</a></td>

                
                
                
            
        </tr>


    @endforeach
</table>

</div>

        <div class="d-flex justify-content-between">
              

              <div class="text-center" style="margin-left:1.2rem;">
                       <p> Showing {{ $schools->firstItem() }} to {{ $schools->lastItem() }} of total {{$schools->total()}} entries</p>
              </div>

              <div>
                        {{ $schools->links() }}
              </div>

        </div>

        @endif
<!--End of user list-->
        </div>
        </div>
        </div>
        </div>
        


    



@endsection