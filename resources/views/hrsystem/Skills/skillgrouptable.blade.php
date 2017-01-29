
<tbody>
@foreach($skillGroupLists as $skillGroupList)
    <tr class="even pointer">
        <td class="a-center ">
            <input type="checkbox" class="flat record" name="table_records" id="{!! $skillGroupList->id !!}">
        </td>
        <td>
            <a id="skill" class="pUpdate skill"
               data-type="text"
               data-pk='{!! $skillGroupList->id !!}'
               data-url="/changeskillname"
               data-title="Please put new skill">
                {!! $skillGroupList->groupname !!}</a>
        </td>

        <td>{!! date('d-m-Y', strtotime($skillGroupList->updated_at)) !!}</td>
    </tr>
@endforeach

</tbody>