@extends('imageuploader.master')
@section('index')
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
<div class="page-content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">{{ $title }}</h4>

                        <form action="{{ route('imageupload.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Upload image here</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" name="image">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror     
                                </div>
                            </div>
                            <!-- end row -->
                            
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <img src="" id="showImage">    
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="input-large form-control" id="description" name="description" rows="3" placeholder="Enter a message ..."></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Submit">
                             
                        </form>
                    </div><!-- end card -->
                </div><!-- end card -->

                <div class="card">
                    <div class="card-body">
                        @include('imageuploader.table')
                    </div><!-- end card -->
                </div><!-- end card -->
            </div>
            
            
        </div>
        <!-- end row -->
   
    </div>
    
</div>

<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function (e) { 
            console.log()
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection
