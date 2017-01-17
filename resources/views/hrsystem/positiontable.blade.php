
<tbody>
@foreach($listOfPositions as $listOfPosition)
    <tr class="even pointer">
        <td class="a-center ">
            <input type="checkbox" class="flat record" name="table_records" id="{!! $listOfPosition->id !!}">
        </td>
        <td>
            <a id="position" class="pUpdate position"
               data-type="text"
               data-pk='{!! $listOfPosition->id !!}'
               data-url="{{URL::to("/")}}/onlypositions"
               data-title="Please put new position">
                {!! $listOfPosition->positionname !!}</a>
        </td>
        <td>{!! $listOfPosition->updated_at !!}</td>
    </tr>
@endforeach

</tbody>
