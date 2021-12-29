@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Message du {{ date('d/m/Y') }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('message.update', $messages['today']) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="my-2">
                        <textarea name="message" id="message">{{ $messages['today']->message }}</textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary fw-bolder">
                            Publier mon message
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        Last co : {{ Auth::user()->mate->updated_at->diffForHumans() ?? '' }} <br>
        Last Msg : {{ Auth::user()->mate->getLastMessage(false)->updated_at->diffForHumans() ?? '' }} <br>
        nbr mots
        : {{ Str::wordCount(strip_tags(str_replace('&nbsp;', '', Auth::user()->mate->getLastMessage(false)->message))) }}
        <hr>
        <div class="my-4 row justify-content-center">
            <div class="col-lg-6">
                <div class="card my-4">
                    <div class="card-header">
                        <h3>Dernier message de Marie-Lune</h3>
                    </div>
                    <div class="card-body">
                        <h6>{!! $messages['last']['mate']['message'] ?? '' !!}</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card my-4">
                    <div class="card-header">
                        <h3>Mon dernier message</h3>
                    </div>
                    <div class="card-body">
                        {!! $messages['last']['self']['message'] ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        tinymce.init({
            selector: '#message',
            language: 'fr_FR',
            menubar: 'insert',
            plugins: [
                'autoresize advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | image | formatselect | fontselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), {title: file.name});
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            }
        });
    </script>
@endpush
