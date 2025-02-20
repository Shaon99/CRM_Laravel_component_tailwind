function dismissAlert() {
  document.getElementById('alert-3').remove();
}

// Automatically close the alert after 3 seconds
setTimeout(() => {
  const alertElement = document.getElementById('alert-3');
  if (alertElement) {
    alertElement.remove();
  }
}, 3000);


// Sidebar navbar toggle
const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
const menuIcon = document.getElementById("menu-icon");
const closeIcon = document.getElementById("close-icon");
const sidebar = document.getElementById("sidebar");
const sidebarText = document.querySelectorAll(".sidebar-text");
const logoImage = document.getElementById("logo-image");
const logoText = document.getElementById("logo-text");

// Toggle sidebar for mobile
mobileMenuToggle.addEventListener("click", () => {
  sidebar.classList.toggle("w-[60px]");
  sidebar.classList.toggle("w-[180px]");
  sidebar.classList.toggle("md:w-[200px]");

  // Show or hide sidebar text
  sidebarText.forEach((text) => {
    text.classList.toggle("hidden");
  });

  // Toggle icons
  menuIcon.classList.toggle("hidden");
  closeIcon.classList.toggle("hidden");

  // Toggle logo visibility
  logoImage.classList.toggle("hidden");
  logoText.classList.toggle("hidden");
});


// Toggle profile dropdown
const profileDropdownToggle = document.getElementById("profile-dropdown-toggle");
const profileDropdown = document.getElementById("profile-dropdown");

profileDropdownToggle.addEventListener("click", () => {
  profileDropdown.classList.toggle("hidden");
});

// Close dropdown when clicking outside
window.addEventListener("click", (e) => {
  if (!profileDropdown.contains(e.target) && !profileDropdownToggle.contains(e.target)) {
    profileDropdown.classList.add("hidden");
  }
});


document.addEventListener("DOMContentLoaded", function () {
  const themeToggleButton = document.getElementById("theme-toggle");
  const themeToggleIcon = document.getElementById("theme-toggle-icon");

  // SVG Icons
  const sunIcon = `
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 14v2m9-9h-2m-14 0H3m16.364-6.364l-1.414 1.414M6.05 18.364l-1.414-1.414M18.364 18.364l-1.414-1.414M6.05 5.636l-1.414 1.414M12 8a4 4 0 100 8 4 4 0 000-8z" />
      </svg>
  `;

  const moonIcon = `
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
      </svg>
  `;

  // Check and apply theme from localStorage
  if (localStorage.getItem("theme") === "dark") {
    document.documentElement.classList.add("dark");
    themeToggleIcon.innerHTML = moonIcon;
  } else {
    document.documentElement.classList.remove("dark");
    themeToggleIcon.innerHTML = sunIcon;
  }

  // Toggle dark/light mode
  themeToggleButton.addEventListener("click", function () {
    if (document.documentElement.classList.contains("dark")) {
      document.documentElement.classList.remove("dark");
      localStorage.setItem("theme", "light");
      themeToggleIcon.innerHTML = sunIcon;
    } else {
      document.documentElement.classList.add("dark");
      localStorage.setItem("theme", "dark");
      themeToggleIcon.innerHTML = moonIcon;
    }
  });
});


document.addEventListener('DOMContentLoaded', function () {
  const toggleButton = document.getElementById('dropdown-phone-button');
  const dropdownMenu = document.getElementById('dropdown-phone');

  // Toggle the dropdown visibility
  toggleButton.addEventListener('click', function () {
      dropdownMenu.classList.toggle('hidden');
  });

  // Close the dropdown when clicking outside
  document.addEventListener('click', function (event) {
      if (!toggleButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
          dropdownMenu.classList.add('hidden');
      }
  });
});
