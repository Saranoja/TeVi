  document.onreadystatechange = function() { 
            if (document.readyState === "complete")  { 
                 var load = document.querySelector( 
                  ".loading-screen");
                 load.clientHeight;
                 load.style.opacity = 0; 
                document.querySelector( 
                  ".criteria_wrap").style.visibility = "visible";
                  document.querySelector( 
                  ".back-button").style.visibility = "visible"; 
                  document.querySelector( 
                  ".finish-button").style.visibility = "visible";  
            setTimeout(function(){
      load.style.display="none";
  }, 1500);
            } 
        };