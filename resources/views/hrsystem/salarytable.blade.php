<div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>



<tr class="even pointer" id="newline">
    <td class="a-center ">
        <button class="btn btn-danger">+</button>
    </td>
    <td>
        {!! Form::text('salary',$user->salary,['placeholder' => 'Enter your salary', 'class'=>'form-control', 'required'=>'required' ]) !!}
    </td>
    <td>
        {!! Form::text('name',$user->email,['placeholder' => 'Your UserName', 'class'=>'form-control', 'required'=>'required' ]) !!}

    </td>
    <td>
        {!! Form::text('name',$user->updated_at,['placeholder' => 'Your UserName', 'class'=>'form-control', 'required'=>'required' ]) !!}
    </td>
    <td>
        {!! Form::text('comment','add new comment',['placeholder' => 'Enter the comment', 'class'=>'form-control', 'required'=>'required' ]) !!}
    </td>
</tr>



{{--<tr class="even pointer" id="newline" hidden="hidden">--}}
    {{--<td class="a-center ">--}}
        {{--<input type="checkbox" class="flat" name="table_records">--}}
    {{--</td>--}}
    {{--<td>--}}
        {{--<a id="salary" class="pUpdate salary"--}}
           {{--data-type="text"--}}
           {{--data-pk='{!! $user->id !!}'--}}
           {{--data-url="{{URL::to("/")}}/editsalary"--}}
           {{--data-title="Please enter new salary"> {!! $user->salary !!}</a>--}}
    {{--</td>--}}
    {{--<td class="placeholderText ">{!! $user->email !!}</td>--}}
    {{--<td class="placeholderText">{!! date('Y-m-d h:i:s ') !!}</td>--}}
    {{--<td class="a-right a-right placeholderText">Enter your comment</td>--}}
    {{--</td>--}}
{{--</tr>--}}


{{--{!! dump($mySalaryLogs) !!}--}}
    @foreach($mySalaryLogs as $SalaryLog)
        <tr class="even pointer">
            <td class="a-center ">
                <input type="checkbox" class="flat record" name="table_records" id="{!! $SalaryLog->id !!}">
            </td>
            <td class=" ">{!! $SalaryLog->salary !!}</td>
            <td class=" ">{!! $SalaryLog->init !!}</td>
            <td class=" ">{!! $SalaryLog->updated_at !!}</td>
            <td class="a-right a-right ">{!! $SalaryLog->comments !!}</td>
            </td>
        </tr>
    @endforeach
