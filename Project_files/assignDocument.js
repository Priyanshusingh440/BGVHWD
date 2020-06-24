console.log('working') 

let data = {}

let serviceType

const fetchService = (e) => {

  fetch("https://www.bgvhwd.xyz/Project_files/API/servicetype.php")
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

fetchService()


serviceTypeSelect.onchange = (e) => fetchServiceName(e)

let documentNames
const documentNameDD = document.querySelector("#document-name")
const setDocumentNames = () => {
  let options = ``
  documentNames.map(v => {
    options += `<option value="${v.id}"  class="bg-secondary text-light" >${v.document_name}</option>`
  })
  documentNameDD.innerHTML += options
}

fetch("https://www.bgvhwd.xyz/Project_files/API/assigndocuments.php")
  .then(response => response.json())
  .then(data => {
    documentNames = data
    console.log('document names', documentNames) 
    setDocumentNames()
  })
  .catch((error) => {
    console.error('Error:', error);
  });


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

        var selected = [];
        for (var option of document.getElementById('document-name').options) {
          if (option.selected) {
            selected.push(option.value);
          }
        }
        jsonData["document_names"] = selected
        console.log(selected);

      selectArray ? selectArray.map(value => {
        jsonData[value.name] = value.value
        console.log(value.value)
      }) : false
      if (run === true) {
        console.log(jsonData)
        sendRequest(url)
      }
      jsonData = {}
    }
  }
}

const assigndocumentsSubmit = document.querySelector("#ajax button[type='submit']")

assigndocumentsSubmit.addEventListener("click", submit("https://www.bgvhwd.xyz/Project_files/API/assignDocuments.php"))

console.log('working all')