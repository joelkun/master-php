@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header">Editar imagen</div>
      
                <div class="card-body">
                    <form action="{{route('image.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    	<input type="hidden" name="image_id" value="{{$image->id}}"/>
                        <div class="row mb-3">
                        	@if($image->image_path)
		                        <div class="container-avatar">
		                        	<img src="{{route('image.file',['filename'=>$image->image_path])}}" class="avatar">
		                        </div>
                        @endif
                            <label for="image_path" class="col-md-3 col-form-lavel text-md-right" >Imagen</label>
                            <div class="col-md-7">
                                <input type="file" id="image_path"  name="image_path" class="form-control @error('image_path') is-invalid @enderror" />
                                @error('image_path')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-3 col-form-lavel text-md-right" >Descripción</label>
                            <div class="col-md-7">
                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" required >{{ $image->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <input type="submit" class="btn btn-primary" value="Actualizar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection