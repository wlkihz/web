let repositories = []

async function Search() {
    let userName = userNameInput.value;
    
    const response = await fetch("https://api.github.com/users/"+ userName + "/repos", {
        method: "GET"
    })
    let repositories = await response.json();
    console.log(repositories);
    for(let i = 0; i < repositories.length; i++)
    {
        createRepositoryBlock(repositories[i]);
    }
}

function createRepositoryBlock(){
    let block = document.createElement('div');
    
    let title = document.createElement('h3');
    title.innerHTML = repo.name;
    
    let para = document.createElement('para');
    
    block.append(title);
    reposContainer.append(block)
    
}

let userNameInput = document.getElementById("userName");
let startSearchingButton = document.getElementById("startSearching");
let reposContainer = document.getElementById("repositoriesContainer");

startSearchingButton.addEventListener("mousedown", Search)