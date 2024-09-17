<div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">{{ $label }}</i></span>
    <select name="{{ $name }}" class="form-control" aria-label="Sizing example select" aria-describedby="selectGroup-sizing-sm" required>
        
        @foreach($options as $option)
            <option value="{{ $option->id }}" {{ $option->id == old($name) ? 'selected' : '' }}>
                {{ $option->name }}
            </option>
        @endforeach
    </select>
</div>
