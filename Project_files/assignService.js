// var e = document.getElementById("ClientName");
// var strUser = e.options[e.selectedIndex].value;
// var e1 = document.getElementById("locality-dropdown");
// var Country = e1.options[e1.selectedIndex].value;
// var e2 = document.getElementById("select_service_type");
// var ser = e2.options[e2.selectedIndex].value;
// var dob2 = document.getElementById("Price");
// var dob = dob2.value;
// var opt2 = document.getElementById("SLA");
// var optt = opt2.value;
// var e3 = document.getElementById("select_service_name");
// var opt = e3.options[e3.selectedIndex].value;

// function TestIT2() {
//   strUser = e.options[e.selectedIndex].value;
//   Country = e1.options[e1.selectedIndex].value;
//   ser = e2.options[e2.selectedIndex].value;
//   dob = dob2.value;
//   optt = opt2.value;
//   opt = e3.options[e3.selectedIndex].value;
//   console.log("test it function 1");
//   $.post("API/assignService.php", {
//       Client: strUser,
//       Country: Country,
//       ServiceT: ser,
//       ServiceN: opt,
//       Price: dob,
//       SLA: optt
//     },
//     function (data, status) {
//       //   $("#table").html(data);
//       // document.getElementById("table").innerHTML = data;
//       console.log("r" + data);
//       //  alert("Data: " + data + "\nStatus: " + status);
//     });
//   // T2();
//   T3();
// }

// function T3() {
//   console.log("test it function 2");
//   strUser = e.options[e.selectedIndex].value;
//   Country = e1.options[e1.selectedIndex].value;
//   ser = e2.options[e2.selectedIndex].value;
//   dob = dob2.value;
//   optt = opt2.value;
//   opt = e3.options[e3.selectedIndex].value;

//   $.post("API/assignServicetable.php", {
//       Client: strUser,
//       Country: Country,
//       ServiceT: ser,
//       ServiceN: opt,
//       Price: dob,
//       SLA: optt
//     },
//     function (data, status) {
//       $("#table").html(data);
//       document.getElementById("table").innerHTML = data;
//       console.log("r" + data);
//       //alert("Data: " + data + "\nStatus: " + status);
//     });
// }

// function deleteRow(id) {
//   console.log("test it delete" + id);
//   strUser = e.options[e.selectedIndex].value;
//   Country = e1.options[e1.selectedIndex].value;
//   ser = e2.options[e2.selectedIndex].value;
//   dob = dob2.value;
//   optt = opt2.value;
//   opt = e3.options[e3.selectedIndex].value;

//   $.post("API/assignServicetable.php", {
//       action: "delete",
//       Client: id,
//       Country: Country,
//       ServiceT: ser,
//       ServiceN: opt,
//       Price: dob,
//       SLA: optt
//     },
//     function (data, status) {
//       //   $("#table").html(data);
//       //document.getElementById("table").innerHTML = data;
//       console.log("delete status :" + data);
//       T3();
//     });
// }

// function editRow(id, dbid) {

//   $.post("API/modifyClient.php", {
//       id: dbid,

//     },
//     function (data, status) {

//       //console.log("update status :"+data);
//       window.location.href = "modifyClient.php";

//     });

// }

console.log('working') 

let data = {}

const currency = document.querySelector('#currency')

fetch('https://www.bgvhwd.xyz/Project_files/API/country.php')
  .then(response => response.json())
  .then(data => {
    // clients = data
    // console.log('clients', clients)
    console.log(data)
    data.map(v => {
      // code change
      currency.innerHTML += `<option value="${v.Id}" class="bg-secondary text-light" >${v.currency}</option>`
    })
  });


let clients
const clientName = document.querySelector('#ClientName')

fetch('https://www.bgvhwd.xyz/Project_files/API/viewclient.php')
  .then(response => response.json())
  .then(data => {
    clients = data
    // console.log('clients', clients)
    clients.map(v => {
      // code change
      clientName.innerHTML += `<option value="${v.Id}" class="bg-secondary text-light" >${v.Client_Name}</option>`
    })
  });

// clientName.onchange = (e) => fetchService(e)


let countries
const countrySelect = document.querySelector('#locality-dropdown')

fetch('https://www.bgvhwd.xyz/Project_files/API/country.php')
  .then(response => response.json())
  .then(data => {
    countries = data
    countries.map(v => {
      countrySelect.innerHTML += `<option value="${v.id}" class="bg-secondary text-light" >${v.country_name}</option>`
    })
  });

let serviceType

const fetchService = (e) => {
  data['country_id'] = e.target.value

  fetch("https://www.bgvhwd.xyz/Project_files/API/servicetype.php", {
      method: 'POST',
      // body: JSON.stringify({"country_id": '101'}),  
      body: JSON.stringify({
        "country_id": data['country_id']
      }),
    })
    .then(response => response.json())
    .then(data => {
      serviceType = data
      setServiceType()
    })
    .catch((error) => {
      console.error('Error:', error);
    });

}

let serviceName

const fetchServiceName = (e) => {
  console.log('fetch service name')
  data['service_type_id'] = e.target.value
  console.log(data['service_type_id'])

  fetch("https://www.bgvhwd.xyz/Project_files/API/servicename.php", {
      method: 'POST',
      body: JSON.stringify({
        "service_type_id": data['service_type_id']
      })
    })
    .then(response => response.json())
    .then(data => {
      serviceName = data
      console.log('service names', serviceName)
      setServiceName()
    })
    .catch((error) => {
      console.error('Error:', error);
    });

}

const serviceTypeSelect = document.querySelector("#select_service_type"),
  serviceNameSelect = document.querySelector("#select_service_name")

const setServiceType = () => {
  console.log('serviceType', serviceType)
  serviceNameSelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  serviceTypeSelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  serviceType.map(v => {
    serviceTypeSelect.innerHTML += `<option value="${v.id}" class="bg-secondary text-light" >${v.service_type}</option>`
  })
}

const setServiceName = () => {
  serviceNameSelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  serviceName.map(v => {
    serviceNameSelect.innerHTML += `<option value="${v.id}"  class="bg-secondary text-light" >${v.service_name}</option>`
  })
}

countrySelect.onchange = (e) => fetchService(e)


serviceTypeSelect.onchange = (e) => fetchServiceName(e)


const assignSubmit = document.querySelector('#ajax button#assignSubmit'),
  inputFields = document.querySelectorAll('#ajax input:not([type="radio"] )'),
  inputFieldsArray = [...inputFields],
  inputRadios = document.querySelectorAll('#ajax input[type="radio"]'),
  inputRadiosArray = [...inputRadios],
  inputCheckbox = document.querySelectorAll('#ajax input[type="checkbox"]'),
  inputCheckboxArray = [...inputCheckbox],
  select = document.querySelectorAll('#ajax select'),
  selectArray = [...select],
  inputCurrency = document.querySelector('#ajax select[name="currency"]')

let jsonData = {}

const sendRequest = (url) => {
  fetch(url, {
      method: 'POST',
      body: JSON.stringify(jsonData),
    })
    .then(response => response.text())
    .then(data => {
      if (data.trim() == "Service Assigned Successfully") {
        alert(data)
        getAllAssignService(`https://www.bgvhwd.xyz/Project_files/API/viewassignedservice.php`)
      } else {
        alert(data)
      }
      console.log('Success:', data);
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

// const submit = (url) => {
//   return e => {
//     e.preventDefault()
//     console.log('submit')
//     let run = true
//     inputFieldsArray ? inputFieldsArray.map((value) => {
//       if (run === true) {
//         if (value.value.trim().length == 0) {
//           console.log(value)
//           alert('all fields are required')
//           run = false
//         }
//         jsonData[value.name] = value.value
//       }
//     }) : false
//     inputRadiosArray ? inputRadiosArray.map((value) => {
//       let checked = 0

//       if (value.checked === true) {
//         checked = 1
//       }
//       jsonData[value.name] = checked
//     }) : false
//     inputCheckboxArray ? inputCheckboxArray.map((value) => {
//       let checked = 0

//       if (value.checked === true) {
//         checked = 1
//       }
//       jsonData[value.name] = checked
//     }) : false
//     selectArray ? selectArray.map(value => {
//       jsonData[value.name] = value.value
//     }) : false
//     inputCurrency ? data["currency"] = inputCurrency.value : false
//     if (run === true) {
//       console.log(jsonData)
//       sendRequest(url)
//     }
//     jsonData = {}
//   }
// }

const submit = (url) => {
  return e => {
    console.log(e.keyCode)
    if(e.keyCode !== 13) {
      e.preventDefault()
      console.log(e.target)
      console.log('submit')
      let run = true
      inputFieldsArray ? inputFieldsArray.map((value) => {
          jsonData[value.name] = value.value
      }) : false
      selectArray ? selectArray.map(value => {
        jsonData[value.name] = value.value
      }) : false
      if (run === true) {
        console.log(jsonData)
        sendRequest(url)
      }
      jsonData = {}
    }
  }
}




// [{"id":"0","client_id":"10","country_id":"101","Service_type_id":null,"service_id":"68","Service_type_name":null,"service_name":"Class 12th","client_name":"Wipro Technologies ","country_name":"India","price":"1000","SLA":"nmhg"}]
let allAssignService

const tbody = document.querySelector("#table")

const getAllAssignService = (url) => {
  fetch(url)
    .then(response => response.json())
    .then(data => {
      allAssignService = data
      if (data != 0) {

      }
      setAllAssignService(allAssignService)
      inputFieldsArray.map((value) => {
        value.value = ""
      })

      // inputFieldsArray[0].focus()
    })
    .catch((error) => {
      console.log('Error:', error);
    });
}
getAllAssignService(`https://www.bgvhwd.xyz/Project_files/API/viewassignedservice.php`)


const setAllAssignService = (d) => {
  tbody ? tbody.innerHTML = '' : false
  d.map((value, i) => {
    tbody ? tbody.innerHTML += `
    <tr class="edit-table" id=${value.id} data-Sr="${i + 1}" >
      <td>
        ${i + 1}
      </td>
      <td class="tablehead1">
        ${value.client_name}
      </td>
      <td class="tablehead1">
        ${value.country_name}
      </td>
      <td class="tablehead1">
        ${value.Service_type_name}
      </td>
      <td class="tablehead1">
        ${value.service_name}
      </td>
      <td>
        ${value.price}
      </td>
      <td>
        ${value.SLA}
      </td>
      <td class="text-primary tablehead1">
        <button
          type="button"
          class="btn btn-primary btn-sm"
        >
          Edit
        </button>
      </td>
      <td class="text-primary tablehead1">
        <button
          id=${value.id}
          type="button"
          class="btn btn-primary btn-sm delete"
        >
          Delete
        </button>
      </td>
    </tr>
    ` : false

  })
}



tbody ? tbody.onclick = (e) => {
  if (e.target.classList.contains('delete')) {
    e.preventDefault()
    console.log('delete')
    jsonData["Id"] = e.target.id
    jsonData["action"] = "delete"
    let r = confirm("Are you sure you want to delete?")
    if (r == true) {
      sendRequest("API/modifyService.php")
    }
  }
  jsonData = {}
} : false

let serviceType2 = ''

fetch("https://www.bgvhwd.xyz/Project_files/API/servicetype.php", {
    method: 'POST',
    body: JSON.stringify({
      "country_id": "101"
    }),
  })
  .then(response => response.json())
  .then(data => {
    // serviceType2 = `<select name="serviceType">
    //   ${data.map(v => `<option value="${v.id}">${v.service_type}</option>`)}

    // </select>`
    for (let i = 0; i < data.length; i++) {
      serviceType2 += `<option value="${data[i].id}">${data[i].service_type}</option>`
    }

    serviceType2 = `<select style="margin-top:5%" class="browser-default custom-select" id="select_service_type" name="select_service_type" >${serviceType2}</select>`


  })
  .catch((error) => {
    console.error('Error:', error);
  });


tbody ? tbody.ondblclick = (e) => {
  
  let target = e.target.parentElement.getAttribute("data-sr")
  // console.log(e.target)
  setAllAssignService(allAssignService)

  let currentEdit = allAssignService.filter(v => v.id === e.target.parentElement.id)

  let countrySelect2 = countrySelect
  let serviceTypeSelect2 = serviceType2
  let clientNameSelect = clientName

  // console.log(serviceTypeSelect2)
  let editTableClientName
  let editTableLocalityDropdown
  let editTableServiceTypeName
  let editTableServiceName
  let editTablePrice
  let editTableSLA

  currentEdit.map(value => {
    document.querySelector(`[data-sr='${target}']`).innerHTML = `
      <tr class="edit-table" id=${value.id}>
        <td class="tablehead1">
          ${e.target.parentElement.getAttribute("data-Sr")}
        </td>
        <td class="tablehead1">
          ${clientNameSelect.outerHTML}
        </td>
        <td class="tablehead1">
          ${countrySelect2.outerHTML}
        </td>
        <td class="tablehead1">
          ${serviceTypeSelect2}
        </td>
        <td class="tablehead1">
          <input type="text" id="service-name" name="service-name" />
        </td>
        <td class="tablehead1">
          <input type="number" id="price" name="price" />
        </td>
        <td class="tablehead1">
          <input type="text" id="SLA" name="SLA" />
        </td>
        <td class="text-primary tablehead1">
          <button
            type="submit"
            class="btn btn-primary btn-sm"
          >
            Save
          </button>
        </td>
        <td class="text-primary tablehead1">
          <button
            id=${value.id}
            type="button"
            class="btn btn-primary btn-sm delete"
          >
            Delete
          </button>
        </td>
      </tr>
  `

    editTableClientName = document.querySelector(".edit-table #ClientName")
    editTableLocalityDropdown = document.querySelector(".edit-table #locality-dropdown")
    editTableServiceTypeName = document.querySelector(".edit-table #select_service_type")
    editTableServiceName = document.querySelector(".edit-table #service-name")
    editTablePrice = document.querySelector(".edit-table #price")
    editTableSLA = document.querySelector(".edit-table #SLA")


    const inputFields = document.querySelectorAll('#edit-table input:not([type="radio"] )'),
      inputFieldsArray = [...inputFields],
      select = document.querySelectorAll('#edit-table select'),
      selectArray = [...select]


    editTableClientName.value = value.client_id
    editTableLocalityDropdown.value = "101"
    editTableServiceTypeName.value = value.Service_type_id
    editTableServiceName.value = value.service_name
    editTablePrice.value = value.price
    editTableSLA.value = value.SLA

    console.log(e.target.parentElement)


  })


  const inputFields2 = document.querySelectorAll('.edit-table input:not([type="radio"] )'),
    inputFieldsArray2 = [...inputFields2],
    select2 = document.querySelectorAll('.edit-table select'),
    selectArray2 = [...select2]


  const editOnchange = (url) => {
    return e => {
      e.preventDefault()
      let run = true
      inputFieldsArray2 ? inputFieldsArray2.map((value) => {
        if (run === true) {          
          if (value.value.trim().length == 0) {
            console.log(value)
            alert('all fields are required')
            run = false
          }
          jsonData[value.name] = value.value
        }
      }) : false
      selectArray2 ? selectArray2.map(value => {
        jsonData[value.name] = value.value
      }) : false
      if (run === true) {
        console.log(jsonData)
        sendRequest(url)
      }
      jsonData = {}
    }
  }

  editTableClientName.addEventListener('change', editOnchange("API/editAssignService.php"))
  editTableLocalityDropdown.addEventListener('change', editOnchange("API/editAssignService.php"))
  editTableServiceTypeName.addEventListener('change', editOnchange("API/editAssignService.php"))
  let saveButton = document.querySelector(".edit-table button[type='submit']")
  saveButton.addEventListener('click', editOnchange("API/editAssignService.php"))

  const editOneEnter = (url) => {
    return e => {
      e.preventDefault();
      console.log(e.keyCode)
      if (e.keyCode === 13) {
        console.log('enter')
        editOnchange(url)
      }
    }
  }
  
  // editTableServiceName.addEventListener('keyup', editOneEnter("API/editAssignService.php"))
  // editTablePrice.addEventListener('keyup', editOneEnter("API/editAssignService.php"))
  // editTableSLA.addEventListener('keyup', editOneEnter("API/editAssignService.php"))

  data = {}
} : false


assignSubmit && assignSubmit.addEventListener('click', submit('https://www.bgvhwd.xyz/Project_files/API/assignService.php'))

console.log('working all')