var JsonFromPhp={};
  var lat;
  var long;
  var final_position;
  var address;
  
  var JsonForAccept={};
  
  var boundingBox={
      "longitudeUp":null,
      "longitudeDown":null,
      "latitudeUp":null,
      "latitudeDown": null
  }
  
 
  
  function getHosInfo(){
      getlocation();
   }
function findByDistrict(){

    districtName= $("#districtName").val();
    var regex = /^[a-zA-Z ]{2,30}$/;
    if(regex.test(districtName))
    {
      fetchHosInfoByDistrict(districtName)
    }
    else
    {
         alert("Invalid Input");
    }
}

function fetchHosInfoByDistrict(districtName) {
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      method: 'POST'
      ,data:"districtName="+districtName
      , url: '/infobydistrict'
      , dataType: 'Json'
  }).done(outputByDistrict)
  .fail(function(jqXHR, textStatus) {
    console.log( "Request failed: " + textStatus );
  })
}


function outputByDistrict(data) {       
  
  JsonFromPhp=data;
  console.log(JsonFromPhp);  
  
  displayResultByDistrict();     
}

function displayResultByDistrict(){
  HTMLdata=""
  for(a in JsonFromPhp)
  {

    HTMLdata+='<div class="py-8 flex flex-wrap md:flex-no-wrap"><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col"><span class="tracking-widest font-medium title-font text-gray-900">Date updated</span>'
    HTMLdata+='<span class="mt-1 text-gray-500 text-sm">'+JsonFromPhp[a].updated_at+'</span></div><div class="md:flex-grow"><h2 class="text-2xl font-medium text-gray-900 title-font mb-2">'+JsonFromPhp[a].hospital_name+'</h2><p class="leading-relaxed">'+JsonFromPhp[a].address+'</p><p class="leading-relaxed">'
    HTMLdata+=JsonFromPhp[a].phone+' | '+JsonFromPhp[a].landline+'<p><b>Corona Beds: </b>Occupied ('+JsonFromPhp[a].c_o+') •  Remaining ('+JsonFromPhp[a].c_r+')</p>'
    HTMLdata+='<p><b>Non-Corona Beds: </b>Occupied ('+JsonFromPhp[a].n_o+') •  Remaining ('+JsonFromPhp[a].n_r+')</p></div></div><hr>'
      }
      console.log(HTMLdata);
      $("#pasteTheResult").html(HTMLdata);
}
      
      function getlocation(){
    
          if (navigator.geolocation) { //check if geolocation is available
            navigator.geolocation.getCurrentPosition(function(position){
                console.log(position);
              final_position=position;
              lat=position.coords.latitude;
              long=position.coords.longitude;
              hospitalAroundYou();

            })} 
        }
        
  
  function hospitalAroundYou(){
  
      boundingBox.latitudeUp=(lat+1);
      boundingBox.latitudeDown=(lat-1);
      boundingBox.longitudeUp=(long+1);
      boundingBox.longitudeDown=(long-1);
      jsonString=JSON.stringify(boundingBox);
      console.log(jsonString);
      
      fetchHosInfo();
  
  }
  
        function fetchHosInfo() {
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
              method: 'POST'
              ,data:boundingBox
              , url: '/infobyposition'
              , dataType: 'json'
          }).done(output)
          .fail(function(jqXHR, textStatus) {
            console.log( "Request failed: " + textStatus );
          })
        }
      
      
        function output(data) {       
          
          JsonFromPhp=data;
          console.log(data);  
          
          displayResult();     
        }

        var HTMLdata="";
    
        function displayResult(){
          HTMLdata=""
          for(a in JsonFromPhp)
          {

            HTMLdata+='<div class="py-8 flex flex-wrap md:flex-no-wrap"><div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col"><span class="tracking-widest font-medium title-font text-gray-900">Date updated</span>'
            HTMLdata+='<span class="mt-1 text-gray-500 text-sm">'+JsonFromPhp[a].updated_at+'</span></div><div class="md:flex-grow"><h2 class="text-2xl font-medium text-gray-900 title-font mb-2">'+JsonFromPhp[a].hospital_name+'</h2><p class="leading-relaxed">'+JsonFromPhp[a].address+'</p><p class="leading-relaxed">'
            HTMLdata+=JsonFromPhp[a].phone+' | '+JsonFromPhp[a].landline+'<p><b>Corona Beds: </b>Occupied ('+JsonFromPhp[a].c_o+') •  Remaining ('+JsonFromPhp[a].c_r+')</p>'
            HTMLdata+='<p><b>Non-Corona Beds: </b>Occupied ('+JsonFromPhp[a].n_o+') •  Remaining ('+JsonFromPhp[a].n_r+')</p></div></div><hr>'
              }
              console.log(HTMLdata);
              $("#pasteTheResult").html(HTMLdata);
        }
   
   
  
  function logOut(){
  localStorage.removeItem("username");
  window.location.href="index.html";
       return false;
  
  }