let servicetype = document.getElementById('Service Type');
servicetype.length = 0;

let defaultservicetype = document.createElement('option');
defaultservicetype.text = 'Select Service Type';
defaultservicetype.value = "0";

servicetype.add(defaultservicetype);
servicetype.selectedIndex = 0;

const service = "./API/servicetypelist.php";
fetch(service).then(function(response) {
  //console.log(response);
  return response.text();
}).then(function(text) {
  //console.log(text);

  let stat = JSON.parse(text);
  let option;

  for (let i = 0; i < stat.length; i++) {
    option = document.createElement('option');
    option.text = stat[i].name;
    option.value = stat[i].Id;
    servicetype.add(option);
  }

}).catch(function(error) {
  console.error(error);
})

let macrotype = document.getElementById('Macro Type');
macrotype.length = 0;

let defaultmacrotype = document.createElement('option');
defaultmacrotype.text = 'Select Macro Type';
defaultmacrotype.value = "0";

macrotype.add(defaultmacrotype);
macrotype.selectedIndex = 0;

const macro = "./API/viewMacroType.php";
fetch(macro).then(function(response) {
  //console.log(response);
  return response.text();
}).then(function(text) {
  //console.log(text);

  let stat = JSON.parse(text);
  let option;

  for (let i = 0; i < stat.length; i++) {
    option = document.createElement('option');
    option.text = stat[i].name;
    option.value = stat[i].id;
    macrotype.add(option);
  }

}).catch(function(error) {
  console.error(error);
})


const onSave = (id, action, j) => {
    fn = document.getElementById(id + "afn").value;
    ln = document.getElementById(id + "aln").value;
    //console.log(fn);
    obj = { "id": id, "action": action, "scenario": fn, "comment": ln };
    //console.log(obj.id);
    fetch('./API/modifyStandardMacro.php', {
      method: 'post',
      body: JSON.stringify(obj)
    }).then(function (res) {
      //alert("Edited successfully")
      //console.log(res.text());
      popuTable();
    }).catch(err => {
      //console.log(err);
      return err;
    })
  }
  
  const onEdit = (id, action, j) => {
    //console.log(id);
    let elem1 = document.getElementById(id + "fn");
    let elem2 = document.getElementById(id + "ln");
    let edit = document.getElementById(id + "c");
    let x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("value", elem1.textContent);
    x.setAttribute("id", id + "afn");
    x.setAttribute("class", "form-control focus");
    x.style.maxWidth = "80%";
    elem1.innerHTML = "";
    elem1.appendChild(x).focus();
    //x.setSelectionRange(x.value.length, x.value.length, "forward");
    let x2 = document.createElement("INPUT");
    x2.setAttribute("type", "text");
    x2.setAttribute("value", elem2.textContent);
    x2.setAttribute("id", id + "aln");
    x2.setAttribute("class", "form-control focus");
    x2.style.maxWidth = "80%";
    elem2.innerHTML = "";
    elem2.appendChild(x2).focus();
    edit.innerHTML = "";
  
    //elem.appendChild(br);
    let btn2 = document.createElement('input');
    btn2.type = "button";
    btn2.className = "btn btn-primary btn-sm";
    btn2.value = "SAVE";
    btn2.onclick = (() => { confirm('Are you sure you want to Save it?') ? onSave(id, action, j) : popuTable() });
    edit.appendChild(btn2);
  }
  const onDelete = (id, action) => {
    //gp = document.getElementById(id + "gp" + j).innerText;
    //console.log(gp);
    obj = { "id": id, "action": action };
    //console.log(obj.id);
    fetch('./API/modifyStandardMacro.php', {
      method: 'post',
      body: JSON.stringify(obj)
    }).then(function (res) {
  
      //console.log(res);
      popuTable();
    }).catch(err => {
      //console.log(err);
      return err;
    })
  }
  const popuTable = () => {
    document.getElementById("table").innerHTML = "";
    let table = document.getElementById('table');
    //let cell = document.createElement('td');
    fetch('./API/viewStandardMacro.php').then(res => {
      //console.log(res.text());
      return res.text();
    }).then(text => {
      //console.table(text);
      let stat = JSON.parse(text);
      for (let i = 0, j = stat.length; i < stat.length; i++, j--) {
        var row = table.insertRow(0);
        //var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        //cell0.innerHTML = j;
        cell1.innerHTML = stat[i].Scenario;
        cell1.setAttribute("id", stat[i].id + "fn");
        cell2.innerHTML = stat[i].Comment;
        cell2.setAttribute("id", stat[i].id + "ln");
        cell3.innerHTML = stat[i].service_name;
        //cell3.setAttribute("id", stat[i].id + "em");
        cell4.innerHTML = stat[i].macro_name;
        //cell4.setAttribute("id", stat[i].id + "gp"+j);
        var btn1 = document.createElement('input');
        btn1.type = "button";
        btn1.className = "btn btn-primary btn-sm";
        btn1.value = "EDIT";
        btn1.onclick = (() => { onEdit(stat[i].id, "edit",j) });
        cell5.appendChild(btn1);
        cell5.setAttribute("id", stat[i].id + "c");
        var btn = document.createElement('input');
        btn.type = "button";
        btn.className = "btn btn-primary btn-sm";
        btn.value = "DELETE";
        btn.onclick = (() => { confirm('Are you sure you want to delete it?') ? onDelete(stat[i].id, "delete") : ''; });
        cell6.appendChild(btn);
      }
    });
  }