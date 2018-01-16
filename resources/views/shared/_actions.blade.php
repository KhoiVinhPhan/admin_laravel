@can('edit_users')
    <a href="{{ route($entity.'.edit', [str_singular($entity) => $id])  }}" class="btn btn-xs btn-info">
        <i class="fa fa-edit"></i> Edit</a>
@endcan

@can('delete_users')
    {!! Form::open( ['method' => 'delete', 'url' => route($entity.'.destroy', ['user' => $id]), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Bạn chắc chắn muốn xóa?")']) !!}
        <button type="submit" class="btn-delete btn btn-xs btn-danger">
            <i class="fa fa-trash"> Xóa</i>
        </button>
    {!! Form::close() !!}
@endcan