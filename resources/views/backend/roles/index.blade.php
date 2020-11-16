@extends('layouts.backend.app') 
@section('title','All Roles') 
@push('css')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon"><i class="pe-7s-check icon-gradient bg-mean-fruit"> </i></div>
                <div>Roles</div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark"><i class="fa fa-star"></i></button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-responsive">
                    <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Permission</th>
                                <th class="text-center">Updated At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
							@foreach ($role as $key=>$roles)
							<tr class="text-center">
								<td class="text-center text-muted">{{$key + 1}}</td>
								<td class="text-center">{{$roles->name}}</td>
                                <td class="text-center">
									@if($roles->Permissions->count() >0)
                                    <span class="badge badge-info">{{ $roles->Permissions->count() }}</span>
									@else
										<span class="badge badge-danger">No Permission Found:(</span>
									@endif
								</td>
								<td>{{$roles->updated_at->diffForHumans()}}</td>
                                <td class="text-center">
									<a href="{{route('app.role.edit',$roles->id)}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm">
										<i class="fa fa-edit text-white"><span>Edit</span></i>
									</a>
									<button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">
										<i class="fa fa-trash-alt text-white"><span> Delete</span></i>
									</button>
                                </td>
                            </tr>
							@endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#datatable').DataTable();
		});
	</script>
@endpush