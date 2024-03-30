@extends('auth.layouts.master')

@isset($home)
    @section('title', 'Клиенты')
@endisset

@section('content')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>


    <div class="page admin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('auth.layouts.sidebar')
                </div>
                <div class="col-md-9">
                    <h1>Клиенты</h1>
                    <form action="{{ url('clients/upload') }}" method="POST" enctype="multipart/form-data"
                          class="dropzone" id="myDragAndDropUploader">
                        @csrf
                    </form>

                    <h5 id="message"></h5>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">

        var maxFilesizeVal = 12;
        var maxFilesVal = 2;

        Dropzone.options.myDragAndDropUploader = {

            paramName:"file",
            maxFilesize: maxFilesizeVal, // MB
            maxFiles: maxFilesVal,
            resizeQuality: 1.0,
            acceptedFiles: ".jpeg,.jpg,.png,.webp",
            addRemoveLinks: false,
            timeout: 60000,
            dictDefaultMessage: "Drop your files here or click to upload",
            dictFallbackMessage: "Your browser doesn't support drag and drop file uploads.",
            dictFileTooBig: "File is too big. Max filesize: "+maxFilesizeVal+"MB.",
            dictInvalidFileType: "Invalid file type. Only JPG, JPEG, PNG and GIF files are allowed.",
            dictMaxFilesExceeded: "You can only upload up to "+maxFilesVal+" files.",
            maxfilesexceeded: function(file) {
                this.removeFile(file);
                // this.removeAllFiles();
            },
            sending: function (file, xhr, formData) {
                $('#message').text('Image Uploading...');
            },
            success: function (file, response) {
                $('#message').text(response.success);
                console.log(response.success);
                console.log(response);
            },
            error: function (file, response) {
                $('#message').text('Something Went Wrong! '+response);
                console.log(response);
                return false;
            }
        };
    </script>

@endsection
