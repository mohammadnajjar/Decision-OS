/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Gridjs init js
*/

if (document.getElementById("gridjs_basic-table")) {
    new gridjs.Grid({
        columns: ['Product Name', 'Category', 'Price', 'In Stock', 'Supplier'],
        data: [
            ["Laptop", "Electronics", "$999.99", "Yes", "Tech Suppliers Inc"],
            ["Smartphone", "Electronics", "$699.99", "Yes", "Mobile World"],
            ["Desk Chair", "Furniture", "$149.99", "No", "Office Goods"],
            ["Coffee Maker", "Appliances", "$89.99", "Yes", "Kitchen Essentials"],
            ["Notebook", "Stationery", "$5.99", "Yes", "Paper Co."],
        ]
    }).render(document.getElementById("gridjs_basic-table"));
}

if (document.getElementById("gridjs_sort-table")) {
    new gridjs.Grid({
        columns: [
            { name: 'Service Name', formatter: (cell) => gridjs.html(`<span class="fw-semibold">${cell}</span>`) },
            { name: 'Category' },
            { name: 'Price' },
            { name: 'Availability' },
            { name: 'Provider', formatter: (cell) => gridjs.html(`<u>${cell}</u>`) }
        ],
        sort: true,
        data: [
            ["Website Development", "Web Services", "$3,000.00", "Available", "Agency X"],
            ["Mobile App Development", "Mobile Services", "$5,000.00", "Available", "Tech Solutions"],
            ["UI/UX Design", "Design Services", "$1,500.00", "Not Available", "Creative Studio"],
            ["SEO Optimization", "Digital Marketing", "$1,200.00", "Available", "Marketing Masters"],
            ["Cloud Hosting Solutions", "Infrastructure", "$500.00", "Available", "CloudPro"],
        ]
    }).render(document.getElementById("gridjs_sort-table"));
}

if (document.getElementById("gridjs_pagination-table")) {
    new gridjs.Grid({
        columns: [
            {
                name: 'Product Name',
                formatter: (cell) => gridjs.html(`<a href="javascript:void(0)" class="link-primary">${cell}</a>`) // Wrap product name in a tag
            },
            'Category',
            'Price',
            {
                name: 'In Stock',
                formatter: (cell) => {
                    // Return a badge based on stock status
                    const badgeClass = cell === 'Yes' ? 'badge text-success bg-success-subtle' : 'badge text-danger bg-danger-subtle';
                    return gridjs.html(`<div class="badge ${badgeClass}">${cell}</div>`);
                },
            },
            'Supplier'
        ],
        sort: true,
        pagination: {
            enabled: true,
            limit: 5, // Change this value to set the number of rows per page
        },
        language: {
            'search': {
                'placeholder': 'Search...'
            },
            'pagination': {
                'previous': () => gridjs.html('<i class="ri-arrow-left-line"></i>'),
                'next': () => gridjs.html('<i class="ri-arrow-right-line"></i>'),
                'showing': 'Displaying',
                'results': () => 'Records'
            }
        },
        data: [
            ["Laptop", "Electronics", "$999.99", "Yes", "Tech Suppliers Inc"],
            ["Smartphone", "Electronics", "$699.99", "Yes", "Mobile World"],
            ["Desk Chair", "Furniture", "$149.99", "No", "Office Goods"],
            ["Coffee Maker", "Appliances", "$89.99", "Yes", "Kitchen Essentials"],
            ["Notebook", "Stationery", "$5.99", "Yes", "Paper Co."],
            ["Monitor", "Electronics", "$299.99", "Yes", "Vision Tech"],
            ["Gaming Mouse", "Accessories", "$49.99", "Yes", "Gamer's Gear"],
            ["Headphones", "Accessories", "$89.99", "No", "Sound Solutions"],
            ["Router", "Networking", "$129.99", "Yes", "ConnectIT"],
            ["USB-C Cable", "Accessories", "$19.99", "Yes", "Cables R Us"],
        ]
    }).render(document.getElementById("gridjs_pagination-table"));
}

document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("gridjs_search-table")) {
        new gridjs.Grid({
            columns: [
                'User Name',
                'Email',
                'Phone',
                {
                    name: 'Status',
                    formatter: (cell) => {
                        const badgeClass = cell === 'Active' ? 'badge text-success bg-success-subtle' : 'badge text-danger bg-danger-subtle';
                        return gridjs.html(`<div class="badge ${badgeClass}">${cell}</div>`);
                    },
                },
                'Role'
            ],
            search: true,
            sort: true,
            language: {
                'search': {
                    'placeholder': 'Search users...'
                },
                'pagination': {
                    'previous': () => gridjs.html('<i class="ri-arrow-left-line"></i>'),
                    'next': () => gridjs.html('<i class="ri-arrow-right-line"></i>'),
                    'showing': 'Displaying',
                    'results': () => 'Users'
                }
            },
            data: [
                ["John Doe", "john.doe@example.com", "+1 234 567 890", "Active", "Admin"],
                ["Jane Smith", "jane.smith@example.com", "+1 234 567 891", "Inactive", "User"],
                ["Alice Johnson", "alice.j@example.com", "+1 234 567 892", "Active", "User"],
                ["Bob Brown", "bob.brown@example.com", "+1 234 567 893", "Active", "Moderator"],
                ["Charlie Davis", "charlie.d@example.com", "+1 234 567 894", "Inactive", "User"],
            ]
        }).render(document.getElementById("gridjs_search-table"));
    }
});

document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("gridjs_loading-table")) {
        new gridjs.Grid({
            columns: [
                'Full Name',
                'Contact Email',
                'Phone Number',
                {
                    name: 'Account Status',
                    formatter: (cell) => {
                        const badgeClass = cell === 'Active' ? 'badge text-success bg-success-subtle' : 'badge text-danger bg-danger-subtle';
                        return gridjs.html(`<div class="badge ${badgeClass}">${cell}</div>`);
                    },
                },
                'User Type'
            ],
            search: true,
            sort: true,
            language: {
                'search': {
                    'placeholder': 'Search users...'
                },
                'pagination': {
                    'previous': () => gridjs.html('<i class="ri-arrow-left-line"></i>'),
                    'next': () => gridjs.html('<i class="ri-arrow-right-line"></i>'),
                    'showing': 'Displaying',
                    'results': () => 'Users'
                }
            },
            data: () => {
                return new Promise(resolve => {
                    setTimeout(() =>
                        resolve([
                            ["Michael Scott", "michael.scott@dundermifflin.com", "+1 234 567 890", "Active", "Manager"],
                            ["Pam Beesly", "pam.beesly@dundermifflin.com", "+1 234 567 891", "Inactive", "Receptionist"],
                            ["Jim Halpert", "jim.halpert@dundermifflin.com", "+1 234 567 892", "Active", "Sales"],
                            ["Dwight Schrute", "dwight.schrute@dundermifflin.com", "+1 234 567 893", "Active", "Assistant to the Regional Manager"],
                            ["Angela Martin", "angela.martin@dundermifflin.com", "+1 234 567 894", "Inactive", "Head of Accounting"],
                        ]), 2000);
                });
            }
        }).render(document.getElementById("gridjs_loading-table"));
    }
});

if (document.getElementById("gridjs_fixed-header-table")) {
    new gridjs.Grid({
        columns: ['Item', 'Type', 'Cost', 'Available', 'Vendor'],
        sort: true,
        pagination: {
            enabled: true,
            limit: 8, // Change this value to set the number of rows per page
        },
        fixedHeader: true,
        height: '250px',
        data: [
            ["Gaming Laptop", "Electronics", "$1,299.99", "Yes", "Gamer Supplies Co."],
            ["Smartwatch", "Wearables", "$199.99", "Yes", "Wearable Tech Inc."],
            ["Office Desk", "Furniture", "$249.99", "Yes", "Home Office Solutions"],
            ["Blender", "Appliances", "$49.99", "No", "Kitchen Innovations"],
            ["Sticky Notes", "Stationery", "$3.99", "Yes", "Office Essentials"],
            ["Wireless Mouse", "Electronics", "$29.99", "Yes", "Tech Gear"],
            ["Tablet", "Electronics", "$499.99", "Yes", "Gadgets R Us"],
            ["Bookshelf", "Furniture", "$89.99", "No", "Furniture Warehouse"],
            ["Toaster", "Appliances", "$29.99", "Yes", "Home Kitchen"],
            ["Printer Paper", "Stationery", "$7.99", "Yes", "Paper Supply Co."],
        ]
    }).render(document.getElementById("gridjs_fixed-header-table"));
}