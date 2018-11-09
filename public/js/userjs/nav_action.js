$().ready(function(){
    var str = document.URL;
    str = str.split("user/");
    str = str[1].split("/");
    $("#li_" + str[0]).css('background-color', 'grey');
    $("#li_1_" + str[1]).css('background-color', 'grey');
});