@extends('template.default')

@section('title', 'Workshop FORM')
@section('header', 'Workshop #HTML - FORM')
@section('content')
<form method="post" action="">
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="fname">ชื่อ</label>
        </div>
        <div class="col">
            <input id="fname" class="form-control">
            <div class="valid-feedback">
                ถูกต้อง
            </div>
            <div class="invalid-feedback">
                โปรดระบุชื่อ
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12 col-md-4">
            <label for="lname">สกุล</label>
        </div>
        <div class="col">
            <input id="lname" class="form-control">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button class="btn btn-light" type="reset">Reset</button>
        </div>
        <div class="col">
            <button class="btn btn-success" onclick="clickMe()" type="button">Submit</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
    <script>
        let clickMe = function (){
            let fname = document.getElementById('fname')

            if(fname.value == ""){
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
            }else{
                fname.classList.remove('is-invalid')
                fname.classList.add('is-valid')
            }


        }

        let myfunc = (callback)=>{
            callback("in Callback")
        }

        callMe = (param) => {
            console.log(param)
        }

        myfunc(callMe)

        let myvar1 =  1
        let myvar2 = "1"
        myvar2 = parseInt(myvar2)

        console.log(myvar2 + myvar1 +"\n\n\n\nทดสอบ")
        console.log(1 === '1')
    </script>
@endpush
