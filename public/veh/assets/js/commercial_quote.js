
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            console.log(validateForm());
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            var curRadioSelected = 0, fg = false, fgMultiCheck = false, totRadio = 0, totCheckbox = 0, currentName = '';
            console.log(y);
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].type == "email") {
                    let isValid = String(y[i].value).toLowerCase()
                    .match(
                      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                    );
                    if (isValid == null) valid = false;
                    console.log("Email: ", isValid, isNaN(isValid));
                }
                else if (y[i].name == "mobile_number") {
                    var phoneNo = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                    if (y[i].value.match(phoneNo) == null) valid = false;
                    console.log("Mobile: ", y[i].value.match(phoneNo));
                }
                else if (y[i].value == "" && y[i].type == "text") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }

                else if (y[i].type == "radio") {
                    if (fg == false) currentName = y[i].name, totRadio ++;
                    if (currentName != y[i].name) currentName = y[i].name, totRadio ++;
                    fg = true;
                    // if (y[i].name == "property_type_land" && y[i].checked ) {
                    //     console.log(y[i].value);
                    // }
                    if (y[i].checked) {
                        curRadioSelected += 1;
                    }
                }

                else if (y[i].type == "checkbox") {
                    fgMultiCheck = true;
                    console.log('here');
                    if (y[i].checked) totCheckbox ++;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if ((totCheckbox == 0 && fgMultiCheck) || (curRadioSelected !== totRadio && fg === true)) valid = false;
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }