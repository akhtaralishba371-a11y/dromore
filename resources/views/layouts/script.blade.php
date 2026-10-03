<!--Javascript
      	========================================================-->
          <script>
            document.addEventListener("DOMContentLoaded", function () {
              const form = document.getElementById("contact-form");
              const standardHeading = document.getElementById("form-heading");
              const groupHeading = document.getElementById("group-form-heading");
              const standardTrigger = document.getElementById("open-booking");
              const groupTrigger = document.getElementById("group-booking-trigger");

              // Fields to update
              const peopleLabel = document.querySelector("label[for='people']");
              const peopleInput = document.getElementById("people");
              const submitButton = form.querySelector("button[type='submit']");

              // Create the checkbox for "Is Airport Transfer"
              const airportTransferDiv = document.createElement("div");
              airportTransferDiv.classList.add("col-md-6", "d-flex", "align-items-center", "mt-4"); // Increased margin-top

              const airportCheckbox = document.createElement("input");
              airportCheckbox.type = "checkbox";
              airportCheckbox.id = "isAirportTransfer";
              airportCheckbox.classList.add("form-check-input", "me-2"); // Add margin-right for spacing
              airportCheckbox.checked = true;  // Make the checkbox always selected

              const airportCheckboxLabel = document.createElement("label");
              airportCheckboxLabel.classList.add("form-check-label");
              airportCheckboxLabel.setAttribute("for", "isAirportTransfer");
              airportCheckboxLabel.textContent = "Is Airport Transfer";

              airportTransferDiv.appendChild(airportCheckbox);
              airportTransferDiv.appendChild(airportCheckboxLabel);

              // Show Standard Booking
              standardTrigger.addEventListener("click", function (e) {
                e.preventDefault();
                form.classList.remove("d-none");

                // Show only standard heading
                standardHeading.classList.remove("d-none");
                groupHeading.classList.add("d-none");

                // No changes to fields
                standardHeading.scrollIntoView({ behavior: "smooth", block: "center" });
              });

              // Show Group Booking and apply field changes
              groupTrigger.addEventListener("click", function (e) {
                e.preventDefault();
                form.classList.remove("d-none");

                // Set heading
                groupHeading.textContent = "Group / Airport Booking";
                groupHeading.classList.remove("d-none");
                standardHeading.classList.add("d-none");

                // Field modifications only for Group
                peopleLabel.textContent = "People (max 6)";
                peopleInput.max = "6";
                submitButton.innerHTML = `Pay £200 Deposit <i class="fa fa-credit-card ms-1"></i>`;

                // Append the "Is Airport Transfer" checkbox to the same row as People
                const row = form.querySelector(".row"); // The row container for form fields
                row.appendChild(airportTransferDiv); // Append it to the row

                // Scroll
                groupHeading.scrollIntoView({ behavior: "smooth", block: "center" });
              });
            });
          </script>






    <script
      data-cfasync="false"
      src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/purecounter_vanilla.js"></script>
    <script src="js/nice-select2.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/custom.js"></script>

    <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
      integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
      data-cf-beacon='{"rayId":"9344089e7c61e1ae","version":"2025.4.0-1-g37f21b1","r":1,"token":"389fa74406c44f21b129709ce8a3ec16","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}'
      crossorigin="anonymous"
    ></script>
  </body>
</html>
