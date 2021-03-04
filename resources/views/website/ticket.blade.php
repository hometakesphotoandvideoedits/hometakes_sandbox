@extends('layouts.layout')

@section('content')
<div class="container " style="margin-bottom:360px;">
    <div class="card">
        <h5 class="card-header">NEW TICKET</h5>
        <div class="card-body">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Email" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Category - General Enquiry's" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <select name="MiamiStyleMusic" class="custom-select" id="MiamiStyleMusic">
                    <option value="">Priority - Normal</option>
                    <option value="Piano02_Keith">Low</option>
                    <option value="Piano03_Tonto">Normal</option>
                    <option value="Piano04_Clouds">High</option>
                    <option value="Piano05_GettingThere">Critical</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Priority - Normal" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Subject" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div id="froala-editor">
                <p>Froala WYSIWYG Editor can easily be integrated with the awesome <a
                        href="https://github.com/zurb/tribute" target="_blank" rel="nofollow">Tribute.js library</a>.
                    Type an @ to display the autocomplete list.
                </p>
            </div>
        </div>
    </div>
</div>
<script>
var tribute = new Tribute({
    values: [{
            key: 'Phil',
            value: 'pheartman'
        },
        {
            key: 'Gordon',
            value: 'gramsey'
        },
        {
            key: 'Jacob',
            value: 'jacob'
        },
        {
            key: 'Ethan',
            value: 'ethan'
        },
        {
            key: 'Emma',
            value: 'emma'
        },
        {
            key: 'Isabella',
            value: 'isabella'
        }
    ],
    selectTemplate: function(item) {
        return '<span class="fr-deletable fr-tribute">' + item.original.key + '</a></span>';
    }
})

new FroalaEditor('#froala-editor', {
    events: {
        initialized: function() {
            var editor = this;

            tribute.attach(editor.el)

            editor.events.on('keydown', function(e) {
                if (e.which == FroalaEditor.KEYCODE.ENTER && tribute.isActive) {
                    return false;
                }
            }, true);
        }
    }
})
// Doing this in a loaded JS file is better, I put this here for simplicity
$('#my-editor').trumbowyg();
</script>
<!-- Import Trumbowyg -->
<script src="trumbowyg/dist/trumbowyg.min.js"></script>
<script>
new FroalaEditor('textarea#froala-editor')
// Replace the <textarea> with a CKEditor
CKEDITOR.replace('editor');
</script>
<script src="ckeditor/ckeditor.js"></script>
@endsection