<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
/*use App\Models\User;*/

use App\Mail\SendMail;
use Illuminate\Http\Request;
/*use App\Models\Management;
use App\Models\ZavodsGallery;
use App\Models\ManufGallery;
use App\Models\Structure_gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;*/
use Illuminate\Support\Facades\Mail;

/*use Illuminate\Support\Facades\Session;*/

class MistakeController extends Controller
{
    public function mistake(Request $request){

        if ($request->isMethod('post')) {
# Заголовок сообщения - замените "yousite.ru" на имя своего сайта:
            $title = 'Сообщение об ошибке на сайте yousite.ru';
            $ip = getenv("REMOTE_ADDR");
            $url = (trim($_POST['url']));
            $mis = substr(htmlspecialchars(trim($_POST['mis'])), 0, 100000);
            $comment = substr(htmlspecialchars(trim($_POST['comment'])), 0, 100000);

            $mess = '
                Адрес страницы: ' . $url . '
                Ошибка: ' . $mis . '
                Комментарий: ' . $comment . '
                IP: ' . $ip . '
                ' . $_POST['mess'];
# Email адрес, на который должны приходить сообщения:
            $to = 'infouptrz@gmail.com';
# Email адрес, от кого пришло сообщение:
            $mymail = 'youmail@mail.ru';
# Вместо "yousite.ru" указжите имя вашего сайта:
            $from = "From: =?windows-1251?B?" . base64_encode("yousite.ru") . "?= < $mymail >\n";
            $from .= "X-Sender: < $mymail >\n";
            $from .= "Content-Type: text/plain; charset=windows-1251\n";

            mail($to, $title, $mess, $from);
            echo '<br><br><br><center>Спасибо!<br>Ваше сообщение отправлено.<br><br><br><input onclick="hide()" type="button" value="Закрыть окно" id="close" name="close"><br><br><br><a class="copyright" href="http://mistakes.ru/script/mistakes_dev" target="_blank" title="">© Ошибки.ru</a><center>';
            exit();
        }
    }
}
