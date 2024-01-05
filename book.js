
document.addEventListener("DOMContentLoaded", function () {
    fetchBooks();
});

function fetchBooks() {
    // Make an AJAX request to get book data from the server
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            const books = JSON.parse(xhr.responseText);
            displayBooks(books);
        }
    };
    xhr.open("GET", "get_books.php", true);
    xhr.send();
}

function displayBooks(books) {
    const booksContainer = document.getElementById("books-container");
    booksContainer.innerHTML = ""; // Clear previous content

    if (books.length === 0) {
        booksContainer.innerHTML = "<p>No books available.</p>";
        return;
    }

    const table = document.createElement("table");
    table.innerHTML = `
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Availability</th>
        </tr>
    `;

    books.forEach(book => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${book.id}</td>
            <td>${book.title}</td>
            <td>${book.author}</td>
            <td>${book.is_available ? "Available" : "Not Available"}</td>
        `;
        table.appendChild(row);
    });

    booksContainer.appendChild(table);
}
