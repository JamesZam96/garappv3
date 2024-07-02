<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .step { display: none; }
        .step.active { display: block; }
    </style>
</head>
<body>
<div class="container">
        <h2>Register Company</h2>
        <form method="POST" action="{{ route('register.company.submit') }}" id="registerForm" enctype="multipart/form-data">
            @csrf
            <!-- Step 1: User Information -->
            <div class="step active" id="step1">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                </div>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>
            
            <!-- Step 2: Company Information -->
            <div class="step" id="step2">
                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" name="company_name" id="company_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="legal_representative_name">Legal representative name</label>
                    <input type="text" name="legal_representative_name" id="legal_representative_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="legal_representative_lastname">Legal representative lastname</label>
                    <input type="text" name="legal_representative_lastname" id="legal_representative_lastname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="legal_representative_dni">Legal representative dni</label>
                    <input type="text" name="legal_representative_dni" id="legal_representative_dni" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nit">NIT</label>
                    <input type="text" name="nit" id="nit" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="person_type">Person type</label>
                    <input type="text" name="person_type" id="person_type" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="legal_representative_email">Legal representative email</label>
                    <input type="email" name="legal_representative_email" id="legal_representative_email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="legal_name_company">Legal name company</label>
                    <input type="text" name="legal_name_company" id="legal_name_company" class="form-control" required>
                </div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                <!--<button type="submit" class="btn btn-primary">Finish</button>-->
            </div>

            <!-- Step 3: Company Information -->
            <div class="step" id="step3">
                <div class="form-group">
                    <input type="checkbox" name="terms_and_conditions" id="terms_and_conditions" class="form-check-input" value="1" required>
                    <label for="terms_and_conditions" class="form-check-label">Terms and conditions</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="processing_of_personal_data" id="processing_of_personal_data" class="form-check-input" value="1" required>
                    <label for="processing_of_personal_data" class="form-check-label">Processing of personal request</label>
                </div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 4: Company Information -->
            <div class="step" id="step4">
                <div class="form-group">
                    <label for="pdf_single_tax_registry">Pdf single tax registry</label>
                    <input type="file" name="pdf_single_tax_registry" id="pdf_single_tax_registry" class="form-control" accept="pdf/*" required>
                </div>
                <div class="form-group">
                    <label for="pdf_bank_certificate">Pdf bank certificate</label>
                    <input type="file" name="pdf_bank_certificate" id="pdf_bank_certificate" class="form-control" accept="pdf/*" required>
                </div>
                <div class="form-group">
                    <label for="pdf_legal_representative_dni">Pdf legal representative dni</label>
                    <input type="file" name="pdf_legal_representative_dni" id="pdf_legal_representative_dni" class="form-control" accept="pdf/*" required>
                </div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 5: Company Information -->
            <div class="step" id="step5">
                <div class="form-group">
                    <label for="account_holder_name">Account holder name</label>
                    <input type="text" name="account_holder_name" id="account_holder_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="account_holder_lastname">Account holder lastname</label>
                    <input type="text" name="account_holder_lastname" id="account_holder_lastname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="bank_name">Bank name</label>
                    <input type="text" name="bank_name" id="bank_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="account_type">Account type</label>
                    <input type="text" name="account_type" id="account_type" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="account_number">Account number</label>
                    <input type="text" name="account_number" id="account_number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="billing_address">Billing address</label>
                    <input type="text" name="billing_address" id="billing_address" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="billing_contact_phone_number">Billing contact phone number</label>
                    <input type="text" name="billing_contact_phone_number" id="billing_contact_phone_number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="billing_contact_email">Billing contact email</label>
                    <input type="email" name="billing_contact_email" id="billing_contact_email" class="form-control" required>
                </div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="submit" class="btn btn-primary">Finish</button>
            </div>

        </form>
    </div>

    <script>
        let currentStep = 1;

        function showStep(step) {
            document.querySelectorAll('.step').forEach((element, index) => {
                element.classList.remove('active');
                if (index === step - 1) {
                    element.classList.add('active');
                }
            });
        }

        function nextStep() {
            if (currentStep < 5) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }
    </script>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>