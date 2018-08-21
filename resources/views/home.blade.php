@extends('master')
@section('content')
    <div class="main-content">
        <div class="home-link"><span><a title="go to board" href="{{url('board')}}">URLs Board</a></span></div>
        <div id="head-text">
            <p>Making Long URL usable in Short URL</p>
            <p style="font-size: 20px; margin-top: 20px;">Enter a Long URL to make it Short</p>
        </div>
        <div id="search-form">
            <form class="form-inline" method="post" action="{{url('/short-it')}}">
                <div class="form-group col-md-9">
                    <input type="text" name="url" class="form-control col-md-12" id="search-url" placeholder="Paste Long URL here to make it Short" required>
                </div>
                <div class="form-group col-md-3">
                    @csrf
                <button type="submit" name="submit" class="btn btn-primary col-md-12">Click to Convert</button>
                </div>
            </form>
        </div>
        <div>
            <div class="search-result">
                @if(isset($url))
                <div>
                    <p>Your Full URL : Total length of <b>{{strlen($url)}}</b> Character</p>
                    <div class="url">
                            <a target="_blank" title="click to open" href="{{$url}}">{{$url}}</a>
                    </div>
                </div>
                @endif
                    @if(isset($short_url))
                        <div>
                            <p>Shorten URL :Total shorted length of <b>{{strlen($short_url)}}</b> Character without Domain Name</p></p>
                            <div class="url">
                                <a target="_blank" title="click to open" href="{{url('/')}}/go/{{$short_url}}">{{url('/')}}/go/{{$short_url}}</a>
                            </div>
                        </div>
                    @endif
            </div>
        </div>
    </div>
@endsection
