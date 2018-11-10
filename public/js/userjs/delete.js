//popup
$().ready(function(){
    $('.btn-list-wrap').on('click', '.delete', function(){
        var token = $('meta[name="csrf-token"]').attr('content');
        var id = $(this).attr('value');
        var pathname = window.location.pathname;
        pathname = pathname.split("/");
        table = pathname[2] + "_category";   
        
        var data= "&table=" + table + "&id=" + id;;
        var data = "_token=" + token + data;
        
        xml_load_more = new XMLHttpRequest();
        xml_load_more.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                location.reload();
            }
        };
        xml_load_more.open('POST', '/user/delete_category', false);
        xml_load_more.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xml_load_more.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xml_load_more.send(data);
    });
});
