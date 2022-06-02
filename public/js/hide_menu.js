// var btn = document.querySelector("button.afficher");
// var bar_vert = document.querySelector("div.barre");
    var barre = document.querySelector(".fixe_dropdown");
    var show_hide = document.querySelector(".show_hide");
    var bar_vert = document.querySelector("div.barre");
    var show = document.querySelector(".show");
    var hide = document.querySelector(".hide");

 var isActive = false;
//
// ------------------------------------------------------------//
// ------------------------------------------------------------//
// ------------ fonction afficher cacher ----------------------//
// ------------------------------------------------------------//
// function hide_show() {
//     var btn = document.querySelector("button.afficher");
//     var bar_vert = document.querySelector("div.barre");

//     if (bar_vert.style.display === "none") {
//         bar_vert.style.display = "block";
//     } else {
//         bar_vert.style.display = "none";
//     }
// }
show_hide.addEventListener('click' , () =>{
    isActive = !isActive
    if (isActive) {
        bar_vert.classList.remove('-translate-x-full')
        hide.classList.remove('opacity-0')
        show.classList.add('opacity-0')
    } else {
        bar_vert.classList.add('-translate-x-full')
        show.classList.remove('opacity-0')
        hide.classList.add('opacity-0')
    }
})


// window.addEventListener('scroll' , () => {
//     if (scrollY>256) {
//         barre.classList.add('fixe')
//     } else {
//         barre.classList.remove('fixe') 
//     }
//     console.log(scrollY);
// })


// btn.addEventListener('click', () => {
//     if(bar_vert.class.display === none )

// }


// );
    // loadMapsJSAPI();
    // function runApp() {
    //     console.log('Maps JS API loaded');
    //     const map = displayMap();
      
    // }
    // function loadMapsJSAPI() {
    //     const googleMapsAPIKey = 'AIzaSyDvbt--T7RTmXndw3aRIUd4tFmu0h27shs';
    //     const googleMapsAPIURI = `https://maps.googleapis.com/maps/api/js?key=${googleMapsAPIKey}&callback=runApp`;
    //     const script = document.createElement('script');
    // script.src = googleMapsAPIURI;
    // script.defer = true;
    // script.async = true;
    // window.runApp = runApp;
    // document.head.appendChild(script);
    // }
    // function displayMap() {
    //     const mapOptions = {
    //     center: { lat: 5.38362, lng: -3.973538 },
    //     zoom: 14
    //     };
    //     const mapDiv = document.getElementById('map');
    // const map = new google.maps.Map(mapDiv, mapOptions);
    // return map;
    // }
    
    