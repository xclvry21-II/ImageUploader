@extends('imageuploader.master')
@section('index')
   
   
<div class="page-content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="/storage/{{ $imageupload->image }}" alt="" style="height:500px; width:350px">
                        </div>
                        <p style="color: black; font-size:1rem">{{$imageupload->description}}</p>  
                    </div><!-- end card -->
                </div><!-- end card -->

               
            </div>
            
            
        </div>
        <!-- end row -->
   
    </div>
    
</div>


