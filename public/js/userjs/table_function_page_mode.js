$().ready(function(){
    loadPages();
    
    $('.page-mode-btn-wrap').on('click', '.page-mode-btn', function(){
        var page = $(this).attr('id').split("-");
        var page_box_val = $('.page-mode').attr('value').split("-");
        $('.page-mode').attr('value', page_box_val[0] + '-' + page[1]);
        loadPages();
        
        //load item
        index = page[1];
        loadItemClick();
    })
    
});
function reloadPageMode(){
    var page_box_val = $('.page-mode').attr('value').split("-");
    $('.page-mode').attr('value', page_box_val[0] + '-' + 1);
    loadPages();
}

function loadPages(){
    $(".page-mode-btn").remove();//after click
    //get status
    var page_box_val = $('.page-mode').attr('value').split("-");
    //get ranger
    var index_pages_bottom = getPageRanger(parseInt(page_box_val[0]), parseInt(page_box_val[1]));
    changeDisplay(index_pages_bottom[2]);
    addAfter(index_pages_bottom);
    //lighter
    $('#btn-' + page_box_val[1]).css('background-color', 'grey');
}

function getPageRanger(number_of_page, page_nail){
    var backward = 3;
    var forward = 2;
    var pages = 4;
    var ranger_forward = number_of_page - forward;
    var ranger = [];
    
    if(number_of_page <= 5){
        ranger = [1,number_of_page,0];
        return ranger;
    }   else    {
       if(page_nail <= backward){
            ranger = [1,5,1];
            return ranger;
        }   else if(page_nail > backward && page_nail <= ranger_forward){
            ranger = [page_nail - 2, page_nail + 2,2];
            return ranger;
        }   else if(page_nail > ranger_forward){
            ranger = [number_of_page - pages, number_of_page,3];
            return ranger;
        }
    }
}

function changeDisplay(section){
    if(section == 0){
        $('#btn-backward').css('display', 'none');
        $('#btn-forward').css('display', 'none');
    }   else if(section == 1)   {
        $('#btn-backward').css('display', 'none');
        $('#btn-forward').css('display', 'inline-block');
    }   else if(section == 2)   {
        $('#btn-backward').css('display', 'inline-block');
        $('#btn-forward').css('display', 'inline-block');
    }   else    {
        $('#btn-backward').css('display', 'inline-block');
        $('#btn-forward').css('display', 'none');
    }
}

function addAfter(index_pages_bottom){
    var add_after = '';
    for(i = index_pages_bottom[0]; i <= index_pages_bottom[1]; i++){
        add_after += "<button style=\"margin-left: 5px\" class=\"page-mode-btn\" id=\"btn-" + i + "\"><b>" + i + "</b></button>";
    }
    $(".page-mode-btn-wrap > button:nth-child(1)").after(add_after);
}

function loadItemClick(){
    var arrow_soft = document.getElementById('arrow');
    var soft = null;
    if(arrow_soft !== null){
        soft = arrow_soft.childNodes[0].childNodes[1].id;
    }
    if(typeof column !== 'undefined'){
        loadItem(db_table, index, column, soft);
    }   else    {
        loadItem(db_table, index);
    }
}

function loadItem(db_table, index, column = '', soft = ''){
    var data= "&table=" + db_table + "&column=" + column + "&soft=" + soft + "&index=" + index;
    
    var token = $('meta[name="csrf-token"]').attr('content');
    var data = "_token=" + token + data;
    
    xml_load_more = new XMLHttpRequest();
    xml_load_more.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var json_data = JSON.parse(this.responseText);
            var http_append = foreachListJoson(json_data);
            var node = document.getElementById('tr_wrap');
            $('#tr_wrap').html(http_append);
        }
    };
    xml_load_more.open('POST', '/user/load_more', false);
    xml_load_more.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xml_load_more.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml_load_more.send(data);
}
