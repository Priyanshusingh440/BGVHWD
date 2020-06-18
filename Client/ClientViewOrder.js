console.log('working')
const inputState = document.querySelector('#inputState')

let modifyClientData

// live search
const getModifyClientData = (d) => {
  // debouncing
  let timer
  return e => {
    clearTimeout(timer)
    timer = setTimeout(() => {
      let lowerCaseClientName = inputState.value.toLowerCase()
      let newData
      newData = modifyClientData.filter(v => {
        let clientNameMatch = v['Client_Name'].toLowerCase().search(lowerCaseClientName) == 0
        return clientNameMatch
      })

      updateModifyClientData(newData)
    }, d)
  }
}

const getAllClientData = () => {
  fetch('https://www.bgvhwd.xyz/Client/API/ClientViewtable.php')
  .then(response => response.json())
  .then(data => {
    console.log(data)
    modifyClientData = data
    updateModifyClientData(modifyClientData)
  })
  .catch((error) => {
    console.error('Error:', error);
  });
}
getAllClientData()

// getModifyClientData(0)
inputState && inputState.addEventListener('keyup', getModifyClientData(0))

const tbody = document.querySelector("#table")

const updateModifyClientData = (d) => {
  console.log(d)
  tbody ? tbody.innerHTML = '' : false
  d.map((value, i) => {
    tbody ? tbody.innerHTML += `<tr>
    <td class="tablehead1">
      ${i + 1}
    </td>
    <td class="tablehead1">
      ${value["Client_Name"]}
    </td>
    <td class="tablehead1">
      ${value["Client_Code"]}
    </td>
    <td class="tablehead1">
      ${value["Client_SPOC"]}
    </td>
    <td class="tablehead1">
      ${value["Live_DateDate"]}
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