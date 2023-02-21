@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h3>Editar Categoria
                    <a href="{{ url('admin/category')}}" class="btn btn-primary btn-sm text-while float-end">Regresar</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label >Nombre</label>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control" />
                            @error('name') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Slug</label>
                            <input type="text" name="slug" value="{{$category->slug}}" class="form-control" />
                            @error('slug') <small class="text-danger">{{$message}}</small> @enderror

                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Descripción</label>
                            <textarea name="description" class="form-control" rows="3">{{$category->name}}</textarea>
                            @error('description') <small class="text-danger">{{$message}}</small> @enderror

                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Imagen</label>
                            <input type="file" name="image" class="form-control" />
                            <img src="{{asset('/uploads/category/'.$category->image)}}" width="60px" height="60px">
                            @error('image') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Status</label>
                            <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':''}}/>
                            @error('status') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="cold-md-12">
                            <h4>SEO Tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label >Meta Title</label>
                            <input type="text" name="meta_title" value="{{$category->meta_title}}" class="form-control" />
                            @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label >Meta Keyword</label>
                            <textarea name="meta_keyword" class="form-control" rows="3">{{$category->meta_keyword}}</textarea>
                            @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label >Meta Descripción</label>
                            <textarea name="meta_description" class="form-control" rows="3">{{$category->meta_description}}</textarea>
                            @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
