document.getElementById("search").addEventListener('keyup', (e) => {
    // console.log(patterns[e.target.attributes.name.value]);
  
  if(e.target.value!=""){
    searchFind(e.target.value);
    console.log(e.target.value);
}
});

function searchFind(value){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        method: 'POST'
        ,data:"jsonBall="+value
        , url: '/admintablesearch'
        , dataType: 'json'
    }).done(output)
    .fail(function (err) {
        console.log('Error!!'+err);
    })
}
JsonData={};
function output(data) {             
    console.log(data);
    JsonData=data;
    displayResult();
  }
  
  function displayResult(){
    HTMLdata=""
    for(a in JsonData)
    { console.log(a);
        
                    HTMLdata+="<tr>"
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer"><a href="/adminupdate/'+JsonData[a].id+'">Edit</a></label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].id+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 userId"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].hospital_name+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].address+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].city+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].phone+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].landline+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].con_person+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].email+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].latitude+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].longitude+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].c_o+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].c_r+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].n_o+'</label></td>'
                    HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].n_r+'</label></td>'
                    HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].created_at+'</label></td>'
					HTMLdata+='<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">'+JsonData[a].updated_at+'</label></td>'
                    HTMLdata+='</tr>'
   }
        console.log(HTMLdata);
        $("tbody").html(HTMLdata);
  }
       