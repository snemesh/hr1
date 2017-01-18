
<tbody>
@foreach($skillLists as $skillList)
    <tr class="even pointer">
        <td class="a-center ">
            <input type="checkbox" class="flat record" name="table_records" id="{!! $skillList->id !!}">
        </td>
        <td>
            <a id="skill" class="pUpdate skill"
               data-type="text"
               data-pk='{!! $skillList->id !!}'
               data-url="/changeskillname"
               data-title="Please put new skill">
                {!! $skillList->name !!}</a>
        </td>
        <td>
            <a id="skillgroup" class="pUpdate skillgroup"
               data-type="select"

               data-prepend='{!! isset($skillList->skillgroup->name) ? $skillList->skillgroup->name:'Please chose' !!}'
               data-source="{{$groupListOBJ }}"

               data-pk='{!! $skillList->group_id !!}'
               data-url="/changeskillgroup"
               data-title="SET new skill-group">
                {!! isset($skillList->skillgroup->name)?isset($skillList->skillgroup->name):'Please chose' !!}</a>
        </td>
        <td>
            <a id="skillgroup" class="pUpdate skillgroup">
                <i class="fa-ambulance"></i> New group
            </a>
        </td>
        <td>{!! date('d-m-Y', strtotime($skillList->updated_at)) !!}</td>
    </tr>
@endforeach

</tbody>
