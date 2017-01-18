
<tbody>
@foreach($listOfGroups as $listOfGroup)
    <tr class="even pointer">
        <td class="a-center ">
            <input type="checkbox" class="flat record" name="table_records" id="{!! $listOfGroup->id !!}">
        </td>
        <td>
            <a id="position" class="pUpdate position"
               data-type="text"
               data-pk='{!! $listOfGroup->id !!}'
               data-url="{{URL::to("/")}}/onlygroups"
               data-title="Please put new group">
                {!! $listOfGroup->groupname !!}</a>
        </td>
        <td>{!! date('d-m-Y', strtotime($listOfGroup->updated_at)) !!}</td>
    </tr>
@endforeach

</tbody>
