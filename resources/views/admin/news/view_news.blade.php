@extends('layouts.adminLayout.admin_design')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">News</a> <a href="#" class="current">View News</a> </div>
            <h1>News</h1>
            @if(Session::has('flash_message_error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong> {!! session('flash_message_error') !!}</strong>
                </div>
            @endif
            @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong> {!! session('flash_message_success') !!}</strong>
                </div>
            @endif
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">

                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>View Products</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>News ID</th>
                                    <th>News Title</th>
                                    <th>News Theme</th>
                                    <th>News Text</th>
                                    <th>News Image</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $news)
                                    <tr class="gradeX">
                                        <td>{{ $news->news_id }}</td>
                                        <td>{{ $news->title }}</td>
                                        <td>{{ $news->theme }}</td>
                                        <td>{{ $news->description_ru }}</td>
                                        <td>
                                            <img src="{{ asset('/images/backend_images/news/small/'.$news->image) }}" alt="" style="width:40px;">
                                        </td>
                                        <td class="center">
                                            <a href="#myModal{{ $news->news_id }}" data-toggle="modal" class="btn btn-success btn-mini">View</a>
                                            <a href="{{ url('/admin/edit-news/'.$news->news_id) }}" class="btn btn-primary btn-mini">Edit</a>
                                            <a id="delProduct" href="{{ url('/admin/delete-news/'.$news->news_id) }}" class="btn btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>

                                    <div id="myModal{{ $news->news_id }}" class="modal hide">
                                        <div class="modal-header">
                                            <button data-dismiss="modal" class="close" type="button">×</button>
                                            <h3><span style="color:red">{{ $news->title }}</span> Full Details</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p>News ID: {{ $news->news_id }}</p>
                                            <p>News Title: {{ $news->title }}</p>
                                            <p>News Theme: {{ $news->theme }}</p>
                                            <p>News Text: {{ $news->description_ru }}</p>
                                            <img src="{{ asset('images/backend_images/news/medium/'.$news->image) }}" alt="">
                                        </div>
                                    </div>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
