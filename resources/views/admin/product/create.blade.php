@extends('admin.layouts.template')



<link href="{{url('assets/text/dist/summernote.css')}}?v2" rel="stylesheet">

@section('admin.content')
<style>
.note-editor.note-frame .note-editing-area .note-editable{
      padding: 30px;
}
.select2-search-choice-close{
  top: 10px !important;
  color: #999;
    cursor: pointer;
    display: inline-block;
    font-weight: 700;
    margin-right: 3px;
    background:none !important;
}
.select2-search-choice-close:after {
    content: 'x';
    font-size: 10px;
    color: #000!important;
    padding: 0 4px;
    font-weight: bold;
}
</style>






        <section role="main" class="content-body">

          <header class="page-header">
            <h2>{{$datahead}}</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('admin/user')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>{{$datahead}}</span></li>
              </ol>

              <a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>


          <!-- start: page -->



          <div class="row">
          							<div class="col-md-2 col-lg-2">




          							</div>







                        <div class="col-md-8 col-lg-8">

          							<div class="tabs">

          								<div class="tab-content">

          									<div id="edit" class="tab-pane active">


                              <form  method="POST" action="{{$url}}" enctype="multipart/form-data">
                                          {{ method_field($method) }}
                                          {{ csrf_field() }}

          											<h4 class="mb-xlg">เพิ่ม สินค้าใหม่</h4>

          											<fieldset>
                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">ชื่อสินค้า*</label>
          													<div class="col-md-8">
          														<input type="text" class="form-control" name="pro_name" value="{{ old('pro_name')}}">
          														</div>
          												</div>

                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">รหัสสินค้า*</label>
          													<div class="col-md-8">
          														<input type="text" class="form-control" name="pro_code" value="{{ old('pro_code')}}" placeholder="AE-1254">
          														</div>
          												</div>


                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileAddress">หมวดหมู่*</label>
          													<div class="col-md-8">
          														<select name="pro_category" class="form-control mb-md" required>

                                        <option value="">-- เลือกหมวดหมู่ --</option>
  								                        @foreach($category as $categorys)
  													                 <option value="{{$categorys->id}}">{{$categorys->name_cat}}</option>
  													              @endforeach
  								                    </select>
          								            </select>
          													</div>
          												</div>


                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileAddress">ประเภทสินค้า*</label>
          													<div class="col-md-8">
          														<select name="pro_status_show" class="form-control mb-md" required>

                                        <option value="1">สินค้าทั่วไป</option>
                                        <option value="2">NEW ITEM!</option>
                                        <option value="3">LIMITED OFFER</option>
                                        <option value="4">RECOMMENDED ITEM</option>


  								                    </select>
          								            </select>
          													</div>
          												</div>

                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileAddress">ระดับดาว*</label>
          													<div class="col-md-8">
          														<select name="pro_rating" class="form-control mb-md" required>

                                        <option value="1">1 ดาว</option>
                                        <option value="2">2 ดาว</option>
                                        <option value="3">3 ดาว</option>
                                        <option value="4">4 ดาว</option>
                                        <option value="5">5 ดาว</option>

  								                    </select>
          								            </select>
          													</div>
          												</div>



                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">ราคา*</label>
          													<div class="col-md-8">
          														<input type="text" class="form-control" name="pro_price" value="{{ old('pro_price')}}">
          														</div>
          												</div>

                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">จำนวนสินค้าในคลัง*</label>
          													<div class="col-md-8">
          														<input type="text" class="form-control" name="total_product" value="{{ old('total_product')}}">
          														</div>
          												</div>

                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">คำอธิบาย*</label>
          													<div class="col-md-8">
          														<textarea class="form-control" name="pro_title" id="summernote" rows="5">{{ old('pro_title') }}</textarea>
          														</div>
          												</div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="exampleInputEmail1">รูปหลักสินค้า* <span class="text-danger">600 x 600 px หรือแนวนอนขนาดใกล้เคียง</span></label>
                                    <div class="col-md-8">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                              <div class="input-append">
                                                <div class="uneditable-input">
                                                  <i class="fa fa-file fileupload-exists"></i>
                                                  <span class="fileupload-preview"></span>
                                                </div>
                                                <span class="btn btn-default btn-file">
                                                  <span class="fileupload-exists">Change</span>
                                                  <span class="fileupload-new">Select file</span>
                                                  <input type="file" name="image">
                                                </span>
                                                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                              </div>
                                            </div>
                                            </div>
                                  </div>

                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">รายละเอียดสินค้า*</label>
          													<div class="col-md-8">
          														<textarea class="form-control" name="pro_name_detail" id="summernote2" rows="6">{{ old('pro_name_detail') }}</textarea>
          														</div>
          												</div>














          											</fieldset>







          											<div class="panel-footer">
          												<div class="row">
          													<div class="col-md-9 col-md-offset-3">
          														<button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
          														<button type="reset" class="btn btn-default">ยกเลิก</button>
          													</div>
          												</div>
          											</div>

          										</form>

          									</div>
          								</div>
          							</div>
          						</div>









          						</div>




</section>
@stop



@section('scripts')
<script src="{{asset('/assets/javascripts/tables/examples.datatables.default.js')}}"></script>


@if ($message = Session::get('success'))
<script type="text/javascript">
var stack_bar_top = {"dir1": "down", "dir2": "right", "push": "top", "spacing1": 0, "spacing2": 0};
var notice = new PNotify({
      title: 'ยินดีด้วยค่ะ',
      text: '{{$message}}',
      type: 'success',
      addclass: 'stack-bar-top',
      stack: stack_bar_top,
      width: "100%"
    });
</script>
@endif


@if ($message = Session::get('delete'))
<script type="text/javascript">
var stack_bar_top = {"dir1": "down", "dir2": "right", "push": "top", "spacing1": 0, "spacing2": 0};
var notice = new PNotify({
      title: 'ยินดีด้วยค่ะ',
      text: '{{$message}}',
      type: 'success',
      addclass: 'stack-bar-top',
      stack: stack_bar_top,
      width: "100%"
    });
</script>
@endif


<script src="{{URL::asset('assets/text/dist/summernote.js?v4')}}"></script>
<script type="text/javascript">
$(document).ready(function() {

  $('#summernote').summernote({

    fontNames: ['Prompt' ,'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
    disableDragAndDrop: true,            // set editor height
    placeholder: 'เนื้อหาบทความ',
    minHeight: 300,
    focus: true                // set focus to editable area after initializing summernote
  });
  $('#summernote2').summernote({

    fontNames: ['Prompt' ,'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
    disableDragAndDrop: true,            // set editor height
    placeholder: 'เนื้อหาบทความ',
    minHeight: 300,
    focus: true                // set focus to editable area after initializing summernote
  });
});
var postForm = function() {
var content = $('textarea[name="blog_detail"]').html($('#summernote').code());
}
</script>


@stop('scripts')
