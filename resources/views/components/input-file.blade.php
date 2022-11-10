<div class="form-group row">
    <label for="{{ $field }}" class="col-sm-2 col-form-label">{{ $tag }}</label>
    <div class="input-group col-sm-10">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="{{ $field }}" name="{{ $field }}">
            <label class="custom-file-label" for="{{ $field }}">{{ $tag }}</label>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName)
        });
    });
</script>
