<div>
 <!-- begin page-header -->
 <h1 class="page-header">NEW POST</h1>
 <!-- end page-header -->



 <!-- begin row -->
 <div class="row">
     <div class="col-lg-8 ui-sortable m-auto">
         <div class="panel-body">

             <form wire:submit.prevent="save">


                 <div class="form-group row">
                     <div class="col-md-12">
                        <label>Title</label> <br>
                        <label>{{ $title }}</label>
                         <input type="text" wire:model="post.title" name="name" placeholder="Enter Product Name" class="form-control"
                             value="">
                     </div>
                     <p class="text-danger"></p>
                 </div>

                 <div class="form-group row">
                     <div class="col-md-12">
                         <label>Bodyhu</label><br>
                         <label>{{ $body }}</label>
                         <textarea wire:model="post.body" rows="10" name="details" placeholder="Enter Product Detail" class="form-control"> </textarea>
                     </div>
                     <p class="text-danger"></p>
                 </div>

                 <input type="hidden" name="_token" value="yBP9RQ4jBHnmgBzLIYJvs3KPyCOis2nbjqJUMCoG">
                 <div class="modal-footer">
                     <button class="btn btn-success">Save Changes</button>
                 </div>
             </form>
         </div>
     </div>

 </div>
 <!-- end row -->
</div>

<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
     class="material-icons">keyboard_arrow_up</i></a>
</div>
</div>
