<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <TITLE>Отправить ошибку</TITLE>
    <style type="text/css">
        body {
            margin: 20px 25px;
            font-size:14px;
            font-family:Helvetica, Sans-serif, Arial;
            line-height:2em;
        }
        form
        {margin: 0;}
        .text {
            font-weight: bold;
            font-size:12px;
            color:#777;
        }
        .copyright
        {
            font-size:11px;
            color:#777;
        }
    </style>

    <script language="JavaScript">
        var p=parent;
        function readtxt()
        { if(p!=null)document.forms.mistake.url.value=p.loc
            if(p!=null)document.forms.mistake.mis.value=p.mis
        }
        function hide()
        { var win=p.document.getElementById('mistake');
            win.parentNode.removeChild(win);
        }
    </script>

    <?php
    if (isset($_POST['submit'])) {
# Заголовок сообщения - замените "yousite.ru" на имя своего сайта:
        $title = 'Сообщение об ошибке на сайте trz-web.uz';
        $ip = getenv("REMOTE_ADDR");
        $url = (trim($_POST['url']));
        $mis =  substr(htmlspecialchars(trim($_POST['mis'])), 0, 100000);
        $comment =  substr(htmlspecialchars(trim($_POST['comment'])), 0, 100000);

        $mess = '
                Адрес страницы: '.$url.'
                Ошибка: '.$mis.'
                Комментарий: '.$comment.'
                IP: '.$ip.'
                ';
# Email адрес, на который должны приходить сообщения:
        $to = 'infouptrz@gmail.com';
# Email адрес, от кого пришло сообщение:
        $mymail='infouptrz@gmail.com';
# Вместо "yousite.ru" указжите имя вашего сайта:
        $from = "From: =?windows-1251?B?". base64_encode("trz-web.uz"). "?= < $mymail >\n";
        $from .= "X-Sender: < $mymail >\n";
        $from .= "Content-Type: text/plain; charset=utf-8\n";

        mail($to, $title, $mess, $from);
        echo '<br><br><br><center>Спасибо!<br>Ваше сообщение отправлено.<br><br><br><input onclick="hide()" type="button" value="Закрыть окно" id="close" name="close"><br><br><br><a class="copyright" href="http://mistakes.ru/script/mistakes_dev" target="_blank" title="">© Ошибки.ru</a><center>';
        exit();
    }
    ?>

</head>
<body onload=readtxt()>
<span class="text">
Адрес страницы :
 </span>
<br />
<form name="mistake" action="" method=post>
    <input type="text" name="url" size="30" readonly="readonly">
    <br />
    <span class="text" style="font-weight: bold">
              Ошибка :
              </span>
    <br />
    <textarea rows="5" name="mis" cols="30" readonly="readonly"></textarea>
    <br />
    <span class="text" style="font-weight: bold">
                Комментарий :
              </span>
    <br />
    <textarea rows="5" name="comment" cols="30"></textarea>
    <div style="margin-top: 7px"><input type="submit" value="Отправить" name="submit">
        <input onclick="hide()" type="button" value="Отмена" id="close" name="close">
    </div>
</form>

</body></html>
