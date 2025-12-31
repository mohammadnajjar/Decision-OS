/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Chat init js
*/

// DOM Element References
const chatList = document.querySelectorAll("#chatList li");
const searchInput = document.querySelector(".form-icon input");
const clearChatButton = document.querySelector(".dropdown-item[href='#']:nth-child(4)");
const profileAvatar = document.getElementById("selectedUserAvatar");
const profileName = document.getElementById("selectedUserName");
const profileLink = document.getElementById("selectedUserLink");
const profileStatus = document.getElementById("selectedUserStatus");
const chatInput = document.getElementById("chat-input");
const sendButton = document.querySelector(".btn.btn-light-light");
const chatContainer = document.getElementById("chat-list");

// Chat state
let currentChatUser = null;
let selectedImages = [];
let chatMessages = [
    {
        id: 1,
        side: "left",
        sender: "Lisa Parker",
        avatar: "assets/images/avatar/avatar-12.jpg",
        message: "Good morning 😊",
        time: "02:08 am"
    },
    {
        id: 2,
        side: "right",
        sender: "Frank Thomas",
        avatar: "assets/images/avatar/avatar-10.jpg",
        message: "Hi, I'm having trouble with my recent order. I received the wrong item.",
        time: "02:09 am"
    },
    {
        id: 3,
        side: "left",
        sender: "Lisa Parker",
        avatar: "assets/images/avatar/avatar-12.jpg",
        message: "I'm really sorry to hear that! Could you please provide me with your order number and describe the item you received?",
        time: "02:10 am"
    },
    {
        id: 4,
        side: "right",
        sender: "Frank Thomas",
        avatar: "assets/images/avatar/avatar-10.jpg",
        message: "Sure, my order number is #123456. I ordered a red jacket, but I received a blue shirt instead.",
        time: "02:11 am"
    },
    {
        id: 5,
        side: "left",
        sender: "Lisa Parker",
        avatar: "assets/images/avatar/avatar-12.jpg",
        message: "Thank you for providing the order number. Let me double-check that for you. One moment, please.",
        time: "02:30 am"
    },
    {
        id: 6,
        side: "left",
        sender: "Lisa Parker",
        avatar: "assets/images/avatar/avatar-12.jpg",
        message: "Here are the images of the items you received:",
        images: [
            "assets/images/small/img-13.jpg",
            "assets/images/small/img-12.jpg"
        ],
        time: "03:15 am"
    },
    {
        id: 7,
        side: "right",
        sender: "Frank Thomas",
        avatar: "assets/images/avatar/avatar-10.jpg",
        message: "Yes, please send the red jacket and arrange for the return. How do I return the shirt?",
        time: "03:50 am"
    },
    {
        id: 8,
        side: "left",
        sender: "Lisa Parker",
        avatar: "assets/images/avatar/avatar-12.jpg",
        message: "I’ve initiated the replacement order for your red jacket. You should receive it within 3-5 business days.",
        time: "04:00 am"
    },
    {
        id: 9,
        side: "left",
        sender: "Lisa Parker",
        avatar: "assets/images/avatar/avatar-12.jpg",
        message: "As for the return, I’ll send you a prepaid return label via email. Just print it and drop off the package at your nearest shipping center.",
        time: "04:05 am"
    },
];

// Initialize application
function initApp() {
    setupEventListeners();
    loadChatMessages();
    scrollToBottom();
}

// Set up all event listeners
function setupEventListeners() {
    // Search functionality
    searchInput.addEventListener("input", handleSearch);

    // Clear chat functionality
    clearChatButton.addEventListener("click", handleClearChat);

    // Chat selection functionality
    chatList.forEach(chatItem => {
        chatItem.addEventListener("click", () => selectChat(chatItem));
    });

    // Message sending functionality
    sendButton.addEventListener("click", (e) => {
        e.preventDefault();
        sendMessage();
    });

    chatInput.addEventListener("keypress", (e) => {
        if (e.key === "Enter") {
            e.preventDefault();
            sendMessage();
        }
    });

    // Typing indicator
    chatInput.addEventListener("focus", showTypingIndicator);
    chatInput.addEventListener("blur", hideTypingIndicator);
}

// Handle image selection
function handleImageSelection(e) {
    const files = e.target.files;
    if (!files || files.length === 0) return;

    selectedImages = [];
    selectedImagesPreview.innerHTML = "";

    // Create preview for each selected image
    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (!file.type.startsWith('image/')) continue;

        const reader = new FileReader();
        reader.onload = function (event) {
            const imageUrl = event.target.result;
            selectedImages.push(imageUrl);

            // Create preview thumbnail
            const imgPreview = document.createElement("div");
            imgPreview.className = "preview-thumbnail";
            imgPreview.innerHTML = `
                <img src="${imageUrl}" alt="Selected image">
                <button class="remove-image" data-index="${selectedImages.length - 1}">×</button>
            `;
            selectedImagesPreview.appendChild(imgPreview);

            // Add click handler to remove button
            imgPreview.querySelector(".remove-image").addEventListener("click", function () {
                const index = parseInt(this.dataset.index);
                removeSelectedImage(index);
            });
        };
        reader.readAsDataURL(file);
    }

    // Show the preview container
    selectedImagesPreview.style.display = "flex";

    // Reset the file input to allow selecting the same file again
    e.target.value = "";
}

// Remove selected image
function removeSelectedImage(index) {
    selectedImages.splice(index, 1);
    updateImagePreview();
}

// Update image preview after removal
function updateImagePreview() {
    selectedImagesPreview.innerHTML = "";

    if (selectedImages.length === 0) {
        selectedImagesPreview.style.display = "none";
        return;
    }

    selectedImages.forEach((imageUrl, index) => {
        const imgPreview = document.createElement("div");
        imgPreview.className = "preview-thumbnail";
        imgPreview.innerHTML = `
            <img src="${imageUrl}" alt="Selected image">
            <button class="remove-image" data-index="${index}">×</button>
        `;
        selectedImagesPreview.appendChild(imgPreview);

        imgPreview.querySelector(".remove-image").addEventListener("click", function () {
            removeSelectedImage(index);
        });
    });
}

// Search functionality
function handleSearch() {
    const searchTerm = searchInput.value.trim().toLowerCase();

    chatList.forEach(chatItem => {
        const userNameElement = chatItem.querySelector("h6");

        if (userNameElement) {
            const userName = userNameElement.textContent.trim().toLowerCase();
            chatItem.style.display = userName.includes(searchTerm) ? "flex" : "none";
        }
    });
}

// Clear chat functionality
function handleClearChat(e) {
    e.preventDefault();

    // Show confirmation dialog
    if (confirm("Are you sure you want to clear all messages?")) {
        chatMessages = [];
        chatContainer.innerHTML = "";

        // Show empty state message
        const emptyState = document.createElement("div");
        emptyState.className = "text-center p-4 text-muted";
        emptyState.textContent = "No messages yet. Start a conversation!";
        chatContainer.appendChild(emptyState);
    }
}

// Select chat functionality
function selectChat(chatItem) {
    // Update profile display
    const avatarSrc = chatItem.querySelector(".avatar-wrapper img").src;
    const userName = chatItem.querySelector("h6").childNodes[2].textContent.trim();
    const userStatusText = chatItem.dataset.status || "Online";

    profileAvatar.src = avatarSrc;
    profileName.textContent = userName;
    profileLink.textContent = userName;
    profileStatus.textContent = userStatusText;

    // Update current chat user
    currentChatUser = { name: userName, avatar: avatarSrc };

    // Update messages in the chat
    updateChatMessages();

    // Update active state
    chatList.forEach(item => item.classList.remove("active"));
    chatItem.classList.add("active");

    // Mark as read
    const unreadBadge = chatItem.querySelector(".badge");
    if (unreadBadge) {
        unreadBadge.style.display = "none";
    }
}

// Update chat messages for selected user
function updateChatMessages() {
    if (!currentChatUser) return;

    // Update sender details for left-side messages
    chatMessages.forEach(chat => {
        if (chat.side === "left") {
            chat.sender = currentChatUser.name;
            chat.avatar = currentChatUser.avatar;
        }
    });

    loadChatMessages();
}

// Load chat messages into the UI
function loadChatMessages() {
    chatContainer.innerHTML = "";

    if (chatMessages.length === 0) {
        const emptyState = document.createElement("div");
        emptyState.className = "text-center p-4 text-muted";
        emptyState.textContent = "No messages yet. Start a conversation!";
        chatContainer.appendChild(emptyState);
        return;
    }

    // Group messages by date
    const groupedMessages = groupMessagesByDate(chatMessages);

    // Render messages with date separators
    Object.entries(groupedMessages).forEach(([date, messages]) => {
        // Add messages for this date
        messages.forEach(chat => {
            renderMessage(chat);
        });
    });
}

// Group messages by date for better UI organization
function groupMessagesByDate(messages) {
    const grouped = {};
    const today = new Date().toLocaleDateString();
    const yesterday = new Date(Date.now() - 86400000).toLocaleDateString();

    messages.forEach(message => {
        // This is simplified - in a real app, extract date from message timestamp
        const messageDate = today; // For demo purposes, all messages are "today"

        if (!grouped[messageDate]) {
            grouped[messageDate] = [];
        }

        grouped[messageDate].push(message);
    });

    return grouped;
}

// Render a single message
function renderMessage(chat) {
    const li = document.createElement("li");
    li.classList.add("chat-list", chat.side);

    // Common message content
    let messageContent = `<p class="mb-0 ctext-content">${chat.message}</p>`;
    if (chat.images && chat.images.length > 0) {
        messageContent += '<div class="message-img-gallery d-flex gap-3">';
        chat.images.forEach(img => {
            messageContent += `
                <div class="image-wrapper mt-2">
                    <img src="${img}" class="img-fluid rounded message-img w-176px h-auto" alt="chat image">
                    <div class="image-actions">
                        <button class="btn btn-sm bg-body-secondary rounded btn-icon image-action-download position-absolute top-0 end-0 mt-1 me-1" data-src="${img}">
                            <i class="bi bi-download"></i>
                        </button>
                    </div>
                </div>
            `;
        });
        messageContent += '</div>';
    }

    // Avatar placement based on side
    const avatarHTML = `
        <div class="chat-avatar avatar-wrapper">
            <img src="${chat.avatar}" class="avatar-md rounded-circle" alt="${chat.sender}">
        </div>
    `;

    li.innerHTML = `
        <div class="conversation-list">
            ${chat.side === "left" ? avatarHTML : ""}
            <div class="user-chat-content">
                <div class="ctext-wrap">
                    <div class="ctext-wrap-content">
                        ${messageContent}
                    </div>
                </div>
                <div class="conversation-name">
                    <small class="text-muted time">${chat.time}</small>
                    <span class="text-success check-message-icon">
                        <i class="bi bi-check-double"></i>
                    </span>
                </div>
            </div>
            ${chat.side === "right" ? avatarHTML : ""}
        </div>
    `;

    chatContainer.appendChild(li);

    // Add event listeners for image actions
    li.querySelectorAll('.image-action-download').forEach(btn => {
        btn.addEventListener('click', function () {
            downloadImage(this.dataset.src);
        });
    });
    li.querySelectorAll('.image-action-expand').forEach(btn => {
        btn.addEventListener('click', function () {
            openImageModal(this.dataset.src);
        });
    });
}

// Download image function
function downloadImage(src) {
    const a = document.createElement('a');
    a.href = src;
    a.download = 'chat-image-' + Date.now() + '.jpg';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

// Create and show image modal
function openImageModal(src) {
    // Create modal if it doesn't exist
    let imageModal = document.getElementById('imageModal');

    if (!imageModal) {
        imageModal = document.createElement('div');
        imageModal.id = 'imageModal';
        imageModal.className = 'image-modal';
        imageModal.innerHTML = `
            <div class="image-modal-content">
                <span class="close-modal">&times;</span>
                <img id="modalImage" class="modal-img">
            </div>
        `;
        document.body.appendChild(imageModal);

        // Close modal when clicking on close button
        imageModal.querySelector('.close-modal').addEventListener('click', () => {
            imageModal.style.display = 'none';
        });

        // Close modal when clicking outside the image
        imageModal.addEventListener('click', function (e) {
            if (e.target === imageModal) {
                imageModal.style.display = 'none';
            }
        });
    }

    // Set image source and show modal
    const modalImage = imageModal.querySelector('#modalImage');
    modalImage.src = src;
    imageModal.style.display = 'flex';
}

// Send a new message
function sendMessage() {
    const messageText = chatInput.value.trim();
    if (messageText === "" && selectedImages.length === 0) {
        console.log("Message not sent. Empty message and no images.");
        return;
    }

    if (!currentChatUser) {
        // Set default values if no chat user is selected
        currentChatUser = {
            name: "Default User",
            avatar: "assets/images/avatar/avatar-1.jpg"
        };
    }

    const newMessage = {
        id: chatMessages.length + 1,
        side: "right",
        sender: "You",
        avatar: "assets/images/avatar/avatar-10.jpg",
        message: messageText,
        time: new Date().toLocaleTimeString([], { hour: "2-digit", minute: "2-digit", hour12: true })
    };

    // Add images if selected
    if (selectedImages.length > 0) {
        newMessage.images = [...selectedImages];

        // Clear selected images
        selectedImages = [];
        selectedImagesPreview.innerHTML = "";
        selectedImagesPreview.style.display = "none";
    }

    // Add new message
    chatMessages.push(newMessage);

    // Update UI
    loadChatMessages();
    scrollToBottom();
    chatInput.value = "";

}

// Show typing indicator
function showTypingIndicator() {
    if (!currentChatUser) return;

    const typingElement = document.querySelector('.typing-indicator');
    if (!typingElement) {
        chatContainer.appendChild(typingIndicator);
    }
}

// Hide typing indicator
function hideTypingIndicator() {
    const typingElement = document.querySelector('.typing-indicator');
    if (typingElement) {
        typingElement.remove();
    }
}

// Scroll to the bottom of the chat
function scrollToBottom() {
    setTimeout(() => {
        const lastMessage = chatContainer.lastElementChild;
        if (lastMessage) {
            lastMessage.scrollIntoView({ behavior: "smooth", block: "end" });
        }
    }, 200);
}

// Error handling for failed operations
function handleError(error, context) {
    // Show user-friendly error notification
    const errorToast = document.createElement("div");
    errorToast.className = "error-toast";
    errorToast.textContent = "Something went wrong. Please try again.";
    document.body.appendChild(errorToast);

    setTimeout(() => {
        errorToast.remove();
    }, 3000);
}

const closeChatSidebar = document.getElementById("close-chat-sidebar");
const openChatSidebarSmall = document.getElementById("open-chat-sidebar");
const appChatSidebar = document.getElementById("app-chat-sidebar");

closeChatSidebar?.addEventListener("click", () => {
    appChatSidebar.classList.remove("active");
});

openChatSidebarSmall?.addEventListener("click", () => {
    appChatSidebar.classList.add("active");
});

window.addEventListener("resize", () => {
    if (window.innerWidth > 1199) {
        appChatSidebar.classList.remove("active");
    }
});

// Initialize the app when DOM is fully loaded
document.addEventListener('DOMContentLoaded', initApp);