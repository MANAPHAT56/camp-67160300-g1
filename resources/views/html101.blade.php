@extends('template.default')
@section('title','Workshop Form')
@section('content')
    <form action="#" method="post" enctype="multipart/form-data">

        <div class="form-grid">

            <div class="form-group">
                <label for="fname">ชื่อ:</label>
                <input type="text" id="fname" name="fname" required placeholder="ชื่อจริง">
            </div>

            <div class="form-group">
                <label for="lname">สกุล:</label>
                <input type="text" id="lname" name="lname" required placeholder="นามสกุล">
            </div>

            <div class="form-group">
                <label for="dob">เดือนวันปีเกิด:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label>เพศ:</label>
                <div class="radio-group">
                    <span>
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">ชาย</label>
                    </span>
                    <span>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">หญิง</label>
                    </span>
                    <span>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">อื่นๆ</label>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group full-width">
            <label for="photo">รูป (แนบไฟล์ภาพ):</label>
            <input type="file" id="photo" name="photo" accept="image/*">
        </div>

        <div class="form-group full-width">
            <label for="address">ที่อยู่:</label>
            <textarea id="address" name="address" rows="4" required placeholder="กรอกที่อยู่ปัจจุบันให้ละเอียด"></textarea>
        </div>

        <div class="form-grid">
            <div class="form-group">
                <label for="favorite_color">สีที่ชอบ:</label>
                <input type="text" id="favorite_color" name="favorite_color" placeholder="เช่น สีน้ำเงิน, สีเขียว">
            </div>

            <div class="form-group">
                <label for="favorite_music">แนวเพลงที่ชอบ:</label>
                <input type="text" id="favorite_music" name="favorite_music" placeholder="เช่น R&B, Classical">
            </div>
        </div>

        <div class="consent-group full-width">
            <input type="checkbox" id="agree" name="agree" value="yes" required>
            <label for="agree">ข้าพเจ้าได้อ่านและยอมรับข้อกำหนดและเงื่อนไขทั้งหมด</label>
        </div>

        <div class="button-group full-width">
            <button type="reset">Reset</button>
            <button type="submit">บันทึก</button>
        </div>

    </form>
@endsection
@push('scripts')
<script>
    // alert("Welcome to the Application Form page!");
    console.warn("kuyeai")
    console.error("bbbb")
    let myvar1 = 1
    let myvar2 = "1"
    myvar2 =    parseInt(myvar2)
    console.log(myvar1 + myvar2)
    console.log(myvar1+""+myvar2)
</script>
@endpush
