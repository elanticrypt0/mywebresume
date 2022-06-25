/* (()=>{
    const appDiv=document.getElementById('app');
    const menuElHome=document.getElementById('menuElHome');
    const menuElPortfolio=document.getElementById('menuElPortfolio');
    const menuElSocial=document.getElementById('menuElSocial');

    const loadPage=(page)=>{
        console.log(`loading... ${page}`);
        appDiv.innerHTML="";
        appDiv.innerHTML=`<h1>${ page }</h1>`;
    }

    //loadMenu    
   menuElHome.addEventListener('click',loadPage('home'));
   menuElPortfolio.addEventListener('click',loadPage('portfolio'));
   menuElSocial.addEventListener('click',loadPage('Social'));


})(); */