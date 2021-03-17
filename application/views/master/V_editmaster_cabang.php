     <!-- Container-fluid starts-->
     <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12">
                 <div class="card">
                     <div class="card-header">
                         <h5>Edit Master Cabang</h5><span>For custom Bootstrap form validation messages, you’ll need to
                             add
                             the <code class="text-danger">novalidate</code> boolean attribute to your <code
                                 class="text-danger">&lt;form&gt;</code>. This disables the browser default feedback
                             tooltips, but still provides access to the form validation APIs in JavaScript. Try to
                             submit the form below; our JavaScript will intercept the submit button and relay feedback
                             to you.</span><span>When attempting to submit, you’ll see the <code
                                 class="text-danger">:invalid </code> and <code class="text-danger">:valid </code>
                             styles applied to your form controls.</span>
                     </div>
                     <div class="card-body">
                         <form class="needs-validation" novalidate="">
                             <div class="row g-3">
                                 <div class="col-md-6">
                                     <label class="form-label" for="validationCustom03">Nama Cabang</label>
                                     <input class="form-control" id="validationCustom03" type="text"
                                         placeholder="nama Cabang" required="">
                                     <div class="invalid-feedback">Please provide a valid Nama Cabang.</div>
                                 </div>
                                 <div class="col-md-3">
                                     <label class="form-label" for="validationCustom04">Status cabang</label>
                                     <select class="form-select" id="validationCustom04" required="">
                                         <option selected="" disabled="" value="">pilih...</option>
                                         <option>...</option>
                                     </select>
                                     <div class="invalid-feedback">Please select a valid status cabang.</div>
                                 </div>
                                 <div class="col-md-3 mb-3">
                                     <label class="form-label" for="validationCustom05">Zip</label>
                                     <input class="form-control" id="validationCustom05" type="text" placeholder="Zip"
                                         required="">
                                     <div class="invalid-feedback">Please provide a valid zip.</div>
                                 </div>
                             </div>

                             <button class="btn btn-primary" type="submit">Submit form</button>
                         </form>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     </div>
     <!-- Container-fluid Ends-->