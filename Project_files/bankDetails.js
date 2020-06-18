console.log("working")
const addBankDetails = document.querySelector('#ajax button[type="submit"]'),
  inputFields = document.querySelectorAll('#ajax input:not([type="radio"] )'),
  inputFieldsArray = [...inputFields]

let data = {}


const pageUrl = new URL(window.location.href);
let id = pageUrl.searchParams.get('id')
let internalReferenceId = pageUrl.searchParams.get('internal_reference_id')


const sendRequest = (url) => {
  fetch(url, {
      method: 'POST',
      body: JSON.stringify(data),
    })
    .then(response => response.text())
    .then(data => {
      if (data.trim() == "Bank Details Added Successfully" || data.trim() == "Deleted Successfully") {
        getAllBankDetails(`https://www.bgvhwd.xyz/Project_files/API/viewbankdetails.php?id=${id}&internal_reference_id=${internalReferenceId}`)
        alert(data)
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
    e.preventDefault()
    let run = true
    inputFieldsArray ? inputFieldsArray.map((value) => {
      if (run === true) {
        if (value.value.trim().length == 0) {
          console.log(value)
          alert('all fields are required')
          run = false
        }
        data[value.name] = value.value
      }
    }) : false
    data["id"] = id
    data["internal_reference_id"] = internalReferenceId

    if (run === true) {
      sendRequest(url)
    }
    data = {}
  }
}

addBankDetails && addBankDetails.addEventListener('click', submit('https://www.bgvhwd.xyz/Project_files/API/bankdetails.php'))

console.log("working 2")

let allBankDetails

const getAllBankDetails = (url) => {
  fetch(url)
    .then(response => response.json())
    .then(data => {
      console.log(data)
      allBankDetails = data
      setAllBankDetails(allBankDetails)
      inputFieldsArray.map((value) => {
        value.value = ""
      })
      inputFieldsArray[0].focus()
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}
getAllBankDetails(`https://www.bgvhwd.xyz/Project_files/API/viewbankdetails.php?id=${id}&internal_reference_id=${internalReferenceId}`)

const tbody = document.querySelector("#table-body")
const setAllBankDetails = (d) => {
  console.log(d)
  tbody ? tbody.innerHTML = '' : false
  d.map((value, i) => {
    tbody ? tbody.innerHTML += `
    <tr>
      <td class="tablehead1">
        ${i}
      </td>
      <td class="tablehead1">
        ${value.address_line_1}
      </td>
      <td class="tablehead1">
        ${value.address_line_1}
      </td>
      <td class="tablehead1">
        ${value.account_number}
      </td>
      <td class="tablehead1">
        ${value.ifsc_code}
      </td>
      <td class="tablehead1">
        ${value.swift_code}
      </td>
      <td class="tablehead1">
        ${value.routing_code}
      </td>
      <td class="tablehead1">
        ${value.favour_of}
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

let r

tbody ? tbody.onclick = (e) => {
  if (e.target.classList.contains('delete')) {
    e.preventDefault()
    console.log('delete')
    data["Id"] = e.target.id
    data["action"] = "delete"
    r = confirm("Are you sure you want to delete?")
    if(r == true) {
      sendRequest("https://www.bgvhwd.xyz/Project_files/API/modifybankdetail.php")
    }
  }
  data = {}
} : false

console.log("working all")