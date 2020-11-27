<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/basic.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>


</head>
<body>
  <form id="dropzoneForm" class="dropzone" action="{{'dropzoneupload'}}">
    @csrf
    
    
  </form>
  <button type="button" class="btn btn-info" id="submit-all">upload</button>


  <script type="text/javascript">
    Dropzone.options.dropzoneForm ={
      autoProcessQueue : false,
      acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
      init :function(){
        var submitButton =  document.querySelector("#submit-all");
        myDropzone = this;
        submitButton.addEventListener('click',function(){
          myDropzone.ProcessQueue();

        });
        this.on("complete",function(){
          if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length ==0){
            var _this = this;
            _this.removeAllFiles();
          }

        });

      }
    };
  </script>

</body>
</html>