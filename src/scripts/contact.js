// Initialize EmailJS with your Public Key
emailjs.init("4KA1dmxgqBU6jja6X");

// Form submission event listener
const contactForm = document.getElementById("contactForm");

contactForm.addEventListener("submit", function (event) {
  event.preventDefault(); // Prevent the form from submitting normally

  // Collect form data
  const formData = {
    fullName: document.getElementById("fullName").value,
    email: document.getElementById("email").value,
    phone: document.getElementById("phone").value,
    purpose: document.getElementById("purpose").value,
    message: document.getElementById("message").value,
  };

  // Send email using EmailJS
  emailjs.send("service_rk2ovny", "template_5435ho9", formData)
    .then(function (response) {
      alert("Message sent successfully!"); // Success message
      contactForm.reset(); // Reset form fields
    })
    .catch(function (error) {
      alert("Failed to send the message. Please try again."); // Error message
      console.error("EmailJS Error:", error);
    });
});
