document.addEventListener("DOMContentLoaded", function () {
    fetchUsers();
});

function saveUser() {
    const form = document.getElementById("userForm");
    const formData = new FormData(form);

    fetch("/saveUser", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            form.reset();
            fetchUsers();
        } else {
            alert("Failed to save user.");
        }
    });
}

function fetchUsers() {
    fetch("/getUsers")
    .then(response => response.json())
    .then(data => {
        const userList = document.getElementById("userList");
        userList.innerHTML = "";

        data.forEach(user => {
            const userItem = document.createElement("div");
            userItem.classList.add("userItem");
            userItem.innerHTML = `<strong>${user.username}</strong> - ${user.email} <button onclick="deleteUser(${user.id})">Delete</button>`;
            userList.appendChild(userItem);
        });
    });
}

function deleteUser(userId) {
    fetch(`/deleteUser/${userId}`, {
        method: "DELETE"
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            fetchUsers();
        } else {
            alert("Failed to delete user.");
        }
    });
}