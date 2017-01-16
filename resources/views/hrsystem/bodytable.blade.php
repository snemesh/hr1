                {{--Header og the table--}}
                <thead>
                <tr>
                    {{--<th>#id</th>--}}
                    <th>User name</th>
                    <th>User email</th>
                    <th>Salary</th>
                    <th>Hourly</th>
                    <th>Position</th>
                    <th>Group</th>
                    <th>Last Updated</th>
                    <th>Action</th>
                </tr>
                </thead>

                {{--Body og the table--}}

                <tbody>
                {{--/End Body og the table--}}
                <div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
                @foreach($listOfusers as $user)
                    <tr>
                        <td>{!! $user->name !!}</td>
                        <td>{!! $user->email !!}</td>
                        <td>
                            <a id="salary" class="pUpdate salary"
                               data-type="text"
                               data-pk='{!! $user->id !!}'
                               data-url="{{URL::to("/")}}/editsalary"
                               data-title="Please enter new salary"> {!! $user->salary !!}</a>
                        </td>

                        <td>{!! $user->rate !!}</td>
                        <td>
                            <a id="position" class="pUpdate position"
                               data-type="select"
                               data-prepend='{!! $listOfPositions[$user->position_id] !!}'
                               data-source="{{$listOfPositionsOBJ }}"
                               data-pk='{!! $user->id !!}'
                               data-url="{{URL::to("/")}}/editposition"
                               data-title="Please choose new position"> {!! $listOfPositions[$user->position_id] !!}</a>
                        </td>
                        <td>
                            <a id="group" class="pUpdate group"
                               data-type="select"
                               data-prepend='{!! $listOfGroup[$user->group_id] !!}'
                               data-source="{{$listOfGroupsOBJ }}"
                               data-pk='{!! $user->id !!}'
                               data-url="{{URL::to("/")}}/editgroup"
                               data-title="Please choose new group"> {!! $listOfGroup[$user->group_id] !!}</a>
                        </td>
                        <td>{!! $user->updated_at !!}</td>
                        <td class=" last"><a href="/profile/{!! $user->id !!}"><i class="fa fa-pencil">  View</i></a></td>
                    </tr>
                @endforeach

                </tbody>