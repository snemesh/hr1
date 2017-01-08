<div align="center" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <br>
    <img class="img-responsive avatar-view" src={!! (null!==$user->avatar) ? asset($user->avatar) : asset('img/default.png') !!} alt="Avatar" title="Change the avatar">
    <div class="row">
        <br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::open(['route' => ['uploading','userid'=>$user->id],'files' => true]) !!}

            <p><input class='form-control' type="file" name="photo" multiple accept="image/*,image/jpeg"></p>
            <button type="submit" class="btn btn-primary col-md-12 col-sm-12 col-xs-12">Upload Image</button>
            <input name="resivedid" hidden="hidden" value={{$user->id}}>
            {!! Form::token() . Form::close() !!}
        </div>
    </div>
    <div align="left">
        <h3>{!! $user->name !!}</h3>
        <ul class="list-unstyled user_data">
            <li><i class="fa fa-map-marker user-profile-icon"></i> Ukraine, Odess, UA</li>
            <li><i class="fa fa-sitemap user-profile-icon"></i>{!! null==$user->group_id ? ' The user group haven\'t defined yet': ' Your group: '.$listOfGroup[$user->group_id] !!}</li>
            <li><i class="fa fa-briefcase user-profile-icon"></i>{!! null==$user->position_id ? ' The Position was not defined':  ' Your position: '.$listOfPositions[$user->position_id] !!}</li>
            <li class="m-top-xs">
                <i class="fa fa-external-link user-profile-icon"></i>
                <a href="http://www.intersog.com/" target="_blank">www.intersog.com</a>
            </li>
        </ul>
    </div>
</div>