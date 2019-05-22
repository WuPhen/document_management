@extends("layouts.user.master")
@section("title")
Chỉnh sửa văn bản gửi cho đơn vị
@endsection
@section("content")
<div class="container">
    <div id="cards-wrapper" class="cards-wrapper row">
        <div class="create-doc">
            <h3>Chỉnh sửa văn gửi cho các đơn vị</h3>
            {!! Form::open(["method"=>"PUT", "route"=>["document-department.update", $document->documentID], "enctype"=>"multipart/form-data"]) !!}
            @include("common.errors")
                <div class="form-group" style="width: 45%;float: left;margin-right: 5%;margin-left: 2%">
                    {!! Form::label("document_number", "Số công văn", []) !!}
                    {!! Form::text("document_number", $document->document_number, ["class"=>"form-control", "id"=>"document_number", "placeholder"=>"Nhập số công văn..."]) !!}
                </div>
                <div class="form-group" style="width: 45%;float:left">
                    {!! Form::label("document_type_id", "Loại văn bản", []) !!}
                    {!! Form::select("document_type_id", $documentTypes, $document->document_type_id, ["class"=>"form-control", "id"=>"document_type_id"]) !!}
                </div>
                <div class="form-group" style="width: 45%;float: left;margin-right: 5%;margin-left: 2%;">
                    <label for="publish_date">Ngày ban hành</label>
                    <div id="datepicker" class="input-group date" style="border: 1px solid #ced4da;">
                        {!! Form::text("publish_date", \Carbon\Carbon::parse($document->publish_date)->format('d-m-Y'), ['data-date-format'=>'dd/mm/yyyy', "class"=>"form-control", "readonly", "style" => "background: #fff;border:none;"]) !!}
                        <span style="background-color: #fff;width: 7%;display:none" class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group" style="width: 45%;float:left">
                    {!! Form::label("title", "Tiêu đề", []) !!}
                    {!! Form::text("title", $document->title, ["class"=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("content", "Trích yếu nội dung", []) !!}
                    {!! Form::textarea("content", $document->content, ["class"=>"form-control", "id"=>"content", "rows"=>"3", "placeholder"=>"Nhập trích yếu nội dung..."]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("attachedFiles", "File đính kèm", []) !!}
                    {!! Form::file("attachedFiles[]", ["class"=>"form-control-file", "multiple", "id"=>"attachedFiles", "style"=>"width: 50%;margin-left: 33%"]) !!}
                </div>
                <div class="form-group" style="width: 35%;margin-left: 2%">
                    {!! Form::text("search", "", ["class"=>"form-control live-search-box", "placeholder"=>" Tìm kiếm đơn vị... "]) !!}
                </div>
                <div class="col-lg-5 col-sm-5 col-xs-12 float-left">
                    {!! Form::select("", $receivedDepartments, "1", ["id"=>"multiselect", "class"=>"form-control", "size"=>"8", "multiple"=>"multiple"]) !!}
                </div>

                <div class="multiselect-controls col-lg-2 col-sm-2 col-xs-12 float-left">
                    {!! Form::button("<i class='fa fa-forward'></i>", ["id"=>"multiselect_rightAll", "class"=>"btn btn-block"]) !!}
                    {!! Form::button("<i class='fa fa-chevron-right'></i>", ["id"=>"multiselect_rightSelected", "class"=>"btn btn-block"]) !!}
                    {!! Form::button("<i class='fa fa-chevron-left'></i>", ["id"=>"multiselect_leftSelected", "class"=>"btn btn-block"]) !!}
                    {!! Form::button("<i class='fa fa-backward'></i>", ["id"=>"multiselect_leftAll", "class"=>"btn btn-block"]) !!}
                </div>

                <div class="col-lg-5 col-sm-5 col-xs-12 float-left">
                    {!! Form::select("departments[]", $currentReceivedDepartments, [], ["id"=>"multiselect_to", "class"=>"form-control", "size"=>"8", "multiple"=>"true"]) !!}
                </div>
                <div class="clear"></div><br>
                <div class="form-group row">
                    {!! Form::submit("Sửa", ["class"=>"btn btn-primary", "style" => "width: 15%;"]) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
