@extends('layouts.adminLayout.admin_design')
@section('content')

{{--    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">Edit Product</a> </div>
            <h1>Products</h1>
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
                            <h5>Edit Product</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/edit-product/'.$productDetails->id) }}" name="edit_product" id="edit_product" novalidate="novalidate">{{ csrf_field() }}
                                <div class="control-group">
                                    <label class="control-label">Under Category</label>
                                    <div class="controls">
                                        <select name="category_id" id="category_id" style="width: 220px;">
                                            <?php echo $categories_dropdown; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Product Name</label>
                                    <div class="controls">
                                        <input type="text" name="product_name" id="product_name" value="{{ $productDetails->product_name }}">
                                    </div>
                                </div> <div class="control-group">
                                    <label class="control-label">Product Code</label>
                                    <div class="controls">
                                        <input type="text" name="product_code" id="product_code" value="{{ $productDetails->product_code }}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Product Color</label>
                                    <div class="controls">
                                        <input type="text" name="product_color" id="product_color" value="{{ $productDetails->product_color }}">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea  name="description" id="description" cols="6" rows="3">{{ $productDetails->description }}</textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Price</label>
                                    <div class="controls">
                                        <input type="text" name="price" id="price" value="{{ $productDetails->price }}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image">
                                        <input type="hidden" name="current_image" value="{{ $productDetails->image }}">
                                        <img src="{{ asset('/images/backend_images/products/small/'.$productDetails->image) }}" alt="" style="width: 50px;">
                                        | <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}"> Delete</a>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Edit Product" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>--}}






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
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/edit-news') }}" name="add_news" id="add_news" novalidate="novalidate">{{ csrf_field() }}


                                <div class="control-group">
                                    <label class="control-label">News Title</label>
                                    <div class="controls">
                                        <input type="text" name="theme" id="theme" value="{{ $newsDetails->title }}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">News Theme</label>
                                    <div class="controls">
                                        <input type="text" name="news_title" id="news_title" value="{{ $newsDetails->theme }}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">News Text (ru)</label>
                                    <div class="controls">
                                        <textarea type="text" name="news_text_ru" id="news_text_ru" cols="6" rows="3">
                                            {{ $newsDetails->description_ru }}
                                        </textarea>
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
                                        <input type="hidden" name="current_image" value="{{ $newsDetails->image }}">
                                        <img src="{{ asset('/images/backend_images/news/small/'.$newsDetails->image) }}" alt="" style="width: 50px;">
                                        | <a href="{{ url('/admin/delete-news-image/'.$newsDetails->id) }}"> Delete</a>
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


