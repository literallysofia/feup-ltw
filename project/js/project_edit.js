function encodeForAjax(data) {
  return Object.keys(data)
    .map(function(k) {
      return encodeURIComponent(k) + "=" + encodeURIComponent(data[k]);
    })
    .join("&");
}

let bioContainer = document.getElementById("bio");
if (bioContainer !== null) {
  var editTitle = bioContainer.querySelector("input[type=text]");
  var editDescription = bioContainer.querySelector("textarea");
  var labelTitle = bioContainer.querySelector("h1");
  var labelDescription = bioContainer.querySelector("p");
}

let editProject = function() {
  let containsClass = bioContainer.classList.contains("editMode");

  if (containsClass) {
    changeProjectBio();
    labelTitle.innerText = editTitle.value;
    labelDescription.innerText = editDescription.value;
  } else {
    editTitle.value = labelTitle.innerText;
    editDescription.value = labelDescription.innerText;
  }

  bioContainer.classList.toggle("editMode");
};

let bindProjectEvents = function() {
  if (bioContainer !== null) {
    let editButton = bioContainer.querySelector("button.edit");
    editButton.onclick = editProject;
  }
};

bindProjectEvents();

//update project bio information in database
function changeProjectBio() {
  if (
    editTitle.value == labelTitle.innerText &&
    editDescription.value == labelDescription.innerText
  )
    return true;

  let request = new XMLHttpRequest();
  request.open("POST", "../actions/action_change_project_bio.php", true);
  request.addEventListener("load", finishProjectBio);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  window.$_GET = new URLSearchParams(location.search);
  if ($_GET.get("project_id") == null) return false;
  request.send(
    encodeForAjax({
      title: editTitle.value,
      description: editDescription.value,
      projectID: $_GET.get("project_id")
    })
  );
}

function getMembers(ProjectID) {
  let request = new XMLHttpRequest();
  request.addEventListener("load", finishGetMembers);
  request.open("post", "../actions/api_get_members.php", true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(encodeForAjax({ projectID: ProjectID }));
}

function finishGetMembers(event) {
  let dialog5 = document.getElementById("dialog5");
  if (dialog5 != null) dialog5.innerHTML = this.responseText;
  event.preventDefault();
}

function addMember(submitButton) {
  let addMemberButtonsDiv = submitButton.parentNode;
  let addMemberDiv = addMemberButtonsDiv.parentNode;
  let input = addMemberDiv.querySelector("input[name=memberUsername]");

  let username = input.value;
  let foreign;

  window.$_GET = new URLSearchParams(location.search);
  if ($_GET.get("project_id") != null) foreign = $_GET.get("project_id");

  if (username != null && foreign != null) {
    addMemberAjax(foreign, username);
  }
  closeDialog("Add Member");
  location.reload();
}

function addMemberAjax(projectID, memberUsername) {
  let request = new XMLHttpRequest();
  request.addEventListener("load", finishAddMember);
  request.open("post", "../actions/api_add_member.php", true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  request.send(
    encodeForAjax({ project_ID: projectID, member_Username: memberUsername })
  );
}

function finishAddMember(event) {
  event.preventDefault();
}

function finishProjectBio(event) {
  event.preventDefault();
  if (this.responseText !== "") {
    alert(this.responseText);
  }
}

// ADD A NEW USER TO THE PROJECT

let timeoutCurrentValue = null;
function addUserProject(input) {
  if (timeoutCurrentValue != null) {
    clearTimeout(timeoutCurrentValue);

    //clearlist
    let dataList = document.getElementById("usernamesList");
    while (dataList.firstChild) {
      dataList.removeChild(dataList.firstChild);
    }
  }
  timeoutCurrentValue = setTimeout(function() {
    getSimilarUsers(input.value);
  }, 1000);
}

function getSimilarUsers(input) {
  let request = new XMLHttpRequest();

  request.addEventListener("load", usersReceived);
  request.open(
    "get",
    "../actions/action_get_users.php?username=" + input,
    true
  );
  request.send();
}

function usersReceived() {
  let users = JSON.parse(this.responseText);

  for (let i = 0; i < users.length; i++) {
    let dataList = document.getElementById("usernamesList");

    let option = document.createElement("option");

    option.value = users[i].Username;
    dataList.appendChild(option);
  }
}
