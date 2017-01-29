
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
               {{--то что отражаем в заголовке попапа--}}
               data-prepend='{!! isset($skillList->skillgroup->groupname) ? $skillList->skillgroup->groupname:'Please chose group' !!}'

               {{--список ресурсов--}}
               data-source="{{$groupListOBJ }}"

               {{--присваемваем ИД по которому будет обновлять данные--}}
               data-pk='{!! $skillList->id !!}'

               {{--маршрут--}}
               data-url="/changeskillgroup"

               {{--список выпадающего меню--}}
               data-title="SET new skill-group">
                {{--то что отражаем в строке перед тем как выпадает попап--}}
                {!! isset($skillList->skillgroup->groupname)? ($skillList->skillgroup->groupname):'Please chose' !!}</a>

        </td>
        <td>{!! date('d-m-Y', strtotime($skillList->updated_at)) !!}</td>
    </tr>
@endforeach

</tbody>