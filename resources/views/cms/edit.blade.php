@extends('layouts.cms')

@section('body')
    
                <div  class="card-header bg-success">فرم ویرایش کالای خراب</div>

                <div class="card-body">
                    

                <form id="myForm" style="text-align:justify;" method="POST" dir="rtl" action="/edit/{{$data->id}}">
                        @csrf
                        <div class="row py-3" >
                            <div  class="form-group row col-lg-12 ">
                                <label for="p_id" class="col-lg-2 col-form-label text-md-right">شماره دستگاه:</label>

                                <div class="col-lg-10">
                                    <label id="id"> {{$data->id}} </label>
                                </div>
                            </div>
                            <div id="fullname" class="form-group row col-lg-6 ">
                                <label for="name" class="col-lg-3 col-form-label text-md-right">نام مشتری</label>

                                <div class="col-lg-9">
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="form-group row col-lg-6 ">
                                <label for="phone" class="col-lg-3 col-form-label text-md-right">شماره تماس</label>

                                <div class="col-lg-9">
                                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $data->phone }}" required autocomplete="phone" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="form-group row col-lg-4 ">
                                <label for="type" class="col-lg-6 col-form-label text-md-right  ">نوع دستگاه</label>

                                <select name="type" value="{{ $data->type }}" class="col-lg-6 form-control " id="type">
                                <option>کامپیوتر</option>
                                <option>لپ تاپ</option>
                                <option>مانیتور</option>
                                <option>گوشی</option>
                                <option>افزودن گزینه جدید</option>
                                </select>
                        
                            </div>
                            <div class="form-group row col-lg-4 ">
                                <label for="model" class="col-lg-3 col-form-label text-md-right ">مدل</label>

                                <div class="col-lg-9">
                                    <input id="model"class="form-control @error('model') is-invalid @enderror" name="model" value="{{ $data->model }}"  autocomplete="model"  autofocus>
                                </div>
                            </div>
                            <div class="form-group row col-lg-4 ">
                                <label for="serie" class="col-lg-5 col-form-label text-md-right">شماره سریال</label>

                                <div class="col-lg-7">
                                    <input id="serie" type="number" class="form-control @error('serie') is-invalid @enderror" name="serie" value="{{ $data->serie }}"  autocomplete="serie" autofocus>
                                </div>
                            </div>
                        </div>  
                        <div class="row py-3">

                            <div class="form-group row col-lg-4 ">
                                <label for="amval" class="col-lg-4 col-form-label text-md-right ">شماره اموال</label>

                                <div class="col-lg-8">
                                    <input id="amval" type="number" class="form-control @error('amval') is-invalid @enderror" name="amval" value="{{ $data->amval }}"  autocomplete="amval" autofocus>
                                </div>
                            </div>
                            <div class="form-group row col-lg-8 ">
                                <label for="address" class="col-lg-2 col-form-label text-md-right">آدرس</label>

                                <div class="col-lg-10">
                                    <input id="address"  class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $data->address }}"  autocomplete="address" autofocus>                                </div>
                            </div>
                        </div>  
                        <div class="row py-3">

                            <div class="form-group row col-lg-6 ">
                                <label for="truble" class="col-lg-4 col-form-label text-md-right ">اطلاعات خرابی</label>

                                <div class="col-lg-8">
                                    <textarea id="truble" class="form-control @error('truble') is-invalid @enderror" name="truble" value="{{ $data->truble }}"  autocomplete="truble" autofocus></textarea>
                                </div>
                            </div>
                            <div class="form-group row col-lg-6 ">
                                <label for="accessories" class="col-lg-3 col-form-label text-md-right">تجهیزات جانبی</label>

                                <div class="col-lg-9">
                                    <div class="input-group mb-3">
                                        <input type="checkbox" {{$data->charger == 1 ? "checked" : ""}}  name="charger" aria-label="Checkbox for following text input">
                                        <i class="mr-2">شارژر</i>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="checkbox" {{$data->bag == 1 ? "checked" : ""}} name="bag" aria-label="Checkbox for following text input">
                                        <i class="mr-2">کیف</i>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="checkbox" {{$data->dvd == 1 ? "checked" : ""}} name="dvd" aria-label="Checkbox for following text input">
                                        <i class="mr-2">دی وی دی</i>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="checkbox" {{$data->monitor == 1 ? "checked" : ""}} name="monitor" aria-label="Checkbox for following text input">
                                        <i class="mr-2">مانیتور</i>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="checkbox" {{$data->printer == 1 ? "checked" : ""}} name="printer" aria-label="Checkbox for following text input">
                                        <i class="mr-2">پرینتر</i>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="row py-3">

                            <div class="form-group row col-lg-12">
                                <label for="other_information" class="col-lg-2 col-form-label text-md-right ">اطلاعات تکمیلی</label>

                                <div class="col-lg-10">
                                    <textarea id="other_information" class="form-control @error('other_information') is-invalid @enderror" name="other_information" value="{{ $data->other_information }}"  autocomplete="other_information" autofocus></textarea>
                                </div>
                            </div>
                         </div>  
                         <div class="row py-3">
                            <div class="form-group row col-lg-6 ">
                                <label for="get_date" class="col-lg-3 col-form-label text-md-right ">زمان دریافت</label>

                                <div class="col-lg-9">
                                    <input id="get_date" type="time"  step="1" class="form-control @error('get_date') is-invalid @enderror" name="get_date" value="{{ $data->get_date }}"  autocomplete="get_date" autofocus disabled></textarea>
                                </div>
                            </div>
                            <div class="form-group row col-lg-6">
                                <label for="out_date" class="col-lg-3 col-form-label text-md-right ">زمان تحویل</label>

                                <div class="col-lg-9">
                                    <input id="out_date" type="time"  step="1" class="form-control @error('out_date') is-invalid @enderror" name="out_date" value="{{ $data->out_date }}"  autocomplete="out_date" autofocus disabled></textarea>
                                </div>
                            </div>
                         </div>
                         <div class="form-group row col-lg-12 ">
                            <label for="p_id" class="col-lg-2 col-form-label text-md-right">تحویل گیرنده:</label>

                            <div class="col-lg-0 pt-2">
                                <label > {{$data->getter_name}} </label>
                            </div>
                        </div>
                        <div class="form-group row col-lg-12 ">
                            <label for="p_id" class="col-lg-2 col-form-label text-md-right">تحویل دهنده:</label>

                            <div class="col-lg-0 pt-2">
                                <label >  {{$data->giver_name}} </label>
                            </div>
                        </div>
                        <div class="form-group row col-lg-12 ">
                                <p class="row col-12">
                                    تعیین وضعیت دستگاه :
                                </p>
                                <div class="form-check row col-4">
                                    <input type="radio" class="form-check-input " {{($data->situation==1 ? "checked" : "")}} id="materialUnchecked" name="situation" value="1">
                                    <label class="form-check-label  mr-3" for="materialUnchecked">تعمیر انجام شد</label>
                                    {{-- {{ ($item->situation == 1) ? 'active' : ''}} --}}
                                </div>
                                <div class="form-check row col-4">
                                    <input type="radio" class="form-check-input"   {{($data->situation==2 ? "checked" : "")}} id="materialUnchecked" name="situation"  value="2">
                                    <label class="form-check-label mr-3" for="materialUnchecked">تعمیر انجام نشد</label>
                                </div>
                                <div class="form-check row col-4">
                                    <input type="radio" class="form-check-input"   {{($data->situation==3 ? "checked" : "")}} id="materialUnchecked" name="situation"  value="3">
                                    <label class="form-check-label mr-3" for="materialUnchecked">در حال تعمیر</label>
                                </div>
                                
                        </div>
                        <div class="form-group row col-lg-12 ">
                            <label for="p_id" class="col-lg-2 col-form-label text-md-right">شرح کار انجام شده:</label>

                            <div class="col-lg-10 pt-2">
                                <textarea name="situation_text" class="form-control @error('situation_text') is-invalid @enderror" > {{$data->situation_text}} </textarea>
                            </div>
                        </div>
                         <div class="row py-4 " dir="ltr" >
                            <button type="submit"  name="submit" class="btn btn-success  col-lg-2">افزودن</button>
                            <button type="button" onclick="printDiv()" name="submit" class="btn btn-dark offset-8 col-lg-2">چاپ</button>
                         </div>
    
                    </form>

                  

                </div>
                <script> 
                function btn(){

                }
                    function printDiv() { 
                        //$('#myForm').html('shhhh')
                        // var divContents1 = document.getElementById("myForm").outerHTML; 
                        // var divContents2 = document.getElementById("name").value; 
                        // var a = window.open('', '', 'height=750, width=500'); 
                        // a.document.write('<html>'); 
                        // a.document.write('<body dir="rtl"> <h1 class="text-center" style="margin-right:35%">فرمهر رایانه<br>'); 
                        // a.document.write('<lable>شناسه دستگاه : ' + divContents1 + '</lable><br>'); 
                        // a.document.write('<lable>نام مشتری : ' + divContents2 + '</lable>'); 
                        // a.document.write('</body></html>'); 
                        // a.document.close(); 
                        // a.print(); 
                        // .container { font-family: Vazir, "Helvetica Neue", sans-serif; }
                        var printWindow = window.open('','PrintWindow', 'width=400,height=200');
                        // var element = $("#myForm")[0];
                        html2canvas(document.querySelector("#myForm"))
                        .then(canvas => {  
                            var dataURL = canvas.toDataURL();
                            var width = canvas.width;
                            var printWindow = window.open("");
                            $(printWindow.document.body)
                            .html("<img id='Image' src=" + dataURL + " style='" + width + "'></img>")
                            .ready(function() {
                            printWindow.focus();
                            printWindow.print();
                            });
                        });       

                    } 
                </script> 
@endsection
