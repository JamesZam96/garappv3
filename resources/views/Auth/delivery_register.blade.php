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
        <h2>Registrate como domiciliario</h2>
        <form method="POST" action="{{ route('register.delivery.submit') }}" id="registerForm" enctype="multipart/form-data">
            @csrf
            <!-- Step 1: User Information -->
            <div class="step active" id="step1">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Apellido</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="country">País</label>
                    <input type="text" name="country" id="country" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                </div>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Siguiente</button>
            </div>
            
            <!-- Step 2: Delivery Information -->
            <div class="step" id="step2">
                <div class="form-group">
                    <label for="gender">Género</label>
                    <select class="form-select" name="gender" id="gender" required>
                        <option value="" hidden>Selecciona una opción</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="birth_date">Fecha de nacimiento</label>
                    <input type="date" name="birth_date" id="birth_date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="vehicle_type">Tipo de vehiculo</label>
                    <select class="form-select" name="vehicle_type" id="vehicle_type" required>
                        <option value="" hidden>Selecciona una opción</option>
                        <option value="Moto">Moto</option>
                        <option value="Carro">Carro</option>
                    </select>
                </div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Anterior</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Siguiente</button>
                
            </div>

            <!-- Step 3: Delivery Information -->
            <div class="step" id="step4">
                <div class="form-group">
                    <label for="dni_document_front">Documento de identificación (parte frontal)</label>
                    <input type="file" name="dni_document_front" id="dni_document_front" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="dni_document_back">Documento de identificación (parte trasera)</label>
                    <input type="file" name="dni_document_back" id="dni_document_back" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="driving_license">Licencia de conducción</label>
                    <input type="file" name="driving_license" id="driving_license" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="transit_license">Licencia de tránsito</label>
                    <input type="file" name="transit_license" id="transit_license" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mandatory_insurance">SOAT (seguro obligatorio)</label>
                    <input type="file" name="mandatory_insurance" id="mandatory_insurance" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="profile_photo">Foto de perfil</label>
                    <input type="file" name="profile_photo" id="profile_photo" class="form-control" required>
                </div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="submit" class="btn btn-primary">Finalizar</button>
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
            if (currentStep < 3) {
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