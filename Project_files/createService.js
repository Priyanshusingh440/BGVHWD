var wb = XLSX.utils.table_to_book(document.getElementById('downloadable-table'), {sheet:"all services"});
var wbout = XLSX.write(wb, {bookType:'xlsx', bookSST:true, type: 'binary'});

var wb = XLSX.utils.table_to_book(document.getElementById('format-table'), {sheet:"all services"});
var format = XLSX.write(wb, {bookType:'xlsx', bookSST:true, type: 'binary'});

function s2ab(s) {
  var buf = new ArrayBuffer(s.length);
  var view = new Uint8Array(buf);
  for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
  return buf;
}
$("#download-excel").click(function(){
  saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'all-services.xlsx');
});

$("#download-format").click(() => {
  saveAs(new Blob([s2ab(format)],{type:"application/octet-stream"}), 'format.xlsx');
})

// extractData from table, table to json
const extractData = () => {
  // Loop through grabbing everything
  var myRows = [];
  var $headers = $("#upload-excel-table th");
  var $rows = $("#upload-excel-table tr").each(function(index) {
    $cells = $(this).find("td");
    myRows[index] = {};
    $cells.each(function(cellIndex) {
      myRows[index][$($headers[cellIndex]).html().trim()] = $(this).html().trim();
    });    
  });
  
  myRows.shift()
  myRows.shift()
  console.log(myRows)
}


$('#input-excel').change(function(e){
  var reader = new FileReader();
  reader.readAsArrayBuffer(e.target.files[0]);
  reader.onload = function(e) {
          var data = new Uint8Array(reader.result);
          var wb = XLSX.read(data,{type:'array'});
          // console.log(wb)
          var htmlstr = XLSX.write(wb,{sheet:"all services", type:'binary',bookType:'html'});
          var elem = document.querySelector('#upload-excel-table tbody');
          elem.parentNode.removeChild(elem);
          $('#upload-excel-table')[0].innerHTML += htmlstr;
          // console.log("hello")
          console.log(htmlstr)
          extractData()

  }
});





        //var e = document.getElementById("ClientName");
        //var strUser = e.options[e.selectedIndex].value;
        //var e1 = document.getElementById("locality-dropdown");
        //var Country = e1.options[e1.selectedIndex].value;
        var e2 = document.getElementById("select_service_type");
        var ser = e2.options[e2.selectedIndex].value;
        var dob2 = document.getElementById("Service Name");
        var dob = dob2.value;
        //var opt2 = document.getElementById("SLA");
        //var optt = opt2.value;
        //var e3 = document.getElementById("select_service_name");
        //var opt = e3.options[e3.selectedIndex].value;
 //Add        

function TestIT2(){
    ser = e2.options[e2.selectedIndex].value; 
    dob = dob2.value;
        console.log("test it function 1");
        $.post("./API/createService.php",
    {
      Action : "Add",
      ServiceT: ser,
      servicename: dob      
    },
    function(data,status){
     //   $("#table").html(data);
   // document.getElementById("table").innerHTML = data;
    console.log("a"+data);
     //alert("Data: " + data + "\nStatus: " + status);
    });
   // T2();
   T3();
    }
/*function editRow(){
var db1 = $("#getv").val(); //$('#upd1').attr('onclick', 'editUpdate(1,'+db1+')');
editUpdate(1,db1);
}*/
    
function T3(){
    ser = e2.options[e2.selectedIndex].value;
    dob = dob2.value;

         $.post("./API/createService.php",
    {
       Action : "Display",
      ServiceT: ser,
      servicename: dob   
    },
    function(data,status){
        $("#table").html(data);
    document.getElementById("table").innerHTML = data;
    console.log("r"+data);
    //alert("Data: " + data + "\nStatus: " + status);
    });
}
function d1(id){
   
        $.post("./API/AddDocument.php",
    {
       service: id   
    },
    function(data,status){
     //   $("#table").html(data);
    //document.getElementById("table").innerHTML = data;
    console.log(" status :"+data);
    //T3();
    });  
}
function deleteRow(id){
        ser = e2.options[e2.selectedIndex].value;
    dob = dob2.value;
    var answer = window.confirm("Are you sure you want to delete this service?")
if (answer) {
        $.post("./API/createService.php",
    {
      Action: "delete",
      service: id,
      ServiceT: ser,
      servicename: dob      
    },
    function(data,status){
     //   $("#table").html(data);
    //document.getElementById("table").innerHTML = data;
    console.log("delete status :"+data);
    T3();
    });
}
else {
    T3();
}

     
}
function editUpdate(id,dbid){
var dat = [];
$('#tr'+id+' td').each(function(){
      var id = $(this).attr("id");
      console.log("id  :"+id);
      if (typeof id === 'undefined') {console.log(" undefined :"+id);}else{
           if(id=='cn'){dat[0]=$(this).html();} else if(id=='co'){dat[1]=$(this).html();}
           else if(id=='countryl'){//dat[2]=$(this).html();
             dat[2]= $("#locality-dropdown").val();
            }else if(id=='sn'){dat[3]=$(this).html();}
           else if(id=='sla'){dat[4]=$(this).html();}           
         }
    
});
  console.log("dat  :"+dat);
console.log("Select Edit :"+"#tr"+id+" td");
 var answer = window.confirm("Are you sure you want to save this data?")
if (answer) {
         $.post("./API/createService.php",
    {
      Action: "edit",
      id: dbid,
      Client: dat[0],
      Country: dat[1],
      ServiceT: dat[2],
      ServiceN: dat[3],
      Price: dat[4]       
    },
    function(data,status){
     //   $("#table").html(data);
    //document.getElementById("table").innerHTML = data;
    console.log("update status :"+data);
    //T3();
    });
}
else {
    T3();
}
/*
$('#tr'+id+' td').each(function(){
    $(this)
       // .attr("col", $(this).index() + 1),
       // .attr("row", $(this).parent().index() + 1);
       . removeAttr("contenteditable");
});
*/
}





