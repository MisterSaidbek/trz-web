<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\News;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;


class NewsController extends Controller
{
  public function addNews(Request $request ){
      if ($request->isMethod('post')){
          $data = $request->all();
          $news = new News();
          $news->title = $data['news_title'];
          $news->theme = $data['theme'];
          $news->description_ru = $data['news_text_ru'];
          $news->description_uz = $data['news_text_uz'];
          $news->description_oz = $data['news_text_oz'];
         /* $news->image = '';*/
          if(!empty($data['news_text_uz'])){
              $news->description_uz = $data['news_text_uz'];
          }else{
              $news->description_uz = '';
          }
          if(!empty($data['news_text_oz'])){
              $news->description_oz = $data['news_text_oz'];
          }else{
              $news->description_oz = '';
          }



/*          if($request->hasFile('image')) {
              $image_tmp = $request->image;
              // $fileName = time() . '.'.$image_tmp->clientExtension();
              if ($image_tmp->isValid()) {
                  $extension = $image_tmp->getClientOriginalExtension();
                  $filename = rand(111, 99999) . '.' . $extension;

                  $news->image = $filename;
              }
          }*/
          //Upload Image
          if($request->hasFile('image')){
              $image_tmp = $request->image;
              //$fileName = time() . '.'.$image_tmp->clientExtension();
              if($image_tmp->isValid()){
              //Extensions and image path
                  $extension = $image_tmp->getClientOriginalExtension();
                  $filename = rand(111, 99999).'.'.$extension;
                  $large_image_path = 'images/backend_images/news/large/'.$filename;
                  $medium_image_path = 'images/backend_images/news/medium/'.$filename;
                  $small_image_path = 'images/backend_images/news/small/'.$filename;

                  //Resize Images
                  Image::make($image_tmp)->save($large_image_path);
                  Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                  Image::make($image_tmp)->resize(300,300)->save($small_image_path);

              //Store image name in products table
                  $news->image = $filename;
              }
          }




          $news->save();
          return redirect()->back()->with('flash_message_success','News has been added successfully');
      }


      return view('admin.news.add_news');
  }
 public function editNews(Request $request,  $id = null){

      if ($request->isMethod('post')){
          $data = $request->all();
          //echo "<pre>";print_r($data);die;

          if($request->hasFile('image')){
              $image_tmp = $request->image;
              //$fileName = time() . '.'.$image_tmp->clientExtension();
              if($image_tmp->isValid()){
                  //Extensions and image path
                  $extension = $image_tmp->getClientOriginalExtension();
                  $filename = rand(111, 99999).'.'.$extension;


                  //Store image name in products table
              }
          }
          else{
              $filename = $data['current_image'];
          }
            if(empty($data['description'])){
                $data['description'] = '';
            }
         News::where(['news_id'=>$id])->update(['title'=>$data['news_title'],'theme'=>$data['theme'],'description_ru'=>$data['news_text_ru'],'image'=>$filename]);
          return redirect()->back()->with('flash_message_success','News has been updated Successfully!');
      }



      //Get Product Details
      $newsDetails = News::where(['news_id' => $id])->first();



      return view('admin.news.edit_news')->with(compact('newsDetails'));
  }

  public function viewNews(){
      $news = News::get();
      $news = \GuzzleHttp\json_decode(\GuzzleHttp\json_encode($news));

      return view('admin.news.view_news')->with(compact('news'));
  }
  public function deleteProductImage($id=null){
        News::where(['news_id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success','News Image has been deleted Successfully!');
  }
  public function deleteNews($id=null){
      News::where(['news_id'=>$id])->delete();
      return redirect()->back()->with('flash_message_success','News has been deleted Successfully');
  }
}

