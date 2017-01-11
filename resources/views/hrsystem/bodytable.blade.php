                {{--Header og the table--}}
                <thead>
                <tr>
                    <th>#id</th>
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

                @foreach($listOfusers as $user)
                    <tr>
                        <td>{!! $user->id !!}</td>
                        <td>{!! $user->name !!}</td>
                        <td>{!! $user->email !!}</td>
                        <td>{!! $user->salary !!}</td>
                        <td>{!! $user->rate !!}</td>
                        <td>{!! $listOfPositions[$user->position_id] !!}</td>
                        <td>{!! $listOfGroup[$user->group_id] !!}</td>
                        <td>{!! $user->updated_at !!}</td>
                        <td class=" last"><a href="/profile/{!! $user->id !!}"><i class="fa fa-pencil">  View</i></a></td>
                        {{--<td class=" last"><a href="/profile"><i class="fa fa-pencil">  View</i></a></td>--}}
                    </tr>
                @endforeach

                </tbody>