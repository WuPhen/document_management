@extends('layouts.user.master')
@section('title')
Tin nhắn đến
@endsection
@section('content')
<div class="container">
    <div id="cards-wrapper" class="cards-wrapper row">
        @include("common.errors")
        <div class="list-group" style="margin-top: 0">
        <a href="{{route('message.create')}}" class="btn btn-primary" role="button" style="width: 15%;margin-bottom:10px">Soạn tin nhắn</a>
        @if(count($getMessages)!=0)
            @foreach ($getMessages as $key => $message)
            <div class="list-group-item" onclick="showMessages('{{$message->id}}')" style="padding: 10px 10px 0px 15px;">
                <img src="/templates/img/user/{{$message->avatar}}" style="width: 50px;float: left;">
                <div style="float: left;margin-left:20px ">
                    <span class ="name userchinh1" style="margin:0 20px;width: 100%;"><a href="" style="color:#f7f7f7;">{{$message->name}}</a></span><br/>
                    <a href=""><span style="color: black;line-height: 35px;">{{$message->title}}</span></a>
                </div>
                <div>
                    <span class="badge" title="{{ date('H:m:i ( d-m-Y )', strtotime($message->created_at)) }}">{{Carbon\Carbon::createFromTimeStamp(strtotime($message->created_at))->diffForHumans()}}</span><br>
                </div>
            </div>
            @endforeach
        @else
             <div class="list-group-item">
                <span>Không có tin nhắn nào </span>
            </div>
        @endif
        </div>
    </div>
</div>
@endsection
