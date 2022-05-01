<a href="{{route('admin.edit',$id)}}" type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-sm"> <i class="fa fa-pen"></i></a>
<a href="{{route('admin.show',$id)}}" type="button" rel="tooltip" title="Mostrar" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
<a href="{{route('admin.destroy',$id)}}" type="button" rel="tooltip" title="Inactivar" class="btn btn-danger btn-sm"  onclick="return confirm('Estás seguro que desea inactivar el registro?');"><i class="fas fa-trash-alt"></i></a>
