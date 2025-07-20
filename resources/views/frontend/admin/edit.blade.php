@extends('frontend.layout.admin')

@section('content')
@include('frontend.admin.layout.navbar')

<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-2xl shadow-lg border border-gray-100">


  <div class="flex items-center justify-between mb-8">
    <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9.75 3.75h4.5M12 3.75V7.5M6 7.5v12.75a.75.75 0 00.75.75h10.5a.75.75 0 00.75-.75V7.5M3.75 7.5h16.5" />
      </svg>
      แก้ไขโพสต์
    </h2>
    <a href="{{ route('admin.works.index') }}"
       class="text-sm text-gray-500 hover:text-indigo-600 flex items-center gap-1 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
      ย้อนกลับ
    </a>
  </div>

 
 @if ($errors->any())
  <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm">
    <ul class="list-disc pl-5">
      @foreach ($errors->all() as $error)
        <li>
          @switch($error)
            @case('The title field is required.')
              กรุณากรอกหัวข้อโพสต์ด้วยนะคะ
              @break

            @case('The description field is required.')
              กรุณากรอกคำอธิบายของโพสต์ด้วยค่ะ
              @break

            @case('The images field is required.')
              กรุณาเลือกรูปภาพก่อนโพสต์นะคะ
              @break

            @case('The images must be an array.')
              ระบบต้องการรูปภาพหลายรูป กรุณาลองใหม่
              @break

            @case('The images.0 must be an image.')
            @case('The images.* must be an image.')
              ไฟล์ที่เลือกต้องเป็นรูปภาพเท่านั้นนะคะ
              @break

            @case('The images.0 may not be greater than 4096 kilobytes.')
            @case('The images.* may not be greater than 4096 kilobytes.')
              รูปภาพต้องมีขนาดไม่เกิน 4MB ต่อรูป
              @break

            @case('The images may not have more than 5 items.')
              อัปโหลดรูปได้สูงสุด 5 รูปเท่านั้นค่ะ
              @break

            @default
              {{ $error }}
          @endswitch
        </li>
      @endforeach
    </ul>
  </div>
@endif


  <!-- Main Form -->
  <form action="{{ route('admin.works.update', $work->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">ชื่อหัวข้อ</label>
      <input type="text" name="title" value="{{ $work->title }}"
        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">รายละเอียด</label>
      <textarea name="description" rows="4"
        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none">{{ $work->description }}</textarea>
    </div>

    @php
    $groupImages = \App\Models\Work::where('title', $work->title)->get();
    @endphp

    @if($groupImages->count())
    <div>
      <h3 class="text-md font-semibold text-gray-700 mb-3">รูปภาพทั้งหมดในหัวข้อเดียวกัน</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @foreach($groupImages as $item)
        <div class="relative border rounded-lg p-3 bg-gray-50 group shadow-sm hover:shadow-md transition">
          <img
            src="{{ asset('storage/works/' . $item->image) }}"
            class="rounded-md w-full h-40 object-cover border select-none"
            oncontextmenu="return false"
            draggable="false"
          >
          <input type="file" name="new_images[{{ $item->id }}]"
            class="mt-2 w-full text-sm border border-gray-300 rounded p-2">
          <button type="button"
            class="absolute top-2 right-2 bg-red-500 hover:bg-red-600 text-white rounded-full px-2 py-1 text-xs shadow delete-image-btn"
            data-id="{{ $item->id }}" data-image="{{ $item->image }}">
            ✕
          </button>
        </div>
        @endforeach
      </div>
    </div>
    @endif


    <div class="space-y-4">
      <label class="block text-sm font-medium text-gray-700">อัปโหลดรูปเพิ่มเติม</label>

      <div id="imageInputs" class="space-y-3">
        <div class="relative image-upload-item">
          <input type="file" name="images[]" accept="image/*"
            class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer file:mr-4 file:py-2 file:px-4
                   file:rounded-md file:border-0 file:text-sm file:font-semibold
                   file:bg-indigo-500 file:text-white hover:file:bg-indigo-600"
            onchange="previewImage(this)">
          <div class="mt-2 grid grid-cols-3 gap-2 preview-container"></div>

          <button type="button" onclick="removeImageInput(this)"
            class="absolute top-2 right-2 text-xs text-red-600 hover:underline">ลบช่องนี้</button>
        </div>
      </div>

      <button type="button" onclick="addImageInput()"
        class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 rounded-lg border border-gray-300 transition">
        เพิ่มช่องเลือกรูป
      </button>
    </div>

    <!-- Submit -->
    <div class="flex justify-end">
      <button type="submit"
        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-5 rounded-lg flex items-center gap-2 shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        บันทึกการเปลี่ยนแปลง
      </button>
    </div>
  </form>
</div>

<script>
  // ลบรูปจากฐานข้อมูล
  document.querySelectorAll('.delete-image-btn').forEach(button => {
    button.addEventListener('click', function () {
      const btn = this;
      if (confirm('ลบรูปนี้ใช่มั้ย?')) {
        const id = btn.getAttribute('data-id');
        const image = btn.getAttribute('data-image');

        fetch(`/admin/works/${id}/image/${image}`, {
            method: 'POST',
            headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}',
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({ _method: 'DELETE' })
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              btn.closest('.group').classList.add('opacity-40');
              setTimeout(() => btn.closest('.group').remove(), 250);
            } else {
              alert('ลบไม่สำเร็จ');
            }
          })
          .catch(error => {
            alert('เกิดข้อผิดพลาด');
            console.error(error);
          });
      }
    });
  });

  // เพิ่ม input
  function addImageInput() {
    const container = document.getElementById('imageInputs');
    const wrapper = document.createElement('div');
    wrapper.className = 'relative image-upload-item';

    wrapper.innerHTML = `
      <input type="file" name="images[]" accept="image/*"
        class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer file:mr-4 file:py-2 file:px-4
               file:rounded-md file:border-0 file:text-sm file:font-semibold
               file:bg-indigo-500 file:text-white hover:file:bg-indigo-600"
        onchange="previewImage(this)">
      <div class="mt-2 grid grid-cols-3 gap-2 preview-container"></div>
      <button type="button" onclick="removeImageInput(this)"
        class="absolute top-2 right-2 text-xs text-red-600 hover:underline">ลบช่องนี้</button>
    `;

    container.appendChild(wrapper);
  }

  // ลบช่อง input
  function removeImageInput(btn) {
    const wrapper = btn.closest('.image-upload-item');
    wrapper.remove();
  }

  // preview image
  function previewImage(input) {
    const container = input.nextElementSibling;
    container.innerHTML = '';

    Array.from(input.files).forEach(file => {
      const reader = new FileReader();
      reader.onload = function (e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.className = 'w-full h-24 object-cover rounded shadow border';
        container.appendChild(img);
      };
      reader.readAsDataURL(file);
    });
  }
</script>

@include('frontend.admin.layout.footer')
@endsection
