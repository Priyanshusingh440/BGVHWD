console.log('working code')
let searchCriteria

let modifyClientData
let orderStatus
let dateOne

// live search
let clientCriteria
const service = document.querySelector("#Service")
const getModifyClientData = () => {
  let lowerCaseClientCriteria = searchCriteria.value.toLowerCase()
  let newData
  if (clientCriteria == "First_Name_Last_Name") {
    newData = modifyClientData.filter(v => {
      console.log(v)
      let firstName = v["first_Name"].toLowerCase().search(lowerCaseClientCriteria) == 0
      let lastName = v["last_Name"].toLowerCase().search(lowerCaseClientCriteria) == 0
      return firstName || lastName
    })
  } else {
    console.log('key up 2')
    console.log(clientCriteria)
    console.log(modifyClientData[0][clientCriteria])
    newData = modifyClientData.filter(v => {
      let clientCriteriaMatch
      v[clientCriteria] != null ? clientCriteriaMatch = v[clientCriteria].toLowerCase().search(lowerCaseClientCriteria) == 0 : null
      return clientCriteriaMatch
    })
  }

  updateModifyClientData(newData)
  
}

const orderStatusData = () => {
  console.log("myfunc")
  
}

service.addEventListener("change", (e) => {
  clientCriteria = e.target.value
  console.log(clientCriteria)

  if (clientCriteria == "order_creation_date_time" || clientCriteria == "Order_Completion_Date") {
    dateOne = document.querySelector('input#dateofbirth')
    console.log(dateOne)
    return dateOne.addEventListener("change", () => {
      searchCriteria = dateOne 
      return getModifyClientData()
    })
  }

  if (clientCriteria == "Order_Status") {
    orderStatus = document.querySelector('#OrderStatus')
    console.log('order Status')
    return orderStatus.addEventListener("change", () => {
      searchCriteria = orderStatus
      console.log(searchCriteria)
      return getModifyClientData()
    })
  }

  searchCriteria = document.querySelector('#SearchCriteria')
  searchCriteria && searchCriteria.addEventListener('keyup', getModifyClientData)
})

const getAllClientData = () => {
  fetch("https://www.bgvhwd.xyz/Client/API/viewclienttable.php", {
    method: 'POST',
    body: JSON.stringify({"client_id": 1}),
  })
  .then(response => response.json())
  .then(data => {
    console.log(data)
    modifyClientData = data
    updateModifyClientData(modifyClientData)
    console.log('Success:', data);
  })
  .catch((error) => {
    console.error('Error:', error);
  });
}
getAllClientData()

// getModifyClientData(0)

const tbody = document.querySelector("#table-body")

const updateModifyClientData = (d) => {
  console.log('update', d)
  tbody ? tbody.innerHTML = '' : false
  d.map((value, i) => {
    tbody ? tbody.innerHTML += `<tr>
    <td class="tablehead1">
      ${i + 1}
    </td>
    <td class="tablehead1">
      ${value["first_Name"]} ${value["last_Name"]} 
    </td>
    <td class="tablehead1">
      ${value["internal_reference_id"]}
    </td>
    <td class="tablehead1">
      ${value["email_id"]}
    </td>
    <td class="tablehead1">
      ${value["order_creation_date_time"]}
    </td>
    <td class="tablehead1">
      ${value["order_completion_date"]}
    </td>
    <td class="tablehead1">
      ${value["Order_Status"] == 0 ? "pending" : value["Order_Status"] == 1 ? "Started" : value["Order_Status"] == 2 ? "Completed" : null}
    </td>
    <td class="text-primary tablehead1">
      <ul style="list-style: none;">
        <li class="nav-item dropdown">
          <a
            class="nav-link"
            href="javascript:;"
            id="navbarDropdownProfile"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i  class="material-icons icon">person</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
            <div class="ripple-container"></div
          ></a>
          <div
            class="dropdown-menu dropdown-menu-left"
            aria-labelledby="navbarDropdownProfile" 
          >
            <a class="dropdown-item" href="#">View</a>
            <a class="dropdown-item block" href="#" id="${value.Id}">${value.is_block == 1 ? "Unblock" : "Block"}</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a
              id="${value.Id}"
              data-internal-reference-id="${value.Internal_Reference_ID}"
              class="dropdown-item add-bank-details"
              href="./bankDetails.html"
              >Add bank details</a
            >
            <div class="dropdown-divider"></div>
            <a
              id="${value.Id}"
              class="dropdown-item edit"
              href="./addClient.html"
              >Edit</a
            >
            <a class="dropdown-item soft-delete" href="#" id="${value.Id}">Soft Delete</a>
            <a class="dropdown-item hard-delete" href="#" id="${value.Id}">Hard Delete</a>
          </div>
        </li>
      </ul>
    </td>
  </tr>` : false

  })
}

console.log("working all")