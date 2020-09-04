$(document).ready(function(){
    var Data;
    var matched=false;
    webData();

    $('#by_DisName').click(findByName);
    function findByName(){
        var DistrictName=$('#districtName').val();
        var Finished=toPascalCase(DistrictName);
        
        console.log(Finished);
         for(var state in Data){
                var state_got=Data[state];
                var insideState=state_got.districtData;
                 for(var districtname in insideState){
                    // console.log(districtname);
                    var district_count=insideState[districtname];
                    var district_got= String(districtname);
                    if(district_got==Finished){
                        matched=true;
                        console.log("Matched");
                        console.log(district_count.active);
                        console.log(district_count.confirmed);
                        console.log(district_count.deceased);
                        $("#confirmed").html(district_count.confirmed);
                        $("#active").html(district_count.active);
                        $("#recovered").html(district_count.recovered);
                        $("#deceased").html(district_count.deceased);
                    }
                    }                 
    }
    if(matched==false)
    {
        console.log("Unmatched")
    }
}
    

    function toPascalCase(string) {
        return `${string}`
          .replace(new RegExp(/[-_]+/, 'g'), ' ')
          .replace(new RegExp(/[^\w\s]/, 'g'), '')
          .replace(
            new RegExp(/\s+(.)(\w+)/, 'g'),
            ($1, $2, $3) => `${$2.toUpperCase() + $3.toLowerCase()}`
          )
          .replace(new RegExp(/\s/, 'g'), '')
          .replace(new RegExp(/\w/), s => s.toUpperCase());
      }

        function webData() {
            $.ajax({
                method: 'GET'
                , url: 'https://api.covid19india.org/state_district_wise.json'
                , dataType: 'json'
            }).done(output)
            .fail(function () {
                console.log('Error!!');
            })
        }

        function output(data) {
            
            console.log(data);
            Data=data;
        }

        
  });