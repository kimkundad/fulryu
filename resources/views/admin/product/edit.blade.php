@extends('admin.layouts.template')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="{{url('assets/text/dist/summernote.css')}}?v2" rel="stylesheet">

@section('admin.stylesheet')
<link href="{{URL::asset('assets/upload_image/css/fileinput.css')}}" rel="stylesheet">
@stop('admin.stylesheet')

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

          											<h4 class="mb-xlg">แก้ไข {{ $objs->pro_name }}</h4>

          											<fieldset>
                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">ชื่อสินค้า*</label>
          													<div class="col-md-8">
          														<input type="text" class="form-control" name="pro_name" value="{{ $objs->pro_name }}">
          														</div>
          												</div>


                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">รหัสสินค้า*</label>
          													<div class="col-md-8">
          														<input type="text" class="form-control" name="pro_code" value="{{ $objs->pro_code }}" placeholder="AE-1254">
          														</div>
          												</div>


                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileAddress">หมวดหมู่*</label>
          													<div class="col-md-8">
          														<select name="pro_category" class="form-control mb-md" required>

                                        <option value="">-- เลือกหมวดหมู่ --</option>
  								                        @foreach($category as $categorys)
  													                 <option value="{{$categorys->id}}"
                                               @if( $objs->pro_category == $categorys->id)
                                               selected='selected'
                                               @endif
                                               >{{$categorys->name_cat}}</option>
  													              @endforeach
  								                    </select>

          													</div>
          												</div>


                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileAddress">ประเภทสินค้า*</label>
          													<div class="col-md-8">
          														<select name="pro_status_show" class="form-control mb-md" required>

                                        <option value="1"
                                        @if( $objs->pro_status_show == 1)
                                        selected='selected'
                                        @endif
                                        >สินค้าทั่วไป</option>
                                        <option value="2"
                                        @if( $objs->pro_status_show == 2)
                                        selected='selected'
                                        @endif
                                        >NEW ITEM!</option>
                                        <option value="3"
                                        @if( $objs->pro_status_show == 3)
                                        selected='selected'
                                        @endif
                                        >LIMITED OFFER</option>
                                        <option value="4"
                                        @if( $objs->pro_status_show == 4)
                                        selected='selected'
                                        @endif
                                        >RECOMMENDED ITEM</option>


  								                    </select>
          								            </select>
          													</div>
          												</div>


                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileAddress">ระดับดาว*</label>
          													<div class="col-md-8">
          														<select name="pro_rating" class="form-control mb-md" required>

                                        <option value="1"
                                        @if( $objs->pro_rating == 1)
                                        selected='selected'
                                        @endif
                                        >1 ดาว</option>
                                        <option value="2"
                                        @if( $objs->pro_rating == 2)
                                        selected='selected'
                                        @endif
                                        >2 ดาว</option>
                                        <option value="3"
                                        @if( $objs->pro_rating == 3)
                                        selected='selected'
                                        @endif
                                        >3 ดาว</option>
                                        <option value="4"
                                        @if( $objs->pro_rating == 4)
                                        selected='selected'
                                        @endif
                                        >4 ดาว</option>
                                        <option value="5"
                                        @if( $objs->pro_rating == 5)
                                        selected='selected'
                                        @endif
                                        >5 ดาว</option>

  								                    </select>
          								            </select>
          													</div>
          												</div>




                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">ราคา*</label>
          													<div class="col-md-8">
          														<input type="text" class="form-control" name="pro_price" value="{{ $objs->pro_price }}">
          														</div>
          												</div>

                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">จำนวนสินค้าในคลัง*</label>
          													<div class="col-md-8">
          														<input type="text" class="form-control" name="total_product" value="{{ $objs->total_product }}">
          														</div>
          												</div>

                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">คำอธิบาย*</label>
          													<div class="col-md-8">
          														<textarea class="form-control" name="pro_title" id="summernote" rows="5">{{ $objs->pro_title }}</textarea>
          														</div>
          												</div>

                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">รายละเอียดสินค้า*</label>
          													<div class="col-md-8">
          														<textarea class="form-control" name="pro_name_detail" id="summernote2" rows="6">{{ $objs->pro_name_detail }}</textarea>
          														</div>
          												</div>

                                  <div class="form-group">
          													<label class="col-md-3 control-label" for="profileFirstName">รูปภาพหลัก*</label>
          													<div class="col-md-8">
          														<img src="{{url('assets/image/product/'.$objs->pro_image)}}" style="width:350px;" />
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


                                  <hr />
                                  <div class="col-md-12">
                                    <p>
                                      เลือก option ได้มากกว่า 1 ทางเลือก
                                      <br />
                                    </p>
                                  </div>



                                  @foreach($option_product as $option_products)
                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="exampleInputEmail1"></label>
                                      <div class="col-md-8">
                                  <div class="checkbox-custom checkbox-primary">
                                   <input type="checkbox" name="option[]" id="checkboxExample2" @if($option_products->options == 1) checked="" @endif value="{{$option_products->id}}">
                                   <label for="checkboxExample2">{{$option_products->option_name}} </label>
                                 </div>
                                 </div>
                                   </div>
                                  @endforeach
                                  <br />











          											</fieldset>







          											<div class="panel-footer">
          												<div class="row">
          													<div class="col-md-9 col-md-offset-3">
          														<button type="submit" class="btn btn-primary">อัพเดทข้อมูล</button>
          														<button type="reset" class="btn btn-default">ยกเลิก</button>
          													</div>
          												</div>
          											</div>

          										</form>

          									</div>
          								</div>
          							</div>
          						</div>





            <style>
						.btn-file {
							width: 130px;
						}
						</style>


            <div class="col-md-8 col-md-offset-2">
                  <section class="panel">
                    <div class="panel-body">
											<form  method="POST" action="{{url('admin/add_gallery')}}" enctype="multipart/form-data">

		                                          {{ csrf_field() }}

		                                          <div class="row">
		                                              <div class="col-md-12" style="padding-right: 15px;">


		                            <div class="form-group">


		                <label for="exampleInputFile">เพิ่มรูปภาพประกอบ อย่างน้อย 4 รูปขึ้นไป</label>


		                <input id="file-0a" class="file " type="file" name="product_image[]" accept="image/*" multiple>
		                <input type="hidden" name="pro_id" class="form-control" value="{{ $objs->id_q }}" required>



		                </div>

		                <div class="">
		                    <button type="submit" class="btn btn-info btn-fill btn-wd">อัพโหลดรูปภาพ</button>
		                </div>



		                </div>
		                </div>

		              </form>
                  </div>
                </section>
                <br><br>


                </div>





                <div class="col-md-8 col-md-offset-2">
                      <section class="panel">
                        <div class="panel-body">


                          <form  action="{{url('property_image_del')}}" method="post" onsubmit="return(confirm('Do you want Delete'))">
                      <input type="hidden" name="_method" value="POST">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
											 <input type="hidden" name="pro_id" class="form-control" value="{{ $objs->id_q }}" required>

                  <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">

                  @if($img_all)
                  @foreach($img_all as $img_u)
                    <div class="isotope-item  col-sm-6 col-md-4 col-lg-3" style="min-height: 180px; max-height: 240px;">
                      <div class="thumbnail">
                        <div class="">
                          <a class="thumb-image" >
                            <img src="{{url('assets/image/gallery/'.$img_u->image)}}" class="img-responsive" >
                          </a>
                          <br>
                          <div class="mg-thumb-options">
                            <div class="checkbox-custom checkbox-default">
                              <input type="checkbox" name="product_image[]" value="{{$img_u->id}}"  >
                              <label>เลือกรูปภาพประกอบ</label>
                            </div>
                          </div>
                        </div>

                        <div class="mg-description">

                          <small class="pull-right text-muted"></small>
                        </div>
                      </div>
                    </div>
                  @endforeach
                  @endif




                  </div>
                  <button type="submit" class="btn btn-danger pull-right" style="margin-top:15px;">ลบรูปภาพที่เลือกไว้</button>
                  </form>

                      </div>
                    </section>
                    <br><br>


                    </div>









          						</div>




</section>
@stop



@section('scripts')
<script src="{{asset('/assets/javascripts/tables/examples.datatables.default.js')}}"></script>
<script src="{{URL::asset('assets/upload_image/js/fileinput.js')}}"></script>

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




@if ($message = Session::get('add_success_img'))
<script type="text/javascript">

  var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
      var notice = new PNotify({
            title: 'ทำรายการสำเร็จ',
            text: 'ยินดีด้วย ได้ทำการเพิ่มข้อมูล สำเร็จเรียบร้อยแล้วค่ะ',
            type: 'success',
            addclass: 'stack-topright'
          });
</script>
@endif

@if ($message = Session::get('edit_success'))
<script type="text/javascript">

  var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
      var notice = new PNotify({
            title: 'ทำรายการสำเร็จ',
            text: 'ยินดีด้วย ได้ทำการแก้ไขข้อมูล สำเร็จเรียบร้อยแล้วค่ะ',
            type: 'success',
            addclass: 'stack-topright'
          });
</script>
@endif


@if ($message = Session::get('del_success_img'))
<script type="text/javascript">

  var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
      var notice = new PNotify({
            title: 'ทำรายการสำเร็จ',
            text: 'ยินดีด้วย ได้ทำการลบรูปประกอบ สำเร็จเรียบร้อยแล้วค่ะ',
            type: 'success',
            addclass: 'stack-topright'
          });
</script>
@endif





@stop('scripts')
