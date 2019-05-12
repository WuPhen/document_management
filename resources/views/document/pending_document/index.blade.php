@extends('layouts.user.personal_document')
@section('title')
Văn bản đang chờ duyệt
@endsection
@section('content')
 <div class="container">
    <div id="cards-wrapper" class="cards-wrapper row">
        <div class="list-document-detail">
            <div id="sec1">
                <h4 class="h4-first">Văn bản đang chờ duyệt</h4>
                @include('layouts.user.search', ['currentPage'=>'pendingDocument'])
                <div class="all-document list-group">
                    @foreach($documents as $document)
                    <div class="list-group-item" onclick="showDocumentPending('{{$document->id}}')">
                        <a href="{{ route('document-pending.show',$document->id) }}" title = "{{$document->content}}" >
                        <span class="name" style="max-width: 135px !important;color: black;">{{$document->document_number}}</span>
                            <span class="float-left" style="width: 60%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align: left !important;">
                                <span class="" style="color: black;">{{$document->title}}</span><br/>
                                <span class="text-muted"><span style="color: black;">Trích yếu nội dung:&nbsp;{{$document->content}}</span></span>
                            </span>
                            <span class="badge">{{ date('H:m:i ( d-m-Y )', strtotime($document->created_at)) }}</span>
                        </a>
                        <span class="name userchinh">Người gửi</span>
                        <span class ="name userchinh1"><a href="" style="color:#f7f7f7;">{{$document->name}}</a></span>
                    </div>
                    @endforeach
                    <div>
                        {{ $documents->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
