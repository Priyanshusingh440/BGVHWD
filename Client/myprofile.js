const getElement = (elementSelector) => {
  return document.querySelector(`#ajax [name='${elementSelector}']`)
}

// fetch("https://www.bgvhwd.xyz/Project_files/API/viewclient.php", {
//   method: "post",
//   body: JSON.stringify({"client_id": 9})
// }).then(res => console.log(res.json()))
//   .then(data => {
//   console.log(data)
// })
// .catch(err => {
//   console.log(err)
// })

let clientEditInfo = {}
let hiddenInput = document.querySelector(".unique-hidden-input")
console.log(hiddenInput)
fetch("https://www.bgvhwd.xyz/Project_files/API/viewclient.php", {
    method: 'POST',
    body: JSON.stringify({ 
      "Id": hiddenInput.value
    }),
  })
  .then(response => response.json())
  .then(data => {
    // if (url === "https://www.bgvhwd.xyz/Project_files/API/addClient.php" && data.trim() == 'sucess') {
    //   alert('data submitted successfully')
    //   window.location.href = "modifyClient.php"
    // }
    clientEditInfo = data[7]
    console.log('Success:', data[4]);
    try {
      setData()

    } catch (err) {
      console.log(err)
    }
    setCountry()
  })
  .catch((error) => {
    console.error('Error:', error);
  });

const setData = () => {
  getElement("Company").value = clientEditInfo["Company"]
  getElement("Company").focus()

  getElement("UserName").value = clientEditInfo["User_name"]
  getElement("EmailID").value = clientEditInfo["Email_ID"]
  getElement("First Name").value = clientEditInfo["first_name"]
  getElement("Last name").value = clientEditInfo["Last_name"]
  getElement("Address").value = clientEditInfo["Address"]
  getElement("city").value = clientEditInfo["city"]
  getElement("Postal Code").value = clientEditInfo["postal_code"]
  // getElement("Last name").value = clientEditInfo["Last_name"]
  // getElement("Last name").value = clientEditInfo["Last_name"]
  // getElement("Last name").value = clientEditInfo["Last_name"]
  // getElement("Last name").value = clientEditInfo["Last_name"]

}

let countries

const setCountry = () => {
  fetch("https://www.bgvhwd.xyz/Project_files/API/country.php", {
      method: 'POST',
    })
    .then(response => response.json())
    .then(data => {
      countries = data
      // clientEditInfo = data[7]
      console.log('Success:', data);

      let countryName = countries.filter(v => v.id == clientEditInfo["country"])[0].country_name
      console.log(countryName)
      getElement("Country").value = countryName

    })
    .catch((error) => {
      console.error('Error:', error);
    });
}


// https://www.bgvhwd.xyz/Project_files/API/cities.php



// https://www.bgvhwd.xyz/Project_files/API/country.php
// https://www.bgvhwd.xyz/Project_files/API/cities.php

// Address: ""
// App_Response_Time: "324890"
// Client_Code: "3401789"
// Client_Name: "sam"
// Client_SPOC: "3498702"
// Company: ""
// Contact_Applicant: null
// Currency: "2"
// DOB: "2000-12-10"
// Email_ID: ""
// Id: "9"
// Internal_Reference_ID: "SAM1210971721452"
// Inv_Address: "3204"
// Inv_Bank: "3248970"
// Inv_Code: "238479"
// Is_Bulk_Upload: null
// Last_name: ""
// Live_DateDate: "2020-06-12 12:18:18"
// Profile: ""
// State: "4008"
// User_name: ""
// Zip_Code: "428139"
// about_me: ""
// city: "57617"
// country: "101"
// email: "admin@gmail.com"
// first_name: ""
// is_block: "0"
// password: "1234"
// postal_code: "0"
// user_status: "1"