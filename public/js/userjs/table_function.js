//function arrow
function arrowUp(){
    var up_arrow = document.createElement("div");      
    up_arrow.style.display = "inline-block";
    up_arrow.innerHTML = "<div id=\"arrow\"><p>&nbsp;<i class=\"fas fa-caret-up\" id=\"desc\"></i></p>" 
    var id_arrow = id_th + "_arrow";
    document.getElementById(id_arrow).append(up_arrow);
}
function arrowDown(){
    var down_arrow = document.createElement("div");    
    down_arrow.style.display = "inline-block";            
    down_arrow.innerHTML = "<div id=\"arrow\"><p>&nbsp;<i class=\"fas fa-caret-down\" id=\"asc\"></i></p>" 
    var id_arrow = id_th + "_arrow";
    document.getElementById(id_arrow).append(down_arrow);
}
//function remove elements
function removeAllElements(){
    var ele = document.getElementById("tr_wrap");
    while (ele.hasChildNodes()) {
        ele.removeChild(ele.firstChild);
    }
}
//function call ajax for list
function listAjax(column, soft){
    var token = $('meta[name="csrf-token"]').attr('content');
    var data = "_token=" + token + "&table=" + db_table + "&column=" + column + "&soft=" + soft;
    var xml_list = new XMLHttpRequest();

    xml_list.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var json_data = JSON.parse(this.responseText);
            var http_append = foreachListJoson(json_data);
            var node = document.getElementById('tr_wrap');
            node.insertAdjacentHTML('beforeend', http_append );
        }
    };
    xml_list.open('POST', '/user/list_ajax', false);
    xml_list.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xml_list.setRequestHeader("Content-type","application/x-www-form-urlencoded;");
    xml_list.send(data);
}
//function loadmore
function loadMoreAjax(db_table, index, column = '', soft = ''){
    var data= "&table=" + db_table + "&column=" + column + "&soft=" + soft + "&index=" + index;
    
    var token = $('meta[name="csrf-token"]').attr('content');
    var data = "_token=" + token + data;
    
    xml_load_more = new XMLHttpRequest();
    
    xml_load_more.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var json_data = JSON.parse(this.responseText);
            var http_append = foreachListJoson(json_data);
            var node = document.getElementById('tr_wrap');
            node.insertAdjacentHTML('beforeend', http_append );
        }
    };
    xml_load_more.open('POST', '/user/load_more', false);
    xml_load_more.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xml_load_more.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml_load_more.send(data);
}

//APPEND DATA
function foreachListJoson(list_json){
    var count = 0;
    var http_append = "";
    list_json.forEach(function(element, i){
        http_append += "<tr class=\"something\">" +
                            "<td class=\"table-id\">&nbsp;&nbsp;" + element.id + "</td>" +
                            "<td class=\"table-name\">&nbsp;" + element.name_en + "</td>" +
                            "<td class=\"table-name\">&nbsp;" + element.name_vn + "</td>" +
                            "<td class=\"table-name\">&nbsp;" + element.category_vn + "</td>" +
                            "<td class=\"table-time\">" + element.time + "</td>" +
                            "<td class=\"table-btn\">" +
                                "<div class=\"btn-list-wrap\">" +
                                    "<a href=\"post/edit?id=" + element.id + "\" ><button class=\"btn-list edit\"><i class=\"fas fa-pen\"></i></button></a>" +
                                    "<a href=\"delete/edit?id=" + element.id + "\" ><button class=\"btn-list delete\"><i class=\"fas fa-trash-alt\"></i></button></a>" +
                                "</div>" +
                            "</td>" +
                        "</tr>";
    });
    return http_append;
}