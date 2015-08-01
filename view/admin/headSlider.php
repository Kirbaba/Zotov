<h1>Настройки слайдера</h1>
<div>
    <h2>{message}</h2>
</div>
<hr>
<table class="admin-table">
    <tr>
        <td valign="top" style="padding-right: 20px">
            <form action="/wp-admin/admin.php?page=slides" method="post" name="slides">               
                <p><b>Выберите фото:</b><br>
                <p><img class="custom_media_image" src="" alt="" style="width: 80px;"></p>
                <p><button class="custom_media_upload">Загрузить</button></p>
                <p><input id="image" class="custom_media_url" type="hidden" name="attachment_url" value=""></p>

                <p><input type='submit' value='Отправить'/></p>
            </form>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <table style="width: 100%">
                <caption>Существующие слайды</caption>
                <tr>
                    <td style="padding-right: 10px">
                        <p>Фото:</p>
                    </td>                   
                    <td>
                        <p>Удалить</p>
                    </td>
                </tr>
                {slides}
            </table>
        </td>
    </tr>
</table>
<br/>