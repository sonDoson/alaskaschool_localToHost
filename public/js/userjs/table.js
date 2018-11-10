//Soft arrow
var table_soft = document.getElementsByTagName('th');
Array.prototype.forEach.call(table_soft, function(soft){
    if(soft.childElementCount !== 0){
        soft.addEventListener('click', headerSoft, true);
    }
});
//var arrow = ['up','down'];
var arrow_index = 0;
var id_th_old = '';

function headerSoft(){
    reloadPageMode()
    id_th = this.attributes.id.value;
    column = this.id.substring(3);
    
    if(id_th != id_th_old){
        id_th_old = id_th;//new
        //arrow_index
        arrow_index = 0;
        
        //arrow
        if(document.getElementById('arrow')){
            document.getElementById('arrow').remove();
        }
        arrowDown();
        removeAllElements();
        
        //ajax
        soft = 'asc';
        listAjax(column, soft);
    }   else    {
        //old
        var id_arrow = id_th + "_arrow";
        if(arrow_index == 0){//key up
            arrow_index++;
            
            document.getElementById('arrow').remove();
            arrowUp();
            removeAllElements();
            
            //ajax
            soft = 'desc';
            listAjax(column, 'desc');
        }   else    {//key down
            arrow_index = 0;
            
            document.getElementById('arrow').remove();
            arrowDown();
            removeAllElements();
            
            //ajax
            soft = 'asc';
            listAjax(column, soft);
        }
    }
    index = 1;
}

// Add item
//var index = 1;// 0 for load more and 1 for load page
//var load_more = document.getElementById('load_more');

//load_more.addEventListener("click",function(){

//    var arrow_soft = document.getElementById('arrow');
//    var soft = null;
//    if(arrow_soft !== null){
//        soft = arrow_soft.childNodes[0].childNodes[1].id;
//    }
//    index++;
//    if(typeof column !== 'undefined'){
//        loadMoreAjax(db_table, index, column, soft);
//    }   else    {
//        loadMoreAjax(db_table, index);
//    }
    
//    btn_delete = document.getElementsByClassName('delete'); // Run it again for load DOM
//    Array.prototype.forEach.call(btn_delete, function(btn){
//        btn.addEventListener('click', function(){
//            alert("you have click me");
//        }, false);
//    });
//}, false);


// DELETE BTN
//var btn_delete = document.getElementsByClassName('delete');
//Array.prototype.forEach.call(btn_delete, function(btn){
//    btn.addEventListener('click', function(){
//        alert("you have click me");
//    }, false);
//});