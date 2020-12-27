<html>

<style>
.page-break {
    page-break-after: always;
}
</style>

        <div>
            @if(count($users))
         <div style="display:none;">   {{$i = 1}}</div>
                @foreach($users as $user)
                
                <div style="margin-top:25px;">
                <hr style="border-top: dashed 2px;" />
                        <p style="margin:0px; margin-top:25px; padding:5px;"><em>Common Entrance Prep User Details</em></p>
                        <h2 style="margin:0px; padding:5px;">{{$user->fname}} {{$user->lname}}</h2>
                        <p style="margin:0px; padding:3px;"> Visit <strong>www.commonentranceprep.ng/{{$school->slug}}</strong> and use the details below to log in. </p>
                        <h4 style="margin:0px;margin-left:30px; padding:3px;">Username: {{$user->username}} </h4>
                        <h4 style="margin:0px; margin-left:30px; padding:3px;">Password: {{$user->password}} </h4>
                        
                </div>
                @if($i % 5 == 0 ) <div class="page-break"></div> @endif
                <div style="display:none;">{{$i++}}</div>
                @endforeach
            @else
            No users!
            
            @endif


        </div>






</html>