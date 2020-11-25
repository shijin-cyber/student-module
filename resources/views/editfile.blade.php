 
@extends ('admin_layout')
@section('content')
<div class="container">
 <form action="/updatedata/{{$datas->id}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  {{method_field('PUT')}}
      <div class="container">
        
         <input type="hidden" name="id" id="id">
         <div class="jumbotron">
        <p><h3>Edit Document</h3></p>
      </div>
        <div class="container">
    <div class="container">


           
                        
                        <label ><h5>document Tittle</h5></label>
              <input type="text" name="documenttitle" value="{{$datas->documnenttitle}}" class="form-control" >
                               <br>
      
                        
                        <div class="form-group">
                            
                            <input type="file" name="image" value="{{$datas->image}}" id="image"  class="form-control-image" multiple>
                        </div>
                        


                         
                        
                       
                      
  
</div>
      </div>
      <div class="container">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

  </form>
</div>

@endsection