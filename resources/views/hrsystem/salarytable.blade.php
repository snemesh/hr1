<div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>


{!! Form::open(['route' => 'savesalary']) !!}
<input name="resivedid" hidden="hidden" value={{$user->id}}>
<tr class="even pointer" id="newline">
    <td class="a-center ">
        <button class="btn btn-danger">+</button>
    </td>
    <td>
        {!! Form::text('salary',$user->salary,['placeholder' => 'Enter your salary', 'class'=>'form-control', 'required'=>'required' ]) !!}
    </td>
    <td>
        {!! Form::text('email',$user->email,['placeholder' => 'Your UserName', 'class'=>'form-control', 'required'=>'required' ]) !!}
    </td>
    <td>

        <fieldset>
            <div class="control-group">
                <div class="controls">
                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                        {{--<input value="{!! $SalaryLog->updated_at !!}" type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="Enter date" aria-describedby="inputSuccess2Status4">--}}
                        {!! Form::text('updated_at',$user->updated_at,['placeholder' => 'Enter date', 'class'=>'form-control has-feedback-left', 'required'=>'required', 'id' => 'single_cal4','aria-describedby'=>'inputSuccess2Status4' ]) !!}
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                    </div>
                </div>
            </div>
        </fieldset>

    </td>
    <td>
        {!! Form::text('comments','add new comment',['placeholder' => 'Enter the comment', 'class'=>'form-control', 'required'=>'required' ]) !!}
    </td>
</tr>
{!! Form::token() . Form::close() !!}

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
