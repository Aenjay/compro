<div class="d-flex gap-1">
    <a href="{{route($route.".show", $d->id)}}" class="btn btn-sm btn-success">
        Detail
    </a>
    <a href="{{route($route.".edit", $d->id)}}" class="btn btn-sm btn-info">
        Edit
    </a>
    {!! Form::open(['route' => [$route.".destroy", $d->id], 'method' => 'DELETE']) !!}
        <a href="javascript:;" class="btn btn-sm btn-danger" onclick="SwalDelete($(this).closest('form'))">
            Delete
        </a>
    {!! Form::close() !!}
</div>