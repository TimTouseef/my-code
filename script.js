document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("crud-form");
    const dataContainer = document.getElementById("data-container");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;

        // Create a new data item
        const dataItem = document.createElement("div");
        dataItem.classList.add("data-item");
        dataItem.innerHTML = `<strong>Name:</strong> ${name} | <strong>Email:</strong> ${email} | <button class="delete-btn">Delete</button>`;

        // Add the data item to the container
        dataContainer.appendChild(dataItem);

        // Clear the form inputs
        form.reset();
    });

    // Event delegation for delete button
    dataContainer.addEventListener("click", function (e) {
        if (e.target.classList.contains("delete-btn")) {
            e.target.parentElement.remove();
        }
    });
});
