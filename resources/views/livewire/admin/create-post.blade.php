@section('styles')
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
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

                    <div wire:ignore class="form-group row">
                        <div class="col-md-12">
                            <label>Body</label><br>
                            <textarea wire:model.defer="body" name="body" id="body" placeholder="Enter Product Detail"></textarea>
                            <x-jet-input-error for="body" />
                        </div>
                        <p class="text-danger"></p>
                    </div>

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
    const editor = CKEDITOR.replace('body');
    editor.on('change', function(event) {
        console.log(event.editor.getData())
        @this.set('body', event.editor.getData());
    })

</script>
@endsection
