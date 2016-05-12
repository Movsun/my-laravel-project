<table class="table table-responsive" id="genders-table">
    <thead>
        <th>Name</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($genders as $gender)
        <tr>
            <td>{!! $gender->name !!}</td>
            <td>{!! $gender->created_at !!}</td>
            <td>{!! $gender->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['genders.destroy', $gender->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('genders.show', [$gender->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('genders.edit', [$gender->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>