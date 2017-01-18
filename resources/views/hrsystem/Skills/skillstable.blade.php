
<tbody>
@foreach($skillLists as $skillList)
    <tr class="even pointer">
        <td class="a-center ">
            <input type="checkbox" class="flat record" name="table_records" id="{!! $skillList->id !!}">
        </td>
        <td>
            <a id="position" class="pUpdate position"
               data-type="text"
               data-pk='{!! $skillList->id !!}'
               data-url="{{URL::to("/")}}showskilllist"
               data-title="Please put new position">
                {!! $skillList->name !!}</a>
        </td>
        <td>{!! date('d-m-Y', strtotime($skillList->updated_at)) !!}</td>
    </tr>
@endforeach

</tbody>
