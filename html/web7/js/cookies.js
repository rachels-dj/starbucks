/*  index.php 파일경로에  - [js폴더만들기] - 폴더안에 cookies.js  */
/*  document.cookie 셋팅   : setCookie(  쿠키이름  , 쿠키값  , 안보일 일 수)    */
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

/* document.cookie 가져오기 : getCookie(쿠키이름)      */
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {   c = c.substring(1);  }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}