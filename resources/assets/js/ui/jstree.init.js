/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: JSTree init js
*/

const jsonData1 = {
    "departments": [
        {
            "name": "Sales",
            "data-icons": "ri-folder-open-line",
            "expanded": true,
            "children": [
                {
                    "name": "Regional Sales",
                    "data-icons": "ri-map-pin-user-line text-success"
                },
                {
                    "name": "Online Sales",
                    "data-icons": "ri-computer-line",
                    "expanded": true,
                    "children": [
                        {
                            "name": "E-commerce",
                            "data-icons": "ri-file-list-3-line text-info"
                        },
                        {
                            "name": "Digital Marketing",
                            "data-icons": "ri-mic-line text-warning"
                        }
                    ]
                }
            ]
        },
        {
            "name": "Human Resources",
            "data-icons": "ri-folder-open-line",
            "expanded": true,
            "children": [
                {
                    "name": "Recruitment",
                    "data-icons": "ri-user-add-line text-danger"
                },
                {
                    "name": "Employee Relations",
                    "data-icons": "ri-hand-heart-line text-primary"
                },
            ]
        },
        {
            "name": "IT Department",
            "data-icons": "ri-folder-open-line",
        },
        {
            "name": "Finance",
            "data-icons": "ri-folder-open-line",
        }
    ]
};

const jsonData2 = {
    "departments": [
        {
            "name": "Root Node",
            "data-icons": "ri-folder-open-line",
            "children": [
                {
                    "name": "Item 1",
                    "data-icons": "ri-file-list-3-line"
                },
                {
                    "name": "Item 2",
                    "data-icons": "ri-folder-open-line",
                    "children": [
                        {
                            "name": "Item 2.1",
                            "data-icons": "ri-file-list-3-line"
                        },
                        {
                            "name": "Item 2.2",
                            "data-icons": "ri-file-list-3-line"
                        }
                    ]
                }
            ]
        },
        {
            "name": "Item 3",
            "data-icons": "ri-folder-open-line",
        },
        {
            "name": "Item 4",
            "data-icons": "ri-folder-open-line",
        },
        {
            "name": "Item 5",
            "data-icons": "ri-folder-open-line",
        },
    ]
};

const jsonData3 = {
    "departments": [
        {
            "name": "Root Node",
            "data-icons": "ri-folder-open-line",
            "expanded": true,
            "children": [
                {
                    "name": "Item 1",
                    "data-icons": "ri-file-list-3-line"
                },
                {
                    "name": "Item 2",
                    "data-icons": "ri-file-list-3-line",
                    "expanded": true,
                    "children": [
                        {
                            "name": "Item 2.1",
                            "data-icons": "ri-file-list-3-line"
                        },
                        {
                            "name": "Item 2.2",
                            "data-icons": "ri-file-list-3-line"
                        }
                    ]
                }
            ]
        },
        {
            "name": "Item 3",
            "data-icons": "ri-folder-open-line",
        },
        {
            "name": "Item 4",
            "data-icons": "ri-folder-open-line",
        },
        {
            "name": "Item 5",
            "data-icons": "ri-folder-open-line",
        },
    ]
};

function renderTree(data, containerId) {
    const createNode = (item) => {
        const li = document.createElement("li");
        const a = document.createElement("a");
        a.textContent = item.name;

        const icon = document.createElement("i");
        // Use data-icons attribute to set icon classes
        if (item["data-icons"]) {
            item["data-icons"].split(' ').forEach(cls => icon.classList.add(cls));
        }
        a.prepend(icon);
        li.appendChild(a);

        if (item.children && item.children.length > 0) {
            const ul = document.createElement("ul");
            item.children.forEach(child => {
                ul.appendChild(createNode(child));
            });
            li.appendChild(ul);

            // Check if the node should be expanded by default
            if (item.expanded) {
                ul.classList.remove("collapse");
                a.classList.add("active"); // Add active class
                icon.classList.remove("ri-folder-add-line");
                icon.classList.add("ri-folder-open-line");
            } else {
                ul.classList.add("collapse");
            }

            li.classList.add("branch");

            a.addEventListener("click", (event) => {
                event.stopPropagation();

                // Remove selected class from all links
                document.querySelectorAll('.selected').forEach(el => el.classList.remove('selected'));

                // Remove active class from all links
                document.querySelectorAll('.active').forEach(el => el.classList.remove('active'));

                // Add selected class to the clicked link
                a.classList.add('selected');

                // Toggle active class based on expanded state
                const isExpanded = ul.classList.toggle("collapse");
                if (isExpanded) {
                    a.classList.remove("active"); // Remove active if collapsing
                    icon.classList.toggle("ri-folder-open-line");
                    icon.classList.toggle("ri-folder-add-line");
                } else {
                    a.classList.add("active"); // Add active if expanding
                    icon.classList.toggle("ri-folder-open-line");
                    icon.classList.toggle("ri-folder-add-line");
                }
            });
        }
        return li;
    }

    const ul = document.createElement("ul");
    data.departments.forEach(department => {
        ul.appendChild(createNode(department));
    });

    document.getElementById(containerId).appendChild(ul);
}

// Render both trees on page load
renderTree(jsonData1, "tree-container-1");
renderTree(jsonData3, "tree-container-2");
renderTree(jsonData2, "tree-container-3");