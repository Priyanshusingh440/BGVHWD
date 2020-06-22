console.log('working code')
let searchCriteria

let modifyClientData
let orderStatus
let dateOne

let data = {}

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

const getClientData = (id) => {
  fetch("https://www.bgvhwd.xyz/Client/API/viewclienttable.php", {
      method: 'POST',
      body: JSON.stringify({
        "client_id": id
      }),
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

fetch("https://www.bgvhwd.xyz/Client/API/viewclienttable.php")
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
// getAllClientData()

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
      ${value["client_name"]} 
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
            <div class="ripple-container"></div
          ></a>
          <div
            class="dropdown-menu dropdown-menu-left"
            aria-labelledby="navbarDropdownProfile" 
          >
            <a
              id="${value.id}"
              class="dropdown-item edit"
              href="./addClient.html"
              >Edit</a
            >
            <a class="dropdown-item delete" href="#" id="${value.id}">Delete</a>
          </div>
        </li>
      </ul>
    </td>
  </tr>` : false

  })
}


const sendRequest = (url) => {
  fetch(url, {
      method: 'POST',
      body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(data => {
      console.log('Success:', data);
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

tbody ? tbody.onclick = (e) => {
  if (e.target.classList.contains('delete')) {
    e.preventDefault()
    data["id"] = e.target.id
    data["action"] = "delete"
    sendRequest("https://www.bgvhwd.xyz/client/API/editOrder.php")
  }
  data = {}
} : false


const clientName = document.querySelector("#clientName")

fetch("https://www.bgvhwd.xyz/Project_files/API/viewclient.php")
  .then(res => res.json())
  .then(data => {
    console.log(data)
    data.map(v => {
      clientName.innerHTML += `<option value="${v.Id}" selected="" class=" bg-secondary text-light">${v.Client_Name}</option>`
    })
  })
  .catch(err => console.log(err))

const clientNameDD = (e) => {
  // change = true
  // updateModifyClientData(newData2)
  console.log(e.target.value)
  getClientData(e.target.value)
}

clientName.addEventListener("change", clientNameDD)

console.log("working all")