@extends('template.default')

@section('title', 'Workshop FORM')
@section('content')
<h1>Workshop #HTML - FORM</h1>
<form id="workshopForm">
    <!-- ชื่อ -->
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="fname">ชื่อ <span class="text-danger">*</span></label>
        </div>
        <div class="col">
            <input id="fname" class="form-control" type="text">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุชื่อ</div>
        </div>
    </div>

    <!-- สกุล -->
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="lname">สกุล <span class="text-danger">*</span></label>
        </div>
        <div class="col">
            <input id="lname" class="form-control" type="text">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุสกุล</div>
        </div>
    </div>

    <!-- วันเดือนปีเกิด -->
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="birthdate">วันเดือนปีเกิด <span class="text-danger">*</span></label>
        </div>
        <div class="col">
            <input id="birthdate" class="form-control" type="date">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุวันเดือนปีเกิด</div>
        </div>
    </div>

    <!-- อายุ -->
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="age">อายุ <span class="text-danger">*</span></label>
        </div>
        <div class="col">
            <input id="age" class="form-control" type="number" min="1" max="150">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุอายุ</div>
        </div>
    </div>

    <!-- เพศ -->
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label>เพศ <span class="text-danger">*</span></label>
        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">ชาย</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">หญิง</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                <label class="form-check-label" for="other">อื่นๆ</label>
            </div>
            <div class="invalid-feedback" id="genderError" style="display: none;">
                โปรดระบุเพศ
            </div>
        </div>
    </div>

    <!-- รูป -->
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="photo">รูป <span class="text-danger">*</span></label>
        </div>
        <div class="col">
            <input id="photo" class="form-control" type="file" accept="image/*">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุรูป</div>
        </div>
    </div>

    <!-- ที่อยู่ -->
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="address">ที่อยู่ <span class="text-danger">*</span></label>
        </div>
        <div class="col">
            <textarea id="address" class="form-control" rows="3"></textarea>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุที่อยู่</div>
        </div>
    </div>

    <!-- สีที่ชอบ -->
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="color">สีที่ชอบ <span class="text-danger">*</span></label>
        </div>
        <div class="col">
            <input id="color" class="form-control" type="color">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุสีที่ชอบ</div>
        </div>
    </div>

    <!-- แนวเพลงที่ชอบ -->
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="music">แนวเพลงที่ชอบ <span class="text-danger">*</span></label>
        </div>
        <div class="col">
            <select id="music" class="form-control">
                <option value="">-- เลือกแนวเพลง --</option>
                <option value="pop">Pop</option>
                <option value="rock">Rock</option>
                <option value="jazz">Jazz</option>
                <option value="classical">Classical</option>
                <option value="hiphop">Hip Hop</option>
                <option value="country">Country</option>
                <option value="edm">EDM</option>
            </select>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุแนวเพลงที่ชอบ</div>
        </div>
    </div>

    <!-- ยินยอม -->
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label>ยินยอม <span class="text-danger">*</span></label>
        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="consent">
                <label class="form-check-label" for="consent">
                    ยินยอมให้ใช้ข้อมูลส่วนบุคคล
                </label>
            </div>
            <div class="invalid-feedback" id="consentError" style="display: none;">
                โปรดยินยอมเงื่อนไข
            </div>
        </div>
    </div>

    <!-- ปุ่ม -->
    <div class="row mt-4">
        <div class="col">
            <button class="btn btn-light" type="reset">Reset</button>
        </div>
        <div class="col">
            <button class="btn btn-success" onclick="validateForm(event)" type="button">Submit</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
    <script>
        function validateForm(event) {
            event.preventDefault();

            let isValid = true;

            // ตรวจสอบชื่อ
            let fname = document.getElementById('fname');
            if (fname.value.trim() === "") {
                fname.classList.remove('is-valid');
                fname.classList.add('is-invalid');
                isValid = false;
            } else {
                fname.classList.remove('is-invalid');
                fname.classList.add('is-valid');
            }

            // ตรวจสอบสกุล
            let lname = document.getElementById('lname');
            if (lname.value.trim() === "") {
                lname.classList.remove('is-valid');
                lname.classList.add('is-invalid');
                isValid = false;
            } else {
                lname.classList.remove('is-invalid');
                lname.classList.add('is-valid');
            }

            // ตรวจสอบวันเดือนปีเกิด
            let birthdate = document.getElementById('birthdate');
            if (birthdate.value === "") {
                birthdate.classList.remove('is-valid');
                birthdate.classList.add('is-invalid');
                isValid = false;
            } else {
                birthdate.classList.remove('is-invalid');
                birthdate.classList.add('is-valid');
            }

            // ตรวจสอบอายุ
            let age = document.getElementById('age');
            if (age.value === "" || age.value < 1) {
                age.classList.remove('is-valid');
                age.classList.add('is-invalid');
                isValid = false;
            } else {
                age.classList.remove('is-invalid');
                age.classList.add('is-valid');
            }

            // ตรวจสอบเพศ
            let gender = document.querySelector('input[name="gender"]:checked');
            let genderError = document.getElementById('genderError');
            if (!gender) {
                genderError.style.display = 'block';
                isValid = false;
            } else {
                genderError.style.display = 'none';
            }

            // ตรวจสอบรูป
            let photo = document.getElementById('photo');
            if (photo.files.length === 0) {
                photo.classList.remove('is-valid');
                photo.classList.add('is-invalid');
                isValid = false;
            } else {
                photo.classList.remove('is-invalid');
                photo.classList.add('is-valid');
            }

            // ตรวจสอบที่อยู่
            let address = document.getElementById('address');
            if (address.value.trim() === "") {
                address.classList.remove('is-valid');
                address.classList.add('is-invalid');
                isValid = false;
            } else {
                address.classList.remove('is-invalid');
                address.classList.add('is-valid');
            }

            // ตรวจสอบสีที่ชอบ
            let color = document.getElementById('color');
            if (color.value === "") {
                color.classList.remove('is-valid');
                color.classList.add('is-invalid');
                isValid = false;
            } else {
                color.classList.remove('is-invalid');
                color.classList.add('is-valid');
            }

            // ตรวจสอบแนวเพลงที่ชอบ
            let music = document.getElementById('music');
            if (music.value === "") {
                music.classList.remove('is-valid');
                music.classList.add('is-invalid');
                isValid = false;
            } else {
                music.classList.remove('is-invalid');
                music.classList.add('is-valid');
            }

            // ตรวจสอบยินยอม
            let consent = document.getElementById('consent');
            let consentError = document.getElementById('consentError');
            if (!consent.checked) {
                consentError.style.display = 'block';
                isValid = false;
            } else {
                consentError.style.display = 'none';
            }

            return isValid;
        }

        // Reset validation เมื่อกด Reset
        document.getElementById('workshopForm').addEventListener('reset', function() {
            let inputs = document.querySelectorAll('.form-control, .form-check-input');
            inputs.forEach(input => {
                input.classList.remove('is-valid', 'is-invalid');
            });
            document.getElementById('genderError').style.display = 'none';
            document.getElementById('consentError').style.display = 'none';
        });
    </script>
@endpush
