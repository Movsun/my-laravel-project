<table class="table table-responsive" id="userProfiles-table">
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Profile Picture</th>
        <th>Dob</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Gender Id</th>
        <th>Last Online</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($userProfiles as $userProfile)
        <tr>
            <td>{!! $userProfile->first_name !!}</td>
            <td>{!! $userProfile->last_name !!}</td>
            <td>{!! $userProfile->profile_picture !!}</td>
            <td>{!! $userProfile->dob !!}</td>
            <td>{!! $userProfile->address !!}</td>
            <td>{!! $userProfile->phone_number !!}</td>
            <td>{!! $userProfile->gender_id !!}</td>
            <td>{!! $userProfile->last_online !!}</td>
            <td>{!! $userProfile->created_at !!}</td>
            <td>{!! $userProfile->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['userProfiles.destroy', $userProfile->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userProfiles.show', [$userProfile->user_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userProfiles.edit', [$userProfile->user_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
