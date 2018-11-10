//popup
$().ready(function(){
    //openPop
    $('.btn-list-wrap').on('click', '.openPop', function(){
        var token = $('meta[name="csrf-token"]').attr('content');
        var id = $(this).attr('value');
        var pathname = window.location.pathname;
        pathname = pathname.split("/");
        table = pathname[2] + "_category";
        openPop(token, id, table);
    });
    //save
    //closePop
    $('.popup_wrap').on('click', '.pop_back', closePop);
    $('.popup_wrap').on('click', '.pop_cancel', closePop);
});
//function close popup
function closePop(){
    $('.popup').remove();
}
//function add popup
function openPop(token, id){
    $('.popup_wrap').append('<div class=\"popup\">' +
        '<div class=\"pop_back\"></div>' +
        '<div class=\"box pop form\">' +
            '<h3 class=\"box_title\" >Sửa Danh Mục</h3>' +
            '<form method=\"POST\" action=\"/user/edit_category\">' +
                '<div style=\"height:0\">' +
                '<input type=\"hidden\" name=\"_token\" id=\"csrf-token\" value=\"' + token + '\" /><br />' +
                '<input type=\"hidden\" name=\"id\" value=\"' + id + '\" /><br />' +
                '<input type=\"hidden\" name=\"table\" value=\"' + table + '\" /><br />' +
                '</div>' +
                '<input class=\"input-style\" type=\"text\" name=\"name[]\" placeholder=\"Tên tiếng Anh\" required! /><br />' +
                '<input class=\"input-style\" type=\"text\" name=\"name[]\" placeholder=\"Tên tiếng Việt\" required! /><br />' +
                '<button type=\"submit\" class=\"btn btn-add btn-submit pop_save\">Lưu <i class=\"fas fa-check\"></i></button>' +
                '<button type=\"button\" style=\"float: right;\" class=\"btn_false btn-add btn-submit pop_cancel\">Hủy <i class=\"fas fa-times\"></i></button>' +
            '</form>' +
        '</div>' +
    '</div>');
}