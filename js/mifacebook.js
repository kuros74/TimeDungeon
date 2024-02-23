window.fbAsyncInit = function() {
  FB.init({
    appId      : '253712805187201',
    xfbml      : true,
    version    : 'v2.9'
  });
  FB.AppEvents.logPageView();
};

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk')); 


function shareScore(score) {

  FB.ui({
    method: 'share',
    href: 'http://timedungeon.x10host.com/Proyecto_MI/index.html',
    quote: "Mi Tiempo fue de: " + score

  });
  
}
