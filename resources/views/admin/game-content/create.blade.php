@extends('layouts.panel')
@section('title')
game-content

@endsection

@section('content')
<div class="row">
   <div class="card">
    <div class="card-header bg-dark h4 d-flex justify-content-between "  style="margin-bottom: 49px;">
        <h3 class="text-white" >Game-Content Create</h3>
       <div>
        <a class="btn btn-primary" href="">list</a>
       </div>
    </div>
    <div class="card-body">
        <div class="col-xs-12">
            <form action="{{ route('admin.gameContent.insert') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    @if (session('success'))
                    <div class="col-xs-12">
                        <div class="alert alert-success">{{ session('success') }}</div>
                    </div>
                    @endif

                    <div class="col-md-6 col-xs-12">
                        <div class="form-group mb-4">
                            <label class="form-label" for="Category">Select game title</label>
                            <select class="form-control js-example-basic-single" id="Category" name="title">
                                @foreach ($games as $key => $game)
                                <option value="{{ $game['title'] }}">{{ $game['title'] }}</option>
                            @endforeach
                            </select>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-4">
                            <label class="form-label" for="Description">Description</label>
                            <textarea name="description" id="description" style="display:none;">{!! old('description') !!}</textarea>
                            <div id="editor-container" style="height: 300px; max-height: 400px; overflow-y: auto;">{!! old('description') !!}</div>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-dark btn-lg btn-block">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
</div>
@endsection

@push('css')
<!-- Quill CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('js')
<!-- Quill JS -->
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Select2 for category selection
        $('.js-example-basic-single').select2();

        // Initialize Quill editor
        var quill = new Quill('#editor-container', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, 4, 5, false] }], // Header options
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    ['link'],
                    ['clean']
                ]
            }
        });

        // Update hidden textarea on form submit
        $('form').on('submit', function() {
            var html = quill.root.innerHTML;
            $('#description').val(html);
        });

        // Check if description is empty on form submit
        $('form').on('submit', function() {
            var html = quill.root.innerHTML.trim();
            if (html === '<p><br></p>' || html === '') {
                $('#description').val(''); // Clear the value if it's empty
            }
        });

        // Image handler function for Quill
        function imageHandler() {
            var range = quill.getSelection();
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.click();

            input.onchange = function() {
                var file = input.files[0];
                var formData = new FormData();
                formData.append('image', file);

                fetch('{{ route('admin.image.upload') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        var url = result.url;
                        quill.insertEmbed(range.index, 'image', url);
                    } else {
                        console.error('Image upload failed');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            };
        }

        // Add image handler to Quill toolbar
        var toolbar = quill.getModule('toolbar');
        toolbar.addHandler('image', imageHandler);
    });
</script>
@endpush
