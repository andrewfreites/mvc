//Select active tab of the navigation bar
window.onload= active;
function active(){
    let url= window.location.href;
    let nav = document.getElementById('nav-bar');
    let dir = nav.getElementsByTagName('a');
    let li = document.getElementsByTagName('li');
    let anchors= Array();
    for(let i=0; i<dir.length;i++){
        anchors.push(dir[i])
        if(dir[i] == url){
        li[i].style.backgroundColor="gray";
        }
    }
}