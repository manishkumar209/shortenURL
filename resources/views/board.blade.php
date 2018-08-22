@extends('master')
@section('content-board')
    <div class="main-content">
        <div class="home-link"><span><a title="go to home" href="{{url('/')}}">Home</a></span></div>
        <div id="head-text">
            <p>There are 100 Most frequently accessed URLs</p>
        </div>
        <div class="content-board">
            <table class="table table-dark table-bordered">
                <thead>
                    <tr>
                        <td>S.No</td>
                        <td scope="col">Full URL</td>
                        <td scope="col">Short URL</td>
                        <td>Most Visited</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                $count=1;
                ?>
                @foreach ($url as $b)
                    <tr>
                        <td><?=$count++;?></td>
                        <td><a target="_blank" title="click to open" href="{{$b->full_url}}">{{$b->full_url}}</a></td>
                        <td><a target="_blank" title="click to open" href="{{url('/')}}/go/{{$b->tiny_url}}">{{url('/')}}/go/{{$b->tiny_url}}</a>
                        </td>
                        <td>{{$b->count}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
