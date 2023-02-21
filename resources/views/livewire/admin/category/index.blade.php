<div>
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Categoria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit:prevent="destroyCategory">
                    <div class="modal-body">
                        <h6>¿Está seguro de que desea eliminar estos datos?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Si, Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 ">

            @if (session('message'))
                <div class="alert alert-succes">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Categoria
                        <a href="{{ url('admin/category/create')}}" class="btn btn-primary btn-sm float-end">Agregar Categoria</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Status</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->status == '1' ? 'Hidden':'Visible'}}</td>
                                <td>
                                    <a class="btn btn-succes" href="{{url('admin/category/'.$category->id.'/edit')}}">Editar</a>
                                    <a class="btn btn-danger" wire:click="deleteCategory({{$category->id}})" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    window.addEventListener('close-modal', event =>{
        $('#deleteModal').modal('hide');
    });
</script>

@endpush
