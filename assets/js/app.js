const toDoTask = document.querySelector("#to-do-tasks");
const inProgress = document.querySelector("#in-progress-tasks");
const doneTask = document.querySelector("#done-tasks");

var counterToDo = document.querySelector("#to-do-tasks-count");
var counterInProgress = document.querySelector("#in-progress-tasks-count");
var counterDone = document.querySelector("#done-tasks-count");

const formReset = document.querySelector("#formReset");

function afficherData() {
    toDoTask.innerHTML = "";
    inProgress.innerHTML = "";
    doneTask.innerHTML = "";

    let temp;

    var t = 0;
    var p = 0;
    var d = 0;
    

    for(let i = 0; i < tasks.length; i++){
        let icon;
        let desc;

        if(tasks[i].status === "To Do"){temp = toDoTask ; icon = "bi bi-question-circle text-green" ; t++} 
        else if (tasks[i].status === "In Progress"){temp = inProgress ; icon = "fa fa-circle-notch text-green"; p++} 
        else if (tasks[i].status === "Done") {temp = doneTask; icon = "bi bi-check-circle text-green"; d++} 

        if(tasks[i].description.length > 50){
            desc = tasks[i].description.substring(0,50);
        }else{
            desc = tasks[i].description;
        }

        temp.innerHTML += `<button class="bg-white w-100 border-0 border-top d-flex py-2 " >
        <div class="px-2">
            <i class="${icon}"></i> 
        </div>
        <div class="text-start ">
            <div class="h6">${tasks[i].title}</div>
            <div class="text-start">
                <div class="text-gray">#${i+1} created in ${tasks[i].date}</div>
                <div title="${tasks[i].description}">${desc}...</div>
            </div>
            <div class="">
                <span class="btn btn-primary">${tasks[i].priority}</span>
                <span class="btn btn-light text-black">${tasks[i].type}</span>
                <i onclick="deleteTask(${i})" class="py-2 px-2 bi bi-trash"></i>
                <i data-bs-toggle="modal" data-bs-target="#modal-task" onclick="updateTask(${i})" class="py-2 px-2 bi bi bi-pencil-square"></i>
            </div>
        </div>
    </button>`;
   
    }
    counterToDo.innerText = t;
    counterInProgress.innerText = p;
    counterDone.innerText = d;
}

afficherData();

  

function saveNewTask(){
    const title = document.querySelector("#Title").value;
    const type = document.querySelector("input[name='type']:checked").value;
    const priority = document.querySelector("#Priority").value;
    const status = document.querySelector("#Status").value;
    const date = document.querySelector("#Date").value;
    const description = document.querySelector("#Description").value;

    let task = {
        title: title,
        type: type,
        priority: priority,
        status: status,
        date:  date,
        description: description,
    }

  tasks.push(task);
  afficherData();
  reloadTasks();
}


function deleteTask(i){
    tasks.splice(i,1)
    afficherData();
}




function editTask(i){
    const title = document.querySelector("#Title").value;
    const type = document.querySelector("input[name='type']:checked").value;
    const priority = document.querySelector("#Priority").value;
    const status = document.querySelector("#Status").value;
    const date = document.querySelector("#Date").value;
    const description = document.getElementById("Description").value;
    let task = {
      title: title,
      type: type,
      priority: priority,
      status: status,
      date:  date,
      description:description
    }
    tasks[i]=task;
    $('#modal-task').modal('hide');
    afficherData();
    reloadTasks();
}

function addTaskForm(){
    reloadTasks();
    $('#modal-task').modal('show');
    document.getElementById("footerModal").innerHTML=`<button type="button" class="btn btn-light text-black border" data-bs-dismiss="modal">Cancel</button>
    <button onclick="saveNewTask()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>`
}

function updateTask(i){
    document.getElementById("Title").value=tasks[i].title;
    if(tasks[i].type=="Feature"){
        document.getElementById("ft").checked=true
    }else{
        document.getElementById("bug").checked=true
    }
    document.querySelector("input[name='type']:checked").value=tasks[i].type;
    document.getElementById("Priority").value=tasks[i].priority;
    document.getElementById("Status").value=tasks[i].status;
    document.getElementById("Date").value=tasks[i].date;
    document.getElementById("Description").value=tasks[i].description;
    $('#modal-task').modal('show');

    document.getElementById("footerModal").innerHTML=`<button type="button" class="btn btn-light text-black border" data-bs-dismiss="modal">Cancel</button>
    <button onclick="editTask(${i})"  type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>`
}


function reloadTasks() {
    document.getElementById("Title").value='';
    document.querySelector("input[name='type']:checked").value="";
    document.getElementById("Priority").value="";
    document.getElementById("Status").value="";
    document.getElementById("Date").value="";
    document.getElementById("Description").value="";
}