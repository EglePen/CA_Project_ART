<div>
    @foreach ($images as $image)
        @php $name = (gettype($image) === 'string' ? $image : $image->name) @endphp
        <div class='old-images-block'>
            <img src='{{ asset("storage/images/$name") }}'>
            <input type='hidden' name='{{ $oldInputName }}' value='{{ $name }}'>
            <label>{{ $name }}</label>
            <i class="far fa-trash-alt remove-image"></i>
        </div>
    @endforeach
</div>

<label for="{{ $label }}">{{ Str::title(__("app.$label")) }}</label>
<div class="input-group">
    <div class="custom-file">
        <input multiple type="file" class="custom-file-input" name="{{ $inputName }}" id="{{ $inputId }}">
        <label class="custom-file-label" for="{{ $label }}">{{ Str::ucfirst(__('app.add_image')) }}</label>
    </div>
</div>
