@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">News</a> <a href="#" class="current">Add News</a> </div>
            <h1>News</h1>
        </div>
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
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Add News</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-news') }}" name="add_news" id="add_news" novalidate="novalidate">{{ csrf_field() }}


                                <div class="control-group">
                                    <label class="control-label">News Title</label>
                                    <div class="controls">
                                        <input type="text" name="theme" id="theme">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">News Theme</label>
                                    <div class="controls">
                                        <input type="text" name="news_title" id="news_title">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">News Text (ru)</label>
                                    <div class="controls">
                                        <textarea type="text" name="news_text_ru" id="news_text_ru" cols="6" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">News Text (oz)</label>
                                    <div class="controls">
                                        <textarea type="text" name="news_text_oz" id="news_text_oz" cols="6" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">News Text (uz)</label>
                                    <div class="controls">
                                        <textarea type="text" name="news_text_uz" id="news_text_uz" cols="6" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add News" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

