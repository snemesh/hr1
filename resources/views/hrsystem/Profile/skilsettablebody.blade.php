@foreach($userskills as $userskill)
<tr>
    <td>#</td>
    <td>
        <a>{{ $userskill->skill->name }}</a>
        <br />
        <small>Updated {{ date('d-m-Y', strtotime($userskill->updated_at)) }}</small>
    </td>
    <td>
        <h4>{{ $SkillGroup[$userskill->skill->skillgroup_id]->groupname }}</h4>
    </td>
    <td class="project_progress">
        <div class="progress progress_sm">
            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: {{ $userskill->skill_current_rate }}%;"></div>
        </div>
        <small>{{ round($userskill->skill_current_rate,2)  }} % Complete</small>
    </td>
    <td>
        <button type="button" class="btn btn-success btn-xs">{{ $userskill->skill_accepted_by }}</button>
    </td>
    <td>
        {{ $userskill->comments }}
    </td>
</tr>
@endforeach