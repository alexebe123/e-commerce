@extends('layouts.baseAdmin')

@section('title', 'About')

@section('content')
<div class="col-md-6 d-flex align-items-stretch">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">About Our App</h4> 
          <dev>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley not only five centuries,
            </p>
          </dev>
            <button type="button" class="btn btn-danger">Delete</button>
            <button type="button" class="btn btn-warning">Edit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--
  <script>
   function enableEditing(element) {
    // تحويل النص إلى حقل نصي قابل للتحرير
    var text = element.innerText;
      var inputField = document.createElement("textarea");
      inputField.setAttribute("type", "textarea");
      inputField.setAttribute("value", text);

    // استبدال النص بحقل النص القابل للتحرير
    element.innerHTML = "";
    element.appendChild(inputField);

    // تركيز حقل النص الجديد
    inputField.focus();
    // تعيين الوظيفة لحفظ التغييرات عند فقدان حقل النص التحرير
   /* inputField.addEventListener("blur", function() {
        disableEditing(element, inputField);
    });*/
}

function disableEditing(element, inputField) {
    var newText = inputField.value;

    // استعادة النص إلى العنصر الأصلي
    element.removeChild(inputField);
    element.innerText = newText;

    // يمكنك هنا إرسال النص الجديد إلى الخادم للحفظ في قاعدة البيانات إذا لزم الأمر
}

   
 /*
      var previousText; // لتخزين النص السابق
   
  function enableEditing(element) {
      // تحويل النص إلى حقل نصي قابل للتحرير
      previousText = element.innerText; // حفظ النص السابق
      var text = element.innerText;
      var inputField = document.createElement("textarea");
      inputField.setAttribute("type", "textarea");
      inputField.setAttribute("value", text);
  
      // استبدال النص بحقل النص القابل للتحرير
      element.innerHTML = "";
      element.appendChild(inputField);
  
      // تركيز حقل النص الجديد
      inputField.focus();
  
      // تعيين الوظيفة لحفظ التغييرات عند فقدان حقل النص التحرير
        inputField.addEventListener("blur", function() {
          disableEditing(element, inputField);
      });
     
  }
    
  function disableEditing(element, inputField) {
      var newText = inputField.value;
  
      // استعادة النص إلى العنصر الأصلي
      element.removeChild(inputField);
      if (newText.trim() === "") {
          // إذا لم يتم تغيير النص، استعادة النص السابق
          element.innerText = previousText;
      } else {
          element.innerText = newText;
          // يمكنك هنا إرسال النص الجديد إلى الخادم للحفظ في قاعدة البيانات إذا لزم الأمر
      }
  }
  
  
  // اختيار زر الحفظ
  var saveButton = document.getElementById("saveButton");
  
  // إضافة وظيفة لزر الحفظ
  saveButton.addEventListener("click", function() {
      // العنصر الذي تريد تعديله
      var editableElement = document.getElementById("editableText");
      // العنصر الذي يحتوي على textarea
      var textarea = editableElement.querySelector("textarea");
      // تعطيل التعديل
      if(textarea != ""){
        console.log(textarea);
        disableEditing(editableElement, textarea);
      }else{
        console.log(textarea+"1");
        disableEditing(previousText, textarea);
      }
  });
  */
  </script>
-->
  @endsection
<!--
<style>
  /* تعديلات على مظهر ال textarea */
  textarea {
      width: 100%; /* العرض الكامل */
      height: 100px; /* ارتفاع بيكسل */
      padding: 10px; /* هامش داخلي */
      font-size: 16px; /* حجم الخط */
      border: 1px solid #ccc; /* حدود مع لون رمادي */
      border-radius: 5px; /* زوايا مستديرة */
      box-sizing: border-box; /* حجم مربع يشمل الهامش والحدود */
      resize: none; /* تعطيل إمكانية تغيير حجم ال textarea */
  }
</style>
*/-->