<div class="form-group {{$errors->has($name) ? 'has-error':'' }}" id="{{$name}}_wrap">
    <label for="{{$name}}">{{$label}}</label>
    <div class="">
        {!! Form::number($name, $value, [
        "placeholder" => $label,
        "class" => "form-control",
        "id" => $name,
        // "step" => $step ?? 1,
        "step" => 1,

        ]) !!}
    </div>
    <span class="help-block"><strong id="{{$name}}_error">{{$errors->first($name)}}</strong></span>
</div>
