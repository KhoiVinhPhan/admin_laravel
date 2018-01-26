@extends('layouts.backend.app')
@section('title', 'Quản lý tài khoản')
@section('content')
<div>
  <div class="card">
    <div class="card-header d-flex align-items-center">
        <h2 class="h4">Tài khoản hệ thống: {{ $result->total() }}</h2>
        <div class="col-md-10 page-action text-right">
            @can('add_users')
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Tạo tài khoản</a>
            @endcan
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <div class="input-group">
            <input class="form-control" placeholder="Nhập email để tìm kiếm" type="text" name="search" ng-model="searchName" onkeyup="myFunction()" id="myInput">
            <span class="input-group-btn">
               <button class="btn btn-info pull-right mg-left" type="submit"><i class="fa fa-search"></i></button>
           </span>
       </div>
   </div>
</div>
<div class="card-block">
  <table class="table table-striped table-hover" id="myTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Quyền hạn</th>
            <th>Thời gian tạo</th>
            @can('edit_users', 'delete_users')
            <th class="text-center">Hành động</th>
            @endcan
        </tr>
    </thead>
    <tbody>
        <?php $stt=0; ?>
        @foreach($result as $item)
        <?php $stt++; ?>
        <tr>
            <td>{{ $stt }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->roles->implode('name', ', ') }}</td>
            <td>{{ $item->created_at->toFormattedDateString() }}</td>

            @can('edit_users')
            <td class="text-center">
                @include('shared._actions', [
                'entity' => 'users',
                'id' => $item->id
                ])
            </td>
            @endcan
        </tr>
        @endforeach
    </tbody>
</table>
<div class="text-center">
    {{ $result->links() }}
</div>
</div>
</div>
</div>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }       
}
}
</script>
@endsection