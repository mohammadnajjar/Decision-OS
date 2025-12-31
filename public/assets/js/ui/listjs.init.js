/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: ListJs init js
*/

var options = {
    valueNames: [
        { name: 'name', attr: 'data-name' },
        { name: 'email', attr: 'data-email' },
    ],
    // searchClass: 'search', // Ensure search uses the input with class 'search'
};

var userList = new List('users', options);

// Function to toggle "No data found" message
function toggleNoResultsMessage() {
    var noResultsMessage = document.querySelector('.no-results');
    if (userList.matchingItems.length === 0) {
        noResultsMessage.style.display = 'block';
    } else {
        noResultsMessage.style.display = 'none';
    }
}

// Add an event listener to search and trigger the function
document.querySelector('.search').addEventListener('input', function () {
    userList.search(this.value);
    toggleNoResultsMessage();
});


var existinglistOptions = {
    valueNames: ['name', 'born']
};

var existinglistValues = [{
    name: "Martina Elm",
    born: 1986
}];

var existinglistList = new List('existinglist', existinglistOptions, existinglistValues);

existinglistList.add({
    name: "Gustaf Lindqvist",
    born: 1983
});

var monkeyList = new List('test-list', {
    valueNames: ['name']
});

var newListOptions = {
    valueNames: ['name', 'born'],
    item: '<li class="list-group-item"><h6 class="name mb-0 fs-16"></h6><p class="born mb-0 fs-14 text-muted"></p></li>'
};

var newListValues = [
    {
        name: 'Jonny Strömberg',
        born: 1986
    },
    {
        name: 'Jonas Arnklint',
        born: 1985
    },
    {
        name: 'Martina Elm',
        born: 1986
    },
    {
        name: 'Emma Svensson',
        born: 1990
    },
    {
        name: 'Erik Johansson',
        born: 1983
    },
    {
        name: 'Sofia Nilsson',
        born: 1988
    },
    {
        name: 'Oskar Karlsson',
        born: 1992
    }
];


var newList = new List('new-list', newListOptions, newListValues);

newList.add({
    name: "Gustaf Lindqvist",
    born: 1983
});

var monkeyList = new List('pagination-list', {
    valueNames: ['name'],
    page: 3,
    pagination: true
});