let block=false, page=0;

window.onload=async function(){
    //load items
}

window.addEventListener("scroll", async function(event){
    const scrollHeight= this.scrollY;
    const viewportHeight= document.documentElement.clientHeight;
    const moreScroll= document.querySelector("#more-news").offsetTop;
    const currentScroll= scrollHeight + viewportHeight;
    if((currentScroll>=moreScroll)&&(block==false)){ //when scroll reach the bottom
        block=true;
        this.setTimeout(()=>{
            loadItems();
            block=false;
        }, 1500); //wait 1,5s to load more items
    } 
});

async function loadItems(){
    const data =await requestData(page);
    const response=data[0]; //result value 200 or 400
    if (response.response=='200'){
        const items= data[1]; //elemnts of query
        page = data[2].page; 
        renderItems(items);
    } else if (response.response=='400'){
        alert('no more items to load');
    }
}

function requestData(n){
    const url = 'http://localhost/mvc/blog/scroll?action=more&page=' + n; //I believe that here is the error but I don't know
    const response = this.fetch(url)
    .then(result=>result.json())
    .then(data=>data)
    return response;
}

function renderItems(data){
    let news=document.querySelector('#news');
    data.forEach(element => {
        news.innerHTML+=`
        <div class="news">
            <div class="image">
                <img src="${element.image}" alt="">
            </div>
            <div class="title">
                ${element.title};
            </div>
            <div class="author">
                ${element.author};
            </div>
            <div class="date">
                ${element.date};
            </div>
            <div class="text">
                ${element.text};
            </div>
        </div>
        `
    });
    
}
