<?php
# Скрипт отправки сообщений об ошибке http://mistakes.ru/script/mistakes_dev
# Версия 3.3
# 20.04.2012
?>
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

</head>
<body onload=readtxt()>
<span class="text">
Адрес страницы :
 </span>
<br />
<form name="mistake" action="{{ route('mistake') }}" method=post>
    <input type="text" name="url" size="30" readonly="readonly">
    <br />
    <span class="text">
              Ошибка :
              </span>
    <br />
    <textarea rows="5" name="mis" cols="30" readonly="readonly"></textarea>
    <br />
    <span class="text">
              Комментарий :
              </span>
    <br />
    <textarea rows="5" name="comment" cols="30"></textarea>
    <div style="margin-top: 7px"><input type="submit" value="Отправить" name="submit">
        <input onclick="hide()" type="button" value="Отмена" id="close" name="close">
    </div>
</form>

</body></html>
