<div class="row mb-4">
    <label for="{{ $id }}" class="col-sm-3 col-form-label">{{ $label }}</label>

    <div class="col-sm-4">
        @switch($type)
            @case('select')
                <select name="{{ $name }}" id="{{ $id }}" class="form-control" {{ $required ? 'required' : '' }}>
                    <option value="" {{ $value == '' ? 'selected' : '' }}>{{ $placeholder }}</option>
                    @foreach ($options as $key => $option)
                        <option value="{{ $matchOnKey ? $key : $option }}"
                            {{ ($matchOnKey ? $key == $value : $option == $value) ? 'selected' : '' }}>
                            {{ $option }}
                        </option>
                    @endforeach

                </select>
            @break

            @case('textarea')
                <textarea name="{{ $name }}" id="{{ $id }}" class="form-control" placeholder="{{ $placeholder }}"
                    {{ $required ? 'required' : '' }}>
                    {{ $value }}
                </textarea>
            @break

            @case('checkbox')
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="{{ $id }}" name="{{ $name }}"
                        value="1" {{ $value ? 'checked' : '' }}>
                    <label class="form-check-label" for="{{ $id }}">{{ $placeholder }}</label>
                </div>
            @break

            @case('radio')
                @foreach ($options as $option)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $name }}"
                            id="{{ $id }}-{{ $loop->index }}" value="{{ $option }}"
                            {{ $value === $option ? 'checked' : '' }}>
                        <label class="form-check-label" for="{{ $id }}-{{ $loop->index }}">
                            {{ $option }}
                        </label>
                    </div>
                @endforeach
            @break

            @case('submit')
                <div class="row justify-content-end">
                    <div class="col-sm-9">
                        <div>
                            <button type="submit"
                                class="btn btn-{{ $name ? $name : 'primary' }} w-md">{{ $value }}</button>
                        </div>
                    </div>
                </div>
            @break

            @default
                <input type="{{ $type }}" class="form-control" id="{{ $id }}" name="{{ $name }}"
                    placeholder="{{ $placeholder }}" value="{{ $value }}" {{ $required ? 'required' : '' }}>
        @endswitch
    </div>
</div>
