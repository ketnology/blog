@section('styles')
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
@endsection

<div>
    <h1 class="page-header">NEW POST</h1>

    <div class="row">
        <div class="col-lg-12 ui-sortable m-auto">
            <div class="panel-body">

                <form wire:submit.prevent="save">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label>Title</label> <br>
                            <input type="text" wire:model="title" placeholder="Enter Product Name" class="form-control" value="">
                            <x-jet-input-error for="title" />
                        </div>
                        <p class="text-danger"></p>
                    </div>

                    <div class="form-group row">
                        @if ($photo)
                        <div class="card">
                            <img class="card-img-top" src="{{ $photo->temporaryUrl() }}" alt="" height="150">
                        </div>
                        @endif
                        <div class="col-md-12">
                            <label>image</label> <br>
                            <input type="file" wire:model="photo" accept="image/png, image/jpeg" class="form-control">
                            <x-jet-input-error for="photo" />
                        </div>
                    </div>
                    <br>

                    {{-- <div class="form-group row">
                        <div class="col-md-12">
                            <label>Body</label><br>
                            <textarea wire:model="body" rows="10" placeholder="Enter Product Detail" class="form-control"> </textarea>
                            <x-jet-input-error for="body" />
                        </div>
                        <p class="text-danger"></p>
                    </div> --}}

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label>Body</label><br>
                            <div wire:model="body" id="editor"></div>
                            <x-jet-input-error for="body" />
                        </div>
                        <p class="text-danger"></p>
                    </div>

                    {{-- <div class="form-group row">
                        <div class="col-md-12">
                            <label>Body</label><br>
                            <textarea wire:model="body" name="editor1" placeholder="Enter Product Detail"></textarea>
                            <x-jet-input-error for="body" />
                        </div>
                        <p class="text-danger"></p>
                    </div> --}}

                    <div class="modal-footer">
                        <button class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@section('scripts')
<script>
    CKEDITOR.replace('editor1');

</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
@endsection
